/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Pi.tools;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

/**
 *
 * @author Aziz
 */
public class MyConnection {
    public String url = "jdbc:mysql://localhost:3306/smf_3a31";

    public String user = "root";

    public String pwd = "";
    public static MyConnection instance;
    Connection cnx;

    public Connection getCnx() {
        return cnx;
    }
     public MyConnection(){
    
        try {
            cnx= DriverManager.getConnection(url, user, pwd);
            System.out.println("connexion reussie");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }
    public static MyConnection getInstance(){
        if(instance==null)
        {
            instance = new MyConnection();
        }
        return instance;
    }
}
