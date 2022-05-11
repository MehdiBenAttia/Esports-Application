/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import com.google.zxing.BarcodeFormat;
import com.google.zxing.WriterException;
import com.google.zxing.common.BitMatrix;
import com.google.zxing.qrcode.QRCodeWriter;
import edu.esprit.entities.CategorieC;
import edu.esprit.entities.Competition;
import edu.esprit.entities.Participation;
import edu.esprit.entities.User;
import edu.esprit.services.ServiceCompetition;
import edu.esprit.services.ServiceParticipation;
import java.awt.Graphics2D;
import java.awt.image.BufferedImage;
import java.io.File;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.Pane;
import javafx.scene.layout.VBox;
import javafx.scene.paint.Color;
import javax.mail.MessagingException;
import edu.esprit.services.SendEmailWthImage;
import java.net.URL;
import java.sql.Date;
import java.time.LocalDate;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableRow;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.Pane;
import javafx.scene.layout.VBox;
import javax.mail.MessagingException;

import com.google.zxing.BarcodeFormat;
import com.google.zxing.EncodeHintType;
import com.google.zxing.MultiFormatWriter;
import com.google.zxing.WriterException;
import com.google.zxing.client.j2se.MatrixToImageWriter;
import com.google.zxing.common.BitMatrix;
import com.google.zxing.common.ByteMatrix;
import com.google.zxing.qrcode.QRCodeWriter;
import edu.esprit.services.User_service;
import edu.esprit.utils.Session;
import java.awt.Graphics2D;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;
import java.io.UnsupportedEncodingException;
import java.nio.ByteBuffer;
import java.nio.CharBuffer;
import java.nio.charset.CharacterCodingException;
import java.nio.charset.Charset;
import java.nio.charset.CharsetEncoder;
import java.util.Hashtable;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.application.Application;
import javafx.embed.swing.SwingFXUtils;
import javafx.scene.image.ImageView;
import org.apache.commons.lang3.RandomStringUtils;
import org.controlsfx.control.Notifications;


/**
 * FXML Controller class
 *
 * @author USER
 */
public class CardController  {

    private Label tfnom;
    
    @FXML
    private ImageView imgCompet;
    @FXML
    private Button btnParticp;
    @FXML
    private Button btnVoirePlus;
    private Pane pnJeu;
    @FXML
    private ImageView imgJeu;
    @FXML
    private Label lbNomJeu;
    @FXML
    private Label lbDateJeu;
    @FXML
    private Label lbCategory;
    @FXML
    private Label lbNomCompet;
    @FXML
    private Label lbDebut;
    @FXML
    private Label lbFin;
    @FXML
    private Label lbNbr;
    public static int id;
    @FXML
    private VBox vboxCompt;
    @FXML
    private VBox vboxJeu;
    @FXML
    private Button btnVoireLess;
    @FXML
    private Label lbParticiper;
    public Competition comp;

    /**
     * Initializes the controller class.
     */
    
    public void setData(Competition name) {
        comp=name;
        System.out.println(name.toString());
        System.out.println(comp.toString());
        vboxJeu.setVisible(false);
        imgJeu.setVisible(false);
        btnVoireLess.setVisible(false);
        // TODO
        lbNomCompet.setText("Nom: "+name.getNom());
        lbDebut.setText("Date Debut: "+name.getDeb().toString());
        lbFin.setText("Date Fin: "+name.getFin().toString());
        lbNbr.setText("Nombre de participants: "+name.getNbr()+"");
        id=name.getId();
        
        lbCategory.setText("Categorie: "+name.getJeu().getCategorie().getNom());
        lbDateJeu.setText("Date de sortie: "+name.getJeu().getDates());
        lbNomJeu.setText("Nom: "+name.getJeu().getNom());
        File file = new File("C:/Users/USER/OneDrive/Bureau/PiJava/src/Images/"+name.getImage());
        Image img=new Image(file.toURI().toString());
        imgCompet.setImage(img);
        
        File file1 = new File("C:/Users/USER/OneDrive/Bureau/PiJava/src/Images/"+name.getJeu().getImage());
        Image img1=new Image(file1.toURI().toString());
        imgJeu.setImage(img1);
        
            int tot=comp.getNbr()-name.getNbrPart();
            lbNbr.setText("Nombre de participants: "+tot+"");
        if(name.isIsParticipated()){
            lbParticiper.setText("Inscrit");
            lbParticiper.setTextFill(Color.WHITE);
            //btnParticp.setDisable(true);
            btnParticp.setVisible(false);
        }
       
    }    

