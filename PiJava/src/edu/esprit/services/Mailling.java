/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;

/**
 *
 * @author Admin
 */
import java.util.Date;
import java.util.Properties;
import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.PasswordAuthentication;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;
 
public class Mailling {
/*private String username = "bouzaiene_aziz1@yahoo.com";
private String password = "22362125";
 String host ="smtp.gmail.com" ;
public void envoyer(String email,String Nom ,String Prenom) {
// Etape 1 : Création de la session
System.err.println("Preparing to  send email");
  Properties props = System.getProperties();
         props.put("mail.smtp.starttls.enable", "true");
            props.put("mail.smtp.host", host);
            props.put("mail.smtp.port", "587");
            props.put("mail.smtp.auth", "true");
            props.put("mail.smtp.starttls.required", "true");

Session session = Session.getInstance(props,
new javax.mail.Authenticator() {
protected PasswordAuthentication getPasswordAuthentication() {
return new PasswordAuthentication(username, password);
}
});
try {
// Etape 2 : Création de l'objet Message
Message message = new MimeMessage(session);
message.setFrom(new InternetAddress("aziz.bouzaiene1@gmail.com"));
message.setRecipients(Message.RecipientType.TO,
InternetAddress.parse(email));
message.setSubject("Confirmation de commande");

message.setText("Salut monsieur "+Nom+" "+Prenom+" Votre Commande est confirmé , elle vous sera  livrée en quelques jours" );
// Etape 3 : Envoyer le message
Transport.send(message);
System.out.println("Message_envoye");
} catch (MessagingException e) {
throw new RuntimeException(e);
} 
}*/
     public static void sendEmail(String addr, String message) throws Exception {

        String from = "aziz.bouzaiene1@gmail.com";
        String pass ="22362125";
        String[] to = {addr};
        //String to = "ayadipawlou@gmail.com";
        String host ="smtp.gmail.com" ;
                    String messageText = message;

            boolean sessionDebug = false;

        Properties props = System.getProperties();
         props.put("mail.smtp.starttls.enable", "true");
            props.put("mail.smtp.host", host);
            props.put("mail.smtp.port", "587");
            props.put("mail.smtp.auth", "true");
            props.put("mail.smtp.starttls.required", "true");

         java.security.Security.addProvider(new com.sun.net.ssl.internal.ssl.Provider());
            Session mailSession = Session.getDefaultInstance(props, null);
            mailSession.setDebug(sessionDebug);
            Message msg = new MimeMessage(mailSession);
           InternetAddress[] address = {new InternetAddress(addr)};
            msg.setFrom(new InternetAddress(from));
            msg.setRecipients(Message.RecipientType.TO, address);
            msg.setSubject("Confirmation de commande"); msg.setSentDate(new Date());
            msg.setText(messageText);

           Transport transport=mailSession.getTransport("smtp");
           transport.connect(host, from, pass);
           transport.sendMessage(msg, msg.getAllRecipients());
           transport.close();
           System.out.println("message send successfully");
}}

