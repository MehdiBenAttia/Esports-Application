/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.entities;

/**
 *
 * @author USER
 */
public class Categorie {
    private int id;
    private String nom_categ;
    private String nom_fournisseur;
        private String mail_fournisseur;
        private int x;

    public int getX() {
        return x;
    }

    public Categorie(int id, String nom_categ, String nom_fournisseur, String mail_fournisseur, int x) {
        this.id = id;
        this.nom_categ = nom_categ;
        this.nom_fournisseur = nom_fournisseur;
        this.mail_fournisseur = mail_fournisseur;
        this.x = x;
    }

    public void setX(int x) {
        this.x = x;
    }

    public Categorie() {
    }

    public Categorie(int id, String nom_categ, String nom_fournisseur, String mail_fournisseur) {
        this.id = id;
        this.nom_categ = nom_categ;
        this.nom_fournisseur = nom_fournisseur;
        this.mail_fournisseur = mail_fournisseur;
    }

    public Categorie(String nom_categ, String nom_fournisseur, String mail_fournisseur) {
        this.nom_categ = nom_categ;
        this.nom_fournisseur = nom_fournisseur;
        this.mail_fournisseur = mail_fournisseur;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNom_categ() {
        return nom_categ;
    }

    public void setNom_categ(String nom_categ) {
        this.nom_categ = nom_categ;
    }

    public String getNom_fournisseur() {
        return nom_fournisseur;
    }

    public void setNom_fournisseur(String nom_fournisseur) {
        this.nom_fournisseur = nom_fournisseur;
    }

    public String getMail_fournisseur() {
        return mail_fournisseur;
    }

    public void setMail_fournisseur(String mail_fournisseur) {
        this.mail_fournisseur = mail_fournisseur;
    }

    @Override
    public String toString() {
        return "Categorie{" + "id=" + id + ", nom_categ=" + nom_categ + ", nom_fournisseur=" + nom_fournisseur + ", mail_fournisseur=" + mail_fournisseur + ", x=" + x + '}';
    }
    
}
