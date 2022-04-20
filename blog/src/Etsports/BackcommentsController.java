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
import java.io.File;
import java.io.IOException;
import java.net.MalformedURLException;
import java.net.URL;
import java.sql.Date;
import java.sql.SQLException;
import java.util.List;
import java.util.Optional;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import java.util.regex.Matcher;
import java.util.regex.Pattern;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.KeyEvent;
import javafx.scene.input.MouseEvent;
import javafx.stage.FileChooser;

/**
 * FXML Controller class
 *
 * @author aziz
 */
public class BackcommentsController implements Initializable {

    @FXML
    private TableView<Post> tabPost;
    @FXML
    private TableColumn<Post, Integer> ColId;
    @FXML
    private TableColumn<Post, String> colnom_user;
    @FXML
    private TableColumn<Post, String> Colsujet;
    @FXML
    private TableColumn<Post, String> Coldescription;
    @FXML
    private TableColumn<Post, String> Colcommunaute;
    @FXML
    private TableColumn<Post, String> ColImage;
    @FXML
    private TableColumn<Post, Integer> ColNbrj;
    @FXML
    private TableColumn<Post, Date> ColDatep;
    @FXML
    private TableView<Commentaire> tvtabCom;
    @FXML
    private TableColumn<Commentaire, Integer> colIdcom;
    @FXML
    private TableColumn<Commentaire, String> ColNomuserc;
    @FXML
    private TableColumn<Commentaire, String> ColDescriptionc;
    @FXML
    private TableColumn<Commentaire, Date> ColDatec;
    @FXML
    private TextField mod_descriptionc;
    public ObservableList<Post> data =FXCollections.observableArrayList();
    public ObservableList<Commentaire> comdata =FXCollections.observableArrayList();
    PostServices p =new PostServices();
    CommentaireService c = new CommentaireService();
    @FXML
    private TextField tfsujet;
    @FXML
    private TextField tfdescription;
    @FXML
    private TextField tfcommunaute;
    @FXML
    private TextField tfnomuser;
    @FXML
    private Button buttonupload;
    @FXML
    private TextField tfimagep;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
                
