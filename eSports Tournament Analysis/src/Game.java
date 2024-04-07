//  A.M:3212019038  Davis Dimosthenis   2h Askisi.
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author dimos
 */
import java.util.*;
import java.util.ArrayList;
import java.util.Scanner;
//import java.lang.Math.min;
//import java.util.Arrays;
import java.util.Collections;
import java.util.HashSet;

import java.util.Set;

public class Game {
    private final Teams team[];
    private double avg;
    
     public Game(int n){
        team = new Teams[n];      //    Dimiourgia pinaka team.

        //  Gia na dimiourgountai random metavlites wste na gemizei o pinakas team.
        Random random = new Random();
        int leftLimit = 97; // gramma 'a'.
        int rightLimit = 122; // gramma 'z'.
        int targetStringLength = 4; //  Posous xaraktires tha exei to onoma. 

        //  Dimiourgia ArrayList pou tha exei diafores xwres. 
        ArrayList<String> country = new ArrayList<>(Arrays.asList("Greece", "Italy", "Spain", "Germany", "France", "United Kingdom", "Austria", "Romania", "Switzerland", "Netherlands"));
      
        //  Gemizoume ton pinaka team me tuxaia stoixeia.
         for(int i=0; i<n; i++)
        {   
            String randomName = random.ints(leftLimit, rightLimit + 1)
                    .limit(targetStringLength)
                    .collect(StringBuilder::new, StringBuilder::appendCodePoint, StringBuilder::append)
                    .toString();    //  Tuxaio onoma
            int randomScore = random.nextInt(100) + 1;  //  Tuxaio score apo 1 mexri 100.
            int randomCountry = random.nextInt(country.size());    //  Tuxaia xwra

            team[i] = new Teams(randomName, randomScore, country.get(randomCountry));

        }
         
/*
         // Gia na eisagei o xristis tis metavlites.
         
        for(int i=0; i<n; i++)
        {
            team[i] = new Teams("",0,"");  // O constractor opou arxika o pinakas tha exei kenes theseis kao 0.
        }
   
//  Zitame apo ton xristi na valei ta stoixeia gia kathe omada.        
        System.out.println("Enter the data of each team");
        Scanner input = new Scanner(System.in);   
            
         for (int i = 0; i < n; i++) 
        {
            System.out.print("Name: ");
            team[i].setName(input.nextLine());
            System.out.print("Score: ");
            team[i].setScore(input.nextDouble());
            input.nextLine();
            System.out.print("Country: ");
            team[i].setCountry(input.nextLine());
System.out.println("---------------------------------------------------------------");            
        }
 */  
 }

//  Methodos opou briskei ton meso oro.
    public void  findAverage(){
        double sum=0;   //  Arxikopoiisi tou athrismatos.
        for(Teams i : team)
        { 
            sum += (double)i.getScore();    //  Prosthetei sto athrisma to score.
        }
       
        avg=(sum/team.length);  //  Ypologismos tou mesou orou.
        System.out.println("The average score of all teams is " + avg);           
    }

 // Methodos opou vriskei tin omada pou einai konta sto avg.  
    public void closeAvg()
    {
        //  Arxikopoiisi tis close me tin afairesi tou avg me to score tis prwtis omadas.
        double close=Math.abs(avg-team[0].getScore());    
        int x=0;    //  Arxikopoiisi tou x wste na epistrepsei pia onmada einai pio konta sto avg.
        
        //  Diatrexoume ton pinaka wste na kanoume ton elegxo an uparxei omada pio konta sto avg.
          for (int i=0;i<team.length;i++)
          {
              if(Math.abs(avg-team[i].getScore())<close);
              {
                    close=Math.abs(avg-team[i].getScore());                 
                    x=i;
              }
          }  
          System.out.println("Team "+team[x].getName()+" is "+ close +" closer in average.");
    } 

//  Methodos opou emfanizei tis omades pou pane teliko,to plithos kai tis xwres opou einai ston teliko.   
    public void finals()
    {
        int cnt = 0;    //  Metritis opou metraei to plithos twn omadwn tou telikou.

        Teams[] finalTeams = new Teams[team.length];    //  Dimiourgia pinakas gia tis omades tou telikou.
        String country = "";
        ArrayList<String> finalCountries = new ArrayList<String>(); //  Dimiourgia ArrayList gia tis xwres twn omadwn tou telikou.
        
        System.out.println("The finals teams: ");
        
        //  Diatrexoume ton pinaka team gia na kanoume ton elegxo poies omades tha pane teliko.
        for(int i=0;i<team.length;i++)
        {
            if(team[i].getScore()>avg*0.8)
            {
                finalTeams[i]=team[i];
                System.out.println(finalTeams[i]);
                cnt++;
                country=team[i].getCountry();   //  Vazoume tin xwra sto country.
            }
              finalCountries.add(country);  //  Vazoume tin xwra mesa sto ArrayList.
         }
        
System.out.println("---------------------------------------------------------------");             
        
        System.out.println("The number of qualifying teams is "+cnt);

System.out.println("---------------------------------------------------------------");        
        
        //  Gia na emfanistoun oi xwres twn omadwn tou telikou.
        Set<String> land= new HashSet<>(finalCountries);
        finalCountries.clear();
        finalCountries.addAll(land);
        Collections.sort(finalCountries);   //  Gia na emfanistoun taksinomimena.
        
        System.out.println("Final teams' countries: "+finalCountries);
    
    }
}
