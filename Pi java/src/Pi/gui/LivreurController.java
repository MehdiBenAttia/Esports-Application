/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Pi.gui;

import Pi.entities.Livreur;
import Pi.services.LivreurCRUD;
import java.io.IOException;
import java.net.URL;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author Aziz
 */
public class LivreurController implements Initializable {

    @FXML
    private TableView<Livreur> TableLivreur;
    @FXML
    private TableColumn<Livreur, Integer> IDLivreurtab;
    @FXML
    private TableColumn<Livreur, String> NomLivreurtab;
    @FXML
    private TableColumn<Livreur, String> PrenomLivreurtab;
    @FXML
    private TableColumn<Livreur, Integer> TelLivreurtab;
    @FXML
    private TableColumn<Livreur, String> EmailLivreurtab;
    @FXML
    private TableColumn<Livreur, Button> MODIFIER;
    @FXML
    private TableColumn<Livreur, Button> SUPPRIMER;
   
    @FXML
    private Button reload;
     @FXML
    private TextField NomLivreur;
    @FXML
    private TextField PrenomLivreur;
    @FXML
    private TextField TelLIvreur;
    @FXML
    private TextField EmailLivreur;
    @FXML
    private Button AjouterLivreur;
     Button[] modify_button = new Button[100];
    Button[] supprimerb = new Button[100];
                    int index=101; 

    LivreurCRUD Lc = new LivreurCRUD();
    List<Livreur> lm = Lc.afficherLivreur();

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        TableLivreur.setEditable(true);
          for (int i = 0; i < lm.size(); i++) {
            ImageView modify1 = new ImageView(new Image(getClass().getResourceAsStream("../images/edit_property_16px.png")));
         modify_button[i] = new Button("", modify1);
    ImageView supprimer1 = new ImageView(new Image(getClass().getResourceAsStream("../images/not_sending_video_frames_16px.png")));
         supprimerb[i] = new Button("", supprimer1);
            lm.get(i).setModifier(modify_button[i]);
             lm.get(i).setSupprimer(supprimerb[i]);
            supprimerb[i].setOnAction(this::handleButtonAction);
            //modify_button[i].setOnAction(this::modifierButtonAction);
        }
        
       
        
