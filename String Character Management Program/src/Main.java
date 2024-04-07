//  A.M:3212019038  Davis Dimosthenis   3h Askisi.
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */

/**
 *
 * @author dimos
 */

import java.util.*;
import java.util.HashMap;

public class Main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        //  Dimiourgia enos hasmap opou exei key enan xaraktira kai ws timi mia ArrayList.
        HashMap<Character , ArrayList<Integer>> pointer = new HashMap<>();

System.out.println("-------------------------------------------------------------------");                
        //  Diavazei apo ton xristi ena String
        System.out.print("Enter string: ");
        Scanner scanner = new Scanner(System.in);
        
        String str = scanner.nextLine();    //  Apothikeyei to string pou diavase sto str.
System.out.println("-------------------------------------------------------------------");                
 
        char[] strArray = str.toCharArray();  //  Dimiourgia pinaka xaraktirwn kai apothikeuoume to string pou diavase.

        for (int i = 0; i < strArray.length; i++) 
        {
            //  An uparxei keno tote tha prepei na to perasei
            if (strArray[i] == ' ') 
            {
                continue;
            } 
            else 
            {
                //  Periptwsi opou o hasmap den periexei ton xaraktira tote tha ftiaksei neo araylist. 
                if (!pointer.containsKey(strArray[i])) 
                {
                    // Se auti tin nea adia lista prosthetei tin trexousa thesi. 
                    ArrayList<Integer> positions = new ArrayList<>();
                    positions.add(i);
                    pointer.put(strArray[i], positions); //  Prosthetei to key kai tim timi stin trexousa thesi.
                } 
                else 
                {   //  Periptosi opou o hasmap exei ton xaraktira 
                    pointer.get(strArray[i]).add(i);    //  Prosthetei to xaraktira ston arraylist pou anikei.
                }
            }
        }
        
        System.out.println(pointer);    //  Emfanisei tou pointer opou tha emfanistoun se poies theseis vrisketai to kathe gramma apo to string.
System.out.println("-------------------------------------------------------------------");                

        char[] arrayStr= new char[str.length()];     //  Dimiourgia pinaka xaraktirwn me to megethos tou str.
        
        for(int i=0;i<arrayStr.length;i++)
        {
            arrayStr[i]=' ';
        }
 
        pointer.forEach( (k,v) -> { for(Integer i:v){arrayStr[i]=k;}}); //   Gemizei ton pinaka me xrisi lambda expressions.
            
        for (int i = 0; i < arrayStr.length; i++) 
        {
            System.out.print(arrayStr[i]);  // Emfanisi tou pinaka opou exei sumvoloseira.
        }
System.out.println();        
System.out.println("-------------------------------------------------------------------");                

//  Me xrisi lambda expressions emfanizei poses fores emfanizetai o kathe xaraktiras.
        pointer.forEach((k, v) -> {System.out.println( k + " appears " + v.size()+" times.");});

System.out.println("--------------------------End-Programm-----------------------------");        

    }
}
