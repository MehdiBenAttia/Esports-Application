/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import com.itextpdf.text.BadElementException;
import com.itextpdf.text.BaseColor;
import com.itextpdf.text.Document;
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.Element;
import com.itextpdf.text.Font;
import com.itextpdf.text.FontFactory;
import com.itextpdf.text.Paragraph;
import com.itextpdf.text.pdf.CMYKColor;
import com.itextpdf.text.pdf.PdfPCell;
import com.itextpdf.text.pdf.PdfPTable;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Label;
import javafx.scene.image.ImageView;
import edu.esprit.entities.Produit;
import edu.esprit.entities.review;

import edu.esprit.services.CategorieService;
import edu.esprit.services.ProduitService;
import edu.esprit.services.reviewService;

import java.io.File;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.scene.control.Button;
import javafx.scene.control.ListView;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import org.controlsfx.control.Rating;
import com.itextpdf.text.pdf.PdfWriter;
import edu.esprit.utils.Session;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.util.Calendar;
import javafx.geometry.Pos;
import javafx.util.Duration;
import javax.swing.JFileChooser;
import org.controlsfx.control.Notifications;

/**
 * FXML Controller class
 *
 * @author MSi
 */
public class DetailController implements Initializable {

    @FXML
    private ImageView imagedetail;
    @FXML
    private Label prixdetail;
    @FXML
    private Label referencedetail;
    @FXML
    private Label marquedetail;
    @FXML
    private Label descriptiondetail;
Produit p = new Produit();
    @FXML
    private Rating reviewrate;
    @FXML
    private Label idproducttest;
    private Label avisp;
    @FXML
    private TextField avisprod;
    @FXML
    private ListView<String> listrev;
    @FXML
    private Button imprimer;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        idproducttest.setVisible(false);
        Produit pp = null;
        ProduitService p1 = new ProduitService();
   ObservableList<Produit> comdata = FXCollections.observableArrayList();
       // comdata.addAll(p1.afficher());
        int tet=(p.getTest());
        System.err.println(tet);
        try {
          pp=  p1.getById(tet);
        } catch (SQLException ex) {
            Logger.getLogger(DetailController.class.getName()).log(Level.SEVERE, null, ex);
        }
                            Font blueFont = FontFactory.getFont(FontFactory.HELVETICA, 8, Font.NORMAL, new CMYKColor(255, 0, 0, 0));

        referencedetail.setText(pp.getNom());
        idproducttest.fontProperty();
                idproducttest.setText(String.valueOf(pp.getId()));
        prixdetail.setText(String.valueOf(pp.getPrix()+"DT"));
        marquedetail.setText(pp.getMarque());
        descriptiondetail.setText(pp.getType());
      //  File file1 = new File("C:/Users/MSi/Esports/src/images/"+pp.getImage());
                        File file1 = new File("C:/Users/USER/OneDrive/Bureau/PiJava/src/Images/"+pp.getImage());

        System.out.println(file1);
        Image img1=new Image(file1.toURI().toString());
        imagedetail.setImage(img1);
        reviewService rev = new reviewService();
        ObservableList<String> list = FXCollections.observableArrayList();
       
                             int pid=Integer.parseInt(idproducttest.getText());
                             System.out.println(pid);
               

