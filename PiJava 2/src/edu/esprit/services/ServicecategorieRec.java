/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;

import edu.esprit.entities.categorieRec;
import edu.esprit.utils.MyConnection;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;

/**
 *
 * @author USER
 */
public class ServicecategorieRec implements IService<categorieRec> {
      Connection connexion = MyConnection.getInstance().getCnx();

    @Override
    public void ajouter(categorieRec c) throws SQLException {
        String req = "INSERT INTO `typerec` (`catrec`,`descrip`,`level`) "
                + "VALUES (?,?,?) ";
        PreparedStatement ps = connexion.prepareStatement(req);
        ps.setString(1, c.getCatrec());

        ps.setString(2, c.getDescrip());
        ps.setString(3, c.getLevel());

        ps.executeUpdate();
    }

    @Override
    public void supprimer(int id) throws SQLException {
        try {
            PreparedStatement pre = connexion.prepareStatement("Delete from typerec where id=? ;");
            pre.setInt(1, id);
            if (pre.executeUpdate() != 0) {
                System.out.println("categorie Deleted");
            }
        } catch (SQLException ex) {
            ex.getMessage();
        }
    }

    @Override
    public ObservableList<categorieRec> afficher() throws SQLException {
        ObservableList<categorieRec> categories = FXCollections.observableArrayList();
        String req = "select typerec.id , typerec.catrec,typerec.descrip,typerec.level,typerec.date as e from typerec";
        Statement stm = connexion.createStatement();
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
            categorieRec c;
            c = new categorieRec(
                    rst.getInt("id"),//or rst.getInt(1)
                    rst.getString("catrec"),
                    rst.getDate("e"),
                    rst.getString("descrip"),
                    rst.getString("level")
            );
            categories.add(c);
        }
        return categories;

    }

    public ObservableList<categorieRec> findByLevel(String level) throws SQLException {
        ObservableList<categorieRec> categories = FXCollections.observableArrayList();
        String req = "select typerec.id , typerec.catrec,typerec.descrip,typerec.level,typerec.date as e from typerec where typerec.level=" + '"' + level.toString() + '"';
        System.out.print(req);
        Statement stm = connexion.createStatement();
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
            categorieRec c;
            c = new categorieRec(
                    rst.getInt("id"),//or rst.getInt(1)
                    rst.getString("catrec"),
                    rst.getDate("e"),
                    rst.getString("descrip"),
                    rst.getString("level")
            );
            categories.add(c);
        }
        return categories;
    }

    @Override
    public void modifier(int id, categorieRec p) throws SQLException {
        String req;
        req = "UPDATE typerec SET  `catrec`=? , `descrip`=? , `level`=?  WHERE id =?";
        try {
            PreparedStatement ps = connexion.prepareStatement(req);
            ps.setString(1, p.getCatrec());
            ps.setString(2, p.getDescrip());
            ps.setString(3, p.getLevel());

            ps.setInt(4, id);
            ps.executeUpdate();
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
    }

    public categorieRec getById(int aInt) throws SQLException {
        categorieRec categorie = new categorieRec();
        String req = "select * from typerec where id=" + aInt;
        Statement stm = connexion.createStatement();
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {

            categorie = new categorieRec(
                    rst.getInt("id"),//or rst.getInt(1)
                    rst.getString("catrec"),
                    rst.getDate("date"),
                    rst.getString("descrip"),
                    rst.getString("level")
            );

        }
        return categorie;

    }

    public categorieRec getByString(String aaa) throws SQLException {
        categorieRec categorie = new categorieRec();
        String req = "select * from typerec where catrec='" + aaa + "'";
        Statement stm = connexion.createStatement();
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {

            categorie = new categorieRec(
                    rst.getInt("id"),//or rst.getInt(1)
                    rst.getString("catrec"),
                    rst.getDate("date"),
                    rst.getString("descrip"),
                    rst.getString("level")
            );
            System.out.print(categorie);
        }
        return categorie;

    }
}
