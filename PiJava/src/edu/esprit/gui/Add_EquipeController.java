/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import edu.esprit.entities.Equipe;
import edu.esprit.services.Equipe_service;
import java.net.URL;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javax.swing.JOptionPane;
import edu.esprit.utils.MyConnection;

/**
 * FXML Controller class
 *
 * @author 21655
 */
public class Add_EquipeController implements Initializable {

    @FXML
    private TextField nom_equipe;
    @FXML
    private TextField equipe_nb;
    @FXML
    private TextField equipe_jeu;
    @FXML
    private Button submit_equipe;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
   
        // TODO
    }    

    @FXML
    private void equipe_add(ActionEvent event) throws SQLException {
            String nom=nom_equipe.getText();
        int nb = Integer.parseInt(equipe_nb.getText());
        String jeu = equipe_jeu.getText();
        Equipe_service s=new Equipe_service();
        String reqeq = "SELECT * FROM equipe WHERE `nom_equipe`='" +nom + "'";
        String x="";
        Equipe e=new Equipe(nom, nb, jeu);
       Connection cnx = MyConnection.getInstance().getCnx();

            Statement st = cnx.createStatement();

            ResultSet rs = st.executeQuery(reqeq);
            while (rs.next()) {

                x = rs.getString("nom_equipe");
            }
            
            if (x == "") { s.add_equipe(e);}
             else JOptionPane.showMessageDialog(null, "Equipe Déja existante");
            
    
}
}
