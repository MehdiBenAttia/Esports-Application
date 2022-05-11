/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.utils;

import edu.esprit.entities.User;
import java.util.Properties;
import javax.mail.Authenticator;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




/**
 *
 * @author 21655
 */
public class Session {
    static Session instance;
    static User loggedInUser;

    public static Session getInstance(Properties properties, Authenticator auth) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
    public Session()
    {
        
    }
    
    public static Session getInstance()
    {
        if(instance == null)
        {
            instance = new Session();
            return instance;
        }
        else
        {
            return instance;
        }
    }
    
    public static User getLoggedInUser()
    {
        return loggedInUser;
    }
    
    public static void setLoggedInUser( User LoggedInUser)
    {
        Session.loggedInUser = LoggedInUser;
    }
  
    
}
