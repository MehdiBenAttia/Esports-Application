/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Pi.gui;

import Pi.entities.Adresse;
import Pi.services.AdresseCRUD;
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
public class AjouterAdresseController implements Initializable {

    @FXML
    private TextField Nom;
    @FXML
    private TextField Prenom;
    @FXML
    private TextField Addresse;
    @FXML
    private TextField City;
    @FXML
    private TextField Email;
    @FXML
    private TextField Tel;
    @FXML
    private Button Valider;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void AjouterAdresse(ActionEvent event) {
        String nom = Nom.getText();
        String prenom = Prenom.getText();
        String email=Email.getText();
        String adresse=Addresse.getText();
        String city=City.getText();
        int tel =Integer.parseInt(Tel.getText());
        Adresse A = new Adresse(nom,prenom,adresse,city,email,tel);
        AdresseCRUD Ac = new AdresseCRUD();
        Ac.ajouterAdresse2(A);



        
    }
    
}
