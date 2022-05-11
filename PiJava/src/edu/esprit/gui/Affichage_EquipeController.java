/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import edu.esprit.entities.Equipe;
import edu.esprit.entities.User;
import edu.esprit.services.Equipe_service;
import edu.esprit.services.User_service;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.control.cell.TextFieldTableCell;
import javafx.scene.input.MouseEvent;
import edu.esprit.utils.Session;

/**
 * FXML Controller class
 *
 * @author 21655
 */
public class Affichage_EquipeController implements Initializable {

    @FXML
    private TableColumn<Equipe, Integer> equipe_id;
    @FXML
    private TableColumn<Equipe, String> nom_equipe;
    @FXML
    private TableColumn<Equipe, Integer> equipe_nb;
    @FXML
    private TableColumn<Equipe, String> equipe_jeu;
    @FXML
    private TableView<Equipe> equipe_table;
    @FXML
    private Button supp_boutton_equipe;
    @FXML
    private Button edit_boutton_equipe;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        equipe_id.setCellValueFactory(new PropertyValueFactory<Equipe, Integer>("id_e"));
        equipe_jeu.setCellValueFactory(new PropertyValueFactory<Equipe, String>("nom_equipe"));
        equipe_nb.setCellValueFactory(new PropertyValueFactory<Equipe, Integer>("nb"));
        nom_equipe.setCellValueFactory(new PropertyValueFactory<Equipe, String>("jeu"));

        nom_equipe.setCellFactory(TextFieldTableCell.forTableColumn());
        nom_equipe.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setNom_equipe(e.getNewValue());
        });
        equipe_jeu.setCellFactory(TextFieldTableCell.forTableColumn());
        equipe_jeu.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setJeu(e.getNewValue());

        });
        Equipe_service ss = new Equipe_service();

        equipe_table.setItems(ss.afficherEquipes());
        equipe_table.setEditable(true);

        // TODOcellData -> cellData.getValue().valueProperty()
        edit_boutton_equipe.setOnMouseClicked(new EventHandler<MouseEvent>() {
            @Override
            public void handle(MouseEvent event) {
                Equipe equipe = equipe_table.getSelectionModel().getSelectedItem();
                System.out.println(equipe.getId_e());
                ss.modifierEquipe(equipe.getId_e(), equipe.getNom_equipe(), equipe.getNb(), equipe.getJeu());

                equipe_table.setItems(ss.afficherEquipes());

                //FXMLLoader loader = new FXMLLoader();
//            loader.setLocation(getClass().getResource("/tableView/addStudent.fxml"));
            }
        });
        supp_boutton_equipe.setOnMouseClicked((MouseEvent event) -> {

            Equipe e = equipe_table.getSelectionModel().getSelectedItem();

            ss.supprimerEquipe(e.getId_e());

            equipe_table.setItems(ss.afficherEquipes());

        });

    }

}
