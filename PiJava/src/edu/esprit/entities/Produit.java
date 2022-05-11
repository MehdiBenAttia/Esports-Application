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
public class Produit {
    private int id;
        private int reference;
        private String nom;
                private String marque;
                private int prix;
                private String type;
                private String image;
                Categorie categorie_id;
                private String categ;
                int e;
                static int test;
                float r;
                int m;

    public static int getTest() {
        return test;
    }

    public Produit(String marque, float r) {
        this.marque = marque;
        this.r = r;
    }

    public int getM() {
        return m;
    }

    public void setM(int m) {
        this.m = m;
    }

    public float getR() {
        return r;
    }

    public void setR(float r) {
        this.r = r;
    }

    public Produit(String marque) {
        this.marque = marque;
    }

    public static void setTest(int test) {
        Produit.test = test;
    }

    public Produit(String marque, int e) {
        this.marque = marque;
        this.e = e;
    }

    public Produit(int id, int reference, String nom, String marque, int prix, String type, String image, Categorie categorie_id, String categ, int e) {
        this.id = id;
        this.reference = reference;
        this.nom = nom;
        this.marque = marque;
        this.prix = prix;
        this.type = type;
        this.image = image;
        this.categorie_id = categorie_id;
        this.categ = categ;
        this.e = e;
    }

    public Produit(int id, int reference, String nom, String marque, int prix, String type, String image) {
        this.id = id;
        this.reference = reference;
        this.nom = nom;
        this.marque = marque;
        this.prix = prix;
        this.type = type;
        this.image = image;
    }

    public Produit() {
    }

    public Produit(int id, int reference, String nom, String marque, int prix, String type, String image, String categ, int e) {
        this.id = id;
        this.reference = reference;
        this.nom = nom;
        this.marque = marque;
        this.prix = prix;
        this.type = type;
        this.image = image;
        this.categ = categ;
        this.e = e;
    }


    public Produit(int id, int reference, String nom, String marque, int prix, String type, String image, Categorie categorie_id) {
        this.id = id;
        this.reference = reference;
        this.nom = nom;
        this.marque = marque;
        this.prix = prix;
        this.type = type;
        this.image = image;
        this.categorie_id = categorie_id;
    }

    public Produit(int id,int reference, String nom, String marque, int prix, String type, String image, int e) {
                this.id = id;

        this.reference = reference;
        this.nom = nom;
        this.marque = marque;
        this.prix = prix;
        this.type = type;
        this.image = image;
        this.e = e;
    }

    public Produit(int id, int reference, String nom, String marque, int prix, String type, String image, String categ) {
        this.id = id;
        this.reference = reference;
        this.nom = nom;
        this.marque = marque;
        this.prix = prix;
        this.type = type;
        this.image = image;
        this.categ = categ;
    }

    public Produit(int reference, String nom, String marque, int prix, String type, String image, Categorie categorie_id) {
        this.reference = reference;
        this.nom = nom;
        this.marque = marque;
        this.prix = prix;
        this.type = type;
        this.image = image;
        this.categorie_id = categorie_id;
    }
    

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getReference() {
        return reference;
    }

    public void setReference(int reference) {
        this.reference = reference;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getMarque() {
        return marque;
    }

    public void setMarque(String marque) {
        this.marque = marque;
    }

    public int getPrix() {
        return prix;
    }

    public void setPrix(int prix) {
        this.prix = prix;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public Categorie getCategorie_id() {
        return categorie_id;
    }

    public void setCategorie_id(Categorie categorie_id) {
        this.categorie_id = categorie_id;
    }

    @Override
    public String toString() {
        return "Produit{" + "id=" + id + ", reference=" + reference + ", nom=" + nom + ", marque=" + marque + ", prix=" + prix + ", type=" + type + ", image=" + image + ", categorie_id=" + categorie_id + ", categ=" + categ + ", e=" + e + '}';
    }

    public String getCateg() {
        return categ;
    }

    public void setCateg(String categ) {
        this.categ = categ;
    }

    public int getE() {
        return e;
    }

    public void setE(int e) {
        this.e = e;
    }
    
}
