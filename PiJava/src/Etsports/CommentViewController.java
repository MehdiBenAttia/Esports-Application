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
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.input.MouseEvent;

/**
 * FXML Controller class
 *
 * @author USER
 */
public class CommentViewController implements Initializable {

    @FXML
    private TableView<?> tvtabCom;
    @FXML
    private TableColumn<?, ?> colIdcom;
    @FXML
    private TableColumn<?, ?> ColNomuserc;
    @FXML
    private TableColumn<?, ?> ColDescriptionc;
    @FXML
    private TableColumn<?, ?> ColDatec;
    @FXML
    private TextField tfnom_user;
    @FXML
    private TextArea tadescription;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void selectCom(MouseEvent event) {
    }

    @FXML
    private void addcommentfront(ActionEvent event) {
    }
    
}
