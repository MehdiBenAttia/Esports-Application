/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import edu.esprit.entities.Livreur;
import edu.esprit.services.LivreurCRUD;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;

/**
 * FXML Controller class
 *
 * @author Aziz
 */
public class ModifierLivreurController implements Initializable {

    @FXML
    private TextField EmailLivreur;
    @FXML
    private TextField NomLivreur;
    @FXML
    private TextField PrenomLivreur;
    @FXML
    private TextField TelLivreur;
    @FXML
    private Button ModifierLivreur;
   

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    public TextField getEmailLivreur() {
        return EmailLivreur;
    }

    public void setEmailLivreur(String message) {
        this.getEmailLivreur().setText(message);
    }

  
    public TextField getPrenomLivreur() {
        return PrenomLivreur;
    }

    public void setPrenomLivreur(String message) {
        this.getPrenomLivreur().setText(message);
    }

    public TextField getTelLivreur() {
        return TelLivreur;
    }

    public void setTelLivreur(int message) {
  this.getTelLivreur().setText(String.valueOf(message));    }

    public Button getModifierLivreur() {
        return ModifierLivreur;
    }

    public void setModifierLivreur(Button ModifierLivreur) {
        this.ModifierLivreur = ModifierLivreur;
    }

    public TextField getNomLivreur() {
        return NomLivreur;
    }

    public void setNomLivreur(String message) {
        this.getNomLivreur().setText(message);
    }
 public void setItems (int id)
    {
       
            ModifItems(id);
    }
    public void ModifItems (int id)
    {
                 
          
        ModifierLivreur.setOnAction(e -> {
            
              String nommodif = getNomLivreur().getText();
        int telmodif = Integer.parseInt(getTelLivreur().getText());
        String prenomModif = getPrenomLivreur().getText();
        String emailModif = getEmailLivreur().getText();
        
        
        Livreur L = new Livreur(id,nommodif,prenomModif,telmodif,emailModif);
        LivreurCRUD LC= new LivreurCRUD();
            LC.updateLivreur(L);
            ((Node)(e.getSource())).getScene().getWindow().hide();
               Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Success");
            alert.setContentText("Livreur modifié!");
            alert.show(); 
            LivreurCRUD tt = new LivreurCRUD();
                
           
        }
        );
                 }
    
}
