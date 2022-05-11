/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;
import edu.esprit.entities.categorieRec;
import edu.esprit.entities.reclamation;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.ScrollPane;
import javafx.scene.image.ImageView;
import javafx.scene.layout.GridPane;
import edu.esprit.entities.Categorie;
import edu.esprit.services.CategorieService;
import edu.esprit.services.*;
import edu.esprit.utils.Session;

import java.util.Scanner;

import edu.esprit.entities.Produit;
import edu.esprit.services.ProduitService;
import java.io.IOException;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXMLLoader;
import javafx.geometry.Insets;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.TextField;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.Pane;
import javafx.scene.layout.Region;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author MSi
 */
public class ProductpageController implements Initializable {

    @FXML
    private GridPane grid;
    @FXML
    private ScrollPane scroll;
    private AnchorPane frontprodsouissi;
    private Pane pnsouissi;
    @FXML
    private Button btnCal;
    @FXML
    private TextField textreclamProd;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
//        pnhome.toBack();
    ProduitService Prod = new ProduitService();   
                  ObservableList<Produit> list = FXCollections.observableArrayList();
        int column=0;
        int row=3;
        try {
            for(int i=0 ; i<Prod.afficher().size();i++){
                list.add(Prod.afficher().get(i));
                
              //  System.err.println("sfiudfsidufhsiudfhdsiufj");
                FXMLLoader fxmlLoader = new FXMLLoader();
                fxmlLoader.setLocation(getClass().getResource("produititem.fxml"));
                
                try {
                    System.out.println("hhhh");
                    AnchorPane anchorPane = fxmlLoader.load();
                    
                    
                    
                    ProduititemController itemController = fxmlLoader.getController();
                    itemController.test(list.get(i).getNom(),list.get(i).getPrix(),list.get(i).getId(),list.get(i).getType(),list.get(i).getImage(),list.get(i).getMarque());
                    
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
//
//
////Set Item Grid Height
grid.setMinHeight(Region.USE_COMPUTED_SIZE);
grid.setPrefHeight(Region.USE_COMPUTED_SIZE);
grid.setMaxHeight(Region.USE_PREF_SIZE);




GridPane.setMargin(anchorPane,new Insets(10));
                } catch (IOException ex) {
                    Logger.getLogger(ProductpageController.class.getName()).log(Level.SEVERE, null, ex);
                }
                
                
            }
        } catch (SQLException ex) {
                Logger.getLogger(ProduititemController.class.getName()).log(Level.SEVERE, null, ex);
        }
        // TODO
    }    

    private void gotoStore(ActionEvent event) {
          try {
              Parent root = FXMLLoader.load(getClass().getClassLoader().getResource("Main.fxml"));
          Stage stage = new Stage();
     
          stage.setTitle("main");
                    stage.setScene(new Scene(root)); 
                    stage.show();
     
        } catch (IOException ex) {
               System.out.println("can't load comrnt window");
        }
    }

    @FXML
    private void reclamerP(ActionEvent event) throws SQLException, Exception {
String aaa = textreclamProd.getText();
        String catego = "produit";
        ServicecategorieRec cat = new ServicecategorieRec();
        ServiceReclamation test = new ServiceReclamation();
        String etat = "en cours";
        categorieRec c = cat.getByString(catego);
        reclamation rec;
        //reclamation reclamati = new reclamation("test", aaa, "aaa.aa@yy.tn", etat);
         reclamation reclamati = new reclamation(Session.getLoggedInUser().getUsername(), aaa,Session.getLoggedInUser().getEmail(), etat);
        test.ajouterR(reclamati, c);
         Mailling M = new Mailling() ;
        String message ="Bonjour Mr."+Session.getLoggedInUser().getUsername()+". vous avez recu une reclamation  "
        + "cordialement ";
        Mailling.sendEmail(Session.getLoggedInUser().getEmail(),message);
       
        
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