        try {
            for(int i=0;i<rev.getreviews(pid).size();i++)
            {
                list.add(rev.getreviews(pid).get(i).getAvis());
            }
                                         System.out.println("yeah fsudhjfsd ifdsuhkjsd fsidhfsdf sdfshdf sdfisd fsdiufs dfiusd fsiud fsiu fsiu dfius dfiu sdfi sidfis dfu sdiu fusi dfu sd fi sdfiu sd fiu");
            System.out.println(list);
        } catch (SQLException ex) {
            Logger.getLogger(DetailController.class.getName()).log(Level.SEVERE, null, ex);
        }
            listrev.setItems(list);
        
               
        
    }    
    public void showdetail()
    {
        
        ProduitService p1 = new ProduitService();
   ObservableList<Produit> comdata = FXCollections.observableArrayList();
       // comdata.addAll(p1.afficher());
        int tet=(p.getTest());
        System.err.println(tet);

         

        

        
    }

    @FXML
    private void submitrate(ActionEvent event) throws SQLException {
        
        
         Notifications notificationBuilder=Notifications.create()
             .title("avis enregistre mercii")
             .graphic(null)
             .hideAfter(Duration.seconds(5))
             .position(Pos.TOP_RIGHT);
             notificationBuilder.showConfirm();
        
                reviewService rev = new reviewService();
        ObservableList<String> list = FXCollections.observableArrayList();

        reviewService r = new reviewService();
        double x = reviewrate.getRating();
        System.out.println(x);
        String y = idproducttest.getText();
        int s=0;
        String usr=Session.getLoggedInUser().getUsername();
        
                System.out.println(y);
                        int pid=Integer.parseInt(idproducttest.getText());
                       

                        review r1=new review(pid,x*2,avisprod.getText(),usr);
                        r.ajouter(r1);
                        try {
            for(int i=0;i<rev.getreviews(pid).size();i++)
            {
                list.add(rev.getreviews(pid).get(i).getAvis());
            }
                                         System.out.println("yeah fsudhjfsd ifdsuhkjsd fsidhfsdf sdfshdf sdfisd fsdiufs dfiusd fsiud fsiu fsiu dfius dfiu sdfi sidfis dfu sdiu fusi dfu sd fi sdfiu sd fiu");
            System.out.println(list);
        } catch (SQLException ex) {
            Logger.getLogger(DetailController.class.getName()).log(Level.SEVERE, null, ex);
        }
            listrev.setItems(list);


    }

    @FXML
    private void imprimer(ActionEvent event) throws FileNotFoundException, DocumentException, BadElementException, IOException {
        Document document = new Document() {}; 
            int min = 10000;
            int max = 99999;
            int random_id = (int) Math.floor(Math.random() * (max - min + 1) + min);
            PdfWriter.getInstance(document, new FileOutputStream("C:\\Users\\USER\\OneDrive\\Bureau\\PiJava\\src\\Pi\\report\\Product" + random_id + ".pdf"));  
                    // document.open();
                      PdfPTable table = new PdfPTable(3); // 3 columns.
                    table.setWidthPercentage(100); //Width 100%
                    table.setSpacingBefore(10f); //Space before table
                    table.setSpacingAfter(10f); //Space after table
                    float[] columnWidths = {1f, 1f, 1f};
                    table.setWidths(columnWidths);
                     PdfPCell cell1 = new PdfPCell(new Paragraph("nom produit"));
                    cell1.setBorderColor(BaseColor.RED);
                    cell1.setPaddingLeft(10);
                    cell1.setHorizontalAlignment(Element.ALIGN_CENTER);
                    cell1.setVerticalAlignment(Element.ALIGN_MIDDLE);
                    table.addCell(cell1);
                    
                    cell1 = new PdfPCell(new Paragraph("PRIX"));
                    cell1.setBorderColor(BaseColor.RED);
                    cell1.setPaddingLeft(10);
                    cell1.setHorizontalAlignment(Element.ALIGN_CENTER);
                    cell1.setVerticalAlignment(Element.ALIGN_MIDDLE);
                    table.addCell(cell1);
                    
                    cell1 = new PdfPCell(new Paragraph("marque"));
                    cell1.setBorderColor(BaseColor.RED);
                    cell1.setPaddingLeft(10);
                    cell1.setHorizontalAlignment(Element.ALIGN_CENTER);
                    cell1.setVerticalAlignment(Element.ALIGN_MIDDLE);
                    table.addCell(cell1);
                    table.setHeaderRows(1);
                    
                    //To avoid having the cell border and the content overlap, if you are having thick cell borders
                    //cell1.setUserBorderPadding(true);
                    //cell2.setUserBorderPadding(true);
                    //cell3.setUserBorderPadding(true);
                    PdfPCell cell2 = new PdfPCell(new Paragraph(referencedetail.getText()));
                    cell2.setHorizontalAlignment(Element.ALIGN_JUSTIFIED);
                    cell2.setVerticalAlignment(Element.ALIGN_MIDDLE);
                    cell2.setBorderColor(BaseColor.BLUE);
                    table.addCell(cell2);
                    
                    PdfPCell price1 = new PdfPCell(new Paragraph(prixdetail.getText()));
                    price1.setHorizontalAlignment(Element.ALIGN_CENTER);
                    price1.setVerticalAlignment(Element.ALIGN_MIDDLE);
                    price1.setBorderColor(BaseColor.RED);
                    table.addCell(price1);
                     PdfPCell contrat2 = new PdfPCell(new Paragraph(marquedetail.getText()));
                    contrat2.setHorizontalAlignment(Element.ALIGN_JUSTIFIED);
                    contrat2.setVerticalAlignment(Element.ALIGN_MIDDLE);
                    contrat2.setBorderColor(BaseColor.RED);
                    table.addCell(contrat2);
                    
                   
                    com.itextpdf.text.Image image1 = com.itextpdf.text.Image.getInstance("C:\\Users\\MSi\\Esports\\src\\Images\\logoesports.png");
                     image1.setAbsolutePosition(100f, 550f);
                    
                    //Scale to new height and new width of image
                    image1.scaleAbsolute(200, 200);
                     document.addTitle("product");
                    document.addAuthor("esports");
                    document.addSubject("fiche technique du produit.");
                    Font blueFont = FontFactory.getFont(FontFactory.HELVETICA, 8, Font.NORMAL, new CMYKColor(255, 0, 0, 0));
                    Font redFont = FontFactory.getFont(FontFactory.HELVETICA, 8, Font.BOLD, new CMYKColor(0, 255, 200, 50));
                    
                    Paragraph sectionTitle = new Paragraph("produit disponible dans notre application  ", redFont);
                    Paragraph sectionTitle2 = new Paragraph("ETSPORTS APPLICATION :", redFont);
                    
                    java.sql.Timestamp date_sql = new java.sql.Timestamp(Calendar.getInstance().getTime().getTime());
                    String rescreation = date_sql.toString();
                    
                    Paragraph sectionTitle3 = new Paragraph("created at :" + rescreation.substring(0, 10) + "", blueFont);
                    
                    sectionTitle.setAlignment(com.itextpdf.text.Element.ALIGN_BOTTOM);
                    sectionTitle2.setAlignment(com.itextpdf.text.Element.ALIGN_BOTTOM);
                    sectionTitle3.setAlignment(com.itextpdf.text.Element.ALIGN_BOTTOM);
                    
                    document.add(sectionTitle);
                    document.add(sectionTitle2);
                    
                    document.add(sectionTitle3);
                    
                    image1.setAbsolutePosition(17, 780f);
                    document.add(image1);
                    
                    document.add(table);
                    Paragraph signature = new Paragraph("Produit original", blueFont);
                    Paragraph notice = new Paragraph("cette fiche doit etre presenté dans notre boutique pour passer la commande ", redFont);
                    document.add(notice);
                    
                    document.add(signature);
                    
           // document.addTitle(marquedetail.getText());
            document.add(new Paragraph("fiche technique du "+marquedetail.getText()+"  contient les details du produit "));
            
            document.close();
            
                    //System.out.println("ok jjjjjjj ");
    }

    @FXML
    private void exportsouissi(ActionEvent event) throws FileNotFoundException, BadElementException, IOException {
        try {
            int pid=Integer.parseInt(idproducttest.getText());
            ProduitService tt = new ProduitService();
                tt.exportTable(pid);
            } catch (SQLException ex) {
                Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
            }
    }
    
}
