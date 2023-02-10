/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import edu.esprit.entities.CategorieC;
import edu.esprit.services.ServiceCategoriec;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;

/**
 * FXML Controller class
 *
 * @author USER
 */
public class InscriptionController implements Initializable {

    @FXML
    private TextField idc;
    @FXML
    private TextField nomc;
    @FXML
    private Button btnsave;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void SavePerson(ActionEvent event) {
        
        try {
            String resId = idc.getText();
            String resNom = nomc.getText();
            
            try {
                
                
                CategorieC p = new CategorieC(Integer.parseInt(resId), resNom);
                ServiceCategoriec pcd = new ServiceCategoriec();
                pcd.ajouter(p);
            } catch (SQLException ex) {
                System.out.println(ex.getMessage());
            }
            
            //REDIRECTION
            
            FXMLLoader loader = new FXMLLoader(getClass().getResource("CategorieCDetails.fxml"));
            Parent root2 = loader.load();
            CategorieDetailsController pc =loader.getController();
            
            pc.setAfficheId(resId);
            pc.setAfficheNom(resNom);
            
            nomc.getScene().setRoot(root2);
            
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
        }
    }
    
}
