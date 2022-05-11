/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;
import edu.esprit.entities.Adresse;
import edu.esprit.entities.Commande;
import edu.esprit.utils.MyConnection;
import com.itextpdf.text.BaseColor;

import com.itextpdf.text.Document;
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.FontFactory;
import com.itextpdf.text.Paragraph;
import com.itextpdf.text.Phrase;
import com.itextpdf.text.pdf.PdfPCell;
import com.itextpdf.text.pdf.PdfPTable;
import com.itextpdf.text.pdf.PdfWriter;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author USER
 */
public class CommandeCRUD {
     Connection cnx4;
                     private Statement ste;

        public CommandeCRUD(){
       cnx4 = MyConnection.getInstance().getCnx();
        }
       
         public void ajouterCommande2(Commande C){
        
       try {
           
            String requete2="INSERT INTO Commande(Produit,Quantite,Date,Total,adresse_id)"
                    + "VALUES (?,?,?,?,?) ";
            java.sql.Date sqlDate = new java.sql.Date(new java.util.Date().getTime());

            PreparedStatement pst= cnx4.prepareStatement(requete2);
              pst.setString(1, C.getProduit());
             pst.setInt(2, C.getQuantite());
             pst.setDate(3, sqlDate);
              pst.setFloat(4, C.getTotal());
                pst.setInt(5, C.getAdresse_id());
               pst.executeUpdate();


            System.out.println("Commande ajouter avec succes");
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
   }
          public List<Commande> afficherCommande(){
         List<Commande> myList=new ArrayList<>();

        try {
            String requete3="SELECT commande.idcommande,commande.idlivreur_id,commande.produit,commande.Quantite,commande.Total,commande.adresse_id,livreur.nom,livreur.prenom FROM commande left join "
                    + "livreur on commande.idlivreur_id=livreur.id ";
            Statement st =cnx4.createStatement();
            ResultSet rs = st.executeQuery(requete3);
            while(rs.next()){
                Commande L=new Commande();
                L.setIdcommande(rs.getInt(1));
                L.setProduit(rs.getString("Produit"));
                L.setQuantite(rs.getInt("Quantite"));
                L.setTotal(rs.getFloat("Total"));

                L.setName(rs.getString("Nom"),rs.getString("Prenom"));
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
            String rq ="UPDATE Commande SET  Produit=?, Quantite=?, Date=?, Total=? ,idlivreur_id=?   WHERE idcommande=?";
             PreparedStatement pst= cnx4.prepareStatement(rq);
             java.sql.Date sqlDate = new java.sql.Date(new java.util.Date().getTime());
              pst.setString(1, L.getProduit());
              pst.setInt(2, L.getQuantite());
              pst.setDate(3, sqlDate);
              pst.setFloat(4, L.getTotal());
              pst.setInt(5, L.getIdlivreur_id());
                 pst.setInt(6, L.getIdcommande());

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
    public List<Commande> RechercherProduit(String nom) {
         List<Commande> myList = new ArrayList<>();
        try{
            String req = "SELECT commande.idcommande,commande.idlivreur_id,commande.produit,commande.Quantite,commande.Total,commande.adresse_id,livreur.nom,livreur.prenom FROM commande left join "
                    + "livreur on commande.idlivreur_id=livreur.id where Produit LIKE '"+nom+"'";
            Statement st = cnx4.createStatement();
            ResultSet rs = st.executeQuery(req);
            
            while(rs.next()){
                Commande L=new Commande();
                L.setIdcommande(rs.getInt(1));
                L.setProduit(rs.getString("Produit"));
                L.setQuantite(rs.getInt("Quantite"));
                L.setTotal(rs.getFloat("Total"));
                L.setName(rs.getString("Nom"),rs.getString("Prenom"));
                L.setPrename(rs.getString("Prenom"));
                L.setIdlivreur_id(rs.getInt("idlivreur_id"));
                L.setAdresse_id(rs.getInt("adresse_id"));
                myList.add(L);


                
                myList.add(L);
            }
    }

  
        catch(SQLException ex){
            System.err.println(ex.getMessage());
        }
        return myList ;  
}
    public Commande showCommande(int id) throws SQLException {

        ste = cnx4.createStatement();
        ResultSet rs = ste.executeQuery("select * from commande where idcommande=" + id + ";");
       int idc=0;
       String prod="";
       int qty = 0;
       float tot=0;
        int rate = 0;
        if (rs.next()) {
            idc = rs.getInt("idcommande");
            prod= rs.getString("Produit");
            qty = rs.getInt("Quantite");
      
            tot = rs.getFloat("Total");
            
        }
         Commande p = new Commande(idc, prod, qty, tot);
        return p;
    }

  
       
        

    
 public void exportTable() throws SQLException, FileNotFoundException  {
        try {
                       Statement st =cnx4.createStatement();


           String query = "SELECT commande.Produit,commande.Quantite,commande.Total from commande";
            ResultSet rs = st.executeQuery(query);
            Document my_pdf_report = new Document() {};
            int min = 10000;
            int max = 99999;
            int random_id = (int) Math.floor(Math.random() * (max - min + 1) + min);
            PdfWriter.getInstance(my_pdf_report, new FileOutputStream("C:\\Users\\USER\\OneDrive\\Bureau\\PiJava\\src\\Pi\\report\\commande" + random_id + ".pdf"));

            my_pdf_report.open();
            my_pdf_report.add(new Paragraph("Orders report", FontFactory.getFont("Arial", 20)));
            my_pdf_report.add(new Paragraph("  "));
            my_pdf_report.add(new Paragraph("  "));

            //we have four columns in our table
            PdfPTable my_report_table = new PdfPTable(3);

            //create a cell object
            PdfPCell table_cell;
           
            table_cell = new PdfPCell(new Phrase("produit"));
            my_report_table.addCell(table_cell);
            table_cell = new PdfPCell(new Phrase("Quantite"));
            my_report_table.addCell(table_cell);
            table_cell = new PdfPCell(new Phrase("Total"));
            my_report_table.addCell(table_cell);

              while (rs.next()) {
            String nom = rs.getString("Produit");
            table_cell = new PdfPCell(new Phrase(nom));
            
            my_report_table.addCell(table_cell);
            int quantite = rs.getInt("Quantite");
            table_cell = new PdfPCell(new Phrase(String.valueOf(quantite)));
            my_report_table.addCell(table_cell);
            float total = rs.getFloat("Total");
            System.out.println(total);
            table_cell = new PdfPCell(new Phrase(String.valueOf(total)));
            my_report_table.addCell(table_cell);
            
            
            }
            /*  Alert alertt = new Alert(Alert.AlertType.INFORMATION);
            alertt.setTitle("Success");
            alertt.setContentText(" Report generated ");
            alertt.show();*/
            my_pdf_report.addTitle("Orders report");
            my_pdf_report.add(my_report_table);
            
            my_pdf_report.close();

        } catch (DocumentException ex) {
            System.out.println(ex.getMessage());
        }
    }
 public void createPdf(int id)throws SQLException, FileNotFoundException{
   try {
                       Statement st =cnx4.createStatement();


           String query = "SELECT commande.idcommande,commande.Produit,commande.Quantite,commande.Total,commande.adresse_id,adresse.Nom as N ,adresse.Prenom as P,adresse.Tel as T,adresse.Email as E,adresse.City as C,adresse.Adress as A FRom commande left join "
                    + "adresse on commande.adresse_id=adresse.id where idcommande="+id+";";
            ResultSet rs = st.executeQuery(query);
            Document my_pdf_report = new Document() {};
            int min = 10000;
            int max = 99999;
            int random_id = (int) Math.floor(Math.random() * (max - min + 1) + min);
            PdfWriter.getInstance(my_pdf_report, new FileOutputStream("C:\\Users\\USER\\OneDrive\\Bureau\\PiJava\\src\\Pi\\report\\commande" + random_id + ".pdf"));

            my_pdf_report.open();
            my_pdf_report.add(new Paragraph("Orders report", FontFactory.getFont("Arial", 20)));
            my_pdf_report.add(new Paragraph("  "));
            my_pdf_report.add(new Paragraph("  "));

            //we have four columns in our table
            PdfPTable my_report_table = new PdfPTable(9);

            //create a cell object
            PdfPCell table_cell;
            table_cell = new PdfPCell(new Phrase("Nom"));
            my_report_table.addCell(table_cell);
             table_cell = new PdfPCell(new Phrase("Prenom"));
            my_report_table.addCell(table_cell);
             table_cell = new PdfPCell(new Phrase("Tel"));
            my_report_table.addCell(table_cell);
             table_cell = new PdfPCell(new Phrase("Email"));
            my_report_table.addCell(table_cell);
             table_cell = new PdfPCell(new Phrase("City"));
            my_report_table.addCell(table_cell);
             table_cell = new PdfPCell(new Phrase("Adresse"));
            my_report_table.addCell(table_cell);
            table_cell = new PdfPCell(new Phrase("produit"));
            my_report_table.addCell(table_cell);
            table_cell = new PdfPCell(new Phrase("Quantite"));
            my_report_table.addCell(table_cell);
            table_cell = new PdfPCell(new Phrase("Total"));
            my_report_table.addCell(table_cell);
            

              while (rs.next()) {
                  
                  String nom = rs.getString("N");
            table_cell = new PdfPCell(new Phrase(nom));
            my_report_table.addCell(table_cell);
            String prenom = rs.getString("P");
            table_cell = new PdfPCell(new Phrase(prenom));
            my_report_table.addCell(table_cell); 
            String ntel = rs.getString("T");
            table_cell = new PdfPCell(new Phrase(ntel));
            my_report_table.addCell(table_cell);
            String email = rs.getString("E");
            table_cell = new PdfPCell(new Phrase(email));
            my_report_table.addCell(table_cell);
            String city = rs.getString("C");
            table_cell = new PdfPCell(new Phrase(city));
            my_report_table.addCell(table_cell);
            String a = rs.getString("A");
            table_cell = new PdfPCell(new Phrase(a));
            my_report_table.addCell(table_cell);
            
            
            String prod = rs.getString("Produit");
            table_cell = new PdfPCell(new Phrase(prod));
            
            my_report_table.addCell(table_cell);
            int quantite = rs.getInt("Quantite");
            table_cell = new PdfPCell(new Phrase(String.valueOf(quantite)));
            my_report_table.addCell(table_cell);
            float total = rs.getFloat("Total");
            System.out.println(total);
            table_cell = new PdfPCell(new Phrase(String.valueOf(total)));
            my_report_table.addCell(table_cell);
            
            
            }
            /*  Alert alertt = new Alert(Alert.AlertType.INFORMATION);
            alertt.setTitle("Success");
            alertt.setContentText(" Report generated ");
            alertt.show();*/
            my_pdf_report.addTitle("Orders report");
            my_pdf_report.add(my_report_table);
            
            my_pdf_report.close();

        } catch (DocumentException ex) {
            System.out.println(ex.getMessage());
        }
 
}
}
