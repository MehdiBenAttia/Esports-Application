/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import edu.esprit.entities.Commande;
import edu.esprit.entities.Livreur;
import edu.esprit.services.CommandeCRUD;
import edu.esprit.services.LivreurCRUD;
import java.net.URL;
import java.sql.SQLException;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.TextField;

/**
 * FXML Controller class
 *
 * @author Aziz
 */
public class ModifierCommandeController implements Initializable {

    @FXML
    private TextField ProduitC;
    @FXML
    private TextField QuantiteC;
    @FXML
    private TextField TotalC;
    @FXML
    private Button ModifierCommande;
    @FXML
    private ComboBox<String> LivreurId;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
       ObservableList<String> list = FXCollections.observableArrayList();
       LivreurCRUD cat = new LivreurCRUD();
        
            for(int i=0;i<cat.afficherLivreur().size();i++)
            {
                list.add(cat.afficherLivreur().get(i).getNom());
            }
            LivreurId.setItems(list);
        
       
    }    

    public TextField getProduitC() {
        return ProduitC;
    }

    public void setProduitC(String message) {
  this.ProduitC.setText(message);    }

    public TextField getQuantiteC() {
        return QuantiteC;
    }

    public void setQuantiteC(int message) {
  this.QuantiteC.setText(String.valueOf(message));    }

    public TextField getTotalC() {
        return TotalC;
    }

    public void setTotalC(float message) {
  this.TotalC.setText(String.valueOf(message));    }

    public Button getModifierCommande() {
        return ModifierCommande;
    }

    public void setModifierCommande(Button ModifierCommande) {
        this.ModifierCommande = ModifierCommande;
    }
    
    public void setItems (int id)
    {
       
            ModifItems(id);
    }
    public void ModifItems (int id)
    {
                 
          
        ModifierCommande.setOnAction(e -> {
            
            try {
                String prod = getProduitC().getText();
                float total = Float.parseFloat(getTotalC().getText());
                int quantite = Integer.parseInt(getQuantiteC().getText());
                
                String catego=LivreurId.getValue();
                LivreurCRUD Lc= new LivreurCRUD();
                Livreur Li=Lc.getByString(catego);
                
               int livID=Li.getId();
                Commande C = new Commande(id,livID,prod,quantite,total);
                CommandeCRUD LC= new CommandeCRUD();
                LC.updateCommande(C);
                ((Node)(e.getSource())).getScene().getWindow().hide();
                Alert alert = new Alert(Alert.AlertType.INFORMATION);
                alert.setTitle("Success");
                alert.setContentText("Commande modifié!");
                alert.show();
                CommandeCRUD tt = new CommandeCRUD();
            } catch (SQLException ex) {
              System.err.println(ex.getMessage());
            }
                
           
        }
        );
                 }
}
