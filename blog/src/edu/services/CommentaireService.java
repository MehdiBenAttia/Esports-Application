/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.services;

import edu.entities.Commentaire;
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
public class CommentaireService {
     Connection connexion;
    Statement stm; 
    public CommentaireService() {
        connexion = bdd.getInstance().getConnexion();
    }
    public void ajouter(Commentaire p) throws SQLException {
        String req;
         req = "INSERT INTO `Commentaire`(`nomuser`, `descriptionc`, `imagec`, `post_id`  ) "
                 + "VALUES (?,?,?,?)";

        try {
            PreparedStatement pst =connexion.prepareStatement(req);
            pst.setString(1,p.getNomuser());
            pst.setString(2,p.getDescriptionc());
            pst.setString(3,p.getImage_c());
            pst.setInt(4,p.getPost());


            
            

            
                      
            pst.executeUpdate();   
        } catch (SQLException ex) {
            ex.printStackTrace();
        }  
    }

    
         public void modifier(Commentaire p) throws SQLException {

         stm = connexion.createStatement();
         PreparedStatement ps = connexion.prepareStatement("UPDATE `Commentaire` SET  `nomuser`=? ,`descriptionc`=? ,`imagec`=? WHERE id =?");
          ps.setString(1,p.getNomuser());
            ps.setString(2,p.getDescriptionc());
            
            ps.setString(3,p.getImage_c());

            ps.setInt(4,p.getId());
            
         ps.executeUpdate();
  
    }

    
    public void supprimer(int id) throws SQLException {
       try {
            PreparedStatement pre = connexion.prepareStatement("Delete from commentaire where id=? ;");
            pre.setInt(1, id);
            if (pre.executeUpdate() != 0) {
                System.out.println("commentaire Deleted");
                
            }

        } catch (SQLException ex) {
            ex.getMessage();
        }
    }

    
    public List<Commentaire> afficher() throws SQLException {
        List<Commentaire> commentaires = new ArrayList<>();
        String req = "select * from Commentaire ";
        stm = connexion.createStatement();
        //ensemble de resultat
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
            Commentaire p;
            p = new Commentaire(
                    rst.getInt("id"),//or rst.getInt(1)
                    rst.getString("descriptionc"),
                    rst.getString("nomuser"),
                    rst.getDate("datec"),
                    rst.getString("imagec"),
                    rst.getInt("post_id")



                    
            );
            commentaires.add(p);
        }
        return commentaires; 
    }

    public List<Commentaire> getCombyPost(int id_post) {
     List<Commentaire> arr = new ArrayList<>();
         try {
        PreparedStatement pre = connexion.prepareStatement("SELECT c.id , c.nomuser , c.descriptionc , c.datec FROM commentaire c , post p WHERE c.id=p.id and c.id=? "); //ORDER BY P asc
         pre.setInt(1, id_post);
         ResultSet rs = pre.executeQuery();

             while(rs.next()){
                     int idC = rs.getInt("c.id");
                     
                     String nomuser=rs.getString("c.nomuser");
                     String description=rs.getString("c.descriptionc");
                     Date Datecom=rs.getDate("c.datec");
                     
                     Commentaire m=new Commentaire(idC,description,nomuser,Datecom);
                    arr.add(m);
            }
        } catch (Exception e) {
            System.out.println(e.getMessage());
        }
        return arr;

    }
    public boolean delete(Commentaire a){
        Connection cnx =null;
        Statement st = null;
        String requette = "DELETE FROM commentaire WHERE id="+a.getId()+"";
        try {
     cnx = bdd.getInstance().getConnexion();          
            st = cnx.createStatement();
            st.executeUpdate(requette);
            return true;
            
           
        } catch (SQLException ex) {
            ex.printStackTrace();
            return false;
        }finally {
    
    if (st != null) {
        try {
            st.close();
        } catch (SQLException e) { /* Ignored */}
    }
    }
        
    }
    
    public boolean update(Commentaire a){
        Connection cnx =null;
        Statement st = null;
        
        
        String requette = "UPDATE commentaire SET descriptionc='"+a.getDescriptionc()+"' WHERE id="+a.getId()+"";
                     
        
        
        try {
            cnx = bdd.getInstance().getConnexion();          
            st = cnx.createStatement();
            st.executeUpdate(requette);
            return true;
            
           
        } catch (SQLException ex) {
            ex.printStackTrace();
            return false;
        }finally {
    
    if (st != null) {
        try {
            st.close();
        } catch (SQLException e) { /* Ignored */}
    }
    }}
    public List<Commentaire> postCommentaires(int id_poste) throws SQLException {

        List<Commentaire> lu = new ArrayList<>();
        stm = connexion.createStatement();
        
        ResultSet rs = stm.executeQuery("SELECT commentaire.* from commentaire WHERE commentaire.post_id="+id_poste+";");
        while (rs.next()) {
            
          int id_com = rs.getInt("commentaire.id");
                       String nom_user = rs.getString("commentaire.nomuser");
           String description = rs.getString("commentaire.descriptionc");
           // System.out.println(description);
                     
             int id_post = rs.getInt("commentaire.post_id");
            
          

            Commentaire c = new Commentaire(id_com,description,nom_user,id_post);
              System.out.println(id_poste);
            lu.add(c);
        }
        return lu;
    }
     public List<Commentaire> postCommentaires1(int id_poste) throws SQLException {

        List<Commentaire> lu = new ArrayList<>();
        stm = connexion.createStatement();
        
        ResultSet rs = stm.executeQuery("SELECT commentaire.* from commentaire WHERE commentaire.post_id="+id_poste+";");
        while (rs.next()) {
            
          int id_com = rs.getInt("commentaire.id");
                       String nom_user = rs.getString("commentaire.nomuser");
           String description = rs.getString("commentaire.description");
           // System.out.println(description);
                     
             int id_post = rs.getInt("commentaire.post_id");
            
          

            Commentaire c = new Commentaire(id_com,description,nom_user,id_post);
              System.out.println(id_poste);
            lu.add(c);
        }
        return lu;
    }

    
}