         ObservableList<Livreur> datalistt = FXCollections.observableArrayList(lm);
         
         
        IDLivreurtab.setCellValueFactory(new PropertyValueFactory<>("Id"));
        NomLivreurtab.setCellValueFactory(new PropertyValueFactory<>("Nom"));
        PrenomLivreurtab.setCellValueFactory(new PropertyValueFactory<>("Prenom"));
        TelLivreurtab.setCellValueFactory(new PropertyValueFactory<>("Tel"));
        EmailLivreurtab.setCellValueFactory(new PropertyValueFactory<>("Email"));
        MODIFIER.setCellValueFactory(new PropertyValueFactory<>("modifier"));
        SUPPRIMER.setCellValueFactory(new PropertyValueFactory<>("supprimer"));
        TableLivreur.setItems(datalistt); 
       
    }    

    @FXML
    private void AjouterLivreur(ActionEvent event) {
         
        
        String Nom = null;
        String Prenom = null;
        int Tel = 0;
        String Email = null;
        try {
            Nom = NomLivreur.getText();
            Prenom = PrenomLivreur.getText();
            Tel = Integer.parseInt(TelLIvreur.getText());
            Email = EmailLivreur.getText();
        } catch (Exception e) {
             Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setTitle("erreur");
            alert.setContentText("veuillez verifier vos champs");
            alert.show();
            System.err.println("ereeeeuur");
        }
        
        Livreur l = new Livreur(Nom,Prenom,Tel,Email);
        LivreurCRUD Lc =new LivreurCRUD();
        Lc.ajouterLivreur2(l);
         Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Success");
            alert.setContentText("livreur ajouté!");
            alert.show();
             LivreurCRUD Li = new LivreurCRUD();
             List<Livreur> ltt = Li.afficherLivreur();
             TableLivreur.getItems().clear();
          afficher_livreur(ltt);
    }
        
    @FXML
    void reloadd(ActionEvent event) {
           
        LivreurCRUD Lc = new LivreurCRUD();
        List<Livreur> lm = Lc.afficherLivreur();
 
        TableLivreur.setEditable(true);
        
    
        for (int i = 0; i < lm.size(); i++) {
            ImageView modify1 = new ImageView(new Image(getClass().getResourceAsStream("../images/edit_property_16px.png")));
         modify_button[i] = new Button("", modify1);
    ImageView supprimer1 = new ImageView(new Image(getClass().getResourceAsStream("../images/not_sending_video_frames_16px.png")));
         supprimerb[i] = new Button("", supprimer1);
            lm.get(i).setModifier(modify_button[i]);
             lm.get(i).setSupprimer(supprimerb[i]);
            supprimerb[i].setOnAction(this::handleButtonAction);
            //modify_button[i].setOnAction(this::modifierButtonAction);
        }
        
       
        
         ObservableList<Livreur> datalistt = FXCollections.observableArrayList(lm);
         
         
        IDLivreurtab.setCellValueFactory(new PropertyValueFactory<>("Id"));
        NomLivreurtab.setCellValueFactory(new PropertyValueFactory<>("Nom"));
        PrenomLivreurtab.setCellValueFactory(new PropertyValueFactory<>("Prenom"));
        TelLivreurtab.setCellValueFactory(new PropertyValueFactory<>("Tel"));
        EmailLivreurtab.setCellValueFactory(new PropertyValueFactory<>("Email"));
        MODIFIER.setCellValueFactory(new PropertyValueFactory<>("modifier"));
        SUPPRIMER.setCellValueFactory(new PropertyValueFactory<>("supprimer"));
        TableLivreur.setItems(datalistt); 
       

        
        
    }
       private void modifierButtonAction (ActionEvent event)
    {
        try {
            
            FXMLLoader modif= new FXMLLoader(getClass().getResource("ModifierLivreur.fxml"));
            Parent root = modif.load();
           
            ModifierLivreurController mc = modif.getController();
            for (int i = 0; i <= lm.size(); i++) {
            if (event.getSource() == modify_button[i])
             {
                 index=i;
                 
             }}
            
            System.out.println(lm.get(index).getId());
            
            int index1 = lm.get(index).getId();
            
            String s=String.valueOf(index1);
            System.out.println(s);
            mc.setNomLivreur(lm.get(index).getNom());
            mc.setPrenomLivreur(lm.get(index).getPrenom());
            mc.setTelLivreur(lm.get(index).getTel());
            mc.setEmailLivreur(lm.get(index).getEmail());
            mc.setItems(index1);
           
            Scene scene = new Scene(root);
           Stage modifStage = new Stage();
            
            modifStage.setTitle("Valorant!");
            modifStage.setScene(scene);
            modifStage.show();
         
           
        } catch (IOException ex) {
            Logger.getLogger(LivreurController.class.getName()).log(Level.SEVERE, null, ex);
        }
     }
     private void handleButtonAction (ActionEvent event)
    {
       
         for (int i = 0; i < lm.size(); i++) {
            // Button a = supprimerb[i];
            
             if (event.getSource() == supprimerb[i])
             {
                 index=i;
             }
            
                 
         }
          System.out.println(index);
          int index1 = lm.get(index).getId();
            LivreurCRUD tt = new LivreurCRUD();
            
             tt.deleteLivreur(index1);
             lm = tt.afficherLivreur();
             TableLivreur.getItems().clear();
          afficher_livreur(lm);
       
     }
      public void afficher_livreur(List<Livreur> ltt)
    {
        for (int i = 0; i < ltt.size(); i++) {
            ImageView modify1 = new ImageView(new Image(getClass().getResourceAsStream("../images/edit_property_16px.png")));
         modify_button[i] = new Button("", modify1);
    ImageView supprimer1 = new ImageView(new Image(getClass().getResourceAsStream("../images/not_sending_video_frames_16px.png")));
         supprimerb[i] = new Button("", supprimer1);
            ltt.get(i).setModifier(modify_button[i]);
             ltt.get(i).setSupprimer(supprimerb[i]);
            supprimerb[i].setOnAction(this::handleButtonAction);
           modify_button[i].setOnAction(this::modifierButtonAction);
        }
       ObservableList<Livreur> datalistt = FXCollections.observableArrayList(ltt);
       IDLivreurtab.setCellValueFactory(new PropertyValueFactory<>("Id"));
        NomLivreurtab.setCellValueFactory(new PropertyValueFactory<>("Nom"));
        PrenomLivreurtab.setCellValueFactory(new PropertyValueFactory<>("Prenom"));
        TelLivreurtab.setCellValueFactory(new PropertyValueFactory<>("Tel"));
        EmailLivreurtab.setCellValueFactory(new PropertyValueFactory<>("Email"));
        MODIFIER.setCellValueFactory(new PropertyValueFactory<>("modifier"));
        SUPPRIMER.setCellValueFactory(new PropertyValueFactory<>("supprimer"));
        TableLivreur.setItems(datalistt); 
    }    
    
}
