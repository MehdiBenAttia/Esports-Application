/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Etsports;

import edu.entities.Commentaire;
import edu.entities.Post;
import edu.services.CommentaireService;
import edu.services.PostServices;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;

/**
 * FXML Controller class
 *
 * @author aziz
 */
public class CommentViewController implements Initializable {

    @FXML
    private TableView<Commentaire> tvtabCom;
    @FXML
    private TableColumn<Commentaire, String> colIdcom;
    @FXML
    private TableColumn<Commentaire, String> ColNomuserc;
    @FXML
    private TableColumn<Commentaire, String> ColDescriptionc;
    @FXML
    private TableColumn<?, ?> ColDatec;
public final ObservableList<Commentaire> data =FXCollections.observableArrayList();
         Post po = new Post();
    @FXML
    private TextField tfnom_user;
    @FXML
    private TextArea tadescription;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
          try {
            showPost();
        } catch (SQLException ex) {
            Logger.getLogger(CommentViewController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }    

    @FXML
    private void selectCom(MouseEvent event) {
    }

    @FXML
    private void addcommentfront(ActionEvent event) throws SQLException {
        CommentaireService cer = new CommentaireService();
    
        String nom_user = tfnom_user.getText();
                String description = tadescription.getText();

        Alert alert = new Alert(Alert.AlertType.INFORMATION);
    // p.getTest();
      if(   (nom_user.equals("")) ||  (description.equals(""))){
                       //Alert saisie jeux :
             alert.setAlertType(Alert.AlertType.WARNING);
            alert.setTitle("Conditions de saisie");
            alert.setHeaderText(null);
            alert.setContentText("You need to fill all the fields first!");
            alert.showAndWait();
            //Alert saisie jeux !
            
        }else{
               Commentaire c = new Commentaire(description,nom_user,po.getTest());

      
       
        try{
       cer.ajouter(c);
        alert.setAlertType(Alert.AlertType.INFORMATION);
        alert.setTitle("Add comment");
        alert.setHeaderText("Results:");
        alert.setContentText("Game added successfully!");
        } catch (SQLException ex){
                     //Alert Error jeux :
            alert.setAlertType(Alert.AlertType.WARNING);
            alert.setTitle("ERROR");
            alert.setHeaderText("Adding Error !! ");
            alert.setContentText(ex.getMessage());
            //Alert Error jeux !
        } finally{
              alert.showAndWait();
        }
          
        }
    }
    

    public void showPost() throws SQLException{
        CommentaireService p1 = new CommentaireService();
   ObservableList<Commentaire> comdata = FXCollections.observableArrayList();
       // comdata.addAll(p1.afficher());
        comdata.addAll(p1.postCommentaires(po.getTest()));

         colIdcom.setCellValueFactory(new PropertyValueFactory<>("id"));
              ColNomuserc.setCellValueFactory(new PropertyValueFactory<>("nomuser"));
              ColDescriptionc.setCellValueFactory(new PropertyValueFactory<>("descriptionc"));
              ColDatec.setCellValueFactory(new PropertyValueFactory<>("datec"));
             // System.out.println(id_post);

        

        tvtabCom.setItems(comdata); 
        
 
        
    }

//    @FXML
//    private void deletcommentfront(ActionEvent event) {
//        
//    }
//    
//
//    @FXML
//    private void updatecommentfront(ActionEvent event) {
//    }
}
