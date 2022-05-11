/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import edu.esprit.entities.*;
import edu.esprit.services.*;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Insets;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.ScrollPane;
import javafx.scene.control.TextField;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.Region;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author aziz
 */
public class ListdepostsController implements Initializable {

    @FXML
    private ScrollPane scroll;
    @FXML
    private GridPane grid;

    
    public ObservableList<Post> Postdata = FXCollections.observableArrayList();
                PostServices po = new PostServices();
                  private List<Post> Post = new ArrayList<>();
                  CommentaireService co = new CommentaireService();
    @FXML
    private TextField reclamblog;
    @FXML
    private Button btnCal;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
          try {
            Postdata.addAll(po.afficher());
        } catch (SQLException ex) {
            Logger.getLogger(PostcardController.class.getName()).log(Level.SEVERE, null, ex);
        }

        //Match.addAll(getData());
        // Jeux.addAll(jcr.readAll());
   
      
        System.out.println(Postdata);
        int column=0;
        int row=3;
        for(int i=0 ; i< Postdata.size();i++){
            
            FXMLLoader fxmlLoader = new FXMLLoader();
            fxmlLoader.setLocation(getClass().getResource("Postcard.fxml"));
            
            try {
                AnchorPane anchorPane = fxmlLoader.load();
           
            
            
            PostcardController itemController = fxmlLoader.getController();
           itemController.setData(Postdata.get(i).getIdPost(),Postdata.get(i).getSujet(),Postdata.get(i).getDescription(),Postdata.get(i).getCommunaute(),Postdata.get(i).getNom_user(),Postdata.get(i).getDate_p(),Postdata.get(i).getImage(),Postdata.get(i).getNbr_jaime(),Postdata.get(i).getBadlevel());
//          itemController.setData(11,"ghj","jnui","hhhnu","hhuhuh","huiu",5);
           if(column == 2){
                column=0;
                row++;
            }
            //Node anchorPane;
             grid.add(anchorPane, column++, row); //Child , column , row
               
            //Set Item Grid Width
            grid.setMinWidth(Region.USE_COMPUTED_SIZE);
            grid.setPrefWidth(Region.USE_COMPUTED_SIZE);
            grid.setMaxWidth(Region.USE_PREF_SIZE);
            
            
            //Set Item Grid Height
            grid.setMinHeight(Region.USE_COMPUTED_SIZE);
            grid.setPrefHeight(Region.USE_COMPUTED_SIZE);
            grid.setMaxHeight(Region.USE_PREF_SIZE);
            
            
            
            
             GridPane.setMargin(anchorPane,new Insets(10));
              } catch (IOException ex) {
                Logger.getLogger(ListdepostsController.class.getName()).log(Level.SEVERE, null, ex);
            } catch (SQLException ex) {
                  Logger.getLogger(ListdepostsController.class.getName()).log(Level.SEVERE, null, ex);
              }
            
            
        }
              
              
    }    

    @FXML
    private void reclamer(ActionEvent event) throws SQLException {
        String aaa = reclamblog.getText();
        String catego = "blog";
        ServicecategorieRec cat = new ServicecategorieRec();
        ServiceReclamation test = new ServiceReclamation();
        String etat = "en cours";
        categorieRec c = cat.getByString(catego);
        reclamation rec;
        reclamation reclamati = new reclamation("test", aaa, "aaa.aa@yy.tn", etat);
        test.ajouterR(reclamati, c);
    }

    @FXML
    private void backhome(ActionEvent event) {
    }

    @FXML
    private void gotohomeF(MouseEvent event) throws IOException {
        Parent root = FXMLLoader.load(getClass().getResource("allproject.fxml"));
         Scene scene = new Scene(root);
         
         Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
         window.setScene(scene);
         window.show();
    }
    
}
