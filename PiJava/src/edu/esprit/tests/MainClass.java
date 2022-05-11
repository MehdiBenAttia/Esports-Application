/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.tests;

import edu.esprit.entities.CategorieC;
import edu.esprit.entities.Jeux;
import edu.esprit.utils.MyConnection;
import java.sql.SQLException;
import edu.esprit.services.ServiceCategoriec;
import edu.esprit.services.ServiceJeux;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author USER
 */
public class MainClass {
    public static void main(String[] args) throws SQLException { 
//        CategorieC c,c1;
//        Jeux j;
//        
//        c = new CategorieC(4,"Nouha");
//        c1 = new CategorieC("okkk");
//        j = new Jeux(50,"souissi","souissi","souissi","2022-03-10 17:01:44.0",c);
//        
//        ServiceCategoriec sp = new ServiceCategoriec();
//        ServiceJeux sj= new ServiceJeux();
//        
//        try {
//            sj.ajouter(j);
//            System.out.println("ajout avec succes");
//        } catch (SQLException ex) {
//            System.out.println(ex.getMessage());
//        }
//        
//        try {
//            System.out.println(sj.afficher());
//        } catch (SQLException ex) {
//            System.out.println(ex.getMessage());
//        }
        
//        try {
//            sp.supprimer(13);
//        } catch (SQLException ex) {
//           Logger.getLogger(MainClass.class.getName()).log(Level.SEVERE, null, ex);
//        }
        
//        try {
//            System.out.println(sp.afficher());
//        } catch (SQLException ex) {
//            System.out.println(ex.getMessage());
//        }
//        
//        sp.modifier(16,c1);
//        try {
//            System.out.println(sp.afficher());
//        } catch (SQLException ex) {
//            System.out.println(ex.getMessage());
//        }

            ServiceJeux serJ=new ServiceJeux();
            for(int i=0;i<serJ.afficher().size();i++){
                System.out.println(serJ.afficher().get(i).toString());
            }
    }
    }

