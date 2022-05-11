/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.Interface;

import java.sql.SQLException;
import java.util.List;
import edu.esprit.entities.User;
import javafx.collections.ObservableList;

/**
 *
 * @author 21655
 * @param <T>
 */
public interface Interface_user  {
    
    public  void add(User u,int e) throws SQLException;
    public List<User> afficherUtilisateurs();
    public void modifierUtilisateurss(int id,String nom, String prenom, String email, String mdp, int tel, String username);
    public void supprimerUtilisateurs(int ID);
    public User Login(String username, String mdp);
    public void MotDePasseOublie(String email) throws SQLException, Exception;
    public Boolean ResetPassword(int code, String pwd);
     public void bloquage (User u);
     public ObservableList<User> recherche(String email);

}

   
    
    
    
    

