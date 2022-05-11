/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import edu.esprit.entities.Equipe;
import edu.esprit.services.Equipe_service;
import edu.esprit.services.User_service;
import edu.esprit.utils.MyConnection;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import javafx.util.Duration;
import org.controlsfx.control.Notifications;
import edu.esprit.utils.Session;


/**
 * FXML Controller class
 *
 * @author 21655
 */
public class AffichageController implements Initializable {

    @FXML
    private TextField user_nom;
    @FXML
    private TextField user_prenom;
    @FXML
    private TextField user_usernrmae;
    @FXML
    private TextField user_email;
    @FXML
    private TextField user_tel;
    @FXML
    private TextField user_password;
    private TextField ide;
    @FXML
    private Button modifier_front;
    @FXML
    private Button logout;
    @FXML
    private ComboBox<String> equipe;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        this.setTextEmail(Session.getLoggedInUser().getEmail());
        this.setTextNom(Session.getLoggedInUser().getNom());
        this.setTextPassword(Session.getLoggedInUser().getMdp());
        this.setTextUsername(Session.getLoggedInUser().getUsername());
        this.setTextTel(""+Session.getLoggedInUser().getTel());
        this.setTextPrenom(Session.getLoggedInUser().getPrenom());
           String[] a ={"aaa","aa","aa"};
           ObservableList<String> nom_equipe=FXCollections.observableArrayList();
        Equipe_service e_serv=new Equipe_service();
               for (int i=0;i<e_serv.afficherEquipes().size();i++)
        {
            
           nom_equipe.add(e_serv.afficherEquipes().get(i).getNom_equipe());
           
            
        }
        
      equipe.setItems(nom_equipe);
        
    }  
     public void setTextNom(String message)
     {this.user_nom.setText(message);
     }
      public void setTextPrenom(String message)
     {this.user_prenom.setText(message);
     }
       public void setTextEmail(String message)
     {this.user_email.setText(message);
     }
        public void setTextPassword(String message)
     {this.user_password.setText(message);
     }
         public void setTextUsername(String message)
     {this.user_usernrmae.setText(message);
     }
          public void setTextTel(String message)
     {
         this.user_tel.setText(message);
     }
        public void setTextIde(String message)
     {
         this.ide.setText(message);
     }

    @FXML
    private void modif(ActionEvent event) throws SQLException {
             String req = "SELECT * FROM equipe WHERE nom_equipe='"+equipe + "'";
            
            Connection cnx = MyConnection.getInstance().getCnx();
            Equipe eq = null;
            
                Statement st = cnx.createStatement();
                ResultSet rs=st.executeQuery(req);
                while(rs.next()){
                    
                   eq=new Equipe(rs.getInt(1),rs.getString(2),rs.getInt(3), rs.getString(5));
                    
                    
                    
                    
                }
                 Session s=Session.getInstance();
        User_service ss=new User_service();
        System.out.println(this.user_email.getText());
        System.out.println(Session.getLoggedInUser().getId());
        
        ss.modifierUtilisateurss(Session.getLoggedInUser().getId(), this.user_nom.getText(), this.user_password.getText(), this.user_email.getText(), this.user_password.getText(), Integer.parseInt(this.user_tel.getText()),user_usernrmae.getText());
        Notifications not=Notifications.create().
                        title("Modification").
                        text("Modification Accepté").
                        hideAfter(Duration.seconds(5)).
                        position(Pos.CENTER_RIGHT);
                not.darkStyle();
                not.show();
    }

    private void logout(ActionEvent event) throws IOException {
        Session.setLoggedInUser(null);
        System.out.println("User_FX.AffichageController.logout()");
        Parent root = FXMLLoader.load(getClass().getResource("Sign Up.fxml"));
         Scene scene = new Scene(root);
         
         Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
         window.setScene(scene);
         window.show();
    }

    @FXML
    private void dec(ActionEvent event) throws IOException {
        Session.setLoggedInUser(null);
        
        Parent root = FXMLLoader.load(getClass().getResource("Sign Up.fxml"));
         Scene scene = new Scene(root);
         
         Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
         window.setScene(scene);
         window.show();
    }
          
    
}
