/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import edu.esprit.entities.Competition;
import edu.esprit.services.ServiceCategoriec;
import edu.esprit.services.ServiceCompetition;
import java.io.IOException;
import java.net.URL;
import static java.nio.file.Files.list;
import java.sql.SQLException;
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
import javafx.scene.control.Button;
import javafx.scene.control.ScrollPane;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.Background;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.Pane;
import javafx.scene.layout.Region;
import jfxtras.scene.control.agenda.Agenda;

/**
 * FXML Controller class
 *
 * @author USER
 */
public class SampleController implements Initializable {

    @FXML
    private GridPane grid;
    @FXML
    private ScrollPane Scroll;
    @FXML
    private Button btnCal;
    @FXML
    private Pane pnComp;
    @FXML
    private Pane pnCal;
    @FXML
    private Agenda Calendar;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        pnComp.toFront();
        
        
        ServiceCompetition serC=new ServiceCompetition();
        try {
            ObservableList<Competition> list = serC.getCompets();
            for(int i=0; i<list.size();i++) {
            Calendar.appointments().add(new Agenda.AppointmentImplLocal()
           .withStartLocalDateTime(list.get(i).getDeb().toLocalDate().atTime(00, 00))
           .withEndLocalDateTime(list.get(i).getFin().toLocalDate().atTime(00, 00))
           .withDescription(list.get(i).getNom()));
            
        }
            
        } catch (SQLException ex) {
            Logger.getLogger(SampleController.class.getName()).log(Level.SEVERE, null, ex);
        }
        int column = 0;
        int row = 1;
        try {
            for (int i = 0; i < serC.afficher().size(); i++) {
                FXMLLoader fxmlLoader = new FXMLLoader();
                fxmlLoader.setLocation(getClass().getResource("Card.fxml"));
                AnchorPane anchorPane = fxmlLoader.load();

                CardController itemController = fxmlLoader.getController();
                itemController.setData(serC.afficher().get(i) );
                
                if (column == 2) {
                    column = 0;
                    row++;
                }

                grid.add(anchorPane, column++, row); //(child,column,row)
                //set grid width
                grid.setMinWidth(Region.USE_COMPUTED_SIZE);
                grid.setPrefWidth(Region.USE_COMPUTED_SIZE);
                grid.setMaxWidth(Region.USE_PREF_SIZE);

                //set grid height
                grid.setMinHeight(Region.USE_COMPUTED_SIZE);
                grid.setPrefHeight(Region.USE_COMPUTED_SIZE);
                grid.setMaxHeight(Region.USE_PREF_SIZE);

                GridPane.setMargin(anchorPane, new Insets(10));
            }
        } catch (IOException e) {
            e.printStackTrace();
        } catch (SQLException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }
    }    

    @FXML
    private void fnCal() {
        pnCal.toFront();
    }
    
    @FXML
    private void fnCompetition(ActionEvent event) {
        pnComp.toFront();
    }

//    private void fnCal(ActionEvent event) {
//        pnCal.toFront();
//    }
    
}
