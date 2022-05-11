package edu.esprit.gui;

import static com.itextpdf.text.pdf.security.CertificateInfo.X500Name.T;
import static com.sun.javafx.css.SizeUnits.S;
import edu.esprit.entities.Adresse;
import edu.esprit.entities.Categorie;
import edu.esprit.entities.CategorieC;
import edu.esprit.entities.Commande;
import edu.esprit.entities.Commentaire;
import edu.esprit.entities.Equipe;
import edu.esprit.entities.Jeux;
import edu.esprit.entities.Livreur;
import edu.esprit.entities.Post;
import edu.esprit.entities.Produit;
import edu.esprit.entities.User;
import edu.esprit.entities.categorieRec;
import edu.esprit.entities.reclamation;
import edu.esprit.services.AdresseCRUD;
import edu.esprit.services.CategorieService;
import edu.esprit.services.CommandeCRUD;
import edu.esprit.services.CommentaireService;
import edu.esprit.services.Equipe_service;
import edu.esprit.services.LivreurCRUD;
import edu.esprit.services.Mailling;
import edu.esprit.services.PostServices;
import edu.esprit.services.ProduitService;
import edu.esprit.services.ServiceCategoriec;
import edu.esprit.services.ServiceJeux;
import edu.esprit.services.ServiceReclamation;
import edu.esprit.services.ServicecategorieRec;
import edu.esprit.services.User_service;
import edu.esprit.utils.MyConnection;
import edu.esprit.utils.Session;
import java.util.ResourceBundle;
import javax.mail.*;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;
import java.util.Properties;

import javafx.geometry.Insets;
import java.io.File;
import java.io.FileNotFoundException;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.control.Button;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.HBox;
import javafx.scene.layout.Pane;
import javafx.scene.layout.VBox;

import java.io.IOException;
import java.net.MalformedURLException;
import java.net.URL;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.nio.file.StandardCopyOption;
import java.sql.SQLException;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.scene.Parent;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.Statement;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.Comparator;
import java.util.Date;
import java.util.List;
import java.util.Optional;
import java.util.Properties;
import java.util.Scanner;
import java.util.Set;
import java.util.logging.Level;
import java.util.logging.Logger;
import java.util.regex.Matcher;
import java.util.regex.Pattern;
import javafx.beans.property.SimpleStringProperty;
import javafx.beans.value.ObservableValue;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.geometry.Pos;
import javafx.scene.Scene;
import javafx.scene.chart.CategoryAxis;
import javafx.scene.chart.NumberAxis;
import javafx.scene.chart.PieChart;
import javafx.scene.chart.PieChart.Data;
import javafx.scene.chart.StackedBarChart;
import javafx.scene.chart.XYChart;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.ButtonType;
import javafx.scene.control.ComboBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn.CellDataFeatures;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.control.cell.TextFieldTableCell;
import static javafx.scene.input.KeyCode.S;
import static javafx.scene.input.KeyCode.T;
import javafx.scene.input.KeyEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.Region;
import javafx.scene.shape.Circle;
import javafx.stage.Stage;
import javafx.util.Callback;
import javafx.util.Duration;
import javax.mail.MessagingException;
import javax.mail.PasswordAuthentication;
import javax.mail.Transport;
import javax.mail.internet.AddressException;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;
import javax.swing.JFileChooser;
import javax.swing.JOptionPane;
import static javax.swing.text.html.HTML.Tag.S;
import static jdk.nashorn.internal.runtime.regexp.joni.constants.AsmConstants.S;
import static jdk.nashorn.internal.runtime.regexp.joni.encoding.CharacterType.S;
import org.controlsfx.control.Notifications;
import org.controlsfx.control.textfield.AutoCompletionBinding;
import org.controlsfx.control.textfield.TextFields;
import org.controlsfx.validation.ValidationSupport;
import org.controlsfx.validation.Validator;

public class Controller implements Initializable {

    @FXML
    private VBox pnItems = null;
    @FXML
    private Button btnSettings;

    @FXML
    private Button btnSignout;

    @FXML
    private Pane pnlOverview;

    @FXML
    private VBox MenuPrincipale;
    @FXML
    private Button btnCompet;
    @FXML
    private Button btnProduits;
    @FXML
    private Button btnCommandes;
    @FXML
    private Button btnReclamations;
    @FXML
    private Button btnBlog;
    @FXML
    private VBox MenuCommande;
    @FXML
    private Button btnRetour;
    @FXML
    private Button btnCommandesFille;
    @FXML
    private Button btnFournisseurs;
    @FXML
    private VBox MenuReclamations;
    @FXML
    private Button btnRetour1;
    @FXML
    private Button btnReclamationsFille;
    @FXML
    private Button btnCategoriesRec;
    @FXML
    private Button btnReponses;
    @FXML
    private VBox MenuCompetition;
    @FXML
    private Button btnRetour111;
    @FXML
    private Button btnCompetFille;
    @FXML
    private Button btnJeux;
    @FXML
    private Button btnCategoriesCompet;
    @FXML
    private VBox MenuProduit;
    @FXML
    private Button btnRetour1111;
    @FXML
    private Button btnProduitsFille;
    @FXML
    private Button btnCategoriesProduits;
    @FXML
    private VBox MenuBlog;
    @FXML
    private Button btnRetour11111;
    @FXML
    private Button btnPostsFille;
    @FXML
    private Button btnCommentaires;
    @FXML
    private Button btnEquipe;
    @FXML
    private Pane pnCommandes;
    @FXML
    private Pane pnFournisseur;
    @FXML
    private Pane pnReclamations;
    @FXML
    private Pane pnReclamationsCategorie;
    @FXML
    private Pane pnReponse;
    private Pane pnCompetetion;
    private Pane pnCompetetionCategorie;
    @FXML
    private Pane pnJeux;
    @FXML
    private Pane pnProduits;
    @FXML
    private Pane pnProduitsCategories;
    @FXML
    private Pane pnPosts;
    @FXML
    private Pane pnCommentaires;
    @FXML
    private Pane pnSettings;
    @FXML
    private Pane pnEquipe;
    @FXML
    private Pane pnCompetition;
    @FXML
    private Pane pnCompetitionCategorie;
    @FXML
    private TextField nomC;
    @FXML
    private Button ajouterCategorieC;
    @FXML
    private TableView<CategorieC> tableCategorieC;
    //@FXML
    //private TableColumn<CategorieC, Integer> ColumnCategorieID;
    @FXML
    private TableColumn<CategorieC, String> ColumnNomCategorie;

    ObservableList<CategorieC> listC;
    ObservableList<Jeux> listJ;
    int index = -1;

    Connection conn = null;
    ResultSet rs = null;
    PreparedStatement pst = null;
    @FXML
    private Button supprimerCategorieC;

    @FXML
    private TextField nomJeux;
    @FXML
    private Button imageJeux;
    @FXML
    private DatePicker dateJeux;
    @FXML
    private ComboBox<String> categorieJeux;
    @FXML
    private TableColumn<Jeux, Integer> ColumnJeuxId;
    @FXML
    private TableColumn<Jeux, String> ColumnJeuxNom;
    @FXML
    private TableColumn<Jeux, String> ColumnJeuxImage;
    @FXML
    private TableColumn<Jeux, String> ColumnJeuxDate;
    @FXML
    private TableView<Jeux> tableJeux;
    @FXML
    private Label labelImageJeux;
    @FXML
    private TableColumn<Jeux, String> ColumnJeuxCategorie;
    @FXML
    private TextField CategorieSearchBar;
    @FXML
    private TextField JeuxSearchBar;

    private AutoCompletionBinding<String> autocom;
    
    @FXML
    private PieChart pieChart;
    @FXML
    private TextField refp;
    @FXML
    private TextField nomproduit;
    @FXML
    private TextField Labprixproduit;
    @FXML
    private TextField marqueproduit;
    @FXML
    private TextField typeproduit;
    @FXML
    private Button btnimage;
    @FXML
    private TextField inputimage;
    @FXML
    private ComboBox<String> comboproduit;
    @FXML
    private Button ajoutproduit;
    @FXML
    private TableView<Produit> tableproduit;
    @FXML
    private TableColumn<Produit, Integer> idproduit;
    @FXML
    private TableColumn<Produit ,Integer> idreference;
    @FXML
    private TableColumn<Produit, String> idnomproduit;
    @FXML
    private TableColumn<Produit, String> idmarque;
    @FXML
    private TableColumn<Produit, Integer> prixproduit;
    @FXML
    private TableColumn<Produit, String> descriptionproduit;
    @FXML
    private TableColumn<Produit, String> catpro;
    @FXML
    private Button modifierproduit;
    @FXML
    private Button deleteprod;
    @FXML
    private Label testprix;
    @FXML
    private StackedBarChart<String, Number> stackedb;
    @FXML
    private TableView<Categorie> tabcatp;
    @FXML
    private TableColumn<Categorie, Integer> id;
    @FXML
    private TableColumn<Categorie, String> nom;
    @FXML
    private TableColumn<Categorie, String> fournisseur;
    @FXML
    private TableColumn<Categorie, String> mail;
    @FXML
    private Button updatecp;
    @FXML
    private Button modifiercp;
    @FXML
    private Button bntsave;
    @FXML
    private TextField prenomp;
    @FXML
    private TextField nomp;
    @FXML
    private TextField idp;
    @FXML
    private Label errnom;
    @FXML
    private Label errmail;
    @FXML
    private Label errnf;
    @FXML
    private PieChart statcateg;
    @FXML
    private TextField recherche;
    private boolean verificationUserEmail;
private boolean verificationUsernom;
      @FXML
    private TableView<User> tableau;
    public static TableView<User> tableau_2;
    @FXML
    private TableColumn<User, Integer> user_id;
    @FXML
    private TableColumn<User, String> user_nom;
    @FXML
    private TableColumn<User, String> user_prenom;
    @FXML
    private TableColumn<User, String> user_username;
    @FXML
    private TableColumn<User, String> user_email;
    @FXML
    private TableColumn<User, Integer> user_telephone;
    @FXML
    private TableColumn<User, String> ide;
    @FXML
    private Button modifier;
    @FXML
    private Button supprimer;
    
    @FXML
    private TableColumn<User,Integer> block;
    @FXML
    private Button bloquer;
  
    @FXML
 
    private TableColumn<Equipe, Integer> equipe_id1;
    @FXML
    private TableColumn<Equipe, String> nom_equipe1;
    @FXML
    private TableColumn<Equipe, Integer> equipe_nb1;
    @FXML
    private TableColumn<Equipe, String> equipe_jeu1;
    @FXML
    private TableView<Equipe> equipe_table1;

    @FXML
    private Button edit_boutton_equipe1;
    @FXML
    private TextField recherche1;
    @FXML
    private TableView<reclamation> tabreclam;
    @FXML
    private TableColumn<reclamation, Integer> idreclamation;
    @FXML
    private TableColumn<reclamation, String> message;
    @FXML
    private TableColumn<reclamation, String> nom_user;
    @FXML
    private TableColumn<reclamation, Date> daterec;
    @FXML
    private TableColumn<reclamation, String> emailreclam;
    @FXML
    private TableColumn<reclamation, String> etatreclam;
    @FXML
    private TableColumn<reclamation, String> categorierclamation;
    @FXML
    private TableColumn<reclamation, String> reponse;
    @FXML
    private TextField labelmessagereclam;
    @FXML
    private ComboBox<String> comboreclam;
    @FXML
    private Button ajouterreclamation;
    @FXML
    private Button modifreclamation;
    @FXML
    private Button deletereclamation;
    @FXML
    private Button export;
    @FXML
    private TextField search;
    @FXML
    private TextField nomcategR;
    @FXML
    private TextField DescripcategR;
    @FXML
    private TextField levelRec;
    @FXML
    private TableView<categorieRec> tabcatR;
    @FXML
    private TableColumn<categorieRec, Integer> idcatR;
    @FXML
    private TableColumn<categorieRec, String> nomcatR;
    @FXML
    private TableColumn<categorieRec, java.sql.Date> datecaR;
    @FXML
    private TableColumn<categorieRec, String> descriptioncatR;
    @FXML
    private TableColumn<categorieRec, String> levelcatR;
    @FXML
    private Button ajoutercatR;
    @FXML
    private Button supprimercategrierec;
    @FXML
    private Button modifiercategorierec;
    @FXML
    private Label errcr;
    @FXML
    private PieChart pieChart1;
    @FXML
    private Button highBtn;
    @FXML
    private Button medium;
     @FXML
    private TableView<Post> tabPost;
    @FXML
    private TableColumn<Post, Integer> ColId;
    @FXML
    private TableColumn<Post, String> colnom_user;
    @FXML
    private TableColumn<Post, String> Colsujet;
    @FXML
    private TableColumn<Post, String> Coldescription;
    @FXML
    private TableColumn<Post, String> Colcommunaute;
    @FXML
    private TableColumn<Post, String> ColImage;
    @FXML
    private TableColumn<Post, Integer> ColNbrj;
    @FXML
    private TableColumn<Post, java.sql.Date> ColDatep;
    @FXML
    private TableView<Commentaire> tvtabCom;
    @FXML
    private TableColumn<Commentaire, Integer> colIdcom;
    @FXML
    private TableColumn<Commentaire, String> ColNomuserc;
    @FXML
    private TableColumn<Commentaire, String> ColDescriptionc;
    @FXML
    private TableColumn<Commentaire, java.sql.Date> ColDatec;
    @FXML
    private TextField mod_descriptionc;
    public ObservableList<Post> data =FXCollections.observableArrayList();
    public ObservableList<Commentaire> comdata =FXCollections.observableArrayList();
    ObservableList<Post> dataList = FXCollections.observableArrayList();
    PostServices p =new PostServices();
    CommentaireService c = new CommentaireService();
    @FXML
    private TextField tfsujet;
    @FXML
    private TextField tfdescription;
    @FXML
    private TextField tfcommunaute;
    @FXML
    private TextField tfnomuser;
    @FXML
    private Button buttonupload;
    @FXML
    private TextField tfimagep;
    @FXML
    private TextField searchpost;
    @FXML
    private ComboBox<String> trieee;
    @FXML
    private Button low;
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
    Button[] modify_C = new Button[100];
    Button[] supprimerC = new Button[100];
    Button[] detailC=new Button[100];
    Button[] imprimerC = new Button[100];
                    int indexbouza=101; 
        

