/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Pi.services;

import Pi.entities.Adresse;
import Pi.entities.Commande;
import Pi.entities.Livreur;
import Pi.tools.MyConnection;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author Aziz
 */
public class CommandeCRUD {
    Connection cnx4;
        public CommandeCRUD(){
       cnx4 = MyConnection.getInstance().getCnx();
        }
         public void ajouterCommande2(Commande C,Adresse A){
        
       try {
           
            String requete2="INSERT INTO Commande(Produit,Quantite,Date,Total,adresse_id)"
                    + "VALUES (?,?,?,?,?) ";
            java.sql.Date sqlDate = new java.sql.Date(new java.util.Date().getTime());

            PreparedStatement pst= cnx4.prepareStatement(requete2);
              pst.setString(1, C.getProduit());
             pst.setInt(2, C.getQuantite());
             pst.setDate(3, sqlDate);
              pst.setFloat(4, C.getTotal());
                pst.setInt(5, A.getId());
               pst.executeUpdate();


            System.out.println("Commande ajouter avec succes");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
   }
          public List<Commande> afficherCommande(){
         List<Commande> myList=new ArrayList<>();

        try {
            String requete3="SELECT * FROM commande ";
            Statement st =cnx4.createStatement();
            ResultSet rs = st.executeQuery(requete3);
            while(rs.next()){
                Commande L=new Commande();
                L.setIdcommande(rs.getInt(1));
                L.setProduit(rs.getString("Produit"));
                L.setQuantite(rs.getInt("Quantite"));
                L.setDate(rs.getDate("Date"));
                L.setIdlivreur_id(rs.getInt("idlivreur_id"));
                L.setAdresse_id(rs.getInt("adresse_id"));
                myList.add(L);
            }

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return myList;
   }
    public void updateCommande(Commande L){
       
        try {
            String rq ="UPDATE Commande SET  Produit=?, Quantite=?, Date=?, Total=?   WHERE idcommande=?";
             PreparedStatement pst= cnx4.prepareStatement(rq);
             java.sql.Date sqlDate = new java.sql.Date(new java.util.Date().getTime());
              pst.setString(1, L.getProduit());
              pst.setInt(2, L.getQuantite());
              pst.setDate(3, sqlDate);
              pst.setFloat(4, L.getTotal());
                 pst.setInt(5, L.getIdcommande());

               pst.executeUpdate();
               System.out.println("Commande modifié avec succes");

            
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
   }
    public void deleteCommande(int id){
        try {
            String rq = "DELETE FROM Commande  WHERE idcommande=?";           
            PreparedStatement pst = cnx4.prepareStatement(rq);
            pst.setInt(1,id);
              pst.executeUpdate();
              System.out.println("Commande modifié avec succes");
        } catch (SQLException ex) {
              System.err.println(ex.getMessage());
        }
   }
}
