/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Pi.entities;

import javafx.scene.control.Button;

/**
 *
 * @author Aziz
 */
public class Livreur {
      private int id;
    private String Nom,Prenom;
    private int Tel;
     private String Email;
       private Button modifier;
    private Button supprimer;

    public Livreur() {
    }

    public Livreur(int id, String Nom, String Prenom, int Tel, String Email) {
        this.id = id;
        this.Nom = Nom;
        this.Prenom = Prenom;
        this.Tel = Tel;
        this.Email = Email;
    }

    public Livreur(String Nom, String Prenom, int Tel, String Email) {
        this.Nom = Nom;
        this.Prenom = Prenom;
        this.Tel = Tel;
        this.Email = Email;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNom() {
        return Nom;
    }

    public void setNom(String Nom) {
        this.Nom = Nom;
    }

    public String getPrenom() {
        return Prenom;
    }

    public void setPrenom(String Prenom) {
        this.Prenom = Prenom;
    }

    public int getTel() {
        return Tel;
    }

    public void setTel(int Tel) {
        this.Tel = Tel;
    }

    public String getEmail() {
        return Email;
    }

    public void setEmail(String Email) {
        this.Email = Email;
    }

    @Override
    public String toString() {
        return "Livreur{" + "id=" + id + ", Nom=" + Nom + ", Prenom=" + Prenom + ", Tel=" + Tel + ", Email=" + Email + '}';
    }

    public void setModifier(Button modifier) {
        this.modifier = modifier;
    }

    public void setSupprimer(Button supprimer) {
        this.supprimer = supprimer;
    }

    public Button getModifier() {
        return modifier;
    }

    public Button getSupprimer() {
        return supprimer;
    }

}
