/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Pi.services;

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
public class LivreurCRUD {
    Connection cnx2;
        public LivreurCRUD(){
       cnx2 = MyConnection.getInstance().getCnx();}
        public void ajouterLivreur(){
        try {
            String requete ="INSERT INTO Livreur (Nom,Prenom,Tel,Email)"
                    + "VALUES ('Aziz','Bouzaien','22362125','aziz.bouzaiene@gmail.com') ";
            Statement st= cnx2.createStatement();
            st.executeUpdate(requete);
            System.out.println("Livreur ajouter avec succes");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }
         public void ajouterLivreur2(Livreur L){
        
       try {
           
            String requete2="INSERT INTO Livreur(Nom,Prenom,Tel,Email)"
                    + "VALUES (?,?,?,?)";
            PreparedStatement pst= cnx2.prepareStatement(requete2);
             pst.setString(1, L.getNom());
              pst.setString(2, L.getPrenom());
              pst.setInt(3, L.getTel());
              pst.setString(4, L.getEmail());
               pst.executeUpdate();


            System.out.println("Livreur ajouter avec succes");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
   }
   public List<Livreur> afficherLivreur(){
         List<Livreur> myList=new ArrayList<>();

        try {
            String requete3="SELECT * FROM livreur ";
            Statement st =cnx2.createStatement();
            ResultSet rs = st.executeQuery(requete3);
            while(rs.next()){
                Livreur L=new Livreur();
                L.setId(rs.getInt(1));
                L.setNom(rs.getString("Nom"));
                L.setPrenom(rs.getString("Prenom"));
                L.setTel(rs.getInt("Tel"));
                L.setEmail(rs.getString("Email"));
                myList.add(L);
            }

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return myList;
   }
   public void updateLivreur(Livreur L){
       
        try {
            String rq ="UPDATE Livreur SET  Nom=?, Prenom=?, Tel=?, Email=?  WHERE id=?";
             PreparedStatement pst= cnx2.prepareStatement(rq);
              pst.setString(1, L.getNom());
              pst.setString(2, L.getPrenom());
              pst.setInt(3, L.getTel());
              pst.setString(4, L.getEmail());
                 pst.setInt(5, L.getId());

               pst.executeUpdate();
               System.out.println("Livreur modifié avec succes");

            
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
   }
   public void deleteLivreur(int id){
        try {
            String rq = "DELETE FROM Livreur  WHERE id=?";           
            PreparedStatement pst = cnx2.prepareStatement(rq);
            pst.setInt(1,id);
              pst.executeUpdate();
              System.out.println("Livreur modifié avec succes");
        } catch (SQLException ex) {
              System.err.println(ex.getMessage());
        }
   }
}
