/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import edu.esprit.entities.User;
import edu.esprit.services.Equipe_service;
import edu.esprit.services.User_service;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.beans.property.SimpleStringProperty;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableColumn.CellDataFeatures;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.control.cell.TextFieldTableCell;
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;
import javafx.util.Callback;
import javax.net.ssl.SSLPeerUnverifiedException;
import edu.esprit.utils.MyConnection;
import edu.esprit.utils.Session;

/**
 * FXML Controller class
 *
 * @author 21655
 */
public class Affichage_backController implements Initializable {

    @FXML
    private TableView<User> tableau;
    public static TableView<User> tableau_2;
    @FXML
    private TableColumn<User, Integer> user_id;
    @FXML
    private TableColumn<User, String> user_nom;
    @FXML
    private TableColumn<User, String> user_prenom;
    @FXML
    private TableColumn<User, String> user_username;
    @FXML
    private TableColumn<User, String> user_email;
    @FXML
    private TableColumn<User, Integer> user_telephone;
    @FXML
    private TableColumn<User, String> ide;
    @FXML
    private Button modifier;
    @FXML
    private Button supprimer;
    @FXML
    private Button logout;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        try {
            User_service ss = new User_service();
            try {
                ss.show();
            } catch (SQLException ex) {
                Logger.getLogger(Affichage_backController.class.getName()).log(Level.SEVERE, null, ex);
            }
            user_nom.setCellValueFactory(new PropertyValueFactory<User, String>("nom"));
            user_prenom.setCellValueFactory(new PropertyValueFactory<User, String>("prenom"));
            user_email.setCellValueFactory(new PropertyValueFactory<User, String>("email"));
            
            user_username.setCellValueFactory(new PropertyValueFactory<User, String>("username"));
            user_id.setCellValueFactory(new PropertyValueFactory<User, Integer>("id"));
            
            ide.setCellValueFactory(new PropertyValueFactory<User, String>("x"));
            
            user_telephone.setCellValueFactory(new PropertyValueFactory<User, Integer>("tel"));
            
            user_nom.setCellFactory(TextFieldTableCell.forTableColumn());
            user_nom.setOnEditCommit(e -> {
                e.getTableView().getItems().get(e.getTablePosition().getRow()).setNom(e.getNewValue());});
            
            user_prenom.setCellFactory(TextFieldTableCell.forTableColumn());
            user_prenom.setOnEditCommit(e -> {
                e.getTableView().getItems().get(e.getTablePosition().getRow()).setPrenom(e.getNewValue());
            });
            
            user_email.setCellFactory(TextFieldTableCell.forTableColumn());
            user_email.setOnEditCommit(e -> {
                e.getTableView().getItems().get(e.getTablePosition().getRow()).setEmail(e.getNewValue());
            });
            
            user_username.setCellFactory(TextFieldTableCell.forTableColumn());
            user_username.setOnEditCommit(e -> {
                e.getTableView().getItems().get(e.getTablePosition().getRow()).setUsername(e.getNewValue());
            });
            
            tableau.setEditable(true);
            
            
            try {
                for (int i = 0; i < ss.show().size(); i++) {
                    String reqeq = "SELECT * FROM equipe WHERE `id`=" + ss.show().get(i).getId_e() + " ";
                    Connection cnx = MyConnection.getInstance().getCnx();
                    
                    Statement st = cnx.createStatement();
                    
                    ResultSet rs = st.executeQuery(reqeq);
                    while (rs.next()) {
                        
                        String x = rs.getString("nom_equipe");
                        
                    }
                }
                
            } catch (SQLException ex) {
                Logger.getLogger(Affichage_backController.class.getName()).log(Level.SEVERE, null, ex);
            }
            
            //  user_telephone.setCellFactory(TextFieldTableCell.forTableColumn());
            //user_telephone.setOnEditCommit(e->{
            // e.getTableView().getItems().get(e.getTablePosition().getRow()).setTel(e.getNewValue());});
            User_service s = new User_service();
            
            User a=s.show().stream().filter(x->Session.getLoggedInUser().getEmail().equals(x.getEmail())).findAny().orElse(null);
            ObservableList<User> l = FXCollections.observableArrayList();
            l.add(a);
            user_id.setText(l.toString());
            
            tableau.setItems(l);
          
            
            // TODO
            modifier.setOnMouseClicked(new EventHandler<MouseEvent>() {
                
                @Override
                public void handle(MouseEvent event) {
                    User user = tableau.getSelectionModel().getSelectedItem();
                    System.out.println(user.getId());
                    
                    s.modifierUtilisateurss(user.getId(), user.getNom(), user.getPrenom(), user.getEmail(), user.getMdp(), 12345678, user.getUsername());
                    tableau.setItems(l);
                    
                    //FXMLLoader loader = new FXMLLoader();
//            loader.setLocation(getClass().getResource("/tableView/addStudent.fxml"));
                }
            });
            supprimer.setOnMouseClicked((MouseEvent event) -> {
                
                
                try {
                    
                    User user = tableau.getSelectionModel().getSelectedItem();
                    
                   
                    try {
                        
                        tableau.setItems(s.show());
                        
                    } catch (SQLException ex) {
                        Logger.getLogger(Affichage_backController.class.getName()).log(Level.SEVERE, null, ex);
                    }
                    FXMLLoader loader = new FXMLLoader(getClass().getResource("Affichage_Equipe.fxml"));
                    Parent root = loader.load();
                    
                    root = FXMLLoader.load(getClass().getResource("Affichage_Equipe.fxml"));
                    Scene scene = new Scene(root);
                    
                    Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
                    window.setScene(scene);
                    window.show();
                    
                } catch (IOException ex) {
                    Logger.getLogger(Affichage_backController.class.getName()).log(Level.SEVERE, null, ex);
                }
                
            });
            
        } catch (SQLException ex) {
            Logger.getLogger(Affichage_backController.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

    @FXML
    private void logout(ActionEvent event) throws IOException {
        Session.setLoggedInUser(null);
        FXMLLoader loader = new FXMLLoader(getClass().getResource("Sign Up.fxml"));
                    Parent root = loader.load();
                    
                    root = FXMLLoader.load(getClass().getResource("Sign Up.fxml"));
                    Scene scene = new Scene(root);
                    
                    Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
                    window.setScene(scene);
                    window.show();
        
        
    }
}
