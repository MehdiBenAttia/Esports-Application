/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;

import java.sql.SQLException;
import java.util.List;

public interface IService <T>{
    
    public void ajouter(T c) throws SQLException;
    public void modifier(int id,T c) throws SQLException;
    public void supprimer( int id) throws SQLException;
    public List<T> afficher() throws SQLException;
    
}
