/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.entities;

import java.sql.Date;

/**
 *
 * @author aziz
 */
public class Reply {
    private int id;
    private String descriptionr;
    private String nom_user;
    private Date date_r;
    private int Commentaire_id ;

    public Reply() {
    }

    public Reply(String descriptionr, String nomuser, Date dater, int Commentaire_id) {
        this.descriptionr = descriptionr;
        this.nom_user = nomuser;
        this.date_r = dater;
        this.Commentaire_id = Commentaire_id;
    }

    public Reply(int id, String descriptionr, String nomuser, Date dater, int Commentaire_id) {
        this.id = id;
        this.descriptionr = descriptionr;
        this.nom_user = nomuser;
        this.date_r = dater;
        this.Commentaire_id = Commentaire_id;
    }

    public Reply(String descriptionr, String nomuser, int Commentaire_id) {
        this.descriptionr = descriptionr;
        this.nom_user = nomuser;
        this.Commentaire_id = Commentaire_id;
    }

    public Reply(int id, String descriptionr, String nomuser, int Commentaire_id) {
        this.id = id;
        this.descriptionr = descriptionr;
        this.nom_user = nomuser;
        this.Commentaire_id = Commentaire_id;
    }

   

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getDescriptionr() {
        return descriptionr;
    }

    public void setDescriptionr(String descriptionr) {
        this.descriptionr = descriptionr;
    }

    public String getNomuser() {
        return nom_user;
    }

    public void setNomuser(String nomuser) {
        this.nom_user = nomuser;
    }

    public Date getDater() {
        return date_r;
    }

    public void setDater(Date dater) {
        this.date_r = dater;
    }

    public int getCommentaire_id() {
        return Commentaire_id;
    }

    public void setCommentaire_id(int Commentaire_id) {
        this.Commentaire_id = Commentaire_id;
    }

    @Override
    public String toString() {
        return "Reply{" + "id=" + id + ", descriptionr=" + descriptionr + ", nomuser=" + nom_user + ", dater=" + date_r + ", Commentaire_id=" + Commentaire_id + '}';
    }
    
    
    
    
    
    
}