    @FXML
    private void fnParticip(ActionEvent event) throws SQLException, MessagingException {
        ServiceParticipation serP=new ServiceParticipation();
        Participation part=new Participation();
        ServiceCompetition serC=new ServiceCompetition();
       part.setCompet(serC.getById(comp.getId()));
       User_service serU=new User_service();
       
       User user=serU.getByIdemail(Session.getLoggedInUser().getId());
       user.setId(Session.getLoggedInUser().getId());
       part.setUser(user);
       
       int nbr=serP.add(part);
       Charset charset = Charset.forName("UTF-8");
    CharsetEncoder encoder = charset.newEncoder();
    byte[] b = null;
    try {
        // Convert a string to UTF-8 bytes in a ByteBuffer
        String result = RandomStringUtils.random(8, true, true);
        ByteBuffer bbuf = encoder.encode(CharBuffer.wrap("Ceci est votre code de participation : "+result));
        b = bbuf.array();
    } catch (CharacterCodingException e) {
        System.out.println(e.getMessage());
    }

    String data;
    try {
        data = new String(b, "UTF-8");
        
        ByteMatrix matrix = null;
        int h = 100;
        int w = 100;
        com.google.zxing.Writer writer = new MultiFormatWriter();
        try {
            Hashtable<EncodeHintType, String> hints = new Hashtable<EncodeHintType, String>(2);
            hints.put(EncodeHintType.CHARACTER_SET, "UTF-8");
            matrix = writer.encode(data,
            com.google.zxing.BarcodeFormat.QR_CODE, w, h, hints);
        } catch (com.google.zxing.WriterException e) {
            System.out.println(e.getMessage());
        }
                String filePath = "C:/Users/USER/OneDrive/Bureau/PiJava/src/Images/qr_png.png";
        File file = new File(filePath);
        try {
            MatrixToImageWriter.writeToFile(matrix, "PNG", file);
            System.out.println("printing to " + file.getAbsolutePath());
        } catch (IOException e) {
            System.out.println(e.getMessage());
        }
    } catch (UnsupportedEncodingException e) {
        System.out.println(e.getMessage());
    }
    String htmlMessage = "<html><head> </head> <body><h1> Votre participation au tournoi "+ comp.getNom()+  " est confirmée</h1> <br><a href='http://localhost:8000/competition_detail/"+part.getCompet().getId()+"' >Cliquer ici</a></body></html>  ";
        new SendEmailWthImage(user.getEmail(),"Ticket de participation",htmlMessage,"C:/Users/USER/OneDrive/Bureau/PiJava/src/Images/qr_png.png");
        Notifications.create()
              .title("Email")
              .text("Veuilez vérifier votre boite de réception")
              .showInformation();
       comp=serC.getAf(comp.getId());
        
       if(comp.isIsParticipated()){
            lbParticiper.setText("Inscrit");
            lbParticiper.setTextFill(Color.WHITE);
            int tot=comp.getNbr()-nbr;
            lbNbr.setText("Nombre de participants: "+tot+"");
            btnParticp.setDisable(true);
            btnParticp.setVisible(false);
        }
    }

    @FXML
    private void fnVoirePlus(ActionEvent event) {
        vboxJeu.setVisible(true);
        vboxCompt.setVisible(false);
        imgJeu.setVisible(true);
        imgCompet.setVisible(false);
        btnVoirePlus.setVisible(false);
        btnVoireLess.setVisible(true);
    }

    @FXML
    private void fnVoireLess(ActionEvent event) {
        vboxJeu.setVisible(false);
        vboxCompt.setVisible(true);
        imgJeu.setVisible(false);
        imgCompet.setVisible(true);
        btnVoirePlus.setVisible(true);
        btnVoireLess.setVisible(false);
    }

    

    
    
}
