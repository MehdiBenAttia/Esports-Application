/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.entities;

import java.sql.Date;
import javafx.scene.control.Button;
import java.time.LocalDateTime;

/**
 *
 * @author USER
 */
public class Commande {
     int idcommande;
    int idlivreur_id;
    String Produit;
    int Quantite;
    Date Date;
    float Total;
    int adresse_id;
Button modifier,supprimer,detail,imprimer;
String name,prename;
    public Commande() {
    }

    public String getName() {
        return name;
    }

    public void setName(String name,String prename) {
        this.name = name;
        this.prename= prename;
    }

    public String getPrename() {
        return prename;
    }

    public void setPrename(String prename) {
        this.prename = prename;
    }

    public Commande(int idcommande, int idlivreur_id, String Produit, int Quantite, Date Date, float Total, int adresse_id) {
        this.idcommande = idcommande;
        this.idlivreur_id = idlivreur_id;
        this.Produit = Produit;
        this.Quantite = Quantite;
        this.Date = Date;
        this.Total = Total;
        this.adresse_id = adresse_id;
    }

    public Commande(String Produit, int Quantite, Date Date, float Total) {
        this.Produit = Produit;
        this.Quantite = Quantite;
        this.Date = Date;
        this.Total = Total;
    }

    public Commande(String Produit, int Quantite, Date Date, float Total, int adresse_id) {
        this.Produit = Produit;
        this.Quantite = Quantite;
        this.Date = Date;
        this.Total = Total;
        this.adresse_id = adresse_id;
    }

    public Commande( String Produit, int Quantite, float Total, int adresse_id) {
        this.Produit = Produit;
        this.Quantite = Quantite;
        this.Total = Total;
        this.adresse_id = adresse_id;
    }

    public Commande(int idcommande, String Produit, int Quantite, float Total) {
        this.idcommande = idcommande;
        this.Produit = Produit;
        this.Quantite = Quantite;
        this.Total = Total;
    }

    public Commande(int idcommande, String Produit, int Quantite, float Total, int adresse_id, String name, String prename) {
        this.idcommande = idcommande;
        this.Produit = Produit;
        this.Quantite = Quantite;
        this.Total = Total;
        this.adresse_id = adresse_id;
        this.name = name;
        this.prename = prename;
    }

    public Commande(int idcommande, int idlivreur_id, String Produit, int Quantite, float Total) {
        this.idcommande = idcommande;
        this.idlivreur_id = idlivreur_id;
        this.Produit = Produit;
        this.Quantite = Quantite;
        this.Total = Total;
    }

   
   
    

    
    

    public int getIdcommande() {
        return idcommande;
    }

    public void setIdcommande(int idcommande) {
        this.idcommande = idcommande;
    }

    public int getIdlivreur_id() {
        return idlivreur_id;
    }

    public void setIdlivreur_id(int idlivreur_id) {
        this.idlivreur_id = idlivreur_id;
    }

    public String getProduit() {
        return Produit;
    }

    public void setProduit(String Produit) {
        this.Produit = Produit;
    }

    public int getQuantite() {
        return Quantite;
    }

    public void setQuantite(int Quantite) {
        this.Quantite = Quantite;
    }

    public Date getDate() {
        return Date;
    }

    public void setDate(Date Date) {
        this.Date = Date;
    }

    public float getTotal() {
        return Total;
    }

    public void setTotal(float Total) {
        this.Total = Total;
    }

    public int getAdresse_id() {
        return adresse_id;
    }

    public void setAdresse_id(int adresse_id) {
        this.adresse_id = adresse_id;
    }

    @Override
    public String toString() {
        return "Commande{" + "idcommande=" + idcommande + ", idlivreur_id=" + idlivreur_id + ", Produit=" + Produit + ", Quantite=" + Quantite + ", Date=" + Date + ", Total=" + Total + ", adresse_id=" + adresse_id + ", modifier=" + modifier + ", supprimer=" + supprimer + ", detail=" + detail + ", name=" + name + ", prename=" + prename + '}';
    }

    

  public void setModifier(Button modifier) {
        this.modifier = modifier;
    }

    public void setSupprimer(Button supprimer) {
        this.supprimer = supprimer;
    }
 public void setDetail(Button detail) {
        this.detail = detail;
    }
    public Button getModifier() {
        return modifier;
    }
public Button getDetail() {
        return detail;
    }
    public Button getSupprimer() {
        return supprimer;
    }

    public boolean matches(String ic) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public Button getImprimer() {
        return imprimer;
    }

    public void setImprimer(Button imprimer) {
        this.imprimer = imprimer;
    }
}
