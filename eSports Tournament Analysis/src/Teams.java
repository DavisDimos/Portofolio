//  A.M:3212019038  Davis Dimosthenis   2h Askisi.
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author dimos
 */

public class Teams {
    
    private String name;
    private double score;
    private String country;

    //  O constractor gia tis omades.
    public Teams(String name, int score, String country) 
    {
        this.name = name;
        this.score = score;
        this.country = country;
    }

 // Xrisimopoioume to setName wste na pairnei apo ton xristi to onoma.
    public void setName(String name) 
    {
        this.name = name;
    }
    
 // Xrisimopoioume to setScore wste na pairnei apo ton xristi to score.
    public void setScore(double score) 
    {
        this.score = score;
    }

// Xrisimopoioume to setCountry wste na pairnei apo ton xristi to country.
    public void setCountry(String country) 
    {
        this.country = country;
    }
    
// Xrisimopoioume to getName wste na epistrepsei to onoma.
     public String getName() 
     {
        return name;
     }
     
// Xrisimopoioume to getScore wste na epistrepsei to score.
    public double getScore() 
    {
        return score;
    }

// Xrisimopoioume to getCountry wste na epistrepsei tin xwra.
    public String getCountry() 
    {
        return country;
    }

//  Gia na emfanisei ta stoixeia tis kathe omadas.
@Override
    public String toString() 
    {
        return "Team's name is " + name + " with " + score +" score from "+country ;
    }
}

