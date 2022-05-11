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
public class categorieRec {
     private int id;
    private String catrec;
    private Date date ;
    private String reclamations ;
    private String descrip ;
    private String level ;

    public categorieRec() {
    }

    public categorieRec(String descrip, String level) {
        this.descrip = descrip;
        this.level = level;
    }

    public categorieRec(String catrec, String reclamations, String descrip, String level) {
        this.catrec = catrec;
        this.reclamations = reclamations;
        this.descrip = descrip;
        this.level = level;
    }

    public categorieRec(String catrec, String descrip, String level) {
        this.catrec = catrec;
        this.descrip = descrip;
        this.level = level;
    }

    public categorieRec(int id, String catrec, Date date, String descrip, String level) {
        this.id = id;
        this.catrec = catrec;
        this.date = date;
        this.descrip = descrip;
        this.level = level;
    }

    public categorieRec(int id, String catrec, String descrip, String level) {
        this.id = id;
        this.catrec = catrec;
        this.descrip = descrip;
        this.level = level;
    }

    
    public categorieRec(int id, String catrec, Date date, String reclamations, String descrip, String level) {
        this.id = id;
        this.catrec = catrec;
        this.date = date;
        this.reclamations = reclamations;
        this.descrip = descrip;
        this.level = level;
    }

    public categorieRec(String catrec, Date date, String reclamations, String descrip, String level) {
        this.catrec = catrec;
        this.date = date;
        this.reclamations = reclamations;
        this.descrip = descrip;
        this.level = level;
    }

    public int getId() {
        return id;
    }

    public String getCatrec() {
        return catrec;
    }

    public Date getDate() {
        return date;
    }

    public String getReclamations() {
        return reclamations;
    }

    public String getDescrip() {
        return descrip;
    }

    public String getLevel() {
        return level;
    }

    public void setId(int id) {
        this.id = id;
    }

    public void setCatrec(String catrec) {
        this.catrec = catrec;
    }

    public void setDate(Date date) {
        this.date = date;
    }

    public void setReclamations(String reclamations) {
        this.reclamations = reclamations;
    }

    public void setDescrip(String descrip) {
        this.descrip = descrip;
    }

    public void setLevel(String level) {
        this.level = level;
    }

    @Override
    public String toString() {
        return "categorieRec{" + "id=" + id + ", catrec=" + catrec + ", date=" + date + ", reclamations=" + reclamations + ", descrip=" + descrip + ", level=" + level + '}';
    }
}
