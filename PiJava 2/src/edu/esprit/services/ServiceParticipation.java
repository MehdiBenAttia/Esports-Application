/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;

import edu.esprit.entities.CategorieC;
import edu.esprit.entities.Competition;
import edu.esprit.entities.Jeux;
import edu.esprit.entities.Participation;
import edu.esprit.entities.User;
import edu.esprit.utils.MyConnection;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;

/**
 *
 * @author USER
 */
public class ServiceParticipation implements IService<Participation> {

    Connection connexion = MyConnection.getInstance().getCnx();
    
    @Override
    public void ajouter(Participation entity) throws SQLException {
        
        String sql="INSERT INTO `participation`(user_id,competition_id) VALUES ("+entity.getUser().getId()+","+entity.getCompet().getId()+")";
        try {
            Statement ste = connexion.createStatement();
            ste.executeUpdate(sql);
            System.out.println("participation Ajoutée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
    }
    
    public int add(Participation entity) throws SQLException {
        
        String sql="INSERT INTO `participation`(user_id,competition_id) VALUES ("+entity.getUser().getId()+","+entity.getCompet().getId()+")";
        try {
            Statement ste = connexion.createStatement();
            ste.executeUpdate(sql);
            System.out.println("participation Ajoutée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        int nbr=0;
        String query="select count(*) as nbr from participation where competition_id="+entity.getCompet().getId();
        try {
            PreparedStatement ste = connexion.prepareStatement(query);
            ResultSet rs= ste.executeQuery();
            while(rs.next()){
                nbr=rs.getInt("nbr");
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
        return nbr;
    }

    @Override
    public void modifier(int id, Participation c) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void supprimer(int id) throws SQLException {
        PreparedStatement pre = connexion.prepareStatement("Delete from participation where id=? ;");
            pre.setInt(1, id);
            if (pre.executeUpdate() != 0) {
                System.out.println("participation Deleted");
            }
    }

    @Override
    public List<Participation> afficher() throws SQLException {
        List<Participation> participation = new ArrayList<>();
        String query="select * from participation";
        try {
            PreparedStatement ste = connexion.prepareStatement(query);
            ResultSet rs= ste.executeQuery();
            while(rs.next()){
                Participation a = new Participation();
                a.setId(rs.getInt("id"));
                ServiceCompetition serv= new ServiceCompetition() ;
                Competition comp= serv.getById(rs.getInt("competition_id"));
                User u= new User();
                u.setId(rs.getInt("user_id"));
                a.setUser(u);
                participation.add(a);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
        return participation;
    }
    
}
