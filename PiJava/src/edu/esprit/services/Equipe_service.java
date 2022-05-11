/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;

import edu.esprit.entities.Equipe;
import edu.esprit.entities.User;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import edu.esprit.utils.MyConnection;

/**
 *
 * @author 21655
 */
public class Equipe_service implements edu.esprit.Interface.Interface_equipe {
    Connection cnx = MyConnection.getInstance().getCnx();

    public Equipe_service() {
    }

    @Override
    public void add_equipe(Equipe e) throws SQLException {
            String req="INSERT INTO `equipe`( `nom_equipe`, `nbjoueurs`,`jeu`) VALUES ('"+e.getNom_equipe()+"',"+e.getNb()+",'"+e.getJeu()+"')";
   
        try {
            Statement st=cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("ajout fait succes");
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
     
    }

    @Override
    public ObservableList<Equipe> afficherEquipes() {
         ObservableList<Equipe> Equipes =  FXCollections.observableArrayList();
          
        String req = "SELECT * FROM equipe";
       
       
     
        try {
         Statement st = cnx.createStatement();
         ResultSet rs=st.executeQuery(req);
          while(rs.next()){
              
            Equipes.add(new Equipe(rs.getInt("id"),rs.getString("nom_equipe"),rs.getInt("nbjoueurs"), rs.getString("jeu")));
       
             
           
        }
        } catch (SQLException ex) {
            System.out.println("erreur");
            ex.printStackTrace();
        }
       
        System.out.println("succes");
        return Equipes;
    }

    @Override
    public void modifierEquipe(int id_e, String nom, int nb, String jeu) {
         String req="UPDATE `equipe` SET `nom_equipe`='"+nom+"',`nbjoueurs`="+nb+",`jeu`='"+jeu+"' WHERE `id`="+id_e+" ";
   
        try {
            Statement st=cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("modif fait succes");
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
    }

    @Override
    public void supprimerEquipe(int ID) {
        String req="DELETE FROM equipe WHERE id="+ID;
   
        try {
            Statement st=cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("suppression fait avec succes");
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
    }
}

   
