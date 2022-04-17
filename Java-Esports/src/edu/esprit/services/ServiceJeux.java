/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;

import edu.esprit.entities.CategorieC;
import edu.esprit.entities.Jeux;
import edu.esprit.utils.MyConnection;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author USER
 */
public class ServiceJeux implements IService <Jeux> {
    
    Connection connexion = MyConnection.getInstance().getCnx();
    
    @Override
    public void ajouter(Jeux j) throws SQLException {
         String req = "INSERT INTO `jeux` (`nom`,`image`,`dates`,`updated_at`,`categorie_id`) "
                + "VALUES (?,?,?,?,?) ";
        PreparedStatement ps = connexion.prepareStatement(req);
        ps.setString(1, j.getNom());
        ps.setString(2, j.getImage());
        ps.setString(3, j.getDates());
        ps.setString(4, j.getUpd());
        ps.setInt(5, j.getCategorie().getId());
        ps.executeUpdate();
    }
    
    @Override
    public void supprimer( int id) throws SQLException {
        try {
            PreparedStatement pre = connexion.prepareStatement("Delete from jeux where id=? ;");
            pre.setInt(1, id);
            if (pre.executeUpdate() != 0) {
                System.out.println("jeu Deleted");
            }
        } catch (SQLException ex) {
            ex.getMessage();
        }
    }
    
    @Override
    public List<Jeux> afficher() throws SQLException {
        List<Jeux> jeux = new ArrayList<>();
        String req = "select * from jeux";
        Statement stm = connexion.createStatement();
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
            Jeux j;
            ServiceCategoriec sc = new ServiceCategoriec();
            CategorieC c = sc.getById(rst.getInt("categorie_id"));
            j = new Jeux (
                    rst.getInt("id"),
                    rst.getString("nom"),
                    rst.getString("image"),
                    rst.getString("dates"),
                    rst.getString("updated_at"),
                    c
                    
                    
            );
            jeux.add(j);
        }
        return jeux;
    
    }
    
    @Override
    public void modifier(int id, Jeux p) throws SQLException {
        String req;

        req = "UPDATE jeux SET  `nom`=? WHERE id =?";

        try {
            PreparedStatement ps = connexion.prepareStatement(req);
            ps.setString(1, p.getNom());
           
            ps.setInt(2, id);
            ps.executeUpdate();

        } catch (SQLException ex) {
            ex.printStackTrace();
        }

    }
    
    
}
