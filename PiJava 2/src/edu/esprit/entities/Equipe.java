/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.entities;

import java.util.Objects;

/**
 *
 * @author 21655
 */
public class Equipe {
    int id_e;
    String nom_equipe;
    int nb;
    String jeu;
    

    public Equipe(String nom_equipe, int nb, String jeu) {
        this.nom_equipe = nom_equipe;
        this.nb = nb;
        this.jeu = jeu;
    }

    public Equipe(int id_e, String nom_equipe, int nb, String jeu) {
        this.id_e = id_e;
        this.nom_equipe = nom_equipe;
        this.nb = nb;
        this.jeu = jeu;
    }

    public int getId_e() {
        return id_e;
    }

    public void setId_e(int id_e) {
        this.id_e = id_e;
    }

    public String getNom_equipe() {
        return nom_equipe;
    }

    public void setNom_equipe(String nom_equipe) {
        this.nom_equipe = nom_equipe;
    }

    public int getNb() {
        return nb;
    }

    public void setNb(int nb) {
        this.nb = nb;
    }

    public String getJeu() {
        return jeu;
    }

    public void setJeu(String jeu) {
        this.jeu = jeu;
    }

    @Override
    public String toString() {
        return "Equipe{" + "id_e=" + id_e + ", nom_equipe=" + nom_equipe + ", nb=" + nb + ", jeu=" + jeu + '}';
    }

    @Override
    public int hashCode() {
        int hash = 5;
        hash = 59 * hash + this.id_e;
        hash = 59 * hash + Objects.hashCode(this.nom_equipe);
        hash = 59 * hash + this.nb;
        hash = 59 * hash + Objects.hashCode(this.jeu);
        return hash;
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final Equipe other = (Equipe) obj;
        if (this.id_e != other.id_e) {
            return false;
        }
        if (this.nb != other.nb) {
            return false;
        }
        if (!Objects.equals(this.nom_equipe, other.nom_equipe)) {
            return false;
        }
        if (!Objects.equals(this.jeu, other.jeu)) {
            return false;
        }
        return true;
    }
    
    
}
