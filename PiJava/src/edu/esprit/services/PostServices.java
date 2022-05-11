/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;

import edu.esprit.entities.Post;
import edu.esprit.utils.MyConnection;
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
 * @author USER
 */

public class PostServices  {
 Connection connexion;
    Statement stm; 
    public PostServices() {
        connexion=MyConnection.getInstance().getCnx(); 
    }
    public void ajouter(Post p) throws SQLException {
        String req;
         req = "INSERT INTO `Post`(`nom_user`, `sujet`, `description`, `communaute`,  `nbr_jaime`, `image` ,`badlevel` ) "
                 + "VALUES (?,?,?,?,?,?,?)";

        try {
            PreparedStatement pst =connexion.prepareStatement(req);
            pst.setString(1,p.getNom_user());
            pst.setString(2,p.getSujet());
            pst.setString(3,p.getDescription());
            pst.setString(4,p.getCommunaute());
            
         
            pst.setInt(5,0);
            pst.setString(6,p.getImage());
              pst.setInt(7,p.getBadlevel());


            
            

            
                      
            pst.executeUpdate();   
        } catch (SQLException ex) {
            ex.printStackTrace();
        }  
    }

    
         public void modifier(Post p) throws SQLException {

         stm = connexion.createStatement();
         PreparedStatement ps = connexion.prepareStatement("UPDATE `post` SET  `sujet`=? ,`description`=?,`nbr_jaime`=?,`image`=? ,`nom_user`=? ,`communaute`=? ,`liked`=?  WHERE id =?");
          ps.setString(5,p.getNom_user());
            ps.setString(1,p.getSujet());
            ps.setString(2,p.getDescription());
            ps.setString(6,p.getCommunaute());
            ps.setInt(3,p.getNbr_jaime());
            ps.setInt(7,p.getLiked());

            ps.setString(4,p.getImage());
            ps.setInt(8,p.getIdPost());
         ps.executeUpdate();
  
    }

   
    public void supprimer(int id) throws SQLException {
       try {
            PreparedStatement pre = connexion.prepareStatement("Delete from post where id=? ");
            pre.setInt(1, id);
            if (pre.executeUpdate() != 0) {
                System.out.println("post Deleted");
                
            }

        } catch (SQLException ex) {
            ex.getMessage();
        }
    }

   
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
                    rst.getInt("nbr_jaime"),
                    rst.getInt("liked"),
                    rst.getInt("badlevel")
                    


                    
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
     public int CountComments(int u) {
        int count = 0;

        PreparedStatement loginPs;
        try {

            String loginQry = "select * from Commentaire where post_id=?";

            loginPs = connexion.prepareStatement(loginQry);
            loginPs.setInt(1, u);

            ResultSet rs = loginPs.executeQuery();
            while (rs.next()) {
                count++;
            }
        } catch (SQLException ex) {
            ex.getMessage();
        }
        return count;
    }
             public Post findbyid(int idcode) {
        Post u = null;
        try {

            PreparedStatement pre = connexion.prepareStatement("Select * from post  WHERE id=? ");
            pre.setInt(1, idcode);
            ResultSet rs = pre.executeQuery();
           
               while (rs.next()) {
               // int id = rs.getInt("id");
                String nom_user = rs.getString("nom_user");
                String sujet = rs.getString("sujet");
                String image = rs.getString("image");
                String description = rs.getString("description");
                String communaute = rs.getString("communaute");
                Date date_p = rs.getDate("date_p");

                int nbr_jaime = rs.getInt("nbr_jaime");
                int liked = rs.getInt("liked");

                
                u = new Post( idcode, sujet,description,communaute,nom_user,date_p,image,nbr_jaime,liked);
            }
        } catch (SQLException ex) {
            ex.getMessage();
        }

        return u;
    }

    
    public void modifier(int id, Post c) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
}
