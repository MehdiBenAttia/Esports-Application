/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Etsports;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.image.ImageView;
import org.controlsfx.control.Rating;

/**
 * FXML Controller class
 *
 * @author USER
 */
public class PostcardController implements Initializable {

    @FXML
    private ImageView imagepost;
    @FXML
    private Label tfnom_user;
    @FXML
    private Label tfsujet;
    @FXML
    private Label tfdescription;
    @FXML
    private Label tfcommunaute;
    @FXML
    private Label tfdatepost;
    @FXML
    private Label tfnbr_jaime;
    @FXML
    private Label idpostlabel;
    @FXML
    private Label labelimage;
    @FXML
    private Label nbr_comments;
    @FXML
    private Button tflike;
    @FXML
    private Button tfdislike;
    @FXML
    private Label labelbadrouge;
    @FXML
    private Label labelorange;
    @FXML
    private Label labelvert;
    @FXML
    private Label badlevelvalue;
    @FXML
    private Rating troisetoiles;
    @FXML
    private Rating deuxetoiles;
    @FXML
    private Rating uneetoile;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void comentpostbtn(ActionEvent event) {
    }

    @FXML
    private void like(ActionEvent event) {
    }

    @FXML
    private void dislike(ActionEvent event) {
    }
    
}
