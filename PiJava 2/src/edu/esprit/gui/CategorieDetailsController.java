/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.TextField;

/**
 * FXML Controller class
 *
 * @author USER
 */
public class CategorieDetailsController implements Initializable {

    @FXML
    private TextField AfficheId;
    @FXML
    private TextField AfficheNom;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
    }    

    public TextField getAfficheId() {
        return AfficheId;
    }

    public void setAfficheId(String value) {
        this.AfficheId.setText(value);
    }

    public TextField getAfficheNom() {
        return AfficheNom;
    }

    public void setAfficheNom(String value) {
        this.AfficheNom.setText(value);
    }
    
}
