/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;

import com.itextpdf.text.Document;
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.Phrase;
import com.itextpdf.text.pdf.PdfPCell;
import com.itextpdf.text.pdf.PdfPTable;
import com.itextpdf.text.pdf.PdfWriter;
import edu.esprit.entities.categorieRec;
import edu.esprit.entities.reclamation;
import edu.esprit.utils.MyConnection;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;

/**
 *
 * @author USER
 */
public class ServiceReclamation implements IService<reclamation> {
   Connection connexion = MyConnection.getInstance().getCnx();

    @Override
    public void ajouter(reclamation c) throws SQLException {
        String req = "INSERT INTO `reclamation` (`nom_user`,`message`,`categorie_id`,`email`,`etat`) "
                + "VALUES (?,?,?,?,?) ";
        PreparedStatement ps = connexion.prepareStatement(req);
        ps.setString(1, c.getNom_user());

        ps.setString(2, c.getMessage());
       // ps.setString(3, c.getCategorie_id());
        ps.setString(4, c.getEmail());
        ps.setString(5, c.getEtat());


        ps.executeUpdate();
    }
    
      public void ajouterR(reclamation c , categorieRec cat) throws SQLException {
        String req = "INSERT INTO `reclamation` (`nom_user`,`message`,`categorie_id`,`email`,`etat`) "
                + "VALUES (?,?,?,?,?) ";
        PreparedStatement ps = connexion.prepareStatement(req);
        ps.setString(1, c.getNom_user());

        ps.setString(2, c.getMessage());
        ps.setInt(3, cat.getId());
        ps.setString(4, c.getEmail());
        ps.setString(5, c.getEtat());


        ps.executeUpdate();
    }

    @Override
    public void supprimer(int id) throws SQLException {
        try {
            PreparedStatement pre = connexion.prepareStatement("Delete from reclamation where id=? ;");
            pre.setInt(1, id);
            if (pre.executeUpdate() != 0) {
                System.out.println("reclamation Deleted");
            }
        } catch (SQLException ex) {
            ex.getMessage();
        }
    }


    @Override
    public ObservableList<reclamation> afficher() throws SQLException {
    ObservableList<reclamation> categories = FXCollections.observableArrayList();
        String req = "select reclamation.id, reclamation.rep ,reclamation.nom_user,reclamation.message,reclamation.date,reclamation.email,reclamation.categorie_id,reclamation.etat,typerec.catrec from reclamation inner join typerec on reclamation.categorie_id=typerec.id";
        Statement stm = connexion.createStatement();
        ResultSet rst = stm.executeQuery(req);
        while (rst.next()) {
            reclamation c;
            c = new reclamation(
                    rst.getInt("id"),//or rst.getInt(1)
                    rst.getString("nom_user"),
                                        rst.getString("message"),

                    rst.getDate("date"),
                   
                    rst.getString("email"),
                                        rst.getString("etat"),
                    rst.getInt("categorie_id"),
                    rst.getString("catrec"),
                    rst.getString("rep")
                                     //   rst.getInt("categorie_id")

            );
            categories.add(c);
            System.err.println("sfdffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff");
                            System.out.println(categories);

        }
        return categories;

    }
      @Override
    public void modifier(int id, reclamation p) throws SQLException {
        String req;
        req = "UPDATE reclamation SET  `mesage`=?  WHERE id =?";
        try {
            PreparedStatement ps = connexion.prepareStatement(req);
            ps.setString(1, p.getMessage());
                      ;

            ps.setInt(2, id);
            ps.executeUpdate();
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
    }    

    public categorieRec getById(int aInt) throws SQLException {
    categorieRec categorie = new categorieRec();
        String req = "select * from reclamation where id="+aInt;
        Statement stm = connexion.createStatement();
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
          
          /*  categorie = new categorieRec (
                    rst.getInt("id"),//or rst.getInt(1)
                    rst.getString("nom")
            );*/
           
        }
        return categorie;
      
    }
    
