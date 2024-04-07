//  A.M:3212019038  Davis Dimosthenis   1h Askisi.

import java.util.Random;

public class NumbersTable {
    
//   Methodos pou gemizei ton pinaka me tixaious arithmous. 
    static void  fillTableRandomly(int arr[])
    {
         Random random_number=new Random();
    
         for (int i = 0; i < arr.length; i++)
         {
         arr[i] = random_number.nextInt(50)+1;  //  Oi times einai sto diastima[1,50].
         }
    }
    
//  Methodos pou tupwnei ta stoixeia tou pinaka se mia grammi.
   static void printTableΗ(int arr[])
   {
       System.out.println("Table in one line: ");
       for (int i = 0; i < arr.length; i++)
       {
           System.out.print(arr[i]+" ");
       }
       System.out.println();
   }
   
//  Methodos pou tupwnei ta stoixeia tou pinaka se mia stili.
   static void printTableV(int arr[])
   {
       System.out.println("Table in one column: ");
       for (int i = 0; i < arr.length; i++)
       {
           System.out.println(arr[i]);
       }  
   }

//  Methodos pou enallassei tis times twn keliwn tou pinaka apo to x kai y.  
   static void swapValues(int arr[],int x,int y)
   {    //  Elegxos an yparxoun oi theseis x kai y ston pinaka.
            if (x>arr.length || y>arr.length)
            {
                System.out.println("Number is bigger than size of array");
            }
            else
            {
                int temp=arr[x];    //  Xrisi tis temp gia apothikeysi tis mias timis tou pinaka.
                //  Apothikeyoume to ena stoixeio sto allo.  
                arr[x]=arr[y];  
                arr[y]=temp;
            }
   }

//  Methodos pou epistrefei to mikrotero stoixeio tou pinaka kai kanei anazitisi apo tin timi tou location.   
public static int minLocationFrom(int arr[],int location)
    {
        int minNumber = arr[location];  //  Arxikopoihsh me tin timi pou brisketai stin thesi location.
    
        for (int i = location+1; i<arr.length;i++)
        {   //  Elegxos an yparxei mikrotero stoixeio ston pinaka.
            if (arr[i] < minNumber)
            {
                minNumber=arr[i];
            }
        }
        return minNumber;
    }

//  Methodos pou epistrefei to megalitero stoixeio tou pinaka kai kanei anazitisi apo tin timi tou location.   
public static int maxLocationFrom(int arr[],int location)
{
    int maxNumber = arr[location];  //  Arxikopoihsh me tin timi pou brisketai stin thesi location.
    
    for (int i = location+1; i<arr.length;i++)
    {   //  Elegxos an yparxei megalitero stoixeio ston pinaka.
       if (arr[i] > maxNumber)
       {
           maxNumber=arr[i];
       }
    }
    return maxNumber;
}

//  Methodos pou epistrefei tin prwti emfanisi tou number ston pinaka.
 static int LocationNumber(int arr[],int number)
 {
      for (int i = 0; i < arr.length; i++) 
      {
            if (arr[i] == number)
            { 
                return i;
            }
        }
        return -1;  //  Tha epistrepsei -1 an to number den einai ston pinaka. 
 }       
 
 // Methodos pou antigrafei enan pinaka.
 static int[] cloneTable(int arr[])
 {
     int copyArray[] = new int[arr.length]; //  Dimiourgia pinaka idiou megethous me ton pinaka pou theloume na antigrapsoume. 
     for (int i = 0; i < arr.length; i++)
     {
            copyArray[i] = arr[i];
     }
     return copyArray;
 }

//  Methodos pou dimiourgei enan neo pinaka apo tin sugxwneusi twn 2 pinakwn.
  static int[] mergeTables(int arr1[],int arr2[])
  {
        int[] margeArr = new int[(arr1.length)+(arr2.length)];  //  Dimiourgia pinaka.
        
        //  Apothikeusi twn stoixeiwn tou prwtou pinaka ston margeArr.
        for (int i = 0; i < arr1.length; i++) 
        {
            margeArr[i] = arr1[i];
        }
        //  Apothikeusi twn stoixeiwn tou deuterou pinaka ston margeArr meta apo ta stoixeia tou prwtou.
        for (int i = 0; i < arr2.length; i++) 
        {         
            margeArr[(arr1.length) + i] = arr2[i];
        }
        return margeArr;
  }

  //    Methodos pou dimiourgei ena alfarithmitiko me olous tous arithmous tou pinaka.   
   static String ConvertToString (int arr[])   {
       String str = ""; 
        for(int i = 0; i < arr.length; i++)
        {
            str = str + arr[i]; // Pernaei ta stoixeia tou pinaka stin sumvoloseira.
        }
        return str; 
    }
   
  //    Methodos pou dimiourgei ena alfarithmitiko me olous tous arithmous tou pinaka apo to x mexri to y.   
   static  String ConvertToString (int arr[], int x, int y) {
        
        String str = ""; 
        int flag = 0;   //  Gia to an to x kai to y einai egkires theseis ston pinaka.

//  Periptosi pou oi theseis den einai egkures.
        if ((x<0) || (x>(arr.length)-1)||(y<0) ||(y>(arr.length)-1))
        {
            flag = 1; 
        }
        
        /*
         *  An to flag einai 0 tote tha perasei ta stoixeia stin sumvoloseira.
         *  Allios apothikeuei oti einai lathos sto str kai to epistrfei.
         */
        if (flag==0) 
        { 
            for(int i = x; i < (y+1); i++)
            {
                str = str +  arr[i]; 
            }
        }
        else
        {
            str = "Wrong positions!";
        }
        return str; 
    }
}
              

