//  A.M:3212019038  Davis Dimosthenis   1h Askisi.

import java.util.Arrays;
public class Main {
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        //  Dimiourgia twn pinakwn
        int[] a={10,4,5,1,6,2,9};
        int b[]=new int[10];
        
        NumbersTable.fillTableRandomly(b);  //  Gemizei ton pinaka b me tuxaies times me tin fillTableRandomly.     
       
System.out.println("---------------------------------------------------------------");        
        NumbersTable.printTableV(b);    //  Emfanizei ton pinaka b se mia stili.
System.out.println("---------------------------------------------------------------");        
        NumbersTable.swapValues(a,0,3); //  Antistrefei to stoixeio tis thesis 0 me to 3 apo ton a.       
        NumbersTable.printTableΗ(a);    //  Emfanizei ton pinaka a se mia grammi.
System.out.println("---------------------------------------------------------------"); 
//  Emanizei ton mikrotero arithmo apo ton a, psaxnontas apo tin 3 thesi.
        System.out.println("The min number in arr is: "+NumbersTable.minLocationFrom(a,3)); 
System.out.println("---------------------------------------------------------------");
//  Emanizei ton megalitero arithmo apo ton a, psaxnontas apo tin 4 thesi.
        System.out.println("The max number in arr is: "+ NumbersTable.maxLocationFrom(a,4));
System.out.println("---------------------------------------------------------------");        
//  Elegxos an to 1 vrisketai ston pinaka a.        
        if (NumbersTable.LocationNumber(a,1)== -1)
        {
         System.out.println("The number is not exist in array.");
        }
         else
        {
          System.out.println("The number is in position "+(NumbersTable.LocationNumber(a,1)+1)+" of the array.");
        }
System.out.println("---------------------------------------------------------------");
//  Antigrafei ton pinaka a se neo pinaka kai ton emfanizei me tin cloneTable.
        System.out.println("Coppy array: "+"\n"+Arrays.toString(NumbersTable.cloneTable(a)));  
System.out.println("---------------------------------------------------------------"); 
//  Sugxwneusi tou pinaka a kai b se neo pinaka kai ton emfanizei me tin margeTables.
        System.out.println("Marge array: "+"\n"+Arrays.toString(NumbersTable.mergeTables(a,b)));
System.out.println("---------------------------------------------------------------"); 
//  Emfanizei ton pinaka a ws sumvoloseira me tin ConvertToString.   
        System.out.println("The alphanumeric of the array: "+NumbersTable.ConvertToString(a)); 
System.out.println("---------------------------------------------------------------"); 
    /*
     *  Emfanizei ton pinaka a apo tin thesi 2 ws tin 6 ws sumvoloseira me tin ConvertToString.
     *  Sto deutero kalesma tis ConvertToString, o pinakas a den exei thesi 7 tote tha emfanisei katallilo mimuma.
     */
        System.out.println("The alphanumeric of the array: "+NumbersTable.ConvertToString(a, 2, 6)); 
        System.out.println("The alphanumeric of the array: "+NumbersTable.ConvertToString(a, 3, 7)); 
System.out.println("------------------------End-Programm---------------------------");        
    
    }
}