    public int count(int categorieId) throws SQLException {
        int count = 0;
        String req = "select count(*) as total from reclamation where categorie_id="+categorieId;
        Statement stm = connexion.createStatement();
        ResultSet rst = stm.executeQuery(req);
        while(rst.next())
        {
            count = rst.getInt("total");
        }
        return count; 
    }

    public void updateResponse(int id, String rep) throws SQLException {
        String req = "UPDATE reclamation SET etat='traité' ,  rep="+'"'+rep+'"' + "where id='"+id+"'";
        Statement stm = connexion.createStatement();
        stm.executeUpdate(req);
    }
    
    public void pdfs()
            throws Exception {
        try {
            String req = "select reclamation.id, reclamation.rep ,reclamation.nom_user,reclamation.message,reclamation.date,reclamation.email,reclamation.categorie_id,reclamation.etat,typerec.catrec from reclamation inner join typerec on reclamation.categorie_id=typerec.id";
            Statement stmt = connexion.createStatement();
            
            /* Define the SQL query */
            ResultSet query_set = stmt.executeQuery(req);
            /* Step-2: Initialize PDF documents - logical objects */
            Document my_pdf_report = new Document();
            PdfWriter.getInstance(my_pdf_report, new FileOutputStream("liste_reclamation.pdf"));
            my_pdf_report.open();
            //we have four columns in our table
            PdfPTable my_report_table = new PdfPTable(4);
            //create a cell object
            PdfPCell table_cell;
            while (query_set.next()) {
                String id = query_set.getString("id");
                table_cell = new PdfPCell(new Phrase(id));
                my_report_table.addCell(table_cell);
                String nom_user = query_set.getString("nom_user");
                table_cell = new PdfPCell(new Phrase(nom_user));
                my_report_table.addCell(table_cell);
                String message = query_set.getString("message");
                table_cell = new PdfPCell(new Phrase(message));
                my_report_table.addCell(table_cell);
                String date = query_set.getString("date");
                table_cell = new PdfPCell(new Phrase(date));
                
                String email = query_set.getString("email");
                table_cell = new PdfPCell(new Phrase(email));
                String etat = query_set.getString("etat");
                table_cell = new PdfPCell(new Phrase(etat));
                String catrec = query_set.getString("catrec");
                table_cell = new PdfPCell(new Phrase(catrec));
                String rep = query_set.getString("rep");
                table_cell = new PdfPCell(new Phrase(rep));
                my_report_table.addCell(table_cell);
            }
            /* Attach report table to PDF */
            my_pdf_report.add(my_report_table);
            my_pdf_report.close();

            /* Close all DB related objects */
            query_set.close();
        } catch (FileNotFoundException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        } catch (DocumentException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        }
    }
    
      public ObservableList<reclamation> findByNomUser(String name) throws SQLException {
    ObservableList<reclamation> categories = FXCollections.observableArrayList();
        String req = "select reclamation.id, reclamation.rep ,reclamation.nom_user,reclamation.message,reclamation.date,reclamation.email,reclamation.categorie_id,reclamation.etat,typerec.catrec from reclamation inner join typerec on reclamation.categorie_id=typerec.id"
                + " where reclamation.nom_user="+'"'+name+'"';
        Statement stm = connexion.createStatement();
        ResultSet rst = stm.executeQuery(req);
        while (rst.next()) {
            reclamation c;
            c = new reclamation(
                    rst.getInt("id"),//or rst.getInt(1)
                    rst.getString("nom_user"),
                                        rst.getString("message"),

                    rst.getDate("date"),
                   
                    rst.getString("email"),
                                        rst.getString("etat"),
                    rst.getInt("categorie_id"),
                    rst.getString("catrec"),
                    rst.getString("rep")
                                     //   rst.getInt("categorie_id")

            );
            categories.add(c);
            System.err.println("sfdffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff");
                            System.out.println(categories);

        }
        return categories;

    } 
}
