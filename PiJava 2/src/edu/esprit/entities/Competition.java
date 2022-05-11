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
public class Competition {
    private int id,nbr,nbrPart;
    private String nom,image;
    private Date deb,fin,upd;
    private Jeux jeu;
    private boolean isParticipated;

    public Competition() {
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getNbr() {
        return nbr;
    }

    public void setNbr(int nbr) {
        this.nbr = nbr;
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

    public Date getDeb() {
        return deb;
    }

    public void setDeb(Date deb) {
        this.deb = deb;
    }

    public Date getFin() {
        return fin;
    }

    public void setFin(Date fin) {
        this.fin = fin;
    }

    public Date getUpd() {
        return upd;
    }

    public void setUpd(Date upd) {
        this.upd = upd;
    }

    public Jeux getJeu() {
        return jeu;
    }

    public void setJeu(Jeux jeu) {
        this.jeu = jeu;
    }

    public boolean isIsParticipated() {
        return isParticipated;
    }

    public void setIsParticipated(boolean isParticipated) {
        this.isParticipated = isParticipated;
    }

    public int getNbrPart() {
        return nbrPart;
    }

    public void setNbrPart(int nbrPart) {
        this.nbrPart = nbrPart;
    }

    
    @Override
    public String toString() {
        return "Competition{" + "id=" + id + ", nbr=" + nbr + ", nom=" + nom + ", image=" + image + ", deb=" + deb + ", fin=" + fin + ", upd=" + upd + ", jeu=" + jeu + '}';
    }
    
    
    
    
    
}
