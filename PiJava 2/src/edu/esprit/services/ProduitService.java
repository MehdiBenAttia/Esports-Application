/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;

import com.itextpdf.text.BadElementException;
import com.itextpdf.text.BaseColor;
import com.itextpdf.text.Document;
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.Element;
import com.itextpdf.text.Font;
import com.itextpdf.text.FontFactory;
import com.itextpdf.text.Paragraph;
import com.itextpdf.text.Phrase;
import com.itextpdf.text.pdf.CMYKColor;
import com.itextpdf.text.pdf.PdfPCell;
import com.itextpdf.text.pdf.PdfPTable;
import com.itextpdf.text.pdf.PdfWriter;
import edu.esprit.entities.Categorie;
import edu.esprit.entities.Produit;
import edu.esprit.utils.MyConnection;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.Calendar;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;

/**
 *
 * @author USER
 */
public class ProduitService implements CategorieI<Produit> {

    Connection connexion;
    Statement stm;

    public ProduitService() {
        connexion=MyConnection.getInstance().getCnx(); 
    }

    @Override
    public void ajouter(Produit c) throws SQLException {
        String req = "INSERT INTO Produit (reference,nom,marque,prix,type,image,categorie_id) "
                + "VALUES (?,?,?,?,?,?,?) ";
       
        PreparedStatement ps = connexion.prepareStatement(req);
        ps.setInt(1, c.getReference());
        ps.setString(2, c.getNom());
        ps.setString(3, c.getMarque());
        ps.setInt(4, c.getPrix());
        ps.setString(5, c.getType());
        ps.setString(6, c.getImage());
        ps.setInt(7,c.getCategorie_id().getId());
         //System.out.println("ajout PRODUIT avec succes");

        ps.executeUpdate();
    }
    
      public void ajouterP(Produit c , Categorie p ) throws SQLException {
        String req = "INSERT INTO Produit (reference,nom,marque,prix,type,image,categorie_id) "
                + "VALUES (?,?,?,?,?,?,?) ";
       
        PreparedStatement ps = connexion.prepareStatement(req);
        ps.setInt(1, c.getReference());
        ps.setString(2, c.getNom());
        ps.setString(3, c.getMarque());
        ps.setInt(4, c.getPrix());
        ps.setString(5, c.getType());
        ps.setString(6, c.getImage());
        ps.setInt(7,p.getId());

        ps.executeUpdate();
    }

    @Override
    public void supprimer(int iduser) throws SQLException {
        try {
            
            
             PreparedStatement pra = connexion.prepareStatement("Delete from review where produit_id=? ;");
                                    pra.setInt(1, iduser);
                                      if (pra.executeUpdate() != 0) {
                System.out.println("review join Deleted");
            }
            
            
            
            
            
            
            PreparedStatement pre = connexion.prepareStatement("Delete from Produit where id=? ");
            pre.setInt(1, iduser);
            if (pre.executeUpdate() != 0) {
                System.out.println("produit Deleted");
            }
        } catch (SQLException ex) {
            ex.getMessage();
        }
    }

    @Override
    public ObservableList<Produit> afficher() throws SQLException {
        ObservableList<Produit> Produits = FXCollections.observableArrayList();
        String req = "SELECT produit.id,produit.reference,produit.nom,produit.marque,produit.prix,produit.type,produit.image,categorie.nom_categ as e,produit.categorie_id  from produit inner join categorie on produit.categorie_id=categorie.id ";
        stm = connexion.createStatement();
        //ensemble de resultat
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
            Produit p;
             CategorieService sc = new CategorieService();
            Categorie c = sc.getById(rst.getInt("categorie_id"));
                                String x;

            p= new Produit(
                    rst.getInt("id"),//or rst.getInt(1)
                   rst.getInt("reference"),
                    rst.getString("nom"),
                    rst.getString("marque"),
                    rst.getInt("prix"),
                    rst.getString("type"),
                     rst.getString("image"),
                      rst.getString("e"),
                                         rst.getInt("categorie_id")
                  
                    

                    
                     
                    //            rst.getInt()
                    
                    

                    
            );
                        

            Produits.add(p);
        }
      //  System.out.println("aaaaaaaaaaaaaaaaaaaaaaaaaaaaa");

