/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.utils;

import com.twilio.Twilio;
import com.twilio.rest.api.v2010.account.Message;
import com.twilio.type.PhoneNumber;

/**
 *
 * @author 21655
 */
public class Sms {
       public static final String ACCOUNT_SID ="ACf128b1968196daf258d557171b7bb20e";
    public static final String AUTH_TOKEN = "d9af8d4b77cf6466d2c3323676dcbf94";
 public static void SendSms(int tel) {
        Twilio.init(ACCOUNT_SID, AUTH_TOKEN);
        Message message = Message.creator(
                new com.twilio.type.PhoneNumber("+216"+tel),
                new com.twilio.type.PhoneNumber("+19892652243"),
                "Votre compte a éte bloqué par un Administrateur")
            .create();

        System.out.println(message.getSid());
    }


    
}
