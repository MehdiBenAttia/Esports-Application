/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.entities;

/**
 *
 * @author 21655
 */
public class Admin extends User 
{

    public Admin(String nom, String prenom, String email, String mdp, int tel, String username) {
        super(nom, prenom, email, mdp, tel, username);
        
    }
    
}
