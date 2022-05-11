/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import edu.esprit.entities.*;
import edu.esprit.services.*;


import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.Date;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.ScrollPane;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.GridPane;
import javafx.stage.Stage;
import org.controlsfx.control.Rating;

/**
 * FXML Controller class
 *
 * @author aziz
 */
public class PostcardController implements Initializable {

    @FXML
    private ImageView imagepost;
    @FXML
    private Label tfnom_user;
    @FXML
    private Label tfsujet;
    @FXML
    private Label tfdescription;
    @FXML
    private Label tfdatepost;
    @FXML
    private Label tfnbr_jaime;
    @FXML
    private Label idpostlabel;
    @FXML
    private Label tfcommunaute;
    @FXML
    private Label labelimage;
/*usertest u = new usertest();
Usertestservice us = new Usertestservice();*/
PostServices ps = new PostServices();
Post po = new Post() ;
//po.setTest(Integer.parseInt(idpostlabel.getText()));


    @FXML
    private Label nbr_comments;
Connection connexion;
    Statement stm; 
    @FXML
    private Button tflike;
    @FXML
    private Button tfdislike;
    @FXML
    private Label labelbadrouge;
    @FXML
    private Label labelorange;
    @FXML
    private Label labelvert;
    @FXML
    private Label badlevelvalue;
    @FXML
    private Rating troisetoiles;
    @FXML
    private Rating deuxetoiles;
    @FXML
    private Rating uneetoile;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
tflike.setVisible(true);
            tfdislike.setVisible(false);
idpostlabel.setVisible(false);
badlevelvalue.setVisible(false);
troisetoiles.setVisible(false);
        deuxetoiles.setVisible(false);
                uneetoile.setVisible(false);


    }    
    
    void setData(int id, String sujet, String description, String communaute,String nom_user,Date date_p,String image,int nbr_jaime,int bb) throws SQLException {
   
        tfsujet.setText(sujet);
    tfdescription.setText(description);
        tfcommunaute.setText(communaute);

    tfnom_user.setText(nom_user);
//    Image imgp = new Image(getClass().getResourceAsStream("/ressources/"+ image +""));
//    imagepost.setImage(imgp);
    //labelimage.setText(image);
    
        
                                File file1 = new File("C:/Users/USER/OneDrive/Bureau/PiJava/src/Images/"+image);

        System.out.println(file1);
        Image img1=new Image(file1.toURI().toString());
        imagepost.setImage(img1);
tfdatepost.setText(String.valueOf(date_p));
    tfnbr_jaime.setText(String.valueOf(nbr_jaime));
        idpostlabel.setText(String.valueOf(id));
        badlevelvalue.setText(String.valueOf(bb));
        if(bb==0){
        troisetoiles.setVisible(true);
        deuxetoiles.setVisible(false);
                uneetoile.setVisible(false);

        }
        if(bb>0&&bb<=4){
        troisetoiles.setVisible(false);
        deuxetoiles.setVisible(true);
                uneetoile.setVisible(false);

        }
        if(bb>4){
        troisetoiles.setVisible(false);
        deuxetoiles.setVisible(false);
                uneetoile.setVisible(true);

        }
        
//        String req = "select count(id) as co from post WHERE id = id";
//        stm = connexion.createStatement();
//        //ensemble de resultat
//        ResultSet rst = stm.executeQuery(req);
//        nbr_comments.setText(String.valueOf(rst));
Post.setTest(Integer.parseInt(idpostlabel.getText()));

int rst=ps.CountComments(Post.getTest());
nbr_comments.setText(String.valueOf(rst));


            
            if(bb==0){
            labelbadrouge.setVisible(false);
            labelorange.setVisible(false);
            labelvert.setVisible(true);
            }
            else if(bb>0&&bb<10){
            labelbadrouge.setVisible(false);
            labelorange.setVisible(true);
            labelvert.setVisible(false);
            }
            else if(bb>=10){
            labelbadrouge.setVisible(true);
            labelorange.setVisible(false);
            labelvert.setVisible(false);
            //tfcommunaute.setStyle("-fx-border-color: red ; -fx-border-width: 2px;");
            }
    }

    @FXML
    private void comentpostbtn(ActionEvent event) {
//        po.setTest(Integer.parseInt(idpostlabel.getText()));
Post.setTest(Integer.parseInt(idpostlabel.getText()));
                   try {
              Parent root = FXMLLoader.load(getClass().getResource("commentView.fxml"));
          Stage stage = new Stage();
     
          stage.setTitle("commentaire");
                    stage.setScene(new Scene(root)); 
                    stage.show();
     
        } catch (IOException ex) {
               System.out.println("can't load comrnt window");
        }
    }

    @FXML
    private void like(ActionEvent event) throws SQLException {
        
Post.setTest(Integer.parseInt(idpostlabel.getText()));
Post p=ps.findbyid(Post.getTest());
System.out.println(p);
if(p.getLiked()==0 ) {
p.setNbr_jaime(p.getNbr_jaime()+1);
p.setLiked(1);
tfnbr_jaime.setText(String.valueOf(p.getNbr_jaime()));
ps.modifier(p);
tfdislike.setVisible(true);
            tflike.setVisible(false);
            

               System.out.println("mehech manzoula");

}
    
    }

    @FXML
    private void dislike(ActionEvent event) throws SQLException {
        Post.setTest(Integer.parseInt(idpostlabel.getText()));
Post p=ps.findbyid(Post.getTest());
System.out.println(p);
if(p.getLiked()==1 ) {
p.setNbr_jaime(p.getNbr_jaime()-1);
p.setLiked(0);
tfnbr_jaime.setText(String.valueOf(p.getNbr_jaime()));
ps.modifier(p);
tflike.setVisible(true);
            tfdislike.setVisible(false); 

               System.out.println(" manzoula");

}
    }

}