    LivreurCRUD Lc = new LivreurCRUD();
    List<Livreur> lm = Lc.afficherLivreur();
    CommandeCRUD ComC = new CommandeCRUD();
    List<Commande> Lcommande = ComC.afficherCommande();
     AdresseCRUD Ad = new AdresseCRUD();
    List<Adresse> Ladresse = Ad.afficherAdresse();
    @FXML
    private TableView<Commande> TableCommande;
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
    private Button AjouterCommande;
    @FXML
    private TableColumn<Commande,String> IdCommande;
    @FXML
    private TableColumn<Commande,String> IdLivreur;
    @FXML
    private TableColumn<Commande,Button> DetailAdresse;
    @FXML
    private TableColumn<Commande,String> Produit;
    @FXML
    private TableColumn<Commande,Integer> Quantite;
    @FXML
    private TableColumn<Commande,Float> Total;
    @FXML
    private TableColumn<Commande,Button> SupprimerC;
    @FXML
    private TableColumn<Commande,Button> modifierC;
   
    @FXML
    private TextField getRecherche;
    @FXML
    private PieChart ordersChart;
    @FXML
    private TextField getRecherche1;
    @FXML
    private TableColumn<Commande, Button> exportcommande;
    @FXML
    private Button RechercherLivreur;
    @FXML
    private Button RechercherCommande;
    @FXML
    private Button refreshCommande;
    @FXML
    private Button expertTableCommande;
   
    
    public void RefreshTable() {
        //ColumnCategorieID.setCellValueFactory(new PropertyValueFactory<CategorieC, Integer>("id"));
        ColumnNomCategorie.setCellValueFactory(new PropertyValueFactory<CategorieC, String>("nom"));
        try {
            listC = MyConnection.getCategories();
        } catch (SQLException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        } catch (ClassNotFoundException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }
        tableCategorieC.setItems(listC);
        tableCategorieC.setEditable(true);
        ColumnNomCategorie.setCellFactory(TextFieldTableCell.forTableColumn());

    }

    public void RefreshTableJeux() {
        ColumnJeuxId.setCellValueFactory(new PropertyValueFactory<Jeux, Integer>("id"));
        ColumnJeuxNom.setCellValueFactory(new PropertyValueFactory<Jeux, String>("nom"));
        ColumnJeuxImage.setCellValueFactory(new PropertyValueFactory<Jeux, String>("image"));
        ColumnJeuxDate.setCellValueFactory(new PropertyValueFactory<Jeux, String>("dates"));
        ColumnJeuxCategorie.setCellValueFactory(new PropertyValueFactory<Jeux, String>("categorie_id"));

        try {
            listJ = MyConnection.getGames();
        } catch (SQLException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        } catch (ClassNotFoundException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }
        tableJeux.setItems(listJ);
        tableJeux.setEditable(true);
        //ColumnJeuxId.setCellFactory(TextFieldTableCell.forTableColumn());
        ColumnJeuxNom.setCellFactory(TextFieldTableCell.forTableColumn());
        ColumnJeuxImage.setCellFactory(TextFieldTableCell.forTableColumn());
        ColumnJeuxDate.setCellFactory(TextFieldTableCell.forTableColumn());
        ColumnJeuxCategorie.setCellFactory(TextFieldTableCell.forTableColumn());
    }
    ArrayList name = new ArrayList();
    
    public void autocComplete (String txt){
        String complete="";
        int start =txt.length();
        int last =txt.length();
        int a; 
        for (a=0;a<name.size();a++){
            if(name.get(a).toString().startsWith(txt)){
                complete=name.get(a).toString();
                last = complete.length();
                break;
            }
        }
        if(last>start){
            CategorieSearchBar.setText(complete);
            CategorieSearchBar.positionCaret(last);
            CategorieSearchBar.positionCaret(a);
            
            
        }
                   
    }


    @Override
    public void initialize(URL location, ResourceBundle resources) {
        ////////////// charoufa////////
        try {
           afficherEvent();
           tfnomuser.setVisible(false);
           
            
        } catch (SQLException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }
//        ObservableList<String> dataa = FXCollections.observableArrayList("nombre de jaime", "date");
//     trieee.setItems(dataa);
     ///////////charoufa////////////
     
     ///////bawez//////////
          displayChart();

       LivreurCRUD Li = new LivreurCRUD();
             List<Livreur> ltt = Li.afficherLivreur();
             TableLivreur.getItems().clear();
          afficher_livreur(ltt);
           CommandeCRUD Cc = new CommandeCRUD();
             List<Commande> lt = Cc.afficherCommande();
             TableCommande.getItems().clear();
          afficher_Commande(lt);
          //////////wfe bawez///////////
      ////////////////////kofta starrt yeaaah 
     ServicecategorieRec catR = new ServicecategorieRec();
        ServiceReclamation reclam = new ServiceReclamation();
        ObservableList<String> listk = FXCollections.observableArrayList();

        try {
            for (int i = 0; i < catR.afficher().size(); i++) {
                listk.add(catR.afficher().get(i).getCatrec());
            }
            comboreclam.setItems(listk);
        } catch (SQLException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }

        MenuPrincipale.toFront();
        pnlOverview.toFront();
        tabcatR.setEditable(true);
        
        tabreclam.setEditable(true);
       
         {
           

            idcatR.setCellValueFactory(new PropertyValueFactory<categorieRec, Integer>("id"));
            nomcatR.setCellValueFactory(new PropertyValueFactory<categorieRec, String>("catrec"));

            datecaR.setCellValueFactory(new PropertyValueFactory<categorieRec, java.sql.Date>("date"));
            descriptioncatR.setCellValueFactory(new PropertyValueFactory<categorieRec, String>("descrip"));

            levelcatR.setCellValueFactory(new PropertyValueFactory<categorieRec, String>("level"));

            try {
                System.out.print(catR.afficher());

            } catch (SQLException ex) {
                Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
            }

            try {
                tabcatR.setItems(catR.afficher());

                // TODO
            } catch (SQLException ex) {
                Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
            }
            tabcatR.setEditable(true);

            deletereclamation.setOnMouseClicked((MouseEvent event) -> {
                ServiceReclamation serv = new ServiceReclamation();

                reclamation r = tabreclam.getSelectionModel().getSelectedItem();
                //   System.out.println(categorie.getId());
                try {
                    serv.supprimer(r.getId());
                    tabreclam.setItems(serv.afficher());

                    //FXMLLoader loader = new FXMLLoader();
//            loader.setLocation(getClass().getResource("/tableView/addStudent.fxml"));
                } catch (SQLException ex) {
                    Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);

                }
            });

            idreclamation.setCellValueFactory(new PropertyValueFactory<reclamation, Integer>("id"));
            message.setCellValueFactory(new PropertyValueFactory<reclamation, String>("message"));

            nom_user.setCellValueFactory(new PropertyValueFactory<reclamation, String>("nom_user"));
          //  daterec.setCellValueFactory(new PropertyValueFactory<reclamation,Date>("date"));

            emailreclam.setCellValueFactory(new PropertyValueFactory<reclamation, String>("email"));
            etatreclam.setCellValueFactory(new PropertyValueFactory<reclamation, String>("etat"));
            categorierclamation.setCellValueFactory(new PropertyValueFactory<reclamation, String>("test"));
            tabreclam.setEditable(true);
            reponse.setEditable(true);
            reponse.setCellValueFactory(new PropertyValueFactory<reclamation, String>("rep"));
            
            try {
                System.out.print(catR.afficher());

            } catch (SQLException ex) {
                Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
            }

            try {
                tabreclam.setItems(reclam.afficher());

                // TODO
            } catch (SQLException ex) {
                Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
            }

            supprimercategrierec.setOnMouseClicked((MouseEvent event) -> {

                categorieRec categorie = tabcatR.getSelectionModel().getSelectedItem();
                //   System.out.println(categorie.getId());
                try {
                    catR.supprimer(categorie.getId());
                    tabcatR.setItems(catR.afficher());

                    //FXMLLoader loader = new FXMLLoader();
//            loader.setLocation(getClass().getResource("/tableView/addStudent.fxml"));
                } catch (SQLException ex) {
                    Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
                }
            });

            nomcatR.setCellFactory(TextFieldTableCell.forTableColumn());
            nomcatR.setOnEditCommit(e -> {
                e.getTableView().getItems().get(e.getTablePosition().getRow()).setCatrec(e.getNewValue());
            });
            
            reponse.setCellFactory(TextFieldTableCell.forTableColumn());
            reponse.setOnEditCommit(e -> {
                e.getTableView().getItems().get(e.getTablePosition().getRow()).setRep(e.getNewValue());
                try {
                    reclam.updateResponse(e.getTableView().getItems().get(e.getTablePosition().getRow()).getId(),e.getNewValue());
                    this.tabreclam.setItems(reclam.afficher());
                } catch (SQLException ex) {
                    Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
                }
            });

            descriptioncatR.setCellFactory(TextFieldTableCell.forTableColumn());
            descriptioncatR.setOnEditCommit(e -> {
                e.getTableView().getItems().get(e.getTablePosition().getRow()).setDescrip(e.getNewValue());
            });

            levelcatR.setCellFactory(TextFieldTableCell.forTableColumn());
            levelcatR.setOnEditCommit(e -> {
                e.getTableView().getItems().get(e.getTablePosition().getRow()).setLevel(e.getNewValue());
            });

            tabcatR.setEditable(true);

            modifiercategorierec.setOnMouseClicked(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    categorieRec categorie = tabcatR.getSelectionModel().getSelectedItem();
                    //   System.out.println(categorie.getId());

                    try {
                        catR.modifier(categorie.getId(), categorie);
                    } catch (SQLException ex) {
                        Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
                    }
                    try {
                        tabcatR.setItems(catR.afficher());
                    } catch (SQLException ex) {
                        Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
                    }

                }
            });
            
            ObservableList<PieChart.Data> pieChartData =
            FXCollections.observableArrayList();
           
            try {
                for (int j = 0; j < catR.afficher().size(); j++) {
                    
                    try {
                        pieChartData.add(new PieChart.Data(catR.afficher().get(j).getCatrec(), reclam.count(catR.afficher().get(j).getId())));
                    } catch (SQLException ex) {
                        Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
                    }
                }
            } catch (SQLException ex) {
                Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
            }       
            this.pieChart1.setData(pieChartData);
            
            
            
            
        } 
      
      ////////koftaa ennnnaaa yeaaaaaah
        
        
        
        
                //////////////////////////// start souisssiiii categorie et produit 
ProduitService per = new ProduitService();
        try {
            tableproduit.setItems(per.afficher());
        } catch (SQLException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }

        
       // BarChart barChart = createBarChart();

       // TitledPane t2 = new TitledPane("Bar Chart", barChart);
        
       
        showstat();
        staack();
        
        
        
        
        
        
        
        
        
        
                pnlOverview.toFront();
                pnProduitsCategories.toBack();
                

        

        /*   Node[] nodes = new Node[10];
        MenuPrincipale.toFront();
        pnlOverview.toFront();
        for (int i = 0; i < nodes.length; i++) {
            try {

                final int j = i;
                nodes[i] = FXMLLoader.load(getClass().getResource("Item.fxml"));

                //give the items some effect
                nodes[i].setOnMouseEntered(event -> {
                    nodes[j].setStyle("-fx-background-color : #0A0E3F");
                });
                nodes[i].setOnMouseExited(event -> {
                    nodes[j].setStyle("-fx-background-color : #02030A");
                });
                pnItems.getChildren().add(nodes[i]);

            } catch (IOException e) {
                e.printStackTrace();
            }

        }*/
        
        
        
        
        
                  ProduitService Prod = new ProduitService();   
                  CategorieService catp = new CategorieService();
      

        
 ObservableList<String> listcp = FXCollections.observableArrayList();
       
        try {
            for(int i=0;i<catp.afficher().size();i++)
            {
                listcp.add(catp.afficher().get(i).getNom_categ());
            }
            comboproduit.setItems(listcp);
        }
        catch (SQLException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }
       
        
                tableproduit.setEditable(true);

