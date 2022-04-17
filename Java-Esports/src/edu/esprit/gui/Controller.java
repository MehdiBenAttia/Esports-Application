package edu.esprit.gui;

import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.control.Button;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.HBox;
import javafx.scene.layout.Pane;
import javafx.scene.layout.VBox;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;

public class Controller implements Initializable {

    @FXML
    private VBox pnItems = null;
    @FXML
    private Button btnSettings;

    @FXML
    private Button btnSignout;


    @FXML
    private Pane pnlOverview;

    @FXML
    private VBox MenuPrincipale;
    @FXML
    private Button btnCompet;
    @FXML
    private Button btnProduits;
    @FXML
    private Button btnCommandes;
    @FXML
    private Button btnReclamations;
    @FXML
    private Button btnBlog;
    @FXML
    private VBox MenuCommande;
    @FXML
    private Button btnRetour;
    @FXML
    private Button btnCommandesFille;
    @FXML
    private Button btnFournisseurs;
    @FXML
    private VBox MenuReclamations;
    @FXML
    private Button btnRetour1;
    @FXML
    private Button btnReclamationsFille;
    @FXML
    private Button btnCategoriesRec;
    @FXML
    private Button btnReponses;
    @FXML
    private VBox MenuCompetition;
    @FXML
    private Button btnRetour111;
    @FXML
    private Button btnCompetFille;
    @FXML
    private Button btnJeux;
    @FXML
    private Button btnCategoriesCompet;
    @FXML
    private VBox MenuProduit;
    @FXML
    private Button btnRetour1111;
    @FXML
    private Button btnProduitsFille;
    @FXML
    private Button btnCategoriesProduits;
    @FXML
    private VBox MenuBlog;
    @FXML
    private Button btnRetour11111;
    @FXML
    private Button btnPostsFille;
    @FXML
    private Button btnCommentaires;
    @FXML
    private Button btnEquipe;
    @FXML
    private Pane pnCommandes;
    @FXML
    private Pane pnFournisseur;
    @FXML
    private Pane pnReclamations;
    @FXML
    private Pane pnReclamationsCategorie;
    @FXML
    private Pane pnReponse;
    @FXML
    private Pane pnCompetetion;
    @FXML
    private Pane pnCompetetionCategorie;
    @FXML
    private Pane pnJeux;
    @FXML
    private Pane pnProduits;
    @FXML
    private Pane pnProduitsCategories;
    @FXML
    private Pane pnPosts;
    @FXML
    private Pane pnCommentaires;
    @FXML
    private Pane pnSettings;
    @FXML
    private Pane pnEquipe;

    @Override
    public void initialize(URL location, ResourceBundle resources) {
        Node[] nodes = new Node[10];
        MenuPrincipale.toFront();
        pnlOverview.toFront();
        for (int i = 0; i < nodes.length; i++) {
            try {

                final int j = i;
                nodes[i] = FXMLLoader.load(getClass().getResource("Item.fxml"));

                //give the items some effect

                nodes[i].setOnMouseEntered(event -> {
                    nodes[j].setStyle("-fx-background-color : #0A0E3F");
                });
                nodes[i].setOnMouseExited(event -> {
                    nodes[j].setStyle("-fx-background-color : #02030A");
                });
                pnItems.getChildren().add(nodes[i]);
            } catch (IOException e) {
                e.printStackTrace();
            }
        }

    }



    @FXML
    private void fnCompet(ActionEvent event) {
        MenuCompetition.toFront();
    }

    @FXML
    private void fnProduits(ActionEvent event) {
        MenuProduit.toFront();
    }

    @FXML
    private void fnCommandes(ActionEvent event) {
        MenuCommande.toFront();
    }

    @FXML
    private void fnReclamations(ActionEvent event) {
        MenuReclamations.toFront();
    }

    @FXML
    private void fnBlog(ActionEvent event) {
        MenuBlog.toFront();
    }

    @FXML
    private void fnSettings(ActionEvent event) {
        pnSettings.toFront();
    }

    @FXML
    private void fnSignout(ActionEvent event) {
    }

    @FXML
    private void fnRetour(ActionEvent event) {
        MenuPrincipale.toFront();
        pnlOverview.toFront();
    }

    @FXML
    private void fnCommandesFille(ActionEvent event) {
        pnCommandes.toFront();
    }

    @FXML
    private void fnFournisseurs(ActionEvent event) {
        pnFournisseur.toFront();
    }

    @FXML
    private void fnReclamationsFille(ActionEvent event) {
        pnReclamations.toFront();
    }

    @FXML
    private void fnCategoriesRec(ActionEvent event) {
        pnReclamationsCategorie.toFront();
    }

    @FXML
    private void fnReponses(ActionEvent event) {
        pnReponse.toFront();
    }

    @FXML
    private void fnCompetFille(ActionEvent event) {
        pnCompetetion.toFront();
    }

    @FXML
    private void fnJeux(ActionEvent event) {
        pnJeux.toFront();
    }

    @FXML
    private void fnCategoriesCompet(ActionEvent event) {
        pnCompetetionCategorie.toFront();
    }

    @FXML
    private void fnProduitFille(ActionEvent event) {
        pnProduits.toFront();
    }

    @FXML
    private void fnCategoriesProduits(ActionEvent event) {
        pnProduitsCategories.toFront();
    }

    @FXML
    private void fnPostsFille(ActionEvent event) {
        pnPosts.toFront();
    }

    @FXML
    private void fnCommentaires(ActionEvent event) {
        pnCommentaires.toFront();
    }

    @FXML
    private void fnEquipe(ActionEvent event) {
        pnEquipe.toFront();
    }
}
