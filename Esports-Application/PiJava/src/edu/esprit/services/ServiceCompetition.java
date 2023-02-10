/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;

import edu.esprit.entities.Competition;
import edu.esprit.entities.Jeux;
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
import javafx.collections.ObservableListBase;

/**
 *
 * @author USER
 */
public class ServiceCompetition implements IService<Competition> {
    
    Connection connexion = MyConnection.getInstance().getCnx();

    @Override
    public void ajouter(Competition entity) throws SQLException {
        String sql="INSERT INTO `competition`(nom,nbparticipants,image,updated_at,datedeb,datefin) VALUES ('"+entity.getNom()+"',"+entity.getNbr()+",'"
                +entity.getImage()+"','"+entity.getUpd()+"','"+entity.getDeb()+"','"+entity.getFin()+"')";
        try {
            Statement ste = connexion.createStatement();
            ste.executeUpdate(sql);
            System.out.println("Compétition Ajoutée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @Override
    public void modifier(int id, Competition a) throws SQLException {
           
        String sql="update competition set nom=?,nbparticipants=?,image=?,updated_at=?,datedeb=?,datefin=? where id=?;";
        try {
            PreparedStatement ste= connexion.prepareStatement(sql);
           ste.setString(1,a.getNom());
           ste.setInt(2, a.getNbr());
           ste.setString(3, a.getImage());
           ste.setDate(4, a.getUpd());
           ste.setDate(5, a.getDeb());
           ste.setDate(6, a.getFin());
            ste.executeUpdate();
            System.out.println("Competition modifié");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @Override
    public void supprimer(int id) throws SQLException {
        String request = "DELETE FROM Competition  where id"+id+"";
        try {
            PreparedStatement pst = connexion.prepareStatement(request);
            pst.executeUpdate();
            System.out.println("Competition deleted");
        } catch (SQLException ex) {
            System.err.println(ex);
        }
        
    }

    @Override
    public List<Competition> afficher() throws SQLException {
        List<Competition> competitions = new ArrayList<>();
        int nbr=0;
        String query="select * from competition";
        try {
            PreparedStatement ste = connexion.prepareStatement(query);
            ResultSet rs= ste.executeQuery();
            while(rs.next()){
                Competition a = new Competition();
                a.setId(rs.getInt("id"));
                a.setIsParticipated(false);
        String query1="select * from participation where (user_id="+95+" and competition_id="+rs.getInt("id")+")";
        try {
            PreparedStatement ste1 = connexion.prepareStatement(query1);
            ResultSet rs1= ste1.executeQuery();
            while(rs1.next()){
                a.setIsParticipated(true);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
        
        String query2="select count(*) as nbr from participation where competition_id="+a.getId()+"";
        try {
            PreparedStatement ste2 = connexion.prepareStatement(query2);
            ResultSet rs2= ste2.executeQuery();
            while(rs2.next()){
                nbr=rs2.getInt("nbr");
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
                a.setNbrPart(nbr);
                a.setNom(rs.getString("nom"));
                a.setImage(rs.getString("image"));
                a.setUpd(rs.getDate("updated_at"));
                a.setNbr(rs.getInt("nbparticipants"));
                a.setDeb(rs.getDate("datedeb"));
                a.setFin(rs.getDate("datefin"));
                ServiceJeux serJ=new ServiceJeux();
                Jeux j=serJ.getById(rs.getInt("jeux_id"));
                a.setJeu(j);
                competitions.add(a);
                
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
        return competitions;
    }
    
    public Competition getById(int id) throws SQLException {
        
        Competition a = new Competition();
        String query="select * from competition where id="+id+"";
        try {
            PreparedStatement ste = connexion.prepareStatement(query);
            ResultSet rs= ste.executeQuery();
            while(rs.next()){
                
                a.setId(rs.getInt("id"));
                a.setNom(rs.getString("nom"));
                a.setImage(rs.getString("image"));
                a.setUpd(rs.getDate("updated_at"));
                a.setDeb(rs.getDate("datedeb"));
                a.setFin(rs.getDate("datefin"));               
                
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
        return a;
    }
    
    public Competition getAf(int id) throws SQLException {
        Competition a = new Competition();
        String query="select * from competition where id="+id+"";
        try {
            PreparedStatement ste = connexion.prepareStatement(query);
            ResultSet rs= ste.executeQuery();
            while(rs.next()){
                
                a.setId(rs.getInt("id"));
                a.setIsParticipated(false);
        String query1="select * from participation where (user_id="+95+" and competition_id="+rs.getInt("id")+")";
        try {
            PreparedStatement ste1 = connexion.prepareStatement(query1);
            ResultSet rs1= ste1.executeQuery();
            while(rs1.next()){
                a.setIsParticipated(true);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
                
                a.setNom(rs.getString("nom"));
                a.setImage(rs.getString("image"));
                a.setUpd(rs.getDate("updated_at"));
                a.setNbr(rs.getInt("nbparticipants"));
                a.setDeb(rs.getDate("datedeb"));
                a.setFin(rs.getDate("datefin"));
                ServiceJeux serJ=new ServiceJeux();
                Jeux j=serJ.getById(rs.getInt("jeux_id"));
                a.setJeu(j);
               
                
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
        return a;
    }
    
    
    public ObservableList<Competition> getCompets() throws SQLException {
        ObservableList<Competition> competitions = FXCollections.observableArrayList();
        int nbr=0;
        String query="select * from competition";
        try {
            PreparedStatement ste = connexion.prepareStatement(query);
            ResultSet rs= ste.executeQuery();
            while(rs.next()){
                Competition a = new Competition();
                a.setId(rs.getInt("id"));
                a.setIsParticipated(false);
        String query1="select * from participation where (user_id="+95+" and competition_id="+rs.getInt("id")+")";
        try {
            PreparedStatement ste1 = connexion.prepareStatement(query1);
            ResultSet rs1= ste1.executeQuery();
            while(rs1.next()){
                a.setIsParticipated(true);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
        
        String query2="select count(*) as nbr from participation where competition_id="+a.getId()+"";
        try {
            PreparedStatement ste2 = connexion.prepareStatement(query2);
            ResultSet rs2= ste2.executeQuery();
            while(rs2.next()){
                nbr=rs2.getInt("nbr");
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
                a.setNbrPart(nbr);
                a.setNom(rs.getString("nom"));
                a.setImage(rs.getString("image"));
                a.setUpd(rs.getDate("updated_at"));
                a.setNbr(rs.getInt("nbparticipants"));
                a.setDeb(rs.getDate("datedeb"));
                a.setFin(rs.getDate("datefin"));
                ServiceJeux serJ=new ServiceJeux();
                Jeux j=serJ.getById(rs.getInt("jeux_id"));
                a.setJeu(j);
                competitions.add(a);
                
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
        return competitions;
    }
    
}
