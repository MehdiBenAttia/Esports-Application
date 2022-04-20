/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.services;

import edu.entities.Commentaire;
import edu.entities.Reply;

import edu.utils.bdd;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author aziz
 */
public class ReplyService {
    Connection connexion;
    Statement stm; 
    public ReplyService() {
        connexion = bdd.getInstance().getConnexion();
    }
    public void ajouter(Reply p) throws SQLException {
        String req;
         req = "INSERT INTO `Reply`(`nom_user`, `descriptionr`, `Commentaire_id`  ) "
                 + "VALUES (?,?,?)";

        try {
            PreparedStatement pst =connexion.prepareStatement(req);
            pst.setString(1,p.getNomuser());
            pst.setString(2,p.getDescriptionr());
            pst.setInt(3,p.getCommentaire_id());


            
            

            
                      
            pst.executeUpdate();   
        } catch (SQLException ex) {
            ex.printStackTrace();
        }  
    }

    
         public void modifier(Reply p) throws SQLException {

         stm = connexion.createStatement();
         PreparedStatement ps = connexion.prepareStatement("UPDATE `Reply` SET  `nom_user`=? ,`descriptionr`=?  WHERE id =?");
          ps.setString(1,p.getNomuser());
            ps.setString(2,p.getDescriptionr());
            

            ps.setInt(3,p.getId());
         ps.executeUpdate();
  
    }

    
    public void supprimer(int id) throws SQLException {
       try {
            PreparedStatement pre = connexion.prepareStatement("Delete from Reply where id=? ;");
            pre.setInt(1, id);
            if (pre.executeUpdate() != 0) {
                System.out.println("Reply Deleted");
                
            }

        } catch (SQLException ex) {
            ex.getMessage();
        }
    }

    
    public List<Reply> afficher() throws SQLException {
        List<Reply> Reply = new ArrayList<>();
        String req = "select * from Reply ";
        stm = connexion.createStatement();
        //ensemble de resultat
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
            Reply p;
            p = new Reply(
                    rst.getInt("id"),//or rst.getInt(1)
                    rst.getString("descriptionr"),
                    rst.getString("nom_user"),
                    rst.getDate("date_r"),
                    rst.getInt("Commentaire_id")



                    
            );
            Reply.add(p);
        }
        return Reply; 
    }
}