        try {
           afficherEvent();
           
            
        } catch (SQLException ex) {
            Logger.getLogger(BackcommentsController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }    

    @FXML
    private void selectCom(MouseEvent event) {
                  
    Commentaire A= tvtabCom.getSelectionModel().getSelectedItem();
 
    ColDescriptionc.setText(A.getDescriptionc());
   
    }
public String controlSaisie(){
             String nom = tfnomuser.getText();
             if(nom.equals("")){
                 return "You must type a name !";
             }
             String error = "";
              Pattern pattern = Pattern.compile("[\\d]", Pattern.CASE_INSENSITIVE);
              Matcher matcher = pattern.matcher(nom);
              boolean matchFound = matcher.find();
              if(matchFound) {
                  error += "Name cant contain a number";
                    } 
              else {
                    error = "";
               }
              return error;
         }
              
    @FXML
    private void selectPostcom(ActionEvent event) throws SQLException {
       //  Post T = tabPost.getSelectionModel().getSelectedItem();
          //     int id_post= T.getIdPost();
               
               
                 comdata.clear();

             //  List<Commentaire> coment = c.getCombyPost(id_post);
                            List<Commentaire> coment = c.afficher();
  
                     comdata.addAll(coment);
                     System.out.println(comdata);
                colIdcom.setCellValueFactory(new PropertyValueFactory<>("id"));
              ColNomuserc.setCellValueFactory(new PropertyValueFactory<>("nomuser"));
              ColDescriptionc.setCellValueFactory(new PropertyValueFactory<>("descriptionc"));
              ColDatec.setCellValueFactory(new PropertyValueFactory<>("datec"));
              System.out.println("hh");

        

        tvtabCom.setItems(comdata); 
    }

    @FXML
    private void deletecom(ActionEvent event) {
        
        Commentaire c= tvtabCom.getSelectionModel().getSelectedItem();
        CommentaireService aS = new CommentaireService();
        if (aS.delete(c)){
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Succees");
        alert.setHeaderText(null);
        alert.setContentText("La suppression d'event a été effectué avec succées");
        alert.showAndWait();
        tvtabCom.refresh();
        
        }else{
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Erreur");
        alert.setHeaderText(null);
        alert.setContentText("La supression d'event n'a pas été effectué!");
        alert.showAndWait();   
           tvtabCom.setItems(comdata);
        
    }
    }

    @FXML
    private void updatecom(ActionEvent event) {
        {
        Commentaire A= tvtabCom.getSelectionModel().getSelectedItem();
           

       
        String desc = mod_descriptionc.getText();
 
         A.setDescriptionc(desc);
        
        
        CommentaireService aS = new CommentaireService();
        if (aS.update(A)){
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Succées");
        alert.setHeaderText(null);
        alert.setContentText("La modification d'event a été effectué avec succées");
        alert.showAndWait();
      tvtabCom.refresh();
        }else{
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Erreur");
        alert.setHeaderText(null);
        alert.setContentText("La modufication d'event n'a pas été effectué!");
      alert.showAndWait();   
   tvtabCom.setItems(comdata);
       }
   }
    }


    private void afficherEvent() throws SQLException {
       PostServices c = new PostServices();
         data.clear();
        data.addAll(p.afficher());
  ColId.setCellValueFactory(new PropertyValueFactory<>("id"));
       colnom_user.setCellValueFactory(new PropertyValueFactory<>("nom_user"));
      Colsujet.setCellValueFactory(new PropertyValueFactory<>("sujet"));
       Coldescription.setCellValueFactory(new PropertyValueFactory<>("description"));
         Colcommunaute.setCellValueFactory(new PropertyValueFactory<>("communaute"));
         ColDatep.setCellValueFactory(new PropertyValueFactory<>("date_p"));
         ColImage.setCellValueFactory(new PropertyValueFactory<>("image"));
         ColNbrj.setCellValueFactory(new PropertyValueFactory<>("nbr_jaime"));


      tabPost.setItems(data);
     
   }  

    @FXML
    private void upload(ActionEvent event) {
        FileChooser fc = new FileChooser();
        String imageFile = "";
        File f = fc.showOpenDialog(null);

        if (f != null) {
            imageFile = f.getAbsolutePath();
            String newfile = imageFile.replace("C:\\Users\\aziz\\Desktop\\blog\\src\\Images", "");
            tfimagep.setText(newfile);
        }
    }

    @FXML
    private void addpostback(ActionEvent event) throws SQLException, MalformedURLException, IOException{
        
        Post P;
        String nom_user = tfnomuser.getText();
        String sujet = tfsujet.getText();
        String description = tfdescription.getText();
        String communaute = tfcommunaute.getText();
        String image = tfimagep.getText();
        


        
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
String error = controlSaisie();
           
             
          if(sujet.equals("") || nom_user.equals("") || description.equals("")|| communaute.equals("") || image.equals("") ){
               //Alert Saisie Tournois :
             alert.setAlertType(Alert.AlertType.WARNING);
            alert.setTitle("Conditions de saisie");
            alert.setHeaderText(null);
            alert.setContentText("You need to fill all the fields first!");
            alert.showAndWait();}
          else if(sujet.length()>10){
            alert.setAlertType(Alert.AlertType.WARNING);
            alert.setTitle("Conditions de saisie");
            alert.setHeaderText(null);
            alert.setContentText("sujet must be under 10 letters");
            alert.showAndWait();
            }
          else if(description.length()<10){
            alert.setAlertType(Alert.AlertType.WARNING);
            alert.setTitle("Conditions de saisie");
            alert.setHeaderText(null);
            alert.setContentText("description must be over 10 letters");
            alert.showAndWait();
            }
          else if (error!=""){
              alert.setAlertType(Alert.AlertType.WARNING);
            alert.setTitle("Conditions de saisie");
            alert.setHeaderText(null);
            alert.setContentText("nom user must be only letters");
            alert.showAndWait();
          }
            //Alert Saisie Tournois !
          else{
               P = new Post(sujet,description,communaute,nom_user,image);
               try{
                    p.ajouter(P); 
                     alert.setAlertType(Alert.AlertType.INFORMATION);
                     alert.setTitle("Add Post");
                     alert.setHeaderText("Results:");
                     alert.setContentText("post added successfully!");
               } catch (SQLException ex){
                                //Alert Error Tournois :
                       alert.setAlertType(Alert.AlertType.WARNING);
                       alert.setTitle("ERROR");
                       alert.setHeaderText("Adding Error !! ");
                       alert.setContentText(ex.getMessage());
                       //Alert Error Tournois !
        } finally{
              alert.showAndWait();
        }
          }
        data.clear();
        try {
            data.addAll(p.afficher());
        } catch (SQLException ex) {
           System.out.println(ex.getMessage());

        }
    
    }
    

    @FXML
    private void updatepostback(ActionEvent event) {
        if (tabPost.getSelectionModel().getSelectedItem() != null) {

            Post P = tabPost.getSelectionModel().getSelectedItem();
        System.out.println("Sujet:"+ tfsujet.getText());
        System.out.println("description:"+ tfdescription.getText());
        System.out.println("communaute:"+ tfcommunaute.getText());
        System.out.println("nomuser:"+ tfnomuser.getText());
           p.UpdateF(P.getIdPost(),tfsujet.getText(),tfdescription.getText(), tfcommunaute.getText(),tfnomuser.getText(), tfimagep.getText());
            
            Alert EditeJeuxAlert = new Alert(Alert.AlertType.INFORMATION);
            EditeJeuxAlert.setTitle("edit");
            EditeJeuxAlert.setHeaderText(null);
            EditeJeuxAlert.setContentText("post was succfuly Updated");
            EditeJeuxAlert.showAndWait();

        } else {
            //Alert Select jeux :
            Alert selectMealAlert = new Alert(Alert.AlertType.WARNING);
            selectMealAlert.setTitle("Select a post");
            selectMealAlert.setHeaderText(null);
            selectMealAlert.setContentText("You need to select post first!");
            selectMealAlert.showAndWait();
            //Alert Select jeux !
        }

 data.clear();
        try {
            data.addAll(p.afficher());
        } catch (SQLException ex) {
           System.out.println(ex.getMessage());

        }


        
    }

    @FXML
    private void deletepostback(ActionEvent event) 
    throws SQLException {

        if (tabPost.getSelectionModel().getSelectedItem() != null) {
            Alert deleteTournoislert = new Alert(Alert.AlertType.CONFIRMATION);
            deleteTournoislert.setTitle("Delete post");
            deleteTournoislert.setHeaderText(null);
            deleteTournoislert.setContentText("Are you sure want to delete this post ?");
            Optional<ButtonType> optiondeleteTournoisAlert = deleteTournoislert.showAndWait();
            if (optiondeleteTournoisAlert.get() == ButtonType.OK) {
                Post P = tabPost.getSelectionModel().getSelectedItem();
                System.out.println(P.getIdPost());
                    p.supprimer(P.getIdPost());
             


                //Alert Delete Blog :
                Alert succDeleteMealAlert = new Alert(Alert.AlertType.INFORMATION);
                succDeleteMealAlert.setTitle("Delete post");
                succDeleteMealAlert.setHeaderText("Results:");
                succDeleteMealAlert.setContentText("post deleted successfully!");

                succDeleteMealAlert.showAndWait();
            } else if (optiondeleteTournoisAlert.get() == ButtonType.CANCEL) {

            }

        } else {

            Alert selectMealAlert = new Alert(Alert.AlertType.WARNING);
            selectMealAlert.setTitle("Select a post");
            selectMealAlert.setHeaderText(null);
            selectMealAlert.setContentText("You need to select post first!");
            selectMealAlert.showAndWait();

        }
        
         data.clear();
        try {
            data.addAll(p.afficher());
        } catch (SQLException ex) {
           System.out.println(ex.getMessage());

        }
        
        
    }

    @FXML
    private void handlepost(MouseEvent event) {
        Post post= tabPost.getSelectionModel().getSelectedItem();
     
      tfnomuser.setText(post.getNom_user());

       tfsujet.setText(post.getSujet());
     
           
       tfdescription.setText(post.getDescription());
      tfcommunaute.setText(post.getCommunaute());

       
       tfimagep.setText(post.getImage());


    }

    
    
}
