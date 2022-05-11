/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;

import edu.esprit.entities.Categorie;
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
public class CategorieService implements CategorieI <Categorie>{
    Connection connexion;
    Statement stm; 
    
    public CategorieService(){
        connexion=MyConnection.getInstance().getCnx(); 
            //Connection connexion = MyConnection.getInstance().getCnx();

    }
    
    @Override
    public void ajouter(Categorie c) throws SQLException {
         String req = "INSERT INTO categorie (nom_categ,nom_fournisseur,mail_fournisseur) "
                + "VALUES (?,?,?) ";
        PreparedStatement ps = connexion.prepareStatement(req);
        ps.setString(1, c.getNom_categ());
                ps.setString(2, c.getNom_fournisseur());
        ps.setString(3, c.getMail_fournisseur());

        ps.executeUpdate();
             //   JOptionPane.showMessageDialog(null, "yeaah");

    }
    @Override
    public void supprimer( int iduser) throws SQLException {
        
        
         
            
            

         
        
        try {
            
             PreparedStatement prrev = connexion.prepareStatement("Delete from review  where produit_id in (SELECT produit.id from produit where produit.categorie_id=?) ;");
                                    prrev.setInt(1, iduser);
                                      if (prrev.executeUpdate() != 0) {
                System.out.println("produit join Deleted");
            }
            
            
            
             PreparedStatement pra = connexion.prepareStatement("Delete from Produit where categorie_id=? ;");
                                    pra.setInt(1, iduser);
                                      if (pra.executeUpdate() != 0) {
                System.out.println("produit join Deleted");
            }

            
            
            
            PreparedStatement pre = connexion.prepareStatement("Delete from Categorie where id=? ;");
            pre.setInt(1, iduser);
            

            if (pre.executeUpdate() != 0) {
                System.out.println("categorie Deleted");
            }
            
                       

        } catch (SQLException ex) {
            ex.getMessage();
        }
    }
    
    @Override
    public ObservableList<Categorie> afficher() throws SQLException {              
        ObservableList<Categorie> categories = FXCollections.observableArrayList();

       // List<Categorie> categories = new ArrayList<>();
        String req = "SELECT categorie.id,categorie.nom_categ,categorie.nom_fournisseur,categorie.mail_fournisseur,\n" +
" COUNT(produit.categorie_id) as x\n" +
" FROM categorie LEFT JOIN produit ON (categorie.id=produit.categorie_id)\n" +
" GROUP BY ( categorie.id)";
        stm = connexion.createStatement();
        //ensemble de resultat
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
            Categorie c;
            c = new Categorie (
                    rst.getInt("id"),//or rst.getInt(1)
                    rst.getString("nom_categ"),
                                        rst.getString("nom_fournisseur"),
                    rst.getString("mail_fournisseur"),
                    rst.getInt("x")

            );
            categories.add(c);
        }
        return categories;
    
    }
    
  @Override
    public void modifier(int id, Categorie p) throws SQLException {
        //request 
        String req;
        req = "UPDATE categorie SET  `nom_categ`=? , `nom_fournisseur`=? , `mail_fournisseur`=?  WHERE id =?";

       // req = "UPDATE categorie_c SET  `nom`=? WHERE id =?";

        try {
            PreparedStatement ps = connexion.prepareStatement(req);
            ps.setString(1, p.getNom_categ());
                        ps.setString(2, p.getNom_fournisseur());
                                                ps.setString(3, p.getMail_fournisseur());


           
            ps.setInt(4, id);
            ps.executeUpdate();

        } catch (SQLException ex) {
            ex.printStackTrace();
        }

    }
    public Categorie getById(int aInt) throws SQLException {
    Categorie categorie = new Categorie();
        String req = "select * from categorie where id="+aInt;
        Statement stm = connexion.createStatement();
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
          
            categorie = new Categorie (
                    rst.getInt("id"),//or rst.getInt(1)
                    rst.getString("nom_categ"),
                    rst.getString("nom_fournisseur"),
                    rst.getString("mail_fournisseur")
            );
           
        }
        return categorie;
      
    }
     public Categorie getByString(String aaa) throws SQLException {
    Categorie categorie = new Categorie();
        String req = "select * from Categorie where nom_categ='"+aaa + "'";
        Statement stm = connexion.createStatement();
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
          
            categorie = new Categorie (
                    rst.getInt("id"),//or rst.getInt(1)
                    rst.getString("nom_categ"),
                    rst.getString("nom_fournisseur"),
                    rst.getString("mail_fournisseur")
            );
           System.out.print(categorie);
        }
        return categorie;
      
    }
     
     
     
     
     public List<String> getCat() throws SQLException {
        List<String> list = new ArrayList();
        String req = "select nom_categ from categorie";
        Statement stm = connexion.createStatement();
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {                             
            list.add(rst.getString("nom_categ"));
        }
        
        System.out.println(list);
        return list;
    
    }
     
}

