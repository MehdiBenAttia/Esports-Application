/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;


import edu.esprit.entities.CategorieC;
import edu.esprit.entities.Jeux;
import edu.esprit.entities.User;
import edu.esprit.utils.MyConnection;
import java.io.IOException;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author 21655
 */
public class UserService {
  
   Connection connexion = MyConnection.getInstance().getCnx();

    public UserService() {
    }

    public User getByIdemail(int id) throws SQLException {
         User j = new User();
        String req = "select * from user where id="+id+"";
        Statement stm = connexion.createStatement();
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
           
            j.setEmail(rst.getString("email"));
            
                    
                  
           
        }
        return j;
    
    }
}
