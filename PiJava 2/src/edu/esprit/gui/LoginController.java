/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import edu.esprit.entities.User;
import edu.esprit.services.User_service;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import javafx.util.Duration;
import javax.swing.JOptionPane;
import org.controlsfx.control.Notifications;


import edu.esprit.utils.Session;
/**
 * FXML Controller class
 *
 * @author 21655
 */
public class LoginController implements Initializable {

    @FXML
    private TextField user_email;
    @FXML
    private TextField user_password;
    @FXML
    private Button submit;
    @FXML
    private Button MDP;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        // TODO
    }  

    @FXML
    private void user_login(ActionEvent event) throws IOException {
         String email = user_email.getText();
         String password = user_password.getText();
         User_service user_service = new User_service();
      
      
     
        User u=  user_service.Login(email, password);
         Session.setLoggedInUser(u);
      
      
        System.out.println(u);
 if(u.id!=0)
 {System.out.println(u.block);
     if(u.block!=1)
     {
     
        if(u.getRole().equals("[\"ROLE_ADMIN\"]")){
                
                Notifications not=Notifications.create().
                        title("Login Successful").
                        text("Bienvenue Monsieur "+Session.getLoggedInUser().getPrenom()).
                        hideAfter(Duration.seconds(5)).
                        position(Pos.CENTER_RIGHT);
                not.darkStyle();
                not.show();
                
        Parent root = FXMLLoader.load(getClass().getResource("Home.fxml"));
         Scene scene = new Scene(root);
         
         Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
         window.setScene(scene);
         window.show();}
        else {   Notifications not=Notifications.create().
                        title("Login Successful").
                        text("Bienvenue Monsieur "+Session.getLoggedInUser().getPrenom()).
                        hideAfter(Duration.seconds(5)).
                        position(Pos.CENTER_RIGHT);
                not.darkStyle();
                not.show();
            
            Parent root = FXMLLoader.load(getClass().getResource("allproject.fxml"));
         Scene scene = new Scene(root);
         
         Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
         window.setScene(scene);
         window.show();
            
        }
        
 }
     else {Parent root = FXMLLoader.load(getClass().getResource("Block.fxml"));
         Scene scene = new Scene(root);
         
         Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
         window.setScene(scene);
         window.show();
     }
     
 }
 else JOptionPane.showMessageDialog(null, "Email ou Mot De Passe Introuvable");
         
         
      
         
 }

    @FXML
    private void mdp(ActionEvent event) throws IOException {
        
         Parent root = FXMLLoader.load(getClass().getResource("MDP.fxml"));
         Scene scene = new Scene(root);
         Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
         window.setScene(scene);
         window.show();
    }

    private void MDP(ActionEvent event) throws IOException {
        
         Parent root = FXMLLoader.load(getClass().getResource("MDP.fxml"));
         Scene scene = new Scene(root);
         Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
         window.setScene(scene);
         window.show();
    }
    
    
}
