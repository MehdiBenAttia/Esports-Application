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
public class review {
    
    int id;
    int produit_id;
    double note_produit;
    String avis;
    String username;

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public review(int id, int produit_id, double note_produit, String avis, String username) {
        this.id = id;
        this.produit_id = produit_id;
        this.note_produit = note_produit;
        this.avis = avis;
        this.username = username;
    }

    public review(int produit_id, double note_produit, String avis, String username) {
        this.produit_id = produit_id;
        this.note_produit = note_produit;
        this.avis = avis;
        this.username = username;
    }

    public review(int id, int produit_id, double note_produit, String avis) {
        this.id = id;
        this.produit_id = produit_id;
        this.note_produit = note_produit;
        this.avis = avis;
    }

    public review(int produit_id, double note_produit, String avis) {
        this.produit_id = produit_id;
        this.note_produit = note_produit;
        this.avis = avis;
    }

    public review(int produit_id, double note_produit) {
        this.produit_id = produit_id;
        this.note_produit = note_produit;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getProduit_id() {
        return produit_id;
    }

    public void setProduit_id(int produit_id) {
        this.produit_id = produit_id;
    }

    public double getNote_produit() {
        return note_produit;
    }

    public review() {
    }

    public void setNote_produit(double note_produit) {
        this.note_produit = note_produit;
    }

    public String getAvis() {
        return avis;
    }

    public void setAvis(String avis) {
        this.avis = avis;
    }

    @Override
    public String toString() {
        return "review{" + "id=" + id + ", produit_id=" + produit_id + ", note_produit=" + note_produit + ", avis=" + avis + '}';
    }
    
}