       //     System.out.println(Produits);
                                   // System.out.println("aaaaaaaaaaaaaaaaaaaaaaaaaaaaa");
        return Produits;

    }
    
    
    
    
    
     public ObservableList<Produit> afficherrated() throws SQLException {
        ObservableList<Produit> Produits = FXCollections.observableArrayList();
        String req = "select produit.id, review.id, produit.marque,ROUND(AVG(review.note_produit),1) as r from review RIGHT join produit on (review.produit_id=produit.id) group by (produit.marque) ";
        stm = connexion.createStatement();
        //ensemble de resultat
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
            Produit p;
            

            p= new Produit(
                   
                    rst.getString("marque"),
            rst.getFloat("r")
                   
                  
                );    

                    
                     
                    //            rst.getInt()
                    
                    

                    
            
                        

            Produits.add(p);
        }
        System.out.println("aaaaaaaaaaaaaaaaaaaaaaaaaaaaa");

            System.out.println(Produits);
                                    System.out.println("aaaaaaaaaaaaaaaaaaaaaaaaaaaaa");
        return Produits;

    }

    @Override
    public void modifier(int id, Produit p) throws SQLException {
        //request 
        String req;
        req = "UPDATE produit SET  `reference`=? , `nom`=? , `marque`=?,`prix`=?,`type`=?,`image`=?  WHERE id =?";

        // req = "UPDATE categorie_c SET  `nom`=? WHERE id =?";
        try {
            PreparedStatement ps = connexion.prepareStatement(req);
            ps.setInt(1, p.getReference());
            ps.setString(2, p.getNom());
            ps.setString(3, p.getMarque());
                        ps.setInt(4, p.getPrix());
            ps.setString(5, p.getType());
            ps.setString(6, p.getImage());


            ps.setInt(7, id);
            ps.executeUpdate();

        } catch (SQLException ex) {
            ex.printStackTrace();
        }

    }
     public Produit getById(int aInt) throws SQLException {
    Produit produit = new Produit();

        String req = "select * from produit where id="+aInt;
        Statement stm = connexion.createStatement();
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
          
            produit = new Produit (
                     rst.getInt("id"),//or rst.getInt(1)
                   rst.getInt("reference"),
                    rst.getString("nom"),
                    rst.getString("marque"),
                    rst.getInt("prix"),
                    rst.getString("type"),
                     rst.getString("image")
                      
                                        
            );
           
        }
        return produit;
      
    }
     public void exportTable(int id) throws SQLException, FileNotFoundException, BadElementException, IOException  {
        try {
                       Statement st =connexion.createStatement();


           String query = "SELECT produit.nom,produit.marque,produit.prix FROM produit WHERE id ="+id+";";
            ResultSet rs = st.executeQuery(query);
            Document my_pdf_report = new Document() {}; 
            int min = 10000;
            int max = 99999;
            int random_id = (int) Math.floor(Math.random() * (max - min + 1) + min);
            PdfWriter.getInstance(my_pdf_report, new FileOutputStream("C:\\Users\\USER\\OneDrive\\Bureau\\PiJava\\src\\Pi\\report\\Product" + random_id + ".pdf"));

            my_pdf_report.open();
            my_pdf_report.add(new Paragraph("Product report", FontFactory.getFont("Arial", 20)));
            my_pdf_report.add(new Paragraph("  "));
            my_pdf_report.add(new Paragraph("  "));

            //we have four columns in our table
            PdfPTable my_report_table = new PdfPTable(3);

            //create a cell object
            PdfPCell table_cell;
           
            table_cell = new PdfPCell(new Phrase("nom"));
            table_cell.setBorderColor(BaseColor.RED);
                    table_cell.setPaddingLeft(10);
                    table_cell.setHorizontalAlignment(Element.ALIGN_CENTER);
                    table_cell.setVerticalAlignment(Element.ALIGN_MIDDLE);
            my_report_table.addCell(table_cell);
            table_cell = new PdfPCell(new Phrase("marque"));
            table_cell.setBorderColor(BaseColor.RED);
                    table_cell.setPaddingLeft(10);
                    table_cell.setHorizontalAlignment(Element.ALIGN_CENTER);
                    table_cell.setVerticalAlignment(Element.ALIGN_MIDDLE);
            my_report_table.addCell(table_cell);
            table_cell = new PdfPCell(new Phrase("prix"));
            table_cell.setBorderColor(BaseColor.RED);
                    table_cell.setPaddingLeft(10);
                    table_cell.setHorizontalAlignment(Element.ALIGN_CENTER);
                    table_cell.setVerticalAlignment(Element.ALIGN_MIDDLE);
            my_report_table.addCell(table_cell);

              while (rs.next()) {
            String nom = rs.getString("nom");
            table_cell = new PdfPCell(new Phrase(nom));
             table_cell.setBorderColor(BaseColor.RED);
                    table_cell.setPaddingLeft(10);
                    table_cell.setHorizontalAlignment(Element.ALIGN_CENTER);
                    table_cell.setVerticalAlignment(Element.ALIGN_MIDDLE);
                    my_report_table.addCell(table_cell);
           // my_report_table.addCell(table_cell);
            String quantite = rs.getString("marque");
            table_cell = new PdfPCell(new Phrase(quantite));
            table_cell.setBorderColor(BaseColor.RED);
                    table_cell.setPaddingLeft(10);
                    table_cell.setHorizontalAlignment(Element.ALIGN_CENTER);
                    table_cell.setVerticalAlignment(Element.ALIGN_MIDDLE);
                 //   my_report_table.addCell(table_cell);
            my_report_table.addCell(table_cell);
            int total = rs.getInt("prix");
            table_cell.setBorderColor(BaseColor.RED);
                    table_cell.setPaddingLeft(10);
                    table_cell.setHorizontalAlignment(Element.ALIGN_CENTER);
                    table_cell.setVerticalAlignment(Element.ALIGN_MIDDLE);
                //    my_report_table.addCell(table_cell);
            System.out.println(new Phrase(String.valueOf(total)));
            table_cell = new PdfPCell(new Phrase(String.valueOf(total)));
            my_report_table.addCell(table_cell);
            
            
            }
              
            /*  Alert alertt = new Alert(Alert.AlertType.INFORMATION);
            alertt.setTitle("Success");
            alertt.setContentText(" Report generated ");
            alertt.show();*/
            
            my_pdf_report.addTitle("Product detail");
            my_pdf_report.add(my_report_table);
              com.itextpdf.text.Image image1 = com.itextpdf.text.Image.getInstance("C:\\USERS\\User\\OneDrive\\Bureau\\PiJava\\src\\Images\\logoesports.png");
                     image1.setAbsolutePosition(100f, 550f);
                    
                    //Scale to new height and new width of image
                    image1.scaleAbsolute(200, 200);
                    
                    Font blueFont = FontFactory.getFont(FontFactory.HELVETICA, 8, Font.NORMAL, new CMYKColor(255, 0, 0, 0));
                    Font redFont = FontFactory.getFont(FontFactory.HELVETICA, 8, Font.BOLD, new CMYKColor(0, 255, 200, 50));
                    
                    Paragraph sectionTitle = new Paragraph("produit disponible dans notre application  ", redFont);
                    Paragraph sectionTitle2 = new Paragraph("ETSPORTS APPLICATION :", redFont);
                    
                    java.sql.Timestamp date_sql = new java.sql.Timestamp(Calendar.getInstance().getTime().getTime());
                    String rescreation = date_sql.toString();
                    
                    Paragraph sectionTitle3 = new Paragraph("created at :" + rescreation.substring(0, 10) + "", blueFont);
                    
                    sectionTitle.setAlignment(com.itextpdf.text.Element.ALIGN_BOTTOM);
                    sectionTitle2.setAlignment(com.itextpdf.text.Element.ALIGN_BOTTOM);
                    sectionTitle3.setAlignment(com.itextpdf.text.Element.ALIGN_BOTTOM);
                    
                    my_pdf_report.add(sectionTitle);
                    my_pdf_report.add(sectionTitle2);
                    
                    my_pdf_report.add(sectionTitle3);
                    
                    image1.setAbsolutePosition(17, 780f);
                    my_pdf_report.add(image1);
                    Paragraph signature = new Paragraph("Produit original", blueFont);
                    Paragraph notice = new Paragraph("cette fiche doit etre presenté dans notre boutique pour passer la commande ", redFont);
                    my_pdf_report.add(notice);
                    
                    my_pdf_report.add(signature);
                    
           // document.addTitle(marquedetail.getText());
            my_pdf_report.add(new Paragraph("fiche technique du Produit selectionne qui   contient les details du produit "));
            my_pdf_report.close();

        } catch (DocumentException ex) {
            System.out.println(ex.getMessage());
        }
    }
}