/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;

import java.sql.SQLException;
import java.util.List;

/**
 *
 * @author USER
 */
public interface CategorieI <CatC> {
    public void ajouter(CatC c) throws SQLException;
    
   


     public void modifier(int id, CatC c) throws SQLException;
     public void supprimer( int id) throws SQLException;
     public List<CatC> afficher() throws SQLException;
}
