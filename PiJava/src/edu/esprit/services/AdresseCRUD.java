/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;
import edu.esprit.entities.Adresse;
import edu.esprit.entities.Livreur;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import edu.esprit.utils.MyConnection;


/**
 *
 * @author USER
 */
public class AdresseCRUD {
    Connection cnx3;
                 private Statement ste;

        public AdresseCRUD(){
       cnx3 = MyConnection.getInstance().getCnx();
        }
      
        public void ajouterAdresse(){
        try {
            String requete ="INSERT INTO Adresse (Nom,Prenom,Adress,City,Email,Tel)"
                    + "VALUES ('Aziz','Bouzaien','hay lwahat','boumhal','aziz.bouzaiene@gmail.com','22362125') ";
            Statement st= cnx3.createStatement();
            st.executeUpdate(requete);
            System.out.println("Adresse ajouter avec succes");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
    }
        public void ajouterAdresse2(Adresse A){
        
       try {
           
            String requete2="INSERT INTO Adresse(Nom,Prenom,Adress,City,Email,Tel)"
                    + "VALUES (?,?,?,?,?,?)";
            PreparedStatement pst= cnx3.prepareStatement(requete2);
             pst.setString(1, A.getNom());
              pst.setString(2, A.getPrenom());
             pst.setString(3, A.getAdress());
             pst.setString(4, A.getCity());
              pst.setString(5, A.getEmail());
               pst.setInt(6, A.getTel());
               pst.executeUpdate();


            System.out.println("Adresse ajouter avec succes");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
   }
   public List<Adresse> afficherAdresse(){
         List<Adresse> myList=new ArrayList<>();

        try {
            String requete3="SELECT * FROM Adresse ";
            Statement st =cnx3.createStatement();
            ResultSet rs = st.executeQuery(requete3);
            while(rs.next()){
                Adresse L=new Adresse();
                L.setId(rs.getInt(1));
                L.setNom(rs.getString("Nom"));
                L.setPrenom(rs.getString("Prenom"));
                L.setAdress(rs.getString("Adress"));
                L.setCity(rs.getString("City"));
                L.setEmail(rs.getString("Email"));
                L.setTel(rs.getInt("Tel"));
               
                myList.add(L);
                
            }

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return myList;
   }
   public void updateAdresse(Adresse L){
       
        try {
            String rq ="UPDATE Adresse SET  Nom=?, Prenom=?,Adress=?,City=?, Email=?, Tel=?  WHERE id=?";
             PreparedStatement pst= cnx3.prepareStatement(rq);
              pst.setString(1, L.getNom());
              pst.setString(2, L.getPrenom());
              pst.setString(3, L.getAdress());
               pst.setString(4, L.getCity());             
              pst.setString(5, L.getEmail());
              pst.setInt(6, L.getTel());
                 pst.setInt(7, L.getId());

               pst.executeUpdate();
               System.out.println("Adresse modifié avec succes");

            
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
   }
   public void deleteAdresse(int id){
        try {
            String rq = "DELETE FROM Adresse  WHERE id=?";           
            PreparedStatement pst = cnx3.prepareStatement(rq);
            pst.setInt(1,id);
              pst.executeUpdate();
              System.out.println("Adresse supprimer avec succes");
        } catch (SQLException ex) {
              System.err.println(ex.getMessage());
        }
   }
    public Adresse showDetail(int id)  {

         try {
             ste = cnx3.createStatement();
             ResultSet rs = ste.executeQuery("select * from Adresse where id=" + id + ";");
             String name = null;
             String prename = null;
             int tel = 0;
             String email = null;
             String city = null;
             String adresse = null;
             
             int rate = 0;
             if (rs.next()) {
                 name = rs.getString("Nom");
                 prename = rs.getString("Prenom");
                 tel = rs.getInt("Tel");
                 email = rs.getString("Email");
                 adresse = rs.getString("Adress");
                 city = rs.getString("City");
                 
             }
             Adresse p = new Adresse(id,name, prename,adresse , city,email, tel);
             return p;
         } catch (SQLException ex) {
              System.err.println(ex.getMessage());
         }
         return null;
    }

    public int showId(Adresse A)  {
            
         try {
             ste = cnx3.createStatement();
             ResultSet rs = ste.executeQuery("SELECT * FROM adresse WHERE Nom LIKE '"+A.getNom()+"';");

             String name = null;
             String prename = null;
             int tel = 0;
             String email = null;
             String city = null;
             String adresse = null;
             int idA =0;
             
             int rate = 0;
             if (rs.next()) {
                 idA = rs.getInt("Id");
                 name = rs.getString("Nom");
                 prename = rs.getString("Prenom");
                 tel = rs.getInt("Tel");
                 email = rs.getString("Email");
                 adresse = rs.getString("Adress");
                 city = rs.getString("City");
                 
             }
             Adresse p = new Adresse(idA,name, prename,adresse , city,email, tel);
             return p.getId();
         } catch (SQLException ex) {
              System.err.println(ex.getMessage());
         }
        return -1;
    }
}
