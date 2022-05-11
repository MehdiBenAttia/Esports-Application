/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;

import edu.esprit.entities.review;
import edu.esprit.utils.MyConnection;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;

/**
 *
 * @author USER
 */
public class reviewService  implements CategorieI<review> {
     Connection connexion;
    Statement stm;
    public reviewService() {
        connexion=MyConnection.getInstance().getCnx(); 
    }
    @Override
    public void ajouter(review c) throws SQLException {
        String req = "INSERT INTO review (produit_id,note_produit,avis,username) "
                + "VALUES (?,?,?,?) ";
       
        PreparedStatement ps = connexion.prepareStatement(req);
        ps.setInt(1, c.getProduit_id());
        ps.setDouble(2, c.getNote_produit());
        ps.setString(3, c.getAvis());
                ps.setString(4, c.getUsername());

       
      

        ps.executeUpdate();
    }
    
       @Override
    public void supprimer(int iduser) throws SQLException {
        try {
            PreparedStatement pre = connexion.prepareStatement("Delete from Produit where id=? ");
            pre.setInt(1, iduser);
            if (pre.executeUpdate() != 0) {
                System.out.println("produit Deleted");
            }
        } catch (SQLException ex) {
            ex.getMessage();
        }
    }
    
     public ObservableList<review> afficher() throws SQLException
     {
 ObservableList<review> categories = FXCollections.observableArrayList();

       // List<Categorie> categories = new ArrayList<>();
        String req = "select * from review";
        stm = connexion.createStatement();
        //ensemble de resultat
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
            review c;
            c = new review (
                    rst.getInt("id"),//or rst.getInt(1)
                    rst.getInt("produit_id"),
                                        rst.getInt("note"),
                    rst.getString("avis"),
                                        rst.getString("username")


            );
            categories.add(c);
        }
        return categories;
     }
     
       @Override
    public void modifier(int id, review p) throws SQLException {
        //request 
     
        

    }
    
     public review getById(int aInt) throws SQLException {
    review rev = new review();

        String req = "select * from review where id_produit="+aInt;
        Statement stm = connexion.createStatement();
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
          
            rev = new review (
                     rst.getInt("id"),//or rst.getInt(1)
                   rst.getInt("produit_id"),
                                        rst.getInt("note_produit"),
                    rst.getString("avis"),
                                                            rst.getString("username")

                      
                                        
            );
           
        }
        return rev;
      
    }
     
     public ObservableList<review> getreviews(int aInt) throws SQLException
     {
 ObservableList<review> categories = FXCollections.observableArrayList();

       // List<Categorie> categories = new ArrayList<>();
        String req = "select * from review where produit_id="+aInt;
        stm = connexion.createStatement();
        //ensemble de resultat
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
            review c;
            c = new review (
                    rst.getInt("id"),//or rst.getInt(1)
                    rst.getInt("produit_id"),
                                        rst.getInt("note_produit"),
                    rst.getString("avis"),
                                                            rst.getString("username")


            );
            categories.add(c);
        }
        return categories;
     }

}

