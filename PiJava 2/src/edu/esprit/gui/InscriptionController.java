/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import edu.esprit.entities.Equipe;
import edu.esprit.entities.User;
import edu.esprit.services.Equipe_service;
import edu.esprit.services.User_service;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
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
import javax.swing.JOptionPane;
import org.controlsfx.control.Notifications;
import edu.esprit.utils.MyConnection;
import edu.esprit.utils.Session;

/**
 * FXML Controller class
 *
 * @author 21655
 */
public class InscriptionController implements Initializable {

    @FXML
    private TextField user_nom;
    @FXML
    private TextField user_prenom;
    @FXML
    private TextField user_username;
    @FXML
    private TextField user_email;
    @FXML
    private TextField user_telephone;
    @FXML
    private TextField user_password;
    @FXML
    private Button user_submit;
    private ComboBox<String> Equipe;
    @FXML
    private TextField okok;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        String[] a ={"aaa","aa","aa"};
           ObservableList<String> nom_equipe=FXCollections.observableArrayList();
        Equipe_service e_serv=new Equipe_service();
               for (int i=0;i<e_serv.afficherEquipes().size();i++)
        {
            
           nom_equipe.add(e_serv.afficherEquipes().get(i).getNom_equipe());
           
            
        }
        
      Equipe.setItems(nom_equipe);
 
       
                 
    }    

    @FXML
    private void user_add(ActionEvent event) throws SQLException, IOException {
        
        int x= 0;
            
            String prenom = user_prenom.getText();
            String nom = user_nom.getText();
            String username = user_username.getText();
            String email = user_email.getText();
            int tel = Integer.parseInt(user_telephone.getText());
            String password = user_password.getText();
            String equipe=Equipe.getValue();
            
            String req = "SELECT * FROM equipe WHERE nom_equipe='"+equipe + "'";
            
            Connection cnx = MyConnection.getInstance().getCnx();
            Equipe eq = null;
            
                Statement st = cnx.createStatement();
                ResultSet rs=st.executeQuery(req);
                while(rs.next()){
                    
                   eq=new Equipe(rs.getInt(1),rs.getString(2),rs.getInt(3), rs.getString(5));
                    
                    
                    
                    
                }
            
            
           
            
            if(user_prenom.getText().matches("[a-zA-Z]+")==false || user_prenom.getText().length()==0){
                user_prenom.setStyle("-fx-border-color: red ; -fx-border-width: 2px;");
x++;
            }
            else {user_prenom.setStyle(null);}
            
             if(user_email.getText().length()<6 ){
                user_email.setStyle("-fx-border-color: red ; -fx-border-width: 2px;");
x++;
            }
            else {user_email.setStyle(null);}
             
              if(user_telephone.getText().matches("[a-zA-Z]")==true || user_telephone.getText().length()!=8){
                user_telephone.setStyle("-fx-border-color: red ; -fx-border-width: 2px;");
x++;
            }
            else {user_telephone.setStyle(null);}


            
            if(x==0){
            User u =new User(nom, prenom, email, password, tel, username,Equipe.getId());
            Session.setLoggedInUser(u);
            User_service user_service = new User_service();
            if(user_service.verif_cred(u))
            {
                   Notifications not=Notifications.create().
                        title("Sign Up Successful").
                        text("Inscription Accepté , Bienvenue Monsieur "+u.getPrenom()).
                        hideAfter(Duration.seconds(5)).
                        position(Pos.CENTER_RIGHT);
                not.darkStyle();
                not.show();
                user_service.add(u,eq.getId_e());
           
            }
            else {JOptionPane.showMessageDialog(null, "Email Déja existant");
            Session.setLoggedInUser(null);
            }
            
            

          
            
         
      
      
    
 
 
//        if(u.getRole().equals("[\"ROLE_ADMIN\"]")){
//                            FXMLLoader loader = new FXMLLoader(getClass().getResource("Affichage_back.fxml"));
//         Parent root = loader.load();
//                
//         root = FXMLLoader.load(getClass().getResource("Home.fxml"));
//         Scene scene = new Scene(root);
//         
//         Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
//         window.setScene(scene);
//         window.show();}
            Parent root = FXMLLoader.load(getClass().getResource("Affichage.fxml"));
         Scene scene = new Scene(root);
         
         Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
         window.setScene(scene);
         window.show();}}
            

            
        
 }
 
 
 
 
 
 
 
        
        
        
        
        
                
        
        
        
        
        
        
    
    

