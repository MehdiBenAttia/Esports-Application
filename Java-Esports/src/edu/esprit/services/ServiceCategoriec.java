/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;

import edu.esprit.entities.CategorieC;
import edu.esprit.utils.MyConnection;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;



public class ServiceCategoriec implements IService <CategorieC>{
    
    Connection connexion = MyConnection.getInstance().getCnx();
    
    @Override
    public void ajouter(CategorieC c) throws SQLException {
         String req = "INSERT INTO `categorie_c` (`nom`) "
                + "VALUES (?) ";
        PreparedStatement ps = connexion.prepareStatement(req);
        ps.setString(1, c.getNom());
        ps.executeUpdate();
    }
    
    @Override
    public void supprimer( int id) throws SQLException {
        try {
            PreparedStatement pre = connexion.prepareStatement("Delete from categorie_c where id=? ;");
            pre.setInt(1, id);
            if (pre.executeUpdate() != 0) {
                System.out.println("categorie Deleted");
            }
        } catch (SQLException ex) {
            ex.getMessage();
        }
    }
    
    @Override
    public List<CategorieC> afficher() throws SQLException {
        List<CategorieC> categories = new ArrayList<>();
        String req = "select * from categorie_c";
        Statement stm = connexion.createStatement();
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
            CategorieC c;
            c = new CategorieC (
                    rst.getInt("id"),//or rst.getInt(1)
                    rst.getString("nom")
            );
            categories.add(c);
        }
        return categories;
    
    }
    @Override
    public void modifier(int id, CategorieC p) throws SQLException {
        String req;
        req = "UPDATE categorie_c SET  `nom`=? WHERE id =?";
        try {
            PreparedStatement ps = connexion.prepareStatement(req);
            ps.setString(1, p.getNom());
            ps.setInt(2, id);
            ps.executeUpdate();
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
    }    

    public CategorieC getById(int aInt) throws SQLException {
    CategorieC categorie = new CategorieC();
        String req = "select * from categorie_c where id="+aInt;
        Statement stm = connexion.createStatement();
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
          
            categorie = new CategorieC (
                    rst.getInt("id"),//or rst.getInt(1)
                    rst.getString("nom")
            );
           
        }
        return categorie;
      
    }
}
