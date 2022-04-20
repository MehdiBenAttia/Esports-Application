/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.services;

import edu.entities.Post;
import edu.utils.bdd;
import java.sql.Connection;
import java.sql.Date;
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
public class PostServices implements Iservice<Post> {
 Connection connexion;
    Statement stm; 
    public PostServices() {
        connexion = bdd.getInstance().getConnexion();
    }
    @Override
    public void ajouter(Post p) throws SQLException {
        String req;
         req = "INSERT INTO `Post`(`nom_user`, `sujet`, `description`, `communaute`,  `nbr_jaime`, `image`  ) "
                 + "VALUES (?,?,?,?,?,?)";

        try {
            PreparedStatement pst =connexion.prepareStatement(req);
            pst.setString(1,p.getNom_user());
            pst.setString(2,p.getSujet());
            pst.setString(3,p.getDescription());
            pst.setString(4,p.getCommunaute());
            
         
            pst.setInt(5,0);
            pst.setString(6,p.getImage());

            
            

            
                      
            pst.executeUpdate();   
        } catch (SQLException ex) {
            ex.printStackTrace();
        }  
    }

    
 @Override
         public void modifier(Post p) throws SQLException {

         stm = connexion.createStatement();
         PreparedStatement ps = connexion.prepareStatement("UPDATE `post` SET  `nom_user`=? ,`sujet`=?,`description`=?,`communaute`=? ,`image`=? WHERE id =?");
          ps.setString(1,p.getNom_user());
            ps.setString(2,p.getSujet());
            ps.setString(3,p.getDescription());
            ps.setString(4,p.getCommunaute());
            
            ps.setString(5,p.getImage());
            ps.setInt(6,p.getIdPost());
         ps.executeUpdate();
  
    }

    @Override
    public void supprimer(int id) throws SQLException {
       try {
            PreparedStatement pre = connexion.prepareStatement("Delete from post where id=? ;");
            pre.setInt(1, id);
            if (pre.executeUpdate() != 0) {
                System.out.println("post Deleted");
                
            }

        } catch (SQLException ex) {
            ex.getMessage();
        }
    }

    @Override
    public List<Post> afficher() throws SQLException {
        List<Post> equipes = new ArrayList<>();
        String req = "select * from post";
        stm = connexion.createStatement();
        //ensemble de resultat
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
            Post p;
            p = new Post(
                    rst.getInt("id"),//or rst.getInt(1)
                    rst.getString("nom_user"),
                    rst.getString("sujet"),
                    rst.getString("description"),
                    rst.getString("communaute"),
                    rst.getDate("date_p"),
                    rst.getString("image"),
                    rst.getInt("nbr_jaime")


                    
            );
            equipes.add(p);
        }
        return equipes; 
    }
     public boolean UpdateF(int Id ,String sujet , String description, String communaute, String nom_user, String image) {
            try {
            PreparedStatement pre = connexion.prepareStatement("UPDATE `post` SET  `nom_user`=? ,`sujet`=?,`description`=?,`communaute`=? ,`image`=? WHERE id =?");
            pre.setString(1, nom_user);
            pre.setString(2, sujet);
            pre.setString(3, description);   
                        pre.setString(4, communaute);
                        pre.setString(5, image);

                        pre.setInt(6, Id);   



            if (pre.executeUpdate() != 0) {
                System.out.println(" post updated");
                 } else {
                System.out.println("non");
            }
                return true;
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return false;
    }
}
