/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Pi.tests;

import Pi.entities.Adresse;
import Pi.entities.Commande;
import Pi.services.AdresseCRUD;
import Pi.services.CommandeCRUD;
import Pi.services.LivreurCRUD;
import java.time.LocalDateTime; // import the LocalDateTime class

/**
 *
 * @author Aziz
 */
public class MainClass {
    public static void main(String[] args) {
       // LivreurCRUD L=new LivreurCRUD();
        //System.out.println(L.afficherLivreur());
        //Adresse Ai=new Adresse("Amin","lam3_","mahrajen","nasser","chek",222);
        //AdresseCRUD A= new AdresseCRUD();
        Commande C=new Commande(314,"BLAAA",220,2,40);
        CommandeCRUD Cr=new CommandeCRUD();
        //Commande(int idcommande, String Produit, int Quantite,  float Total, int adresse_id)
        //Cr.ajouterCommande2(C,Ai);
        //System.out.println(Cr.afficherCommande());
        //Cr.updateCommande(C);
        Cr.deleteCommande(314);
        
    }
}
