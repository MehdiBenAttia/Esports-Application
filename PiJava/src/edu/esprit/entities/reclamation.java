/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.entities;

import java.sql.Date;

/**
 *
 * @author USER
 */
public class reclamation {
      private int id;
    private String nom_user;
    private String message;
        private Date date ;
        categorieRec categorie_id;
        private String email;
        private String etat;
        int yeah;
        String test;
    String rep;    

    public reclamation() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public String getRep() {
        return rep;
    }

    public void setRep(String rep) {
        this.rep = rep;
    }

   

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNom_user() {
        return nom_user;
    }

    public void setNom_user(String nom_user) {
        this.nom_user = nom_user;
    }

    public String getMessage() {
        return message;
    }

    public void setMessage(String message) {
        this.message = message;
    }

    public Date getDate() {
        return date;
    }

    public void setDate(Date date) {
        this.date = date;
    }

    public categorieRec getCategorie_id() {
        return categorie_id;
    }

    public void setCategorie_id(categorieRec categorie_id) {
        this.categorie_id = categorie_id;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getEtat() {
        return etat;
    }

    public void setEtat(String etat) {
        this.etat = etat;
    }

    public int getYeah() {
        return yeah;
    }

    public void setYeah(int yeah) {
        this.yeah = yeah;
    }

    @Override
    public String toString() {
        return "reclamation{" + "id=" + id + ", nom_user=" + nom_user + ", message=" + message + ", date=" + date + ", categorie_id=" + categorie_id + ", email=" + email + ", etat=" + etat + ", yeah=" + yeah + ", test=" + test + '}';
    }

    public reclamation(int id, String nom_user, String message, Date date, String email, String etat, int yeah, String test, String rep) {
        this.id = id;
        this.nom_user = nom_user;
        this.message = message;
        this.date = date;
        this.email = email;
        this.etat = etat;
        this.yeah = yeah;
        this.test = test;
        this.rep = rep;
    }

    public String getTest() {
        return test;
    }

    public void setTest(String test) {
        this.test = test;
    }

    public reclamation(int id, String nom_user, String message, Date date, String email, String etat, String test) {
        this.id = id;
        this.nom_user = nom_user;
        this.message = message;
        this.date = date;
        this.email = email;
        this.etat = etat;
        this.test = test;
    }

   

    public reclamation(String nom_user, String message, String email, String etat) {
        this.nom_user = nom_user;
        this.message = message;
        this.email = email;
        this.etat = etat;
    }

    public reclamation(int id, String nom_user, String message, Date date, String email, String etat, int yeah) {
        this.id = id;
        this.nom_user = nom_user;
        this.message = message;
        this.date = date;
        this.email = email;
        this.etat = etat;
        this.yeah = yeah;
    }

    

    public reclamation(int id, String nom_user, String message, Date date, categorieRec categorie_id, String email, String etat) {
        this.id = id;
        this.nom_user = nom_user;
        this.message = message;
        this.date = date;
        this.categorie_id = categorie_id;
        this.email = email;
        this.etat = etat;
    }

    public reclamation(String nom_user, String message, Date date, categorieRec categorie_id, String email, String etat) {
        this.nom_user = nom_user;
        this.message = message;
        this.date = date;
        this.categorie_id = categorie_id;
        this.email = email;
        this.etat = etat;
    }
}
