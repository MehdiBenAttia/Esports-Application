package edu.esprit.gui;

import edu.esprit.entities.CategorieC;
import edu.esprit.entities.Jeux;
import edu.esprit.services.ServiceCategoriec;
import edu.esprit.services.ServiceJeux;
import edu.esprit.utils.MyConnection;

import javafx.geometry.Insets;
import java.io.File;
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
import java.util.Date;
import java.util.List;
import java.util.Set;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.beans.property.SimpleStringProperty;
import javafx.beans.value.ObservableValue;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.scene.chart.PieChart;
import javafx.scene.chart.PieChart.Data;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.ButtonType;
import javafx.scene.control.ComboBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn.CellDataFeatures;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.control.cell.TextFieldTableCell;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.Region;
import javafx.util.Callback;
import javax.swing.JFileChooser;
import javax.swing.JOptionPane;
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
    }

    @FXML
    private void fnCommandes(ActionEvent event) {
        MenuCommande.toFront();
    }

    @FXML
    private void fnReclamations(ActionEvent event) {
        MenuReclamations.toFront();
    }

    @FXML
    private void fnBlog(ActionEvent event) {
        MenuBlog.toFront();
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
}
