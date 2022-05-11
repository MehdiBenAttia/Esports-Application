/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

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

/**
 * FXML Controller class
 *
 * @author 21655
 */
public class CodeController implements Initializable {

    @FXML
    private TextField code;
    @FXML
    private Button submit;
    @FXML
    private TextField pwd;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void user_login(ActionEvent event) throws IOException {
        int x=Integer.parseInt(code.getText());
        User_service s=new User_service();
       if(s.ResetPassword(x, pwd.getText()))
       {
      
         Parent root = FXMLLoader.load(getClass().getResource("Sign Up.fxml"));
         Scene scene = new Scene(root);
         Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
         window.setScene(scene);
         window.show();
         Notifications not=Notifications.create().
                        title("Changement").
                        text("Modification Accepté").
                        hideAfter(Duration.seconds(5)).
                        position(Pos.CENTER_RIGHT);
                not.darkStyle();
                not.show();}
         else JOptionPane.showMessageDialog(null, "Le code Est Faux");

        
    }
    
}