//        this.web.getEngine().load("http://127.0.0.1:8000/front");
        

       
        idproduit.setCellValueFactory(new PropertyValueFactory<Produit, Integer>("id"));
                idreference.setCellValueFactory(new PropertyValueFactory<Produit, Integer>("reference"));

        idnomproduit.setCellValueFactory(new PropertyValueFactory<Produit, String>("nom"));
        idmarque.setCellValueFactory(new PropertyValueFactory<Produit, String>("marque"));
        
                        prixproduit.setCellValueFactory(new PropertyValueFactory<Produit, Integer>("prix"));

        descriptionproduit.setCellValueFactory(new PropertyValueFactory<Produit, String>("type"));
        catpro.setText("categ");
                catpro.setCellValueFactory(new PropertyValueFactory<Produit, String>("categ"));

        try {
            System.out.print(Prod.afficher());

        } catch (SQLException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }
             


       
        
       
        
        
      //  comboproduit.setItems(Prod.afficher().toString());
        
        
        
        
        
        
        
        
        
        

        //   list= cat.afficher();

        //    id.setText(list.get(0).toString());
        //  id.setCellFactory(new PropertyValueFactory<Categorie,Integer>("id"));
      //  id.setCellValueFactory(new PropertyValueFactory<Categorie, Integer>("id"));
        nom.setCellValueFactory(new PropertyValueFactory<Categorie, String>("nom_categ"));
        fournisseur.setCellValueFactory(new PropertyValueFactory<Categorie, String>("mail_fournisseur"));
        mail.setCellValueFactory(new PropertyValueFactory<Categorie, String>("nom_fournisseur"));

        try {
            tabcatp.setItems(catp.afficher());

            // TODO
        } catch (SQLException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }
        // updatecp.setOnMouseClicked(value);

        updatecp.setOnMouseClicked((MouseEvent event) -> {
                  //  stackedb.getData().clear();


            
            
            
       
            
       
            
            
            
            
            Categorie categorie = tabcatp.getSelectionModel().getSelectedItem();
            String supp ="Voulez-vous supprimer la catégorie" +nomC.getText();
            
            try {
                int I =JOptionPane.showConfirmDialog(null,supp);
       if(I!=1)
       {
                catp.supprimer(categorie.getId());
       }
                tabcatp.setItems(catp.afficher());

                //FXMLLoader loader = new FXMLLoader();
//            loader.setLocation(getClass().getResource("/tableView/addStudent.fxml"));
            } catch (SQLException ex) {
                Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
            }
        });

        nom.setCellFactory(TextFieldTableCell.forTableColumn());
        nom.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setNom_categ(e.getNewValue());
        });

        fournisseur.setCellFactory(TextFieldTableCell.forTableColumn());
        fournisseur.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setNom_fournisseur(e.getNewValue());
        });

        mail.setCellFactory(TextFieldTableCell.forTableColumn());
        mail.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setMail_fournisseur(e.getNewValue());
        });

        tabcatp.setEditable(true);

        modifiercp.setOnMouseClicked(new EventHandler<MouseEvent>() {
            @Override
            public void handle(MouseEvent event) {
                   //     stackedb.getData().clear();

                Categorie categorie = tabcatp.getSelectionModel().getSelectedItem();
             //   System.out.println(categorie.getId());

                try {
                    catp.modifier(categorie.getId(), categorie);
                } catch (SQLException ex) {
                    Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
                }
                try {
                    tabcatp.setItems(catp.afficher());
                } catch (SQLException ex) {
                    Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
                }

            }
        });
        tableproduit.setEditable(true);
       //  idreference.setCellFactory(TextFieldTableCell.forTableColumn());
        idreference.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setReference(e.getNewValue());
        });

       idnomproduit.setCellFactory(TextFieldTableCell.forTableColumn());
        idnomproduit.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setNom(e.getNewValue());
        });
