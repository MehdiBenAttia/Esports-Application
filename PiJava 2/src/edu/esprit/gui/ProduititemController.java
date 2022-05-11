/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Label;
import javafx.scene.image.ImageView;
import edu.esprit.entities.Produit;
import edu.esprit.services.CategorieService;
import edu.esprit.services.ProduitService;
import java.io.File;
import java.io.IOException;
import javafx.event.ActionEvent;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.image.Image;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author MSi
 */
public class ProduititemController implements Initializable {

    @FXML
    private ImageView imageproduitfront;
    @FXML
    private Label nomproduitfront;
    @FXML
    private Label marqueproduitfront;
    @FXML
    private Label prixproduitfront;
    @FXML
    private Label descriptionproduitfront;
    @FXML
    private Button more;
    @FXML
    private Label idppp;
        Produit p = new Produit();
                Produit pb = new Produit();

    @FXML
    private Button achat;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        idppp.setVisible(false);
        
        
        
    }    
    public void test( String nom ,int prix, int id  , String type , String image,String marque )
    {
        
         ProduitService Prod = new ProduitService();   
                  
            marqueproduitfront.setText(marque);
                nomproduitfront.setText(nom);
                prixproduitfront.setText(String.valueOf(prix));
                descriptionproduitfront.setText(type);
                idppp.setText(String.valueOf(id));
             //   File file1 = new File("C:/Users/MSi/Esports/src/images/"+image);
                        File file1 = new File("C:/Users/USER/OneDrive/Bureau/PiJava/src/Images/"+image);

                
        System.out.println(file1);
        Image img1=new Image(file1.toURI().toString());
        imageproduitfront.setImage(img1);
                
            
           }

    @FXML
    private void detail(ActionEvent event) {
                 ProduitService Prod = new ProduitService();   
                 p.setTest(Integer.parseInt(idppp.getText()));
                 try {
              Parent root = FXMLLoader.load(getClass().getResource("detail.fxml"));
          Stage stage = new Stage();
     
          stage.setTitle("commentaire");
                    stage.setScene(new Scene(root)); 
                    stage.show();
     
        } catch (IOException ex) {
               System.out.println("can't load comrnt window");
        }

        
        
        
    }

    @FXML
    private void cards(ActionEvent event) {
                 pb.setTest(Integer.parseInt(idppp.getText()));
                 try {
              Parent root = FXMLLoader.load(getClass().getResource("order.fxml"));
          Stage stage = new Stage();
     
          stage.setTitle("commentaire");
                    stage.setScene(new Scene(root)); 
                    stage.show();
     
        } catch (IOException ex) {
               System.out.println("can't load comrnt window");
        }

    }
    
}
