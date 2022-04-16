/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Pi.entities;

/**
 *
 * @author Aziz
 */
public class Adresse {
    int id;
    String Nom,Prenom,Adress,City,Email;
    int Tel;

    public Adresse() {
    }

    public Adresse(int id, String Nom, String Prenom, String Adress, String City, String Email, int Tel) {
        this.id = id;
        this.Nom = Nom;
        this.Prenom = Prenom;
        this.Adress = Adress;
        this.City = City;
        this.Email = Email;
        this.Tel = Tel;
    }

    public Adresse(String Nom, String Prenom, String Adress, String City, String Email, int Tel) {
        this.Nom = Nom;
        this.Prenom = Prenom;
        this.Adress = Adress;
        this.City = City;
        this.Email = Email;
        this.Tel = Tel;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNom() {
        return Nom;
    }

    public void setNom(String Nom) {
        this.Nom = Nom;
    }

    public String getPrenom() {
        return Prenom;
    }

    public void setPrenom(String Prenom) {
        this.Prenom = Prenom;
    }

    public String getAdress() {
        return Adress;
    }

    public void setAdress(String Adress) {
        this.Adress = Adress;
    }

    public String getCity() {
        return City;
    }

    public void setCity(String City) {
        this.City = City;
    }

    public String getEmail() {
        return Email;
    }

    public void setEmail(String Email) {
        this.Email = Email;
    }

    public int getTel() {
        return Tel;
    }

    public void setTel(int Tel) {
        this.Tel = Tel;
    }

    @Override
    public String toString() {
        return "Adresse{" + "id=" + id + ", Nom=" + Nom + ", Prenom=" + Prenom + ", Adress=" + Adress + ", City=" + City + ", Email=" + Email + ", Tel=" + Tel + '}';
    }
    
}
