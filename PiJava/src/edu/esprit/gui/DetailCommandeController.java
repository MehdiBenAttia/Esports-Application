/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import edu.esprit.entities.Commande;
import edu.esprit.services.CommandeCRUD;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author Aziz
 */
public class DetailCommandeController implements Initializable {

    @FXML
    private TextField NomA;
    @FXML
    private TextField PrenomA;
    @FXML
    private TextField TelA;
    @FXML
    private TextField EmailA;
    @FXML
    private TextField AdresseA;
    @FXML
    private TextField CityA;
    @FXML
    private Button exit;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }  

    public TextField getNomA() {
        return NomA;
    }

    public void setNomA(String message) {
         this.NomA.setText(String.valueOf(message));
    }

    public TextField getPrenomA() {
        return PrenomA;
    }

    public void setPrenomA(String message) {
         this.PrenomA.setText(String.valueOf(message));
    }

    public TextField getTelA() {
        return TelA;
    }

    public void setTelA(int message) {
         this.TelA.setText(String.valueOf(message));
    }

    public TextField getEmailA() {
        return EmailA;
    }

    public void setEmailA(String message) {
         this.EmailA.setText(String.valueOf(message));
    }

    public TextField getAdresseA() {
        return AdresseA;
    }

    public void setAdresseA(String message) {
         this.AdresseA.setText(String.valueOf(message));
    }

    public TextField getCityA() {
        return CityA;
    }

    public void setCityA(String message) {
         this.CityA.setText(String.valueOf(message));
    }
    public void setItems (int id)
    {
       
            DetailItems(id);
    }
    public void DetailItems (int id)
    {
                 
          
        exit.setOnAction(e -> {
            
Stage stage = (Stage) exit.getScene().getWindow();
stage.close();
        
                
           
        }
        );
                 }
    
}