staack();
        idmarque.setCellFactory(TextFieldTableCell.forTableColumn());
        idmarque.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setMarque(e.getNewValue());
        });
     //   prixproduit.setCellFactory(TextFieldTableCell.forTableColumn());
        prixproduit.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setPrix(e.getNewValue());
        });
        
         descriptionproduit.setCellFactory(TextFieldTableCell.forTableColumn());
        descriptionproduit.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setType(e.getNewValue());
        });

        tableproduit.setEditable(true);

        
        modifierproduit.setOnMouseClicked(new EventHandler<MouseEvent>() {
            
            @Override
            public void handle(MouseEvent event) {
                      //  stackedb.getData().clear();
staack();
                Produit p = tableproduit.getSelectionModel().getSelectedItem();
             //   System.out.println(categorie.getId());

                try {
                    System.err.println("dezgzgeyuzeghjdufyshgjdfskuhjg");
                    Prod.modifier(p.getId(), p);
                } catch (SQLException ex) {
                    Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
                }
                try {
                    tabcatp.setItems(catp.afficher());
                } catch (SQLException ex) {
                    Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
                }

            }
        });
        
        deleteprod.setOnMouseClicked((MouseEvent event) -> {
              //      stackedb.getData().clear();
              staack();


            Produit p = tableproduit.getSelectionModel().getSelectedItem();
         //   System.out.println(categorie.getId());
            try {
                Prod.supprimer(p.getId());
                tableproduit.setItems(Prod.afficher());

                //FXMLLoader loader = new FXMLLoader();
//            loader.setLocation(getClass().getResource("/tableView/addStudent.fxml"));
            } catch (SQLException ex) {
                Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
            }
        });
        
        
        
        
         try {  
       CategorieService serv = new CategorieService();
            List<String> a;
      
            a = serv.getCat();
                        TextFields.bindAutoCompletion(recherche, serv.getCat());

         
          //  nom.setCellValueFactory(new PropertyValueFactory<Categorie, String>("nom"));

        
            tabcatp.setItems(serv.afficher());
        

            FilteredList<Categorie> filteredData;
        
            filteredData = new FilteredList<>(serv.afficher(), b -> true);
        

            recherche.textProperty().addListener((observable, oldvalue, newValue) -> {
                filteredData.setPredicate(Categorie -> {
                    
                    if (newValue.isEmpty() || newValue == null) {
                        return true;
                    }
                    String searchkeyword = newValue.toLowerCase();
                    if (Categorie.getNom_categ().toLowerCase().indexOf(searchkeyword) > -1) {
                        return true;        // Means we found a match in ProductName
                    } else {
                        return false; // no match found
                    }
                });
            });
            
            SortedList<Categorie> sortedData = new SortedList<>(filteredData);
            sortedData.comparatorProperty().bind(tabcatp.comparatorProperty());
            tabcatp.setItems(sortedData);
       
        } catch (SQLException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        //////////////////////////// end souisssiiii categorie et produit 
       //partie khalil//
       
           Equipe_service sss = new Equipe_service();

        
         User_service ss = new User_service();
        try {
            ss.show();
        } catch (SQLException ex) {
            //Logger.getLogger(Affichage_backController.class.getName()).log(Level.SEVERE, null, ex);
        }
         user_nom.setCellValueFactory(new PropertyValueFactory<User, String>("nom"));
            user_prenom.setCellValueFactory(new PropertyValueFactory<User, String>("prenom"));
            user_email.setCellValueFactory(new PropertyValueFactory<User, String>("email"));
            block.setCellValueFactory(new PropertyValueFactory<User, Integer>("block"));
            
        user_username.setCellValueFactory(new PropertyValueFactory<User, String>("username"));
        user_id.setCellValueFactory(new PropertyValueFactory<User, Integer>("id"));
        ide.setCellValueFactory(new PropertyValueFactory<User, String>("x"));
        user_telephone.setCellValueFactory(new PropertyValueFactory<User, Integer>("tel"));
        user_nom.setCellFactory(TextFieldTableCell.forTableColumn());
        block.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setBlock(e.getNewValue());});

        user_prenom.setCellFactory(TextFieldTableCell.forTableColumn());
        user_prenom.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setPrenom(e.getNewValue());
        });

        user_email.setCellFactory(TextFieldTableCell.forTableColumn());
        user_email.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setEmail(e.getNewValue());
        });

        user_username.setCellFactory(TextFieldTableCell.forTableColumn());
        user_username.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setUsername(e.getNewValue());
        });

             equipe_id1.setCellValueFactory(new PropertyValueFactory<Equipe, Integer>("id_e"));
        equipe_jeu1.setCellValueFactory(new PropertyValueFactory<Equipe, String>("jeu"));
        equipe_nb1.setCellValueFactory(new PropertyValueFactory<Equipe, Integer>("nb"));
        nom_equipe1.setCellValueFactory(new PropertyValueFactory<Equipe, String>("nom_equipe"));

        nom_equipe1.setCellFactory(TextFieldTableCell.forTableColumn());
        nom_equipe1.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setNom_equipe(e.getNewValue());
        });
        equipe_jeu1.setCellFactory(TextFieldTableCell.forTableColumn());
        equipe_jeu1.setOnEditCommit(e -> {
            e.getTableView().getItems().get(e.getTablePosition().getRow()).setJeu(e.getNewValue());

        });
        tableau.setEditable(true);
        Equipe_service ssQ = new Equipe_service();

        equipe_table1.setItems(ssQ.afficherEquipes());
        equipe_table1.setEditable(true);
      

        try {
            for (int i = 0; i < ss.show().size(); i++) {
                String reqeq = "SELECT * FROM equipe WHERE `id`=" + ss.show().get(i).getId_e() + " ";
                Connection cnx = MyConnection.getInstance().getCnx();

                Statement st = cnx.createStatement();

                ResultSet rs = st.executeQuery(reqeq);
                while (rs.next()) {

                    String x = rs.getString("nom_equipe");

                }
            }

        } catch (SQLException ex) {
            //Logger.getLogger(Affichage_backController.class.getName()).log(Level.SEVERE, null, ex);
        }

        //  user_telephone.setCellFactory(TextFieldTableCell.forTableColumn());
        //user_telephone.setOnEditCommit(e->{
        // e.getTableView().getItems().get(e.getTablePosition().getRow()).setTel(e.getNewValue());});
        User_service s = new User_service();
        try {
            user_id.setText(s.show().toString());
        } catch (SQLException ex) {
            //Logger.getLogger(Affichage_backController.class.getName()).log(Level.SEVERE, null, ex);
        }
        try {
            tableau.setItems(s.show());
           // System.out.println("AHAAAWAAAAA"+Session.getLoggedInUser());

            // TODO
        } catch (SQLException ex) {
           // Logger.getLogger(Affichage_backController.class.getName()).log(Level.SEVERE, null, ex);
        }
        modifier.setOnMouseClicked(new EventHandler<MouseEvent>() {
            
            @Override
            public void handle(MouseEvent event) {
                User user = tableau.getSelectionModel().getSelectedItem();
                System.out.println(user.getId());

                s.modifierUtilisateurss(user.getId(), user.getNom(), user.getPrenom(), user.getEmail(), user.getMdp(), 0000, user.getUsername());
                try {
                    tableau.setItems(s.show());

                    //FXMLLoader loader = new FXMLLoader();
//            loader.setLocation(getClass().getResource("/tableView/addStudent.fxml"));
                } catch (SQLException ex) {
                    //Logger.getLogger(Affichage_backController.class.getName()).log(Level.SEVERE, null, ex);
                }
                  Notifications not=Notifications.create().
                        title("Modification").
                        text("Modification Accepté").
                        hideAfter(Duration.seconds(5)).
                        position(Pos.CENTER_RIGHT);
                not.darkStyle();
                not.show();
            }
        }
        );
        supprimer.setOnMouseClicked((MouseEvent event) -> {

            User user = tableau.getSelectionModel().getSelectedItem();

            s.supprimerUtilisateurs(user.getId());
            try {

                tableau.setItems(s.show());

            } catch (SQLException ex) {
                //Logger.getLogger(Affichage_backController.class.getName()).log(Level.SEVERE, null, ex);
            }
  Notifications not=Notifications.create().
                        title("Accepté").
                        text("User supprimé").
                        hideAfter(Duration.seconds(5)).
                        position(Pos.CENTER_RIGHT);
                not.darkStyle();
                not.show();
        }
        );
         bloquer.setOnMouseClicked((MouseEvent event) -> {

            User user = tableau.getSelectionModel().getSelectedItem();
             System.out.println(user.getTel()); ;
            s.bloquage(user);
            try {

                tableau.setItems(s.show());

            } catch (SQLException ex) {
                //Logger.getLogger(Affichage_backController.class.getName()).log(Level.SEVERE, null, ex);
            }
  Notifications not=Notifications.create().
                        title("Blockage").
                        text("User bloqué/debloqué").
                        hideAfter(Duration.seconds(5)).
                        position(Pos.CENTER_RIGHT);
                not.darkStyle();
                not.show();
        });
         
        btnSignout.setOnMouseClicked((MouseEvent event) -> {
        
        
             try {
                 Session.setLoggedInUser(null);
                 Parent root = FXMLLoader.load(getClass().getResource("Sign Up.fxml"));
                 Scene scene = new Scene(root);
                 
                 Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
                 window.setScene(scene);
                 window.show();
             } catch (IOException ex) {
                 Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
             }
        
        
        
        
        
        
        });
        
       

       

        

        // TODOcellData -> cellData.getValue().valueProperty()
        edit_boutton_equipe1.setOnMouseClicked(new EventHandler<MouseEvent>() {
            @Override
            public void handle(MouseEvent event) {
                Equipe equipe = equipe_table1.getSelectionModel().getSelectedItem();
                System.out.println(equipe.getId_e());
                sss.modifierEquipe(equipe.getId_e(), equipe.getNom_equipe(), equipe.getNb(), equipe.getJeu());

                equipe_table1.setItems(sss.afficherEquipes());

                //FXMLLoader loader = new FXMLLoader();
//            loader.setLocation(getClass().getResource("/tableView/addStudent.fxml"));
            }
        });
       
       /////////////////////end partie khalil//////////
        pieShow();
        try {
            validationSupport.registerValidator(nomC, Validator.createEmptyValidator("Ce champ est obligatoire"));

            RefreshTable();
            RefreshTableJeux();
            Node[] nodes = new Node[10];
            MenuPrincipale.toFront();
            pnlOverview.toFront();
            for (int i = 0; i < nodes.length; i++) {
                try {

                    final int j = i;
                    nodes[i] = FXMLLoader.load(getClass().getResource("Item.fxml"));

                    //give the items some effect
                    nodes[i].setOnMouseEntered(event -> {
                        nodes[j].setStyle("-fx-background-color : #0A0E3F");
                    });
                    nodes[i].setOnMouseExited(event -> {
                        nodes[j].setStyle("-fx-background-color : #02030A");
                    });
                    pnItems.getChildren().add(nodes[i]);

                } catch (IOException e) {
                    e.printStackTrace();
                }
            }
            // affichage categorie + search
            
            ServiceCategoriec serv = new ServiceCategoriec();
            List<String> a = serv.getCat();
            TextFields.bindAutoCompletion(CategorieSearchBar, a);
            ColumnNomCategorie.setCellValueFactory(new PropertyValueFactory<CategorieC, String>("nom"));

            tableCategorieC.setItems(serv.afficher());

            FilteredList<CategorieC> filteredData = new FilteredList<>(serv.afficher(), b -> true);

            CategorieSearchBar.textProperty().addListener((observable, oldvalue, newValue) -> {
                filteredData.setPredicate(CategorieC -> {
                    
                    if (newValue.isEmpty() || newValue == null) {
                        return true;
                    }
                    String searchkeyword = newValue.toLowerCase();
                    if (CategorieC.getNom().toLowerCase().indexOf(searchkeyword) > -1) {
                        return true; // Means we found a match in ProductName
                    } else {
                        return false; // no match found
                    }
                });
            });
            
            SortedList<CategorieC> sortedData = new SortedList<>(filteredData);
            sortedData.comparatorProperty().bind(tableCategorieC.comparatorProperty());
            tableCategorieC.setItems(sortedData);

            // wfeet
            ColumnJeuxId.setCellValueFactory(new PropertyValueFactory<Jeux, Integer>("id"));
            ColumnJeuxNom.setCellValueFactory(new PropertyValueFactory<Jeux, String>("nom"));
            ColumnJeuxCategorie.setCellValueFactory(new Callback<CellDataFeatures<Jeux, String>, ObservableValue<String>>() {

                @Override
                public ObservableValue<String> call(CellDataFeatures<Jeux, String> param) {
                    return new SimpleStringProperty(param.getValue().getCategorie().getNom());
                }
            });
            ColumnJeuxImage.setCellValueFactory(new PropertyValueFactory<Jeux, String>("Image"));
            ColumnJeuxDate.setCellValueFactory(new PropertyValueFactory<Jeux, String>("dates"));

            ServiceJeux j = new ServiceJeux();
            try {
                tableJeux.setItems(j.afficher());
                //recherche jeux 
            FilteredList<Jeux> filteredDataJeux = new FilteredList<>(j.afficher(), b -> true);

            JeuxSearchBar.textProperty().addListener((observable, oldvalue, newValue) -> {
                filteredDataJeux.setPredicate(Jeux -> {
                    
                    if (newValue.isEmpty() || newValue == null) {
                        return true;
                    }
                    String searchkeyword = newValue.toLowerCase();
                    if (Jeux.getNom().toLowerCase().indexOf(searchkeyword) > -1) {
                         return true;// Means we found a match in ProductName
                    } else if (Jeux.getImage().toLowerCase().indexOf(searchkeyword) > -1){
                        return true;
                    }
                    else if (Jeux.getDates().toLowerCase().indexOf(searchkeyword) > -1){
                        return true;
                    }
                    else if (Jeux.getCategorie().getNom().toLowerCase().indexOf(searchkeyword) > -1){
                        return true;
                    } 
                    else {
                        return false; // no match found
                    }
                });
            });
            
            SortedList<Jeux> sortedDataJeux = new SortedList<>(filteredDataJeux);
            sortedDataJeux.comparatorProperty().bind(tableJeux.comparatorProperty());
            tableJeux.setItems(sortedDataJeux);
        
        // wfet 
                
                
                
                
                
            } catch (Exception e) {
                Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, e);
            }

            ObservableList<String> list = FXCollections.observableArrayList();
            ServiceCategoriec cat = new ServiceCategoriec();
            try {
                for (int i = 0; i < cat.afficher().size(); i++) {
                    list.add(cat.afficher().get(i).getNom());
                }
                categorieJeux.setItems(list);
            } catch (SQLException ex) {
                Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
            }
        } catch (SQLException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }
        /*            ServiceCategoriec cat = new ServiceCategoriec();
                    ObservableList<String> v = null;
        try {
            v =  cat.Stat();
        } catch (SQLException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }*/
        
        
    }   

    @FXML
    private void fnCompet(ActionEvent event) {
        MenuCompetition.toFront();
    }

    @FXML
    private void fnProduits(ActionEvent event) {
        MenuProduit.toFront();
                pnProduitsCategories.toFront();

    }

    @FXML
    private void fnCommandes(ActionEvent event) {
        pnCommandes.toFront();
    }

    @FXML
    private void fnReclamations(ActionEvent event) {
        pnReclamations.toFront();

                MenuReclamations.toFront();

    }

    @FXML
    private void fnBlog(ActionEvent event) {
        MenuBlog.toFront();
        pnPosts.toFront();
    }

    @FXML
    private void fnSettings(ActionEvent event) {
        pnSettings.toFront();
    }

    @FXML
    private void fnSignout(ActionEvent event) {
    }

    @FXML
    private void fnRetour(ActionEvent event) {
        MenuPrincipale.toFront();
        pnlOverview.toFront();
    }

    @FXML
    private void fnCommandesFille(ActionEvent event) {
        pnCommandes.toFront();
    }

    @FXML
    private void fnFournisseurs(ActionEvent event) {
        pnFournisseur.toFront();
    }

    @FXML
    private void fnReclamationsFille(ActionEvent event) {
        pnReclamations.toFront();
    }

    @FXML
    private void fnCategoriesRec(ActionEvent event) {
        pnReclamationsCategorie.toFront();
    }

    @FXML
    private void fnReponses(ActionEvent event) {
        pnReponse.toFront();
    }

    @FXML
    private void fnCompetFille(ActionEvent event) {
        pnCompetition.toFront();
    }

    @FXML
    private void fnJeux(ActionEvent event) {
        pnJeux.toFront();
    }

    @FXML
    private void fnCategoriesCompet(ActionEvent event) {
        
        pieShow();
        pnCompetitionCategorie.toFront();

    }

    @FXML
    private void fnProduitFille(ActionEvent event) {
        pnProduits.toFront();
    }

    @FXML
    private void fnCategoriesProduits(ActionEvent event) {
        pnProduitsCategories.toFront();
        showstat();
                staack();
    }

    @FXML
    private void fnPostsFille(ActionEvent event) {
        pnPosts.toFront();
    }

    @FXML
    private void fnCommentaires(ActionEvent event) {
        pnCommentaires.toFront();
    }

    @FXML
    private void fnEquipe(ActionEvent event) {
        pnEquipe.toFront();
    }
    ValidationSupport validationSupport=new ValidationSupport(); 
    @FXML
    private void AjouterCategorie(ActionEvent event) {

        String resNom = nomC.getText();
        int x = 0;
        if (nomC.getText().matches("[a-zA-Z]+") == false && nomC.getText().length() != 0) {
            nomC.setStyle("-fx-border-color: red ; -fx-border-width: 2px;");
            new animatefx.animation.Shake(nomC).play();
            
            Alert alert = new Alert(AlertType.ERROR, "Le champ nom doit contenir que des lettres!!", ButtonType.OK);
            alert.getDialogPane().setMinHeight(Region.USE_PREF_SIZE);
            alert.show();
            nomC.setStyle(null);
            x++;
            System.out.println("hot ken des lettres");
        } else if (nomC.getText().length() == 0) {
            nomC.setStyle("-fx-border-color: red ; -fx-border-width: 2px;");
            new animatefx.animation.Shake(nomC).play();
            Alert alert = new Alert(AlertType.ERROR, "Le champ nom est vide!!", ButtonType.OK);
            alert.getDialogPane().setMinHeight(Region.USE_PREF_SIZE);
            alert.show();
            x++;
            System.out.println("champ feragh");
        } else if (nomC.getText().substring(0, 1).toUpperCase().equals(nomC.getText().substring(0, 1)) == false) {
            nomC.setStyle("-fx-border-color: red ; -fx-border-width: 2px;");
            new animatefx.animation.Shake(nomC).play();
            Alert alert = new Alert(AlertType.ERROR, "Le champ nom doit commencer par une lettre majuscule!!", ButtonType.OK);
            alert.getDialogPane().setMinHeight(Region.USE_PREF_SIZE);
            alert.show();
            nomC.setStyle(null);
            x++;
            System.out.println("lettre lezemha bel kbir");
        } else {
            nomC.setStyle(null);

            try {
                System.out.println(x);
                if (x == 0) {
                    CategorieC p = new CategorieC(resNom);
                    ServiceCategoriec pcd = new ServiceCategoriec();
                    if(pcd.verif_cred(p)){
                    pcd.ajouter(p);
                    RefreshTable();
                    }
                    else{
                    Alert alert = new Alert(AlertType.ERROR, "Catégorie existe dejà", ButtonType.OK);
                    alert.getDialogPane().setMinHeight(Region.USE_PREF_SIZE);
                    alert.show();
                    }
                }
            } catch (SQLException ex) {
                System.out.println(ex.getMessage());
            }
            ObservableList<String> list = FXCollections.observableArrayList();
            ServiceCategoriec cat = new ServiceCategoriec();
            try {
                for (int i = 0; i < cat.afficher().size(); i++) {
                    list.add(cat.afficher().get(i).getNom());
                }
                categorieJeux.setItems(list);
            } catch (SQLException ex) {
                Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }

    @FXML
    private void SupprimerCategorie() throws SQLException {
        try {
            
            ServiceCategoriec s = new ServiceCategoriec();
            CategorieC c = tableCategorieC.getSelectionModel().getSelectedItem();

            Alert alert = new Alert(AlertType.CONFIRMATION, "Voulez-vous supprimer la catégorie " + nomC.getText() + " ?", ButtonType.YES, ButtonType.NO, ButtonType.CANCEL);
            alert.showAndWait();

            if (alert.getResult() == ButtonType.YES) {
                s.supprimer(c.getId());
                pieShow();
                        
            }
        } catch (SQLException ex) {
            Logger.getLogger(ServiceCategoriec.class.getName()).log(Level.SEVERE, null, ex);
        }
        RefreshTable();
    }

    @FXML
    void getSelected(MouseEvent event) {
        index = tableCategorieC.getSelectionModel().getSelectedIndex();
        if (index <= -1) {
            return;
        }

        nomC.setText(ColumnNomCategorie.getCellData(index).toString());

    }

    void getSelectedJeux(MouseEvent event) {
        index = tableJeux.getSelectionModel().getSelectedIndex();
        if (index <= -1) {
            return;
        }

        nomJeux.setText(ColumnJeuxNom.getCellData(index).toString());
        imageJeux.setText(ColumnJeuxImage.getCellData(index).toString());
        //dateJeux.setValue(ColumnJeuxDate.getCellData(index));

    }

    public void onEditChangeJeux(TableColumn.CellEditEvent<Jeux, String> jeuxStringCellEditEvent) throws SQLException {
        Jeux j = tableJeux.getSelectionModel().getSelectedItem();
        j.setNom(jeuxStringCellEditEvent.getNewValue());
        j.setImage(jeuxStringCellEditEvent.getNewValue());
        RefreshTableJeux();
        ServiceJeux s = new ServiceJeux();
        String name = j.getNom();
        String image = j.getImage();

        Jeux a = new Jeux(j.getId(), name, j.getImage(), j.getDates(), j.getUpd(), j.getCategorie());
        s.modifier(j.getId(), a);
        RefreshTableJeux();
        tableJeux.setItems(s.afficher());
    }

    public void onEditChange(TableColumn.CellEditEvent<CategorieC, String> categorieStringCellEditEvent) throws SQLException {
        CategorieC c = tableCategorieC.getSelectionModel().getSelectedItem();
        c.setNom(categorieStringCellEditEvent.getNewValue());
        RefreshTable();
        ServiceCategoriec s = new ServiceCategoriec();
        String name = c.getNom();
        CategorieC a = new CategorieC(c.getId(), name);
        s.modifier(c.getId(), a);
        RefreshTable();
    }

    @FXML
    private void AjouterJeux(ActionEvent event) throws SQLException, ParseException {

        String resNom = nomJeux.getText();
        String ResImage = labelImageJeux.getText();
        String resDate = dateJeux.getValue().toString();
        String resCat = categorieJeux.getValue();
        String resUpd = LocalDateTime.now().toString();
        ServiceCategoriec serv = new ServiceCategoriec();
        CategorieC c = serv.getByString(resCat);
        int x = 0;

        if (nomJeux.getText().matches("[a-zA-Z]+") == false && nomJeux.getText().length() != 0) {
            nomJeux.setStyle("-fx-border-color: red ; -fx-border-width: 2px;");
            new animatefx.animation.Shake(nomJeux).play();
            Alert alert = new Alert(AlertType.ERROR, "Le champ nom doit contenir que des lettres!!", ButtonType.OK);
            alert.getDialogPane().setMinHeight(Region.USE_PREF_SIZE);
            alert.show();
            nomJeux.setStyle(null);
            x++;
            System.out.println("hot ken des lettres");
        } else if (nomJeux.getText().length() == 0) {
            nomJeux.setStyle("-fx-border-color: red ; -fx-border-width: 2px;");
            new animatefx.animation.Shake(nomJeux).play();
            Alert alert = new Alert(AlertType.ERROR, "Le champ nom est vide!!", ButtonType.OK);
            alert.getDialogPane().setMinHeight(Region.USE_PREF_SIZE);
            alert.show();
            x++;
            System.out.println("champ feragh");
        } else if (nomJeux.getText().substring(0, 1).toUpperCase().equals(nomJeux.getText().substring(0, 1)) == false) {
            nomJeux.setStyle("-fx-border-color: red ; -fx-border-width: 2px;");
            new animatefx.animation.Shake(nomJeux).play();
            Alert alert = new Alert(AlertType.ERROR, "Le champ nom doit commencer par une lettre majuscule!!", ButtonType.OK);
            alert.getDialogPane().setMinHeight(Region.USE_PREF_SIZE);
            alert.show();
            nomJeux.setStyle(null);
            x++;
            System.out.println("lettre lezemha bel kbir");
        }
        if (nomJeux.getText().length() == 0) {
            nomJeux.setStyle("-fx-border-color: red ; -fx-border-width: 2px;");
            new animatefx.animation.Shake(nomJeux).play();
            x++;
        } else {
            nomJeux.setStyle(null);
        }
        if (labelImageJeux.getText().length() == 0) {
            imageJeux.setStyle("-fx-border-color: red ; -fx-border-width: 2px;");
            new animatefx.animation.Shake(imageJeux).play();
            Alert alert = new Alert(AlertType.ERROR, "Vous devez joindre un fichier!!", ButtonType.OK);
            alert.getDialogPane().setMinHeight(Region.USE_PREF_SIZE);
            alert.show();
            x++;
            System.out.println("hot taswira");
        } else {
            imageJeux.setStyle(null);
        }

        DateTimeFormatter dtf = DateTimeFormatter.ofPattern("yyyyMMddHHmmss");
        LocalDateTime now = LocalDateTime.now();
        SimpleDateFormat formatter = new SimpleDateFormat("yyyy-mm-dd");
        Date currDate = formatter.parse(dateJeux.getValue().toString());
        Date anotherDate = formatter.parse(now.toString());

//        if (currDate.before(anotherDate)==true){
//            dateJeux.setStyle("-fx-border-color: red ; -fx-border-width: 2px;");
//            new animatefx.animation.Shake(dateJeux).play();
//            Alert alert = new Alert(AlertType.ERROR, "La date selectionnée est invalide!!", ButtonType.OK);
//            alert.getDialogPane().setMinHeight(Region.USE_PREF_SIZE);
//            alert.show();
//            x++;
//            System.out.println("date ghaltaaaa");
//        }
//        else 
//        {
//            dateJeux.setStyle(null);
//        }
        System.out.println(x);
        if (x == 0) {
            Jeux j = new Jeux(resNom, ResImage, resDate, resUpd, c);
            ServiceJeux pcd = new ServiceJeux();
            pcd.ajouter(j);
            tableJeux.setItems(pcd.afficher());
        }
    }

    @FXML
    private void UploadFile(ActionEvent event) throws IOException {
        JFileChooser chooser = new JFileChooser();
        chooser.showOpenDialog(null);
        File f = chooser.getSelectedFile();
        String filename = f.getAbsolutePath();
        DateTimeFormatter dtf = DateTimeFormatter.ofPattern("yyyyMMddHHmmss");
        LocalDateTime now = LocalDateTime.now();
        String fileNewName = dtf.format(now);
        String copied = "C:/Users/USER/OneDrive/Bureau/PiJava/src/Images/" + fileNewName + ".jpg";
        //String c=copied.substring(0,48);
        //String test=filename.substring(filename.lastIndexOf("/")+1);
        System.out.println(filename);
        String test = filename.substring(48, filename.length());
        Path src = Paths.get(filename);
        Path dst = Paths.get(copied);
        Files.copy(src, dst, StandardCopyOption.REPLACE_EXISTING);
        labelImageJeux.setText(test);
        System.out.println(test);
    }

    @FXML
    private void SupprimerJeux(ActionEvent event) {
        try {
            ServiceJeux s = new ServiceJeux();
            Jeux j = tableJeux.getSelectionModel().getSelectedItem();
            String supp = "Voulez-vous supprimer le jeu " + nomJeux.getText();
            Alert alert = new Alert(AlertType.CONFIRMATION, "Voulez-vous supprimer le jeu " + nomJeux.getText() + " ?", ButtonType.YES, ButtonType.NO, ButtonType.CANCEL);
            alert.showAndWait();

            if (alert.getResult() == ButtonType.YES) {
                s.supprimer(j.getId());
            }
            tableJeux.setItems(s.afficher());

        } catch (SQLException ex) {
            Logger.getLogger(ServiceJeux.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public void pieShow(){
        
        pieChart.getData().clear();
        Connection connexion = MyConnection.getInstance().getCnx();
        ObservableList<String> list = FXCollections.observableArrayList();
        String req = "SELECT b.nom, COUNT(*) as c from jeux as j inner join categorie_c as b on j.categorie_id = b.id group by b.nom";
        Statement stm;
       // ObservableList<PieChart.Data> pieChartData = null;
        try {
            stm = connexion.createStatement();
            ResultSet rst;
     
            rst = stm.executeQuery(req);
            while (rst.next()) {
                try {
                    pieChart.getData().add(new PieChart.Data(rst.getString("nom"),rst.getInt("c")));
                } catch (SQLException ex) {
                    Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
                }
            }
        } catch (SQLException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }
   //   pieChart.setData(pieChartData);
        pieChart.setTitle("Statistique");
    
    }

    

   
    @FXML
    private void UploadFileProduit(ActionEvent event) throws IOException {
        JFileChooser chooser=new JFileChooser();
        chooser.showOpenDialog(null);
        File f= chooser.getSelectedFile();
        String filename=f.getAbsolutePath();
        DateTimeFormatter dtf = DateTimeFormatter.ofPattern("yyyyMMddHHmmss");  
        LocalDateTime now = LocalDateTime.now();
        String fileNewName=dtf.format(now);
                String copied = "C:/Users/USER/OneDrive/Bureau/PiJava/src/Images/" + fileNewName + ".jpg";

               // String copied = "C:/Users/MSi/Esports/src/Images"+fileNewName+".jpg";

        //String c=copied.substring(0,48);
        //String test=filename.substring(filename.lastIndexOf("/")+1);
     //   System.out.println(filename);
        String test=filename.substring(48, filename.length());
        Path src=Paths.get(filename);
        Path dst=Paths.get(copied);
        Files.copy(src, dst, StandardCopyOption.REPLACE_EXISTING);
        inputimage.setText(test);
           //     System.out.println(test);
    }

    @FXML
    private void ajouterProduit(ActionEvent event) throws SQLException {
         showstat();
               staack();

              //  stackedb.getData().clear();

        int ref =Integer.parseInt(refp.getText());
        String nom=nomproduit.getText();
        int prix=Integer.parseInt(Labprixproduit.getText());
        String marque=marqueproduit.getText();
        String desc=typeproduit.getText();
        String img=inputimage.getText();
        String catego=comboproduit.getValue();
        Categorie c;
        int x ;
                int input = 0;
                        Scanner sc = new Scanner(Labprixproduit.getText());

                          CategorieService cat = new CategorieService();
                                            ProduitService Prod = new ProduitService();   


        c=cat.getByString(catego);
        Produit p;
        p = new Produit(ref,nom,marque,prix,desc,img,c);
        if( marqueproduit.getText().matches("^[0-9]*$")==false  )
        {
            
             Prod.ajouter(p);
        nomproduit.setText("");
                Labprixproduit.setText("");
        marqueproduit.setText("");
        typeproduit.setText("");
        inputimage.setText("");
        }
        
        
       
  else 
                {
                                        JOptionPane.showMessageDialog(null, "verifier les donnees");
                                        marqueproduit.setStyle("-fx-border-color: red ; -fx-border-width: 2px;");
                                        marqueproduit.setText("");
                                        marqueproduit.setPromptText("le marque ne peut pas contenir seulement des chiffres");

                
                }
                
        
        

        tableproduit.setItems(Prod.afficher());
     
      

        
 ObservableList<String> listcp = FXCollections.observableArrayList();
       
        try {
            for(int i=0;i<cat.afficher().size();i++)
            {
                listcp.add(cat.afficher().get(i).getNom_categ());
            }
            comboproduit.setItems(listcp);
        }
        catch (SQLException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void saveperson(ActionEvent event) throws SQLException {
        showstat();
               staack();

       
            //   stackedb.getData().clear();

     Notifications notificationBuilder=Notifications.create()
             .title("categorie ajoute avec succes ")
             .graphic(null)
             .hideAfter(Duration.seconds(5))
             .position(Pos.TOP_RIGHT);
             notificationBuilder.showConfirm();
             
       
       
       
         ProduitService Prod = new ProduitService();   
                  CategorieService cat = new CategorieService();
      

        
 ObservableList<String> list = FXCollections.observableArrayList();
       
        try {
            for(int i=0;i<cat.afficher().size();i++)
            {
                list.add(cat.afficher().get(i).getNom_categ());
            }
            comboproduit.setItems(list);
        }
        catch (SQLException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        
        
        
        
       
        String resID = idp.getText();
        String resNOM = nomp.getText();
        String resprenom = prenomp.getText();
        Categorie c;
        c = new Categorie(resNOM,  resID,resprenom);
      //  CategorieService cat = new CategorieService();

            
            
              if (verifUserChampsajouter() && verificationUserEmail==true && verificationUsernom==true )
              {
                  cat.ajouter(c);
        idp.setText("");
        nomp.setText("");
        prenomp.setText(""); 
               
               
        tabcatp.setItems(cat.afficher());
              }
    }

    @FXML
    private boolean verifmailC(KeyEvent event) {
        String emailRegex = "^[a-zA-Z0-9_+&*-]+(?:\\."
                + "[a-zA-Z0-9_+&*-]+)*@"
                + "(?:[a-zA-Z0-9-]+\\.)+[a-z"
                + "A-Z]{2,7}$";

        Pattern pat = Pattern.compile(emailRegex);
        if (prenomp.getText() == null) {
            return false;
        }

        if (pat.matcher(prenomp.getText()).matches() == false) {
            verificationUserEmail = false;
            errmail.setText("Veuillez verifier la forme **@*.**");
            return false;
//            

        } else {
             errmail.setText("Mail valide");
             verificationUserEmail = true;
        }
        return true;
    }

    @FXML
    private void verifnomc(KeyEvent event) {
        int nbNonChar = 0;
            for (int i = 1; i < nomp.getText().trim().length(); i++) {
                char ch = nomp.getText().charAt(i);
                if (!Character.isLetter(ch)) {
                    nbNonChar++;
                }
            }

            if (nbNonChar == 0 && nomp.getText().trim().length() >=3) {
            errnom.setText("Nom valide");
            
            verificationUsernom = true;
            } 
            else {
             errnom.setText("Il faut au moins 3 caracteres");
              verificationUsernom = false;

            }
    }
    public boolean verifUserChampsajouter() {
        int verif = 0;
        String style = " -fx-border-color: red;";

        String styledefault = "-fx-border-color: green;";
         /*String resID = idp.getText();
        String resNOM = nomp.getText();
        String resprenom = prenomp.getText();*/

        idp.setStyle(styledefault);
        nomp.setStyle(styledefault);
        prenomp.setStyle(styledefault);
       

        if (nomp.getText().equals("")) {
            nomp.setStyle(style);
            verif = 1;
        }
       
      
        if (prenomp.getText().equals("")) {
            prenomp.setStyle(style);
            verif = 1;
        }
        
         if(verif==0){
             return true ; 
         }
        
         JOptionPane.showMessageDialog(null,"Remplir tous les champs!");
         
    return false ;
     }
    
    public void showstat(){
        
        statcateg.getData().clear();
        Connection connexion = MyConnection.getInstance().getCnx();
        ObservableList<String> list = FXCollections.observableArrayList();
        String req = "select categorie.nom_categ,produit.categorie_id,count(produit.categorie_id) as c from categorie left join produit  ON (categorie.id=produit.categorie_id) GROUP BY ( categorie.id)";
        Statement stm;
       // ObservableList<PieChart.Data> pieChartData = null;
        try {
            stm = connexion.createStatement();
            ResultSet rst;
     
            rst = stm.executeQuery(req);
            while (rst.next()) {
                try {
                    statcateg.getData().add(new PieChart.Data(rst.getString("nom_categ"),rst.getInt("c")));
                } catch (SQLException ex) {
                    Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
                }
            }
        } catch (SQLException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }
   //   pieChart.setData(pieChartData);
        statcateg.setTitle("Statistique");
    
    }
    public void staack() {
           stackedb.getData().clear();

     CategoryAxis xAxis = new CategoryAxis();
        xAxis.setLabel("Programming Language");
        NumberAxis yAxis = new NumberAxis();
        yAxis.setLabel("Percent");
        
                StackedBarChart<String, Number> barChart = new StackedBarChart<String, Number>(xAxis, yAxis);
        XYChart.Series<String, Number> dataSeries1 = new XYChart.Series<String, Number>();
        dataSeries1.setName("2014");
        ProduitService pp = new ProduitService();
        CategorieService cca = new CategorieService();
        try {
            for(int i=0;i<pp.afficherrated().size();i++)
            {
                //liststt.add(c.afficher().get(i).getNom_categ());
                //    list1.add(c.afficher().get(i).getX());
                

                dataSeries1.getData().add(new XYChart.Data<String, Number>(pp.afficherrated().get(i).getMarque(),pp.afficherrated().get(i).getR()));
                stackedb.getData().add(dataSeries1);

                
                

            }
        } catch (SQLException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }

    /*    dataSeries1.getData().add(new XYChart.Data<String, Number>("Java", 20.973));
        dataSeries1.getData().add(new XYChart.Data<String, Number>("C#", 4.429));
        dataSeries1.getData().add(new XYChart.Data<String, Number>("PHP", 2.792));
        stackedb.getData().add(dataSeries1);*/
                stackedb.setTitle("best sellers");
}

    

    @FXML
    private void recherche(ActionEvent event) {
    }

    @FXML
    private void reset(ActionEvent event) {
    }

   

    @FXML
    private void editRep() {
    }

    @FXML
    private void ajouoterreclamatioon(ActionEvent event) throws SQLException, AddressException {
        
        
        // int ref =Integer.parseInt(refp.getText());
        String aaa = labelmessagereclam.getText();
        String catego = comboreclam.getValue();
        ServicecategorieRec cat = new ServicecategorieRec();
        ServiceReclamation test = new ServiceReclamation();
        String etat = "en cours";
        categorieRec c = cat.getByString(catego);
        reclamation rec;
        reclamation reclamati = new reclamation("test", aaa, "aaa.aa@yy.tn", etat);
        test.ajouterR(reclamati, c);
        tabreclam.setItems(test.afficher());
           ServicecategorieRec catR = new ServicecategorieRec();
        ServiceReclamation reclam = new ServiceReclamation();  
        ObservableList<PieChart.Data> pieChartData =
            FXCollections.observableArrayList();
             try {
                for (int j = 0; j < catR.afficher().size(); j++) {
                    
                    try {
                        pieChartData.add(new PieChart.Data(catR.afficher().get(j).getCatrec(), reclam.count(catR.afficher().get(j).getId())));
                    } catch (SQLException ex) {
                        Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
                    }
                }
            } catch (SQLException ex) {
                Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
            }       
            this.pieChart1.setData(pieChartData);
            final String username = "kefifares3@gmail.com";
        final String password = "Fares123";

        Properties prop = new Properties();
		prop.put("mail.smtp.host", "smtp.gmail.com");
        prop.put("mail.smtp.port", "465");
        prop.put("mail.smtp.auth", "true");
        prop.put("mail.smtp.socketFactory.port", "465");
        prop.put("mail.smtp.socketFactory.class", "javax.net.ssl.SSLSocketFactory");
        
      /*  Session session = Session.getInstance(prop,
                new javax.mail.Authenticator() {
                    protected PasswordAuthentication getPasswordAuthentication() {
                        return new PasswordAuthentication(username, password);
                    }
                });*/

      /*  try {

            Message message = new MimeMessage(session);
            message.setFrom(new InternetAddress("forlifegeek@gmail.com"));
            message.setRecipients(
                    Message.RecipientType.TO,
                    InternetAddress.parse("fares.kefi@esprit.tn, fares.kefi@esprit.tn")
            );
            message.setSubject("Testing Gmail SSL");
            message.setText("Nouvelle catégorie,"
                    + "\n\n Please do not spam my email!");

            Transport.send(message);

            System.out.println("Done");

        } catch (MessagingException e) {
            e.printStackTrace();
        }*/
    }

    @FXML
    private void export(ActionEvent event) throws Exception {
        ServiceReclamation test = new ServiceReclamation();
       test.pdfs();
    }

    @FXML
    private void search(ActionEvent event) throws SQLException {
        ServiceReclamation test = new ServiceReclamation();
        
        tabreclam.setItems(test.findByNomUser(search.getText()));
    }

    @FXML
    private void testcateg(KeyEvent event) {
        int nbNonChar = 0;
        for (int i = 1; i < DescripcategR.getText().trim().length(); i++) {
            char ch = DescripcategR.getText().charAt(i);
            if (!Character.isLetter(ch)) {
                nbNonChar++;
            }
        }

        if (nbNonChar == 0 && DescripcategR.getText().trim().length() >= 3) {
            errcr.setText("Nom valide");

            verificationUsernom = true;
        } else {
            errcr.setText("Il faut au moins 3 caracteres");
            verificationUsernom = false;

        }
    }

    @FXML
    private void ajoutercatR(ActionEvent event) throws SQLException {
         ServicecategorieRec catR = new ServicecategorieRec();
        ServiceReclamation reclam = new ServiceReclamation();
        ObservableList<String> list = FXCollections.observableArrayList();
        try {
            for (int i = 0; i < catR.afficher().size(); i++) {
                list.add(catR.afficher().get(i).getCatrec());
            }
            comboreclam.setItems(list);
        } catch (SQLException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }
        String resID = nomcategR.getText();
        String resNOM = DescripcategR.getText();
        String resprenom = levelRec.getText();
        categorieRec c;
        c = new categorieRec(resNOM, resprenom, resID);
        ServicecategorieRec cat = new ServicecategorieRec();

            cat.ajouter(c);
            nomcategR.setText("");
            DescripcategR.setText("");
            levelRec.setText("");

            tabcatR.setItems(cat.afficher());
        
        ObservableList<PieChart.Data> pieChartData =
            FXCollections.observableArrayList();
             try {
                for (int j = 0; j < catR.afficher().size(); j++) {
                    
                    try {
                        pieChartData.add(new PieChart.Data(catR.afficher().get(j).getCatrec(), reclam.count(catR.afficher().get(j).getId())));
                    } catch (SQLException ex) {
                        Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
                    }
                }
            } catch (SQLException ex) {
                Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
            }       
            this.pieChart1.setData(pieChartData);
    }

    @FXML
    private void high(ActionEvent event) throws SQLException {
        ServicecategorieRec catR = new ServicecategorieRec();
         tabcatR.setItems(catR.findByLevel("high"));
    }

    @FXML
    private void medium(ActionEvent event) throws SQLException {
        ServicecategorieRec catR = new ServicecategorieRec();
         tabcatR.setItems(catR.findByLevel("medium"));
    }

    @FXML
    private void low(ActionEvent event) throws SQLException {
         ServicecategorieRec catR = new ServicecategorieRec();
         tabcatR.setItems(catR.findByLevel("low"));
    }

    ///////// cherif
      @FXML
    private void selectCom(MouseEvent event) {
                  
    Commentaire A= tvtabCom.getSelectionModel().getSelectedItem();
 
    ColDescriptionc.setText(A.getDescriptionc());
   
    }
public String controlSaisie(){
             String nom = tfnomuser.getText();
             if(nom.equals("")){
                 return "You must type a name !";
             }
             String error = "";
              Pattern pattern = Pattern.compile("[\\d]", Pattern.CASE_INSENSITIVE);
              Matcher matcher = pattern.matcher(nom);
              boolean matchFound = matcher.find();
              if(matchFound) {
                  error += "Name cant contain a number";
                    } 
              else {
                    error = "";
               }
              return error;
         }
public int occ(String mot,String desc){
    int oc=0;
    String ch="";
for(int i=0;i<desc.length();i++){
if(ch.equals(mot)){
    ch="";
    oc++;
        

}else if (ch.equals(mot)==false) {ch=ch+desc.charAt(i);
System.out.println(ch);
}
}
return oc;
}

public int controlSaisiebadwords(){
             String description = tfdescription.getText();
             
             String ch="hate";
            int bad=0;
//              bad+=occ("hate",description);
//              bad+=occ("detest",description);
//              bad+=occ("dislike",description);
//              bad+=occ("fuck",description);
//              bad+=occ("shit",description);
//              bad+=occ("cunt",description);

              if(description.contains("hate")) {
                  bad += 4;
                    } 
              if(description.contains("kill")) {
                  bad += 4;
                    }
              if (description.contains("detest")){
              bad += 4;
              }
               if (description.contains("tue")){
              bad += 4;
              }
                if (description.contains("mort")){
              bad += 4;
              }
              if (description.contains("dislike")){
              bad += 4;
              }
              if (description.contains("fuck")){
              bad += 10;
              }
              if (description.contains("shit")){
              bad += 10;
              }
              if (description.contains("cunt")){
           bad += 10;
              }
              if (description.contains("asshole")){
           bad += 10;
              }
              if (description.contains("suck")){
           bad += 10;
              }
               if (description.contains("bastard")){
           bad += 10;
              }
               if (description.contains("nique")){
           bad += 10;
              }
               if (description.contains("pute")){
           bad += 10;
              }
               if (description.contains("bitch")){
           bad += 10;
              }
               if(description.contains("nik")) {
                  bad += 10;
                    }
                if(description.contains("9ahba")) {
                  bad += 10;
                    }
                 if(description.contains("nayek")) {
                  bad += 10;
                    }
                  if(description.contains("zeb")) {
                  bad += 10;
                    }
                   if(description.contains("zebi")) {
                  bad += 10;
                    }
                    if(description.contains("sorm")) {
                  bad += 10;
                    }
                     if(description.contains("sormek")) {
                  bad += 10;
                    }
              return bad;
         }
              
    @FXML
    private void selectPostcom(ActionEvent event) throws SQLException {
       //  Post T = tabPost.getSelectionModel().getSelectedItem();
          //     int id_post= T.getIdPost();
               
               
                 comdata.clear();

             //  List<Commentaire> coment = c.getCombyPost(id_post);
                            List<Commentaire> coment = c.afficher();
  
                     comdata.addAll(coment);
                     System.out.println(comdata);
                colIdcom.setCellValueFactory(new PropertyValueFactory<>("id"));
              ColNomuserc.setCellValueFactory(new PropertyValueFactory<>("nomuser"));
              ColDescriptionc.setCellValueFactory(new PropertyValueFactory<>("descriptionc"));
              ColDatec.setCellValueFactory(new PropertyValueFactory<>("datec"));
              System.out.println("hh");

        

        tvtabCom.setItems(comdata); 
    }

    @FXML
    private void deletecom(ActionEvent event) {
        
        Commentaire c= tvtabCom.getSelectionModel().getSelectedItem();
        CommentaireService aS = new CommentaireService();
        if (aS.delete(c)){
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Succees");
        alert.setHeaderText(null);
        alert.setContentText("La suppression d'event a été effectué avec succées");
        alert.showAndWait();
        tvtabCom.refresh();
        
        }else{
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Erreur");
        alert.setHeaderText(null);
        alert.setContentText("La supression d'event n'a pas été effectué!");
        alert.showAndWait();   
           tvtabCom.setItems(comdata);
        
    }
    }

    @FXML
    private void updatecom(ActionEvent event) {
        {
        Commentaire A= tvtabCom.getSelectionModel().getSelectedItem();
           

       
        String desc = mod_descriptionc.getText();
 
         A.setDescriptionc(desc);
        
        
        CommentaireService aS = new CommentaireService();
        if (aS.update(A)){
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Succées");
        alert.setHeaderText(null);
        alert.setContentText("La modification d'event a été effectué avec succées");
        alert.showAndWait();
      tvtabCom.refresh();
        }else{
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle("Erreur");
        alert.setHeaderText(null);
        alert.setContentText("La modufication d'event n'a pas été effectué!");
      alert.showAndWait();   
   tvtabCom.setItems(comdata);
       }
   }
    }


    private void afficherEvent() throws SQLException {
       PostServices c = new PostServices();
         data.clear();
        data.addAll(c.afficher());
  ColId.setCellValueFactory(new PropertyValueFactory<>("id"));
     colnom_user.setCellValueFactory(new PropertyValueFactory<>("sujet"));
      Colsujet.setCellValueFactory(new PropertyValueFactory<>("description"));
       Coldescription.setCellValueFactory(new PropertyValueFactory<>("communaute"));
         Colcommunaute.setCellValueFactory(new PropertyValueFactory<>("nom_user"));
         ColDatep.setCellValueFactory(new PropertyValueFactory<>("date_p"));
         ColImage.setCellValueFactory(new PropertyValueFactory<>("image"));
         ColNbrj.setCellValueFactory(new PropertyValueFactory<>("nbr_jaime"));


      tabPost.setItems(data);
     
   }  

    @FXML
    private void upload(ActionEvent event) throws IOException {
      JFileChooser chooser=new JFileChooser();
        chooser.showOpenDialog(null);
        File f= chooser.getSelectedFile();
        String filename=f.getAbsolutePath();
        DateTimeFormatter dtf = DateTimeFormatter.ofPattern("yyyyMMddHHmmss");  
        LocalDateTime now = LocalDateTime.now();
        String fileNewName=dtf.format(now);
        String copied = "C:/Users/USER/OneDrive/Bureau/PiJava/src/Images/" + fileNewName + ".jpg";
        //String c=copied.substring(0,48);
        //String test=filename.substring(filename.lastIndexOf("/")+1);
        System.out.println(filename);
        String test=filename.substring(48, filename.length());
        Path src=Paths.get(filename);
        Path dst=Paths.get(copied);
        Files.copy(src, dst, StandardCopyOption.REPLACE_EXISTING);
        tfimagep.setText(test);
        System.out.println(test);
    }

    @FXML
    private void addpostback(ActionEvent event) throws SQLException, MalformedURLException, IOException{

          
        Post P;
        tfnomuser.setVisible(false);
        tfnomuser.setText("adminadmin");
        String nom_user = tfnomuser.getText();
        String sujet = tfsujet.getText();
        String description = tfdescription.getText();
        String communaute = tfcommunaute.getText();
        String image = tfimagep.getText();
        


        
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
String error = controlSaisie();
int bad = controlSaisiebadwords();
          System.out.println(bad); 
             
          if(sujet.equals("") || nom_user.equals("") || description.equals("")|| communaute.equals("") || image.equals("") ){
               //Alert Saisie Tournois :
             alert.setAlertType(Alert.AlertType.WARNING);
            alert.setTitle("Conditions de saisie");
            alert.setHeaderText(null);
            alert.setContentText("You need to fill all the fields first!");
            alert.showAndWait();}
          else if(sujet.length()>10){
            alert.setAlertType(Alert.AlertType.WARNING);
            alert.setTitle("Conditions de saisie");
            alert.setHeaderText(null);
            alert.setContentText("sujet must be under 10 letters");
            alert.showAndWait();
            }
          else if(description.length()<10){
            alert.setAlertType(Alert.AlertType.WARNING);
            alert.setTitle("Conditions de saisie");
            alert.setHeaderText(null);
            alert.setContentText("description must be over 10 letters");
            alert.showAndWait();
            }
          else if (error!=""){
              alert.setAlertType(Alert.AlertType.WARNING);
            alert.setTitle("Conditions de saisie");
            alert.setHeaderText(null);
            alert.setContentText("nom user must be only letters");
            alert.showAndWait();
          }
          else if (bad>=10){
              alert.setAlertType(Alert.AlertType.WARNING);
            alert.setTitle("Conditions de saisie");
            alert.setHeaderText(null);
            alert.setContentText("Too much hate in your message WATCH YOUR LANGUAGE !!");
            alert.showAndWait();
          }
          else if (bad>0&&bad<10){
              alert.setAlertType(Alert.AlertType.WARNING);
            alert.setTitle("Conditions de saisie");
            alert.setHeaderText(null);
            alert.setContentText("Attention you added a hate message");
            alert.showAndWait();
              System.out.println(bad);
              System.out.println("c bon");
             P = new Post(sujet,description,communaute,nom_user,image,bad);
       
               try{
                   Notifications notificationBuilder = Notifications.create()
      .title("Succes").text("post added successfullly").graphic(null).hideAfter(javafx.util.Duration.seconds(5))
              .position(Pos.TOP_CENTER)
              .onAction(new EventHandler<ActionEvent>() {
        @Override
        public void handle(ActionEvent event) {
        System.out.println("clicked on");
              }});
      notificationBuilder.darkStyle();
notificationBuilder.show();
                    p.ajouter(P); 
                     alert.setAlertType(Alert.AlertType.INFORMATION);
                     alert.setTitle("Add Post");
                     alert.setHeaderText("Results:");
                     alert.setContentText("post added successfully!");
                   
                   
               } catch (SQLException ex){
                                //Alert Error Tournois :
                       alert.setAlertType(Alert.AlertType.WARNING);
                       alert.setTitle("ERROR");
                       alert.setHeaderText("Adding Error !! ");
                       alert.setContentText(ex.getMessage());
                       //Alert Error Tournois !
        } finally{
              alert.showAndWait();
        }
          }
            //Alert Saisie Tournois !
          else{
               P = new Post(sujet,description,communaute,nom_user,image,bad);
               try{
                   Notifications notificationBuilder = Notifications.create()
      .title("Succes").text("post added successfullly").graphic(null).hideAfter(javafx.util.Duration.seconds(5))
              .position(Pos.TOP_CENTER)
              .onAction(new EventHandler<ActionEvent>() {
        @Override
        public void handle(ActionEvent event) {
        System.out.println("clicked on");
              }});
      notificationBuilder.darkStyle();
notificationBuilder.show();
 String htmlMessage = "Etsports ";
        //new SendEmailWthImagePost("aziz.cherif1@esprit.tn","New post added",htmlMessage,"C:/Users/aziz/Desktop/blog/src/Images/iconnn.png");

                    p.ajouter(P); 
                     alert.setAlertType(Alert.AlertType.INFORMATION);
                     alert.setTitle("Add Post");
                     alert.setHeaderText("Results:");
                     alert.setContentText("post added successfully!");
                 
                   
               } catch (SQLException ex){
                                //Alert Error Tournois :
                       alert.setAlertType(Alert.AlertType.WARNING);
                       alert.setTitle("ERROR");
                       alert.setHeaderText("Adding Error !! ");
                       alert.setContentText(ex.getMessage());
                       //Alert Error Tournois !
        } finally{
              alert.showAndWait();
        }
          }
        data.clear();
        try {
            data.addAll(p.afficher());
        } catch (SQLException ex) {
           System.out.println(ex.getMessage());

        }
    
    }
    

    @FXML
    private void updatepostback(ActionEvent event) {
        if (tabPost.getSelectionModel().getSelectedItem() != null) {

            Post P = tabPost.getSelectionModel().getSelectedItem();
        System.out.println("Sujet:"+ tfsujet.getText());
        System.out.println("description:"+ tfdescription.getText());
        System.out.println("communaute:"+ tfcommunaute.getText());
        System.out.println("nomuser:"+ tfnomuser.getText());
           p.UpdateF(P.getIdPost(),tfsujet.getText(),tfdescription.getText(), tfcommunaute.getText(),tfnomuser.getText(), tfimagep.getText());
            
            Alert EditeJeuxAlert = new Alert(Alert.AlertType.INFORMATION);
            EditeJeuxAlert.setTitle("edit");
            EditeJeuxAlert.setHeaderText(null);
            EditeJeuxAlert.setContentText("post was succfuly Updated");
            EditeJeuxAlert.showAndWait();

        } else {
            //Alert Select jeux :
            Alert selectMealAlert = new Alert(Alert.AlertType.WARNING);
            selectMealAlert.setTitle("Select a post");
            selectMealAlert.setHeaderText(null);
            selectMealAlert.setContentText("You need to select post first!");
            selectMealAlert.showAndWait();
            //Alert Select jeux !
        }

 data.clear();
        try {
            data.addAll(p.afficher());
        } catch (SQLException ex) {
           System.out.println(ex.getMessage());

        }


        
    }

    @FXML
    private void deletepostback(ActionEvent event) 
    throws SQLException {

        if (tabPost.getSelectionModel().getSelectedItem() != null) {
            Alert deleteTournoislert = new Alert(Alert.AlertType.CONFIRMATION);
            deleteTournoislert.setTitle("Delete post");
            deleteTournoislert.setHeaderText(null);
            deleteTournoislert.setContentText("Are you sure want to delete this post ?");
            Optional<ButtonType> optiondeleteTournoisAlert = deleteTournoislert.showAndWait();
            if (optiondeleteTournoisAlert.get() == ButtonType.OK) {
                Post P = tabPost.getSelectionModel().getSelectedItem();
                System.out.println(P.getIdPost());
                    p.supprimer(P.getIdPost());
             


                //Alert Delete Blog :
                Alert succDeleteMealAlert = new Alert(Alert.AlertType.INFORMATION);
                succDeleteMealAlert.setTitle("Delete post");
                succDeleteMealAlert.setHeaderText("Results:");
                succDeleteMealAlert.setContentText("post deleted successfully!");

                succDeleteMealAlert.showAndWait();
            } else if (optiondeleteTournoisAlert.get() == ButtonType.CANCEL) {

            }

        } else {

            Alert selectMealAlert = new Alert(Alert.AlertType.WARNING);
            selectMealAlert.setTitle("Select a post");
            selectMealAlert.setHeaderText(null);
            selectMealAlert.setContentText("You need to select post first!");
            selectMealAlert.showAndWait();

        }
        
         data.clear();
        try {
            data.addAll(p.afficher());
        } catch (SQLException ex) {
           System.out.println(ex.getMessage());

        }
        
        
    }

    @FXML
    private void handlepost(MouseEvent event) {
        Post post= tabPost.getSelectionModel().getSelectedItem();
     
      tfnomuser.setText(post.getSujet());

       tfsujet.setText(post.getDescription());
     
           
       tfdescription.setText(post.getCommunaute());
      tfcommunaute.setText(post.getNom_user());

       
       tfimagep.setText(post.getImage());


    }
     private void search_post() {
     ColId.setCellValueFactory(new PropertyValueFactory<>("id"));
     colnom_user.setCellValueFactory(new PropertyValueFactory<>("sujet"));
      Colsujet.setCellValueFactory(new PropertyValueFactory<>("description"));
       Coldescription.setCellValueFactory(new PropertyValueFactory<>("communaute"));
         Colcommunaute.setCellValueFactory(new PropertyValueFactory<>("nom_user"));
         ColDatep.setCellValueFactory(new PropertyValueFactory<>("date_p"));
         ColImage.setCellValueFactory(new PropertyValueFactory<>("image"));
         ColNbrj.setCellValueFactory(new PropertyValueFactory<>("nbr_jaime"));


           

        try {

            String requete = "SELECT * FROM post";
            Statement st = conn.createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
              data.add(new Post(rs.getInt("id"), rs.getString("sujet"), rs.getString("description"), rs.getString("communaute"), rs.getString("nom_user"), rs.getDate("date_p"),rs.getString("image"), rs.getInt("nbr_jaime")));

            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        dataList = data;
        tabPost.setItems(dataList);
        FilteredList<Post> filteredData = new FilteredList<>(dataList, b -> true);
        searchpost.textProperty().addListener((observable, oldValue, newValue) -> {
            filteredData.setPredicate(Post -> {
                if (newValue == null || newValue.isEmpty()) {
                    return true;
                }
                String lowerCaseFilter = newValue.toLowerCase();

                if (Post.getSujet().toLowerCase().indexOf(lowerCaseFilter) != -1) {
                    return true; // Filter matches username
                } else if (Post.getDescription().toLowerCase().indexOf(lowerCaseFilter) != -1) {
                    return true; // Filter matches password
                } else if (Post.getImage().toLowerCase().indexOf(lowerCaseFilter) != -1) {
                    return true; // Filter matches password
                } else if (Post.getNom_user().toLowerCase().indexOf(lowerCaseFilter) != -1) {
                    return true; // Filter matches password
                } else if (Post.getCommunaute().toLowerCase().indexOf(lowerCaseFilter) != -1) {
                    return true; // Filter matches password
                }/*else if (User.getBlock().toLowerCase().indexOf(lowerCaseFilter) != -1) {
                    return true; // Filter matches password
                }*/
                else if (String.valueOf(Post.getId()).indexOf(lowerCaseFilter) != -1) {
                    return true; // Filter matches password
                } else if (String.valueOf(Post.getNbr_jaime()).indexOf(lowerCaseFilter) != -1) {
                    return true; // Filter matches password
                } else {
                    return false; // Does not match.
                }
            });
        });
        

        tabPost.setItems(filteredData);
    }
    @FXML
    private void search(KeyEvent event) throws SQLException {
        afficherEvent();
        search_post();
    }

    @FXML
    private void trie(ActionEvent event) {
//        Comparator<Post> comparator ;
//        if(trieee.getValue()=="nombre de jaime"){
//         comparator = Comparator.comparingInt(Post::getNbr_jaime);
//         
//        }
//        else if(trieee.getValue()=="date"){
//         comparator = Comparator.comparing(Post::getDate_p);
//         
//        }
//        else{
//         comparator = Comparator.comparingInt(Post::getId);
//         
//        }
//        
//        FXCollections.sort(data, comparator);
//           tabPost.setItems(data);
    }

  //debutbawezz
    @FXML
    private void searchLivreur(ActionEvent event) 
     {
         LivreurCRUD tt = new LivreurCRUD();

       List<Livreur> lmm = tt.RechercherLivreur(getRecherche1.getText());
          System.out.println("Recherche");
        System.out.println(getRecherche1.getText());
        TableLivreur.setEditable(true);
        for (int i = 0; i < lm.size(); i++) {
          //  ImageView modify1 = new ImageView(new Image(getClass().getResourceAsStream("../images/edit_property_16px.png")));
         modify_button[i] = new Button("Modifier");
   // ImageView supprimer1 = new ImageView(new Image(getClass().getResourceAsStream("../images/not_sending_video_frames_16px.png")));
         supprimerb[i] = new Button("Supprimer");
         
            lmm.get(i).setModifier(modify_button[i]);
             lmm.get(i).setSupprimer(supprimerb[i]);
            supprimerb[i].setOnAction(this::handleButtonLivreurAction);
         modify_button[i].setOnAction(this::modifierButtonLivreurAction);
        }
       ObservableList<Livreur> datalistt = FXCollections.observableArrayList(lmm);
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
            if(Nom.equals("")||Prenom.equals("")||Email.equals("")||!Email.contains("@")||!Email.contains(".")||TelLIvreur.getText().matches("[a-zA-Z]")==true || TelLIvreur.getText().length()!=8){
                  Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setTitle("erreur");
            alert.setContentText("veuillez verifier vos champs");
            alert.show();
            System.err.println("ereeeeuur");
            }
            else {
                 Livreur l = new Livreur(Nom,Prenom,Tel,Email);
        LivreurCRUD Lc =new LivreurCRUD();
        Lc.ajouterLivreur2(l);
         Notifications notificationBuilder=Notifications.create()
             .title("Livreur ajouté avec succees!! ")
             .graphic(null)
             .hideAfter(Duration.seconds(5))
             .position(Pos.TOP_RIGHT);
             notificationBuilder.showConfirm();
             LivreurCRUD Li = new LivreurCRUD();
             List<Livreur> ltt = Li.afficherLivreur();
             TableLivreur.getItems().clear();
             String message="Hi "+Nom+" "+Prenom+" . You are a now a delivery member of Et-Sports Application ";
            // SMSApi sms= new SMSApi();
             //sms.sendsms("aziz_bouzaiene", "Az22362125", Tel, message);
          afficher_livreur(ltt);
            }
        } catch (Exception e) {
           System.out.println(e.getMessage());
        }
       
       
    }@FXML
    private void exportTableCommande(ActionEvent event) throws SQLException, FileNotFoundException {
        CommandeCRUD os = new CommandeCRUD();
        os.exportTable();
    }
        
           
   @FXML
    private void reloaddLivreur(ActionEvent event) {
           
       LivreurCRUD Li = new LivreurCRUD();
             List<Livreur> ltt = Li.afficherLivreur();
             TableLivreur.getItems().clear();
          afficher_livreur(ltt);
            
        /*TableLivreur.setEditable(true);
        
    
      for (int i = 0; i < Livreur.size(); i++) {
          //  ImageView modify1 = new ImageView(new Image(getClass().getResourceAsStream("../images/edit_property_16px.png")));
         modify_button[i] = new Button("Modifier");
   // ImageView supprimer1 = new ImageView(new Image(getClass().getResourceAsStream("../images/not_sending_video_frames_16px.png")));
         supprimerb[i] = new Button("Supprimer");
            Livreur.get(i).setModifier(modify_button[i]);
             Livreur.get(i).setSupprimer(supprimerb[i]);
            supprimerb[i].setOnAction(this::handleButtonAction);
           modify_button[i].setOnAction(this::modifierButtonAction);
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
       
*/
        
        
    }
    
       private void modifierButtonLivreurAction (ActionEvent event)
    {
        try {
            
            FXMLLoader modif= new FXMLLoader(getClass().getResource("ModifierLivreur.fxml"));
            Parent root = modif.load();
           
            ModifierLivreurController mc = modif.getController();
            for (int i = 0; i <= lm.size(); i++) {
            if (event.getSource() == modify_button[i])
             {
                 indexbouza=i;
                 
             }}
            
            System.out.println(lm.get(indexbouza).getId());
            
            int index1 = lm.get(indexbouza).getId();
            
            String s=String.valueOf(index1);
            System.out.println(s);
            mc.setNomLivreur(lm.get(indexbouza).getNom());
            mc.setPrenomLivreur(lm.get(indexbouza).getPrenom());
            mc.setTelLivreur(lm.get(indexbouza).getTel());
            mc.setEmailLivreur(lm.get(indexbouza).getEmail());
            mc.setItems(index1);
           
            Scene scene = new Scene(root);
           Stage modifStage = new Stage();
            
            modifStage.setTitle("Modifier Livreur!");
            modifStage.setScene(scene);
            modifStage.show();
         
           
        } catch (IOException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }
     }
     private void handleButtonLivreurAction (ActionEvent event)
    {
       
         for (int i = 0; i < lm.size(); i++) {
            // Button a = supprimerb[i];
            
             if (event.getSource() == supprimerb[i])
             {
                 indexbouza=i;
             }
            
                 
         }
          System.out.println(indexbouza);
          int index1 = lm.get(indexbouza).getId();
            LivreurCRUD tt = new LivreurCRUD();
            
             tt.deleteLivreur(index1);
             lm = tt.afficherLivreur();
             TableLivreur.getItems().clear();
          afficher_livreur(lm);
            LivreurCRUD tm = new LivreurCRUD();

       
     }
      public void afficher_livreur(List<Livreur> ltt)
    {
        
        for (int i = 0; i < ltt.size(); i++) {
          //  ImageView modify1 = new ImageView(new Image(getClass().getResourceAsStream("../images/edit_property_16px.png")));
         modify_button[i] = new Button("Modifier");
   // ImageView supprimer1 = new ImageView(new Image(getClass().getResourceAsStream("../images/not_sending_video_frames_16px.png")));
         supprimerb[i] = new Button("Supprimer");
         
            ltt.get(i).setModifier(modify_button[i]);
             ltt.get(i).setSupprimer(supprimerb[i]);
            supprimerb[i].setOnAction(this::handleButtonLivreurAction);
           modify_button[i].setOnAction(this::modifierButtonLivreurAction);
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
    //fin Livreur

    @FXML
    private void AjouterCommande(ActionEvent event) {
         
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
            
            total=Integer.parseInt(TotalC.getText());
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
        AdresseCRUD Ac =new AdresseCRUD();
       // Adresse Ai=new Adresse("Amin","lam3_","mahrajen","nasser","chek",222);
        //AdresseCRUD Ac= new AdresseCRUD();
        Ac.ajouterAdresse2(A);
         int i=Ac.showId(A);
        System.out.println(i);
     // int idA =Ac.IidAdresse(A);
       //       System.out.println(idA);

             
        Commande C =new Commande(produit,quantite,total,i);
        CommandeCRUD Cc= new CommandeCRUD();
        Cc.ajouterCommande2(C);
       
             CommandeCRUD Coc = new CommandeCRUD();
             List<Commande> ltt = Coc.afficherCommande();
             TableLivreur.getItems().clear();
          afficher_Commande(ltt);
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
             displayChart();
          
             }
            
            
        } catch (Exception e) {
            System.out.println(e.getMessage());
        }
  
    }

    @FXML
    private void refreshCommande(ActionEvent event)  {
     
         CommandeCRUD Cc = new CommandeCRUD();
             List<Commande> ltt = Cc.afficherCommande();
             TableCommande.getItems().clear();
          afficher_Commande(ltt);
            displayChart();
    }
    
     public void afficher_Commande(List<Commande> ltt)
    {
        
        for (int i = 0; i < ltt.size(); i++) {
          //  ImageView modify1 = new ImageView(new Image(getClass().getResourceAsStream("../images/edit_property_16px.png")));
         modify_C[i] = new Button("Modifier");
         detailC[i] = new Button("Detail");
   // ImageView supprimer1 = new ImageView(new Image(getClass().getResourceAsStream("../images/not_sending_video_frames_16px.png")));
         supprimerC[i] = new Button("Supprimer");
         imprimerC[i]=new Button("EXPORT");

            ltt.get(i).setModifier(modify_C[i]);
             ltt.get(i).setSupprimer(supprimerC[i]);
            ltt.get(i).setDetail(detailC[i]);
            ltt.get(i).setImprimer(imprimerC[i]);

            supprimerC[i].setOnAction(this::deleteButtonAction);
           modify_C[i].setOnAction(this::modifierButtonCommandeAction);
           detailC[i].setOnAction(this::detailButtonCommandeAction);
            imprimerC[i].setOnAction(this::imprimerButtonCommandeAction);


        }
       ObservableList<Commande> datalistt = FXCollections.observableArrayList(ltt);
       IdCommande.setCellValueFactory(new PropertyValueFactory<>("idcommande"));
        IdLivreur.setCellValueFactory(new PropertyValueFactory<>("Name"));
        DetailAdresse.setCellValueFactory(new PropertyValueFactory<>("Detail"));
        Produit.setCellValueFactory(new PropertyValueFactory<>("Produit"));
        Quantite.setCellValueFactory(new PropertyValueFactory<>("Quantite"));
        Total.setCellValueFactory(new PropertyValueFactory<>("Total"));

        modifierC.setCellValueFactory(new PropertyValueFactory<>("modifier"));
        SupprimerC.setCellValueFactory(new PropertyValueFactory<>("supprimer"));
        DetailAdresse.setCellValueFactory(new PropertyValueFactory<>("detail"));
        exportcommande.setCellValueFactory(new PropertyValueFactory<>("imprimer"));



        TableCommande.setItems(datalistt); 
    }   
    
     private void modifierButtonCommandeAction (ActionEvent event)
    {
        try {
            
            FXMLLoader modif= new FXMLLoader(getClass().getResource("ModifierCommande.fxml"));
            Parent root = modif.load();
           
            ModifierCommandeController mc = modif.getController();
            for (int i = 0; i <= Lcommande.size(); i++) {
            if (event.getSource() == modify_C[i])
             {
                 indexbouza=i;
                 
             }}
            
            System.out.println(Lcommande.get(indexbouza).getIdcommande());
            
            int index1 = Lcommande.get(indexbouza).getIdcommande();
            System.out.println(index1);
            String s=String.valueOf(indexbouza);
            //System.out.println(s);
            mc.setProduitC(Lcommande.get(indexbouza).getProduit());
            mc.setQuantiteC(Lcommande.get(indexbouza).getQuantite());
            mc.setTotalC(Lcommande.get(indexbouza).getTotal());
            
            
            mc.setItems(index1);
           
            Scene scene = new Scene(root);
           Stage modifStage = new Stage();
            
            modifStage.setTitle("Modifier Commande!");
            modifStage.setScene(scene);
            modifStage.show();
         displayChart();
           
        } catch (IOException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }
        
     }
      private void deleteButtonAction (ActionEvent event)
    {
       
         for (int i = 0; i < Lcommande.size(); i++) {
            // Button a = supprimerb[i];
            
             if (event.getSource() == supprimerC[i])
             {
                 indexbouza=i;
             }
            
                 
         }
          System.out.println(indexbouza);
          int index1 = Lcommande.get(indexbouza).getIdcommande();
            CommandeCRUD tt = new CommandeCRUD();
            
             tt.deleteCommande(index1);
             Lcommande = tt.afficherCommande();
             TableLivreur.getItems().clear();
          afficher_Commande(Lcommande);
            CommandeCRUD tm = new CommandeCRUD();

       displayChart();
     }
      
       private void detailButtonCommandeAction (ActionEvent event)
    {

        try {
            
            FXMLLoader detail= new FXMLLoader(getClass().getResource("DetailCommande.fxml"));
            Parent root = detail.load();
           
            DetailCommandeController mc = detail.getController();
            for (int i = 0; i <= Lcommande.size(); i++) {
            if (event.getSource() == detailC[i])
             {
                 indexbouza=i;
                 
             }}
            
           // System.out.println(Lcommande.get(index).getAdresse_id());
          
            int index1 = Lcommande.get(indexbouza).getAdresse_id();
            //System.out.println(index1);
         
//System.out.println(Ladresse.indexOf(31));

             AdresseCRUD tt = new AdresseCRUD();
             
            Adresse P = tt.showDetail(index1);
            String s=String.valueOf(indexbouza);
            //System.out.println(P.getId());
            mc.setAdresseA(P.getAdress());
           mc.setCityA(P.getCity());
           mc.setNomA(P.getNom());
           mc.setPrenomA(P.getPrenom());
           mc.setTelA(P.getTel());
           mc.setEmailA(P.getEmail());
       
               // System.out.println(Ladresse.get(index1).getId());



            mc.setItems(indexbouza);
            Scene scene = new Scene(root);
           Stage modifStage = new Stage();
            
            modifStage.setTitle("Detail Adresse du commande!");
            modifStage.setScene(scene);
            modifStage.show();
         
           
        } catch (IOException ex) {
                          System.err.println(ex.getMessage());

        }
     }

        private void imprimerButtonCommandeAction (ActionEvent event) 
    {
       
        try {
            for (int i = 0; i < Lcommande.size(); i++) {
                // Button a = supprimerb[i];
                
                if (event.getSource() == imprimerC[i])
                {
                    indexbouza=i;
                }
                
                
            }
            System.out.println(indexbouza);
            int index1 = Lcommande.get(indexbouza).getIdcommande();
            CommandeCRUD tt = new CommandeCRUD();
                        System.out.println(index1);

            
            try {
                tt.createPdf(index1);
            } catch (SQLException ex) {
                Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
            }
            Lcommande = tt.afficherCommande();
            TableLivreur.getItems().clear();
            afficher_Commande(Lcommande);
            CommandeCRUD tm = new CommandeCRUD();
            
            displayChart();
        } catch (FileNotFoundException ex) {
            Logger.getLogger(Controller.class.getName()).log(Level.SEVERE, null, ex);
        }
     }
       
@FXML
    private void RechercherCommande(ActionEvent event) {
    CommandeCRUD tt = new CommandeCRUD();
        Lcommande = tt.RechercherProduit(getRecherche.getText());
          System.out.println("Recherche");
        System.out.println(getRecherche.getText());
        TableCommande.setEditable(true);
        
       for (int i = 0; i < Lcommande.size(); i++) {
          //  ImageView modify1 = new ImageView(new Image(getClass().getResourceAsStream("../images/edit_property_16px.png")));
         modify_C[i] = new Button("Modifier");
         detailC[i] = new Button("Detail");
   // ImageView supprimer1 = new ImageView(new Image(getClass().getResourceAsStream("../images/not_sending_video_frames_16px.png")));
         supprimerC[i] = new Button("Supprimer");
         imprimerC[i]=new Button("EXPORT");

            Lcommande.get(i).setModifier(modify_C[i]);
             Lcommande.get(i).setSupprimer(supprimerC[i]);
            Lcommande.get(i).setDetail(detailC[i]);
            Lcommande.get(i).setImprimer(imprimerC[i]);

            supprimerC[i].setOnAction(this::deleteButtonAction);
           modify_C[i].setOnAction(this::modifierButtonCommandeAction);
           detailC[i].setOnAction(this::detailButtonCommandeAction);
            imprimerC[i].setOnAction(this::imprimerButtonCommandeAction);

        }
       ObservableList<Commande> datalistt = FXCollections.observableArrayList(Lcommande);
       IdCommande.setCellValueFactory(new PropertyValueFactory<>("idcommande"));
        IdLivreur.setCellValueFactory(new PropertyValueFactory<>("Name"));
        DetailAdresse.setCellValueFactory(new PropertyValueFactory<>("Detail"));
        Produit.setCellValueFactory(new PropertyValueFactory<>("Produit"));
        Quantite.setCellValueFactory(new PropertyValueFactory<>("Quantite"));
        Total.setCellValueFactory(new PropertyValueFactory<>("Total"));

        modifierC.setCellValueFactory(new PropertyValueFactory<>("modifier"));
        SupprimerC.setCellValueFactory(new PropertyValueFactory<>("supprimer"));
          DetailAdresse.setCellValueFactory(new PropertyValueFactory<>("detail"));
        exportcommande.setCellValueFactory(new PropertyValueFactory<>("imprimer"));
        TableCommande.setItems(datalistt); 
        
         
       
    }
        ObservableList<PieChart.Data> pieChartData = FXCollections.observableArrayList();

    private void displayChart() {

        pieChartData.clear();
        ordersChart.getData().clear();
        CommandeCRUD ocrud = new CommandeCRUD();
        List<Commande> orders = ocrud.afficherCommande();
        int lessThan100 = 0;
        int between = 0;
        int moreThan1000 = 0;
        for (Commande o : orders) {
            if (o.getTotal()<= 100) {
                lessThan100++;
            } else if (o.getTotal() < 500 && o.getTotal() >= 100) {
                between++;
            } else {
                moreThan1000++;
            }
        }
        pieChartData = FXCollections.observableArrayList(new PieChart.Data("P < 100 DT", lessThan100),
                new PieChart.Data("100 DT < P < 500 DT", between),
                new PieChart.Data("P > 500 DT", moreThan1000)
        );
        //            ordersChart.setTitle("Orders");
        ordersChart.setLabelsVisible(true);
        ordersChart.setLegendVisible(true);
        ordersChart.getData().addAll(pieChartData);
    }

   //endof bawezz 

   

    
  

   

   
}
