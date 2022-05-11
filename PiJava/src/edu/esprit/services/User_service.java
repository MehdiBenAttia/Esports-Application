/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;
import edu.esprit.entities.Admin;


import edu.esprit.entities.User;
import edu.esprit.Interface.Interface_user;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.sql.Types;
import java.util.ArrayList;
import java.util.List;
import java.util.Random;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import edu.esprit.utils.MyConnection;
import edu.esprit.utils.Mail;
import edu.esprit.utils.Session;
import edu.esprit.utils.Sms;

/**
 *
 * @author 21655
 */
public 
        
        class User_service implements Interface_user {

    Connection cnx = MyConnection.getInstance().getCnx();

    @Override
    public void add(User u,int e) throws SQLException {
        String req = "";
        String x = "";
        if (u.getUsername().equals("adminadmin")) {

            try {
                u.setRole("[\"ROLE_ADMIN\"]");
                req = "INSERT INTO `user`( `nom`, `prenom`,`roles`,`email`, `password`,`username`,`tel`) VALUES ('" + u.getNom() + "','" + u.getPrenom() + "','" + u.getRole() + "','" + u.getEmail() + "','" + u.getMdp() + "','" + u.getUsername() + "'," + u.getTel() + ")";

                Statement st = cnx.createStatement();

                st.executeUpdate(req);
                System.out.println("ajout fait succes");
            } catch (SQLException ex) {
                ex.printStackTrace();
            }
        } else {
            u.setRole("[]");
            req = "INSERT INTO `user`( `nom`, `prenom`,`roles`,`email`, `password`,`username`,`tel`,`equipe_id`) VALUES ('" + u.getNom() + "','" + u.getPrenom() + "','" + u.getRole() + "','" + u.getEmail() + "','" + u.getMdp() + "','" + u.getUsername() + "'," + u.getTel() + "," + e + ")";
            String reqeq = "SELECT * FROM equipe WHERE `id`=" + u.id_e + " ";
            try {

                Statement st = cnx.createStatement();

                ResultSet rs = st.executeQuery(reqeq);
                while (rs.next()) {

                    x = rs.getString(2);

                }

                //if (x == "") {
                //System.out.println("equipe non existane");
                //}
                if (this.verif_cred(u)) {
                    st.executeUpdate(req);
                    System.out.println("ajout fait succes");
                } else {
                    System.out.println("Ajout non effectué");
                }
            } catch (SQLException ex) {
                ex.printStackTrace();
            } catch (Exception ex) {
                Logger.getLogger(User_service.class.getName()).log(Level.SEVERE, null, ex);
            }
        }

    }

    @Override
    public ObservableList<User> afficherUtilisateurs() {
        ObservableList<User> utilisateurs = FXCollections.observableArrayList();;
        String req = "SELECT * FROM user";
       

        try {

            Statement st = cnx.createStatement();
            Statement st2 = cnx.createStatement();
            ResultSet rs = st.executeQuery(req);
            while (rs.next()) {

                utilisateurs.add(new User(rs.getInt(1), rs.getString(2), rs.getString(3), rs.getString(4), rs.getString(8), rs.getInt(12), rs.getString(9)));
                String req2 = "SELECT nom_equipe from equipe where `id`=" + rs.getInt("equipe_id") + "";
                ResultSet rs1 = st2.executeQuery(req2);

            }
        } catch (SQLException ex) {
            System.out.println("erreur");
            ex.printStackTrace();
        }

        System.out.println("succes");
        return utilisateurs;

    }

    @Override
    public void modifierUtilisateurss(int id, String nom, String prenom, String email, String mdp, int tel, String username) {
        String req = "UPDATE `user` SET `nom`='" + nom + "',`prenom`='" + prenom + "',`email`='" + email + "',`username`='" + username + "',`password`='" + mdp + "',`tel`=" + tel + " WHERE `id`=" + id + " ";

        try {
            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("modif fait succes");
        } catch (SQLException ex) {
            ex.printStackTrace();
        }

    }

    @Override
    public void supprimerUtilisateurs(int id) {
        String req = "DELETE FROM user WHERE id=" + id;

        try {
            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("suppression fait avec succes");
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
    }

    public boolean verif_cred(User u) throws SQLException {
        Connection cnx = MyConnection.getInstance().getCnx();
        String email = "";

        try {

            String req1 = "SELECT * FROM user where email='" + email + "'";

            Statement st2 = cnx.createStatement();
            Statement st1 = cnx.createStatement();
            ResultSet rs1 = st1.executeQuery(req1);

            while ((rs1.next())) {
                email = rs1.getString("email");

            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        if (email != "") {
            System.out.println("email exists ");
            return false;

        } else {
            return true;
        }
    }

    @Override
    public void MotDePasseOublie(String email) throws SQLException, Exception {
        String test = "";
        try {
            String req1 = "SELECT * FROM user where email='" + email + "'";
            Statement st1 = cnx.createStatement();
            ResultSet rs1 = st1.executeQuery(req1);
            while (rs1.next()) {
                test = rs1.getString("email");

            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }

        if (test.equals(email)) {
            this.EnvoieMail(email);
            System.out.println("Mail Envoyé");
        } else {
            System.out.println("Utilisateur Non Trouvé");
        }

    }

    public int EnvoieMail(String email) throws SQLException, Exception {
        Random rand = new Random();
        int code = rand.nextInt((9999 - 1000) + 1) + 1000;

        String req = "UPDATE user SET `code`=" + code + " WHERE email='" + email + "'";
        Mail mail = new Mail();
        mail.sendMail(email, code);

        try {
            Statement st = cnx.createStatement();
            st.executeUpdate(req);

        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return code;

    }

    @Override
    public User Login(String email, String mdp) {
        User u = new User();
        String req = "SELECT * FROM user where (email='" + email + "' AND password='" + mdp + "')";
        try {
            //exec
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(req);
            while (rs.next()) {
                u.setId(rs.getInt(1));
                u.setNom(rs.getString("nom"));
                u.setPrenom(rs.getString("prenom"));
                u.setUsername(rs.getString("username"));
                u.setEmail(rs.getString("email"));
                u.setMdp(rs.getString("password"));
                u.setTel(rs.getInt("tel"));
                u.setRole(rs.getString("roles"));
                u.setBlock(rs.getInt("block"));

            }

        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return u;
    }

    public Boolean ResetPassword(int code, String pwd) {

        int test = 0;
        try {
            String req1 = "SELECT * FROM user where code=" + code + " ";
            Statement st1 = cnx.createStatement();
            ResultSet rs1 = st1.executeQuery(req1);
            while (rs1.next()) {
                test = rs1.getInt("code");

            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        if (test != 0) {
            String req = "UPDATE `user` SET `password`='" + pwd + "' WHERE `code`=" + code + " ";

            try {
                Statement st = cnx.createStatement();
                st.executeUpdate(req);

            } catch (SQLException ex) {
                ex.printStackTrace();
            }
            System.out.println("Reset Successful");
            return true;
        } else {
            System.out.println("Reset failed");
            return false;
        }
    }

    public ObservableList<User> show() throws SQLException {
        ObservableList<User> users = FXCollections.observableArrayList();
        String req = " select u.*,e.nom_equipe from user u inner join equipe e on u.equipe_id=e.id  ";
        Statement stm = cnx.createStatement();
        //ensemble de resultat
        ResultSet rst = stm.executeQuery(req);
        while (rst.next()) {
            User p;

            p = new User(rst.getInt("id"), rst.getString("nom"), rst.getString("prenom"), rst.getString("email"), rst.getString("password"), rst.getInt("tel"), rst.getString("username"), rst.getInt("equipe_id"), rst.getString("nom_equipe"), rst.getInt("block"));
            users.add(p);

        }

        return users;
    }

    public void bloquage(User u) {

        try {
            int test = 999;

            String req1 = "SELECT * FROM user where email='" + u.getEmail() + "'";

            Statement st1 = cnx.createStatement();
            ResultSet rs1 = st1.executeQuery(req1);
            while (rs1.next()) {

                test = rs1.getInt("block");
                System.out.println(test + " " + u.getPrenom());
                if (test == 0) {

                    String req = "UPDATE `user` SET `block`=" + 1 + "  where email='" + u.getEmail() + "'";

                    Sms.SendSms(u.getTel());
                    System.out.println(req);
                    
                        Statement st = cnx.createStatement();
                        st.executeUpdate(req);

                    

                }if(test == 1) {

                     String req = "UPDATE `user` SET `block`=" + 0 + "  where email='" + u.getEmail() + "'";

                    Statement st = cnx.createStatement();
                    st.executeUpdate(req);

                }

            }
        } catch (SQLException ex) {
            Logger.getLogger(User_service.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    @Override
     public  ObservableList<User> recherche(String x)  {
        ObservableList<User> users = FXCollections.observableArrayList();
        try {
           
            String req = "select u.*,e.nom_equipe from user u inner join equipe e on u.equipe_id=e.id  where u.`email`='"+x+"' or `nom`='"+x+"' or `prenom`='"+x+"' or `username`='"+x+"' ";
            Statement stm = cnx.createStatement();
            System.out.println(req);
            ResultSet rst = stm.executeQuery(req);
            while (rst.next()) {
                User p;
                
                p = new User(rst.getInt("id"), rst.getString("nom"), rst.getString("prenom"), rst.getString("email"), rst.getString("password"), rst.getInt("tel"), rst.getString("username"), rst.getInt("equipe_id"), rst.getString("nom_equipe"), rst.getInt("block"));
                users.add(p);
                
            }
            
            
            
        } catch (SQLException ex) {
            Logger.getLogger(User_service.class.getName()).log(Level.SEVERE, null, ex);
        }
return users;
} 
      public User getByIdemail(int id) throws SQLException {
         User j = new User();
        String req = "select * from user where id="+id+"";
        Statement stm = cnx.createStatement();
        ResultSet rst = stm.executeQuery(req);

        while (rst.next()) {
           
            j.setEmail(rst.getString("email"));
            
                    
                  
           
        }
        return j;
    
    }
     }


