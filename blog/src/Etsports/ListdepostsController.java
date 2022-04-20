/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Etsports;

import edu.entities.Post;
import edu.services.CommentaireService;
import edu.services.PostServices;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Insets;
import javafx.scene.control.Label;
import javafx.scene.control.ScrollPane;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.Region;

/**
 * FXML Controller class
 *
 * @author aziz
 */
public class ListdepostsController implements Initializable {

    @FXML
    private Label totalcom;
    @FXML
    private Label totalpost;
    @FXML
    private ScrollPane scroll;
    @FXML
    private GridPane grid;

    
    public ObservableList<Post> Postdata = FXCollections.observableArrayList();
                PostServices po = new PostServices();
                  private List<Post> Post = new ArrayList<>();
                  CommentaireService co = new CommentaireService();
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
          try {
            Postdata.addAll(po.afficher());
        } catch (SQLException ex) {
            Logger.getLogger(PostcardController.class.getName()).log(Level.SEVERE, null, ex);
        }

        //Match.addAll(getData());
        // Jeux.addAll(jcr.readAll());
   
      
        
        int column=0;
        int row=3;
        for(int i=0 ; i< Postdata.size();i++){
            
            FXMLLoader fxmlLoader = new FXMLLoader();
            fxmlLoader.setLocation(getClass().getResource("/Etsports/Postcard.fxml"));
            
            try {
                 System.out.println("hhhh");
                AnchorPane anchorPane = fxmlLoader.load();
           
            
            
            PostcardController itemController = fxmlLoader.getController();
           itemController.setData(Postdata.get(i).getIdPost(),Postdata.get(i).getSujet(),Postdata.get(i).getDescription(),Postdata.get(i).getCommunaute(),Postdata.get(i).getNom_user(),Postdata.get(i).getDate_p(),Postdata.get(i).getImage(),Postdata.get(i).getNbr_jaime());
//          itemController.setData(11,"ghj","jnui","hhhnu","hhuhuh","huiu",5);
           if(column == 2){
                column=0;
                row++;
            }
            //Node anchorPane;
             grid.add(anchorPane, column++, row); //Child , column , row
               
            //Set Item Grid Width
            grid.setMinWidth(Region.USE_COMPUTED_SIZE);
            grid.setPrefWidth(Region.USE_COMPUTED_SIZE);
            grid.setMaxWidth(Region.USE_PREF_SIZE);
            
            
            //Set Item Grid Height
            grid.setMinHeight(Region.USE_COMPUTED_SIZE);
            grid.setPrefHeight(Region.USE_COMPUTED_SIZE);
            grid.setMaxHeight(Region.USE_PREF_SIZE);
            
            
            
            
             GridPane.setMargin(anchorPane,new Insets(10));
              } catch (IOException ex) {
                Logger.getLogger(ListdepostsController.class.getName()).log(Level.SEVERE, null, ex);
            }
            
            
        }
              
              
    }    
    
}
