//  A.M:3212019038  Davis Dimosthenis   2h Askisi.
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */

/**
 *
 * @author dimos
 */
public class Main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
 System.out.println("-------------------League-of-Legends-II-----------------------");        
        Game game = new Game(50);   //  Dimiourgia game gia 50 omades.
        game.findAverage(); //  Klisi tis findAverage wste na vrei ton meso oro tou score.
System.out.println("---------------------------------------------------------------");        
        game.closeAvg();    //  Klisi tou closeAvg wste na emfanisei tin omada pou eibai pio konta ston meso oro.
System.out.println("---------------------------------------------------------------");        
        game.finals();  //  Klisi tis finals wste na emfanistoun oi omades pou pane teliko,to plithos kai tis xwres opou einai ston teliko.
System.out.println("------------------------End-Programm---------------------------");        
    }
  }
