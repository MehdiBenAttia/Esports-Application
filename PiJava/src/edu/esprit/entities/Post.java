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
public class Post {
    private int id;
    private String sujet;
    private String description;
    private String communaute;
    private String nom_user;
    private Date date_p;
    private String image;
     private int nbr_jaime;
          private int liked;
          private int badlevel;

    
static int test;

    public static int getTest() {
        return test;
    }

    public static void setTest(int test) {
        Post.test = test;
    }
    public Post() {
    }

    public Post(String description, String communaute, String nom_user, String image, int badlevel) {
        this.description = description;
        this.communaute = communaute;
        this.nom_user = nom_user;
        this.image = image;
        this.badlevel = badlevel;
    }
    

    public Post(String sujet, String description, String communaute, String nom_user, String image, int badlevel) {
        this.sujet = sujet;
        this.description = description;
        this.communaute = communaute;
        this.nom_user = nom_user;
        this.image = image;
        this.badlevel = badlevel;
    }

    public Post(int idPost, String sujet, String description, String communaute, String nom_user,  String image, int nbr_jaime) {
        this.id = idPost;
        this.sujet = sujet;
        this.description = description;
        this.communaute = communaute;
        this.nom_user = nom_user;
        this.image = image;
        this.nbr_jaime = nbr_jaime;
    }

    public Post(int id, String sujet, String description, String communaute, String nom_user, Date date_p, String image, int nbr_jaime) {
        this.id = id;
        this.sujet = sujet;
        this.description = description;
        this.communaute = communaute;
        this.nom_user = nom_user;
        this.date_p = date_p;
        this.image = image;
        this.nbr_jaime = nbr_jaime;
    }

    public Post(String sujet, String description, String communaute, String nom_user, String image) {
        this.sujet = sujet;
        this.description = description;
        this.communaute = communaute;
        this.nom_user = nom_user;
        this.image = image;
    }

    public Post(int id, String sujet, String description, String communaute, String nom_user, Date date_p, String image, int nbr_jaime, int liked) {
        this.id = id;
        this.sujet = sujet;
        this.description = description;
        this.communaute = communaute;
        this.nom_user = nom_user;
        this.date_p = date_p;
        this.image = image;
        this.nbr_jaime = nbr_jaime;
        this.liked = liked;
    }

    public Post(int id, String sujet, String description, String communaute, String nom_user, Date date_p, String image, int nbr_jaime, int liked, int badlevel) {
        this.id = id;
        this.sujet = sujet;
        this.description = description;
        this.communaute = communaute;
        this.nom_user = nom_user;
        this.date_p = date_p;
        this.image = image;
        this.nbr_jaime = nbr_jaime;
        this.liked = liked;
        this.badlevel = badlevel;
    }

    

   

    

    
    public int getIdPost() {
        return id;
    }

    public void setIdPost(int idPost) {
        this.id = idPost;
    }

    public String getSujet() {
        return sujet;
    }

    public void setSujet(String sujet) {
        this.sujet = sujet;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getCommunaute() {
        return communaute;
    }

    public void setCommunaute(String communaute) {
        this.communaute = communaute;
    }

    public String getNom_user() {
        return nom_user;
    }

    public void setNom_user(String nom_user) {
        this.nom_user = nom_user;
    }

    public Date getDate_p() {
        return date_p;
    }

    public void setDate_p(Date date_p) {
        this.date_p = date_p;
    }

    public int getNbr_jaime() {
        return nbr_jaime;
    }

    public void setNbr_jaime(int nbr_jaime) {
        this.nbr_jaime = nbr_jaime;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

  

    public int getLiked() {
        return liked;
    }

    public void setLiked(int liked) {
        this.liked = liked;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getBadlevel() {
        return badlevel;
    }

    public void setBadlevel(int badlevel) {
        this.badlevel = badlevel;
    }

    @Override
    public String toString() {
        return "Post{" + "id=" + id + ", sujet=" + sujet + ", description=" + description + ", communaute=" + communaute + ", nom_user=" + nom_user + ", date_p=" + date_p + ", image=" + image + ", nbr_jaime=" + nbr_jaime + ", liked=" + liked + ", badlevel=" + badlevel + '}';
    }
    
}
