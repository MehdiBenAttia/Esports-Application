/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.utils;

import edu.esprit.entities.CategorieC;
import edu.esprit.entities.Jeux;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.List;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javax.swing.JOptionPane;

/**
 *
 * @author USER
 */
public class MyConnection {

    public String url = "jdbc:mysql://localhost:3306/pi2022";
    public String login = "root";
    public String pwd = "";
    Connection cnx;
    Connection conn=null;
    public static MyConnection instance;

    private MyConnection() {
        try {
            cnx = DriverManager.getConnection(url, login, pwd);
            System.out.println("connexion etablie");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }

    public Connection getCnx() {
        return cnx;
    }

    public static MyConnection getInstance() {
        if (instance == null) {
            instance = new MyConnection();
        }
        return instance;
    }
    public static Connection ConnectDb(){
        try {
        Class.forName("com.mysql.jdbc.Driver");
        Connection conn= DriverManager.getConnection("jdbc:mysql://localhost:3306/pi2022","root","");
        return conn;
        }catch (Exception e){
        JOptionPane.showMessageDialog(null,e);
        }
        return null;
    }
    
    public static ObservableList<CategorieC> getCategories() throws SQLException, ClassNotFoundException{

        Connection conn = ConnectDb();
        ObservableList<CategorieC> list = FXCollections.observableArrayList();
        try {
            PreparedStatement ps =conn.prepareStatement("select * from categorie_c");
            ResultSet rs = ps.executeQuery();
            
            while(rs.next()){
                list.add (new CategorieC(rs.getInt("id"),rs.getString("nom")));
            }
        }catch (Exception e){
        }
        return list;
    }
    
    public static ObservableList<Jeux> getGames() throws SQLException, ClassNotFoundException{

        Connection conn = ConnectDb();
        ObservableList<Jeux> list = FXCollections.observableArrayList();
        try {
            PreparedStatement ps =conn.prepareStatement("select * from jeux");
            ResultSet rs = ps.executeQuery();
            
            while(rs.next()){
                list.add (new Jeux(rs.getInt("id"),rs.getString("nom"),rs.getString("image"),rs.getString("dates"),rs.getString("updated_at")));
            }
        }catch (Exception e){
        }
        return list;
    }

}
