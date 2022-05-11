/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.Interface;


import edu.esprit.entities.Equipe;
import java.sql.SQLException;
import java.util.List;

/**
 *
 * @author 21655

 */
public interface Interface_equipe {
    
    public  void add_equipe(Equipe e) throws SQLException;
        public List<Equipe> afficherEquipes();
     public void modifierEquipe(int id_e,String nom, int nb, String jeu); 
     public void supprimerEquipe(int ID);
    
}
