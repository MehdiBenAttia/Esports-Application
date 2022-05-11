/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import edu.esprit.entities.Produit;
import edu.esprit.services.ProduitService;
import edu.esprit.entities.*;
import edu.esprit.services.*;
import java.net.URL;
import java.sql.SQLException;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.control.Alert;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.input.KeyEvent;
import javafx.util.Duration;
import org.controlsfx.control.Notifications;

/**
 * FXML Controller class
 *
 * @author USER
 */
public class OrderController implements Initializable {

    @FXML
    private TextField NomA;
    @FXML
    private TextField PrenomA;
    @FXML
    private TextField TelA;
    @FXML
    private TextField EmailA;
    @FXML
    private TextField AdresseA;
    @FXML
    private TextField CityA;
    @FXML
    private TextField ProduitC;
    @FXML
    private TextField QuantiteC;
    @FXML
    private TextField TotalC;
    @FXML
    private Label idprod;
Produit p = new Produit();

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
                ProduitService p1 = new ProduitService();
        Produit pp = null;

        int tet=(p.getTest());
        try {
            pp=  p1.getById(tet);
        } catch (SQLException ex) {
            Logger.getLogger(OrderController.class.getName()).log(Level.SEVERE, null, ex);
        }
        ProduitC.setText(pp.getNom());
        QuantiteC.setText("1");
        
    }    

    @FXML
    private void addprod(KeyEvent event) {
      ProduitService p1 = new ProduitService();
        Produit pp = null;

        int tet=(p.getTest());
        try {
            pp=  p1.getById(tet);
        } catch (SQLException ex) {
            Logger.getLogger(OrderController.class.getName()).log(Level.SEVERE, null, ex);
        }
        int x = pp.getPrix();
String x1 =String.valueOf(pp.getPrix());

float y = pp.getPrix()*Integer.parseInt(QuantiteC.getText());

                         //p.setTest(Integer.parseInt(idppp.getText()));

              TotalC.setText(String.valueOf(y));


    }

    @FXML
    private void Commander(ActionEvent event) {
        
            String Nom = null;
        String Prenom = null;
        int Tel = 0;
        String Email = null;
                String adresse = null;
        String City = null;
                String produit = null;
             float total=0;
             int quantite =0;

        try {
            Nom = NomA.getText();
            Prenom = PrenomA.getText();
            Tel = Integer.parseInt(TelA.getText());
            Email = EmailA.getText();
            adresse = AdresseA.getText();
            City = CityA.getText();
            produit =ProduitC.getText();
            
            total=Float.parseFloat(TotalC.getText());
            quantite=Integer.parseInt(QuantiteC.getText());
             if(Nom.equals("")||Prenom.equals("")||Email.equals("")||adresse.equals("")||City.equals("")||produit.equals("")||!Email.contains("@")||!Email.contains(".")||TelA.getText().matches("[a-zA-Z]")==true || TelA.getText().length()!=8){
                  Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setTitle("erreur");
            alert.setContentText("veuillez verifier vos champs");
            alert.show();
            System.err.println("ereeeeuur");
            
             }
             
             else{
                 Adresse A = new Adresse( Nom, Prenom, adresse,  City,  Email,  Tel);
                 System.out.println(A);
        AdresseCRUD Ac =new AdresseCRUD();
       // Adresse Ai=new Adresse("Amin","lam3_","mahrajen","nasser","chek",222);
        //AdresseCRUD Ac= new AdresseCRUD();
        Ac.ajouterAdresse2(A);
         int i=Ac.showId(A);
        System.out.println(i);
     // int idA =Ac.IidAdresse(A);
       //       System.out.println(idA);

             
        Commande C =new Commande(produit,quantite,total,i);
                 System.out.println("hhhhhhh");
                 float x5=total;
                 System.out.println(x5);
                                  System.out.println("hhhhhhh");

        CommandeCRUD Cc= new CommandeCRUD();
        Cc.ajouterCommande2(C);
         Mailling M = new Mailling() ;
        String message ="Bonjour Mr."+A.getNom()+". Votre commande  "+C.getProduit()+" de quantite "+C.getQuantite()+"Vous sera livré dans les prochains jours. "
        + "cordialement ";
        Mailling.sendEmail(A.getEmail(),message);
         Notifications notificationBuilder=Notifications.create()
             .title("Commande ajouté avec succees!! ")
             .graphic(null)
             .hideAfter(Duration.seconds(5))
             .position(Pos.TOP_RIGHT);
             notificationBuilder.showConfirm();
       
            
            
          
          
             }
            
            
        } catch (Exception e) {
            System.out.println(e.getMessage());
        }
    
}
}
