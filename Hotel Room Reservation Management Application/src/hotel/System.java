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
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import java.io.*;
import java.time.LocalDate;

//  Class pou exei tis methodous gia tin kratisi kai tin anazitisei (prostiki,anazitisi,fortosi & apothikeusi kratisewn)
public class System {

    private ObservableList<Reservation> reservations = FXCollections.observableArrayList(); //  Mia metavliti pou apothikeuei mia lista antikeimenwn katisis ws ObservableList. 

    // Method gia na prosthetei sti lista krarisewn kai apothikeuei se ena arxeio me tin method saveReservation.
    public void addReservation(String firstName, String lastName, String phoneNumber,
            LocalDate checkInDate, LocalDate checkOutDate, int roomType,
            boolean breakfastIncluded) {
        Reservation reservation = new Reservation(firstName, lastName, phoneNumber,
                checkInDate, checkOutDate, roomType, breakfastIncluded);
        reservations.add(reservation);
        saveReservations();
    }

 // Method pou kanei anazitisi gia to check in h to epwnimo.
    public ObservableList<Reservation> searchReservations(LocalDate checkInDate, String lastName) {
        ObservableList<Reservation> results = FXCollections.observableArrayList();
        for (Reservation reservation : reservations) {
            if ((checkInDate == null || reservation.getCheckInDate().equals(checkInDate))
                    && (lastName == null || reservation.getLastName().equalsIgnoreCase(lastName))) {
                results.add(reservation);
            }
        }
        return results;
    }

//  method gia na diavazei to arxeio.
    public void loadReservations() {
        try ( ObjectInputStream ois = new ObjectInputStream(new FileInputStream("reservations.txt"))) {
            reservations = (ObservableList<Reservation>) ois.readObject();
        } catch (IOException | ClassNotFoundException e) {
            // stin periptosi pou einai keni min ginei tipota, na xrisipoihthei keni lista kratisewn.
        }
    }

//  Method gia tin apothikeusei se ena arxeio. 
    void saveReservations() {
    try (ObjectOutputStream oos = new ObjectOutputStream(new FileOutputStream("reservations.txt"))) {
        oos.writeObject(this); 
    } catch (IOException e) {
        e.printStackTrace();
    }
}

//  Method pou epistrefei tis kratiseis.
    public ObservableList<Reservation> getReservations() {
        return reservations;
    }

}
