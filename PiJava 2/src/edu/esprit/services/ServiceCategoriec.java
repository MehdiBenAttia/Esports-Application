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
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.scene.control.Alert;
import javafx.scene.control.ButtonType;
import javafx.scene.layout.Region;
import javax.swing.JOptionPane;



public class ServiceCategoriec implements IService <CategorieC>{
    
    Connection connexion = MyConnection.getInstance().getCnx();
    
    @Override
    public void ajouter(CategorieC c) throws SQLException {
        String req = "INSERT INTO `categorie_c` (`nom`) "
                + "VALUES (?) ";
    try {
        PreparedStatement ps = connexion.prepareStatement(req);
        ps.setString(1, c.getNom());
        ps.executeUpdate();
        
        Alert alert = new Alert(Alert.AlertType.INFORMATION, "Catégorie ajoutée avec succés", ButtonType.OK);
        alert.getDialogPane().setMinHeight(Region.USE_PREF_SIZE);
        alert.show();
        
        
    }catch (Exception e){
        JOptionPane.showMessageDialog(null, e);
    }
    }
    
    @Override
    public void supprimer( int id) throws SQLException {
        try {
            PreparedStatement prepar = connexion.prepareStatement("Delete from participation where participation.competition_id in (select competition.id from competition where competition.jeux_id in (select jeux.id from jeux where jeux.categorie_id=?));");
            prepar.setInt(1, id);
            if (prepar.executeUpdate() != 0) {
                System.out.println("participation Deleted");
            }
            PreparedStatement prep = connexion.prepareStatement("Delete from competition where competition.jeux_id in (select jeux.id from jeux where jeux.categorie_id=?);");
            prep.setInt(1, id);
            if (prep.executeUpdate() != 0) {
                System.out.println("competition Deleted");
            }
            PreparedStatement prepa = connexion.prepareStatement("Delete from jeux where categorie_id=?;");
            prepa.setInt(1, id);
            if (prepa.executeUpdate() != 0) {
                System.out.println("Jeux Deleted");
            }
            PreparedStatement pre = connexion.prepareStatement("Delete from categorie_c where id=?;");
            pre.setInt(1, id);
            if (pre.executeUpdate() != 0) {
                System.out.println("categorie Deleted");
            }
        } catch (SQLException ex) {
            ex.getMessage();
        }
    }
    
    @Override
    public ObservableList<CategorieC> afficher() throws SQLException {
        ObservableList<CategorieC> list = FXCollections.observableArrayList();
        String req = "select * from categorie_c";
        Statement stm = connexion.createStatement();
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
            CategorieC c;
            c = new CategorieC (
                    rst.getInt("id"),//or rst.getInt(1)
                    rst.getString("nom")
            );
            list.add(c);
        }
        return list;
    
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
    
    public CategorieC getByString(String aInt) throws SQLException {
    CategorieC categorie = new CategorieC();
        String req = "select * from categorie_c where nom='"+aInt+"'";
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
    
    public List<String> getCat() throws SQLException {
        List<String> list = new ArrayList();
        String req = "select nom from categorie_c";
        Statement stm = connexion.createStatement();
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {                             
            list.add(rst.getString("nom"));
        }
        
        System.out.println(list);
        return list;
    
    }
    
   public ObservableList<String> Stat() throws SQLException {
        ObservableList<String> list = FXCollections.observableArrayList();
        String req = "SELECT b.nom, COUNT(*) as c from jeux as j inner join categorie_c as b on j.categorie_id = b.id group by b.nom";
        Statement stm = connexion.createStatement();
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
            list.add(rst.getString("nom"));
            list.add(Integer.toString(rst.getInt("c")));
        }
        System.out.println(list);
        return list;
    
    }
   
   public boolean verif_cred(CategorieC u) throws SQLException {
        Connection cnx = MyConnection.getInstance().getCnx();
        String email = "";

        try {

            String req1 = "SELECT * FROM categorie_c where nom='" + u.getNom()+ "'";

            Statement st2 = cnx.createStatement();
            Statement st1 = cnx.createStatement();
            ResultSet rs1 = st1.executeQuery(req1);

            while ((rs1.next())) {
                email = rs1.getString("nom");

            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        if (email != "") {
            System.out.println("nom exists ");
            return false;

        } else {
            return true;
        }
    }
    
}
