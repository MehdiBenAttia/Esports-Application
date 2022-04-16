/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Pi.gui;

import Pi.entities.Livreur;
import Pi.services.LivreurCRUD;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;

/**
 * FXML Controller class
 *
 * @author Aziz
 */
public class AjouterLivreurController implements Initializable {

    @FXML
    private TextField NomLivreur;
    @FXML
    private TextField PrenomLivreur;
    @FXML
    private TextField TelLIvreur;
    @FXML
    private TextField EmailLivreur;
    @FXML
    private Button AjouterLivreur;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        
    }    

    @FXML
    private void AjouterLivreur(ActionEvent event) {
        String Nom = NomLivreur.getText();
        String Prenom = PrenomLivreur.getText();
        int Tel =Integer.parseInt(TelLIvreur.getText());
        String Email=EmailLivreur.getText();
        
        Livreur l = new Livreur(Nom,Prenom,Tel,Email);
        LivreurCRUD Lc =new LivreurCRUD();
        Lc.ajouterLivreur2(l);
    }
    
}
