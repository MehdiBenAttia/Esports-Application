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
public class Jeux {
    private int id;
    private String nom;
    private String image;
    private String dates;
    private String updated_at;
    private CategorieC categorie_id;

    public Jeux(int id, String nom, String image, String dates, String upd, CategorieC categorie_id) {
        this.id = id;
        this.nom = nom;
        this.image = image;
        this.dates = dates;
        this.updated_at = upd;
        this.categorie_id = categorie_id;
    }

    public Jeux(String nom, String image, String dates, String updated_at, CategorieC categorie_id) {
        this.nom = nom;
        this.image = image;
        this.dates = dates;
        this.updated_at = updated_at;
        this.categorie_id = categorie_id;
    }

    public Jeux(int id, String nom, String image, String dates, String updated_at) {
        this.id = id;
        this.nom = nom;
        this.image = image;
        this.dates = dates;
        this.updated_at = updated_at;
    }

    public Jeux() {
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public String getDates() {
        return dates;
    }

    public void setDates(String dates) {
        this.dates = dates;
    }

    public String getUpd() {
        return updated_at;
    }

    public void setUpd(String upd) {
        this.updated_at = upd;
    }

    public CategorieC getCategorie() {
        return categorie_id;
    }

    public void setCategorie(CategorieC categorie_id) {
        this.categorie_id = categorie_id;
    }

    @Override
    public String toString() {
        return "Jeux{" + "id=" + id + ", nom=" + nom + ", image=" + image + ", dates=" + dates + ", upd=" + updated_at + ", categorie=" + categorie_id.getNom() + '}';
    }

}

