package edu.utils;


import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author aziz
 */
public class bdd {
     final String url ="jdbc:mysql://localhost:3306/forum";
    final String login ="root";
    final String pwd="";
    private static bdd instance;
    Connection connexion;
    
    
    private bdd(){
        
        try {
            connexion =  DriverManager.getConnection(url, login, pwd);
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }
    
    public static bdd getInstance(){
    if (instance == null)
        instance = new bdd();
    return instance;
    }

    public Connection getConnexion() {
        return connexion;
    }
    
}
