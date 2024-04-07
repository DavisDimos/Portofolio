//Davis Dimosthenis A.M:3212019038
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package hotel;

/**
 *
 * @author dimos
 */
import java.io.Serializable;
import java.time.LocalDate;

//  Class gia ta stoixeia tou pelati kai antiprosopeuei tin kratisi pou ekane(kostos & pliroforia kratisis)opou seiriopoiithoun se mia akolouthia byte kai na aposeiropoithoun jana sto arxiko antikeimeno.
public class Reservation implements Serializable {

    //  Stoixeia kratisis.
    private String firstName;
    private String lastName;
    private String phoneNumber;
    private LocalDate checkInDate;
    private LocalDate checkOutDate;
    private int roomType; 
    private boolean breakfastIncluded;
    private double cost;

    //  Constructor gia tin dimiourgia neas kratisis.
public Reservation(String firstName, String lastName, String phoneNumber,LocalDate checkInDate, LocalDate checkOutDate, int roomType,boolean breakfastIncluded) {
        //  Orismos timwn pediou.  
        this.firstName = firstName;
        this.lastName = lastName;
        this.phoneNumber = phoneNumber;
        this.checkInDate = checkInDate;
        this.checkOutDate = checkOutDate;
        this.roomType = roomType;
        this.breakfastIncluded = breakfastIncluded;
        calculateCost();    //  Ypologismos kostos tis kratisis.
    }

//  Getter methods gia na epistrefei ta stoixeia tis kratisis.
    public String getFirstName() {
        return firstName;
    }

    public String getLastName() {
        return lastName;
    }

    public String getPhoneNumber() {
        return phoneNumber;
    }

    public LocalDate getCheckInDate() {
        return checkInDate;
    }

    public LocalDate getCheckOutDate() {
        return checkOutDate;
    }

    public int getRoomType() {
        return roomType;
    }

    public boolean isBreakfastIncluded() {
        return breakfastIncluded;
    }

    public double getCost() {
        return cost;
    }

 // Method gia ton upologismo tou kostous tis kratisis.
    private void calculateCost() {
        double baseCost;
        if (roomType == 1) {
            baseCost = 50;
        } else if (roomType == 2) {
            baseCost = 65;
        } else if (roomType == 3) {
            baseCost = 75;
        } else {
            baseCost = 0;
        }
//  Stin periptosi pou exei proino.
        if (breakfastIncluded) {
            baseCost += 8 * getNumberOfGuests();
        }
// Teliko kostos.
        this.cost = baseCost * getNumberOfNights();
    }

//  Method gia na epistrepsei to arithmo atomwn pou tha minoun stin kratisi.
    private int getNumberOfGuests() {
        if (roomType == 1) {
            return 1;
        } else if (roomType == 2) {
            return 2;
        } else if (roomType == 3) {
            return 3;
        } else {
            return 0;
        }
    }

//  Method gia na epistrepsei ton arithmo twn niktwn gia tin kratisi.
    private int getNumberOfNights() {
        return (int) (checkOutDate.toEpochDay() - checkInDate.toEpochDay());
    }

  //    Method gia tin emfanisi se sumvoloseira twn stoixeiwn.
    @Override
    public String toString() {
        String roomTypeString = "";
        if (roomType == 1) {
            roomTypeString = "Single";
        } else if (roomType == 2) {
            roomTypeString = "Double";
        } else if (roomType == 3) {
            roomTypeString = "Triple";
        }

        String breakfastString = breakfastIncluded ? "Yes" : "No";
        return "First name: " + firstName + "\n"
                + "Last name: " + lastName + "\n"
                + "Phone: " + phoneNumber + "\n"
                + "Room Type: " + roomTypeString + "\n"
                + "Check-in: " + checkInDate + "\n"
                + "Check-out: " + checkOutDate + "\n"
                + "Breakfast included: " + breakfastString + "\n"
                + "Cost: €" + cost;
    }
}
