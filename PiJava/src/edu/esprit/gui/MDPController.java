/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import edu.esprit.entities.User;
import edu.esprit.services.User_service;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import edu.esprit.utils.Session;

/**
 * FXML Controller class
 *
 * @author 21655
 */
public class MDPController implements Initializable {

    @FXML
    private TextField user_email;
    @FXML
    private Button submit;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void user_restore(ActionEvent event) throws SQLException, Exception {
        
        String email = user_email.getText();

         User_service s=new User_service();
         
                   
         
         User a=s.afficherUtilisateurs().stream().filter(x->email.equals(x.getEmail())).findAny().orElse(null);
        
         
                  
                   {
                   s.EnvoieMail(a.getEmail()); 
                   
                   Parent root = FXMLLoader.load(getClass().getResource("Code.fxml"));
         Scene scene = new Scene(root);
         
         Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
         window.setScene(scene);
         window.show();}}
                   
                   }
                   
    


