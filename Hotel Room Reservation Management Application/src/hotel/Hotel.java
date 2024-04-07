//Davis Dimosthenis A.M:3212019038
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/javafx/FXMain.java to edit this template
 */
package hotel;

import javafx.scene.control.Button;
import javafx.application.Application;
import javafx.geometry.Insets;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.layout.GridPane;
import javafx.stage.Stage;
import java.time.LocalDate;
import java.util.Optional;
import javafx.application.Platform;
import javafx.collections.ObservableList;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.text.Font;

/**
 *
 * @author dimos
 */
//  Main class pou dimiourgei to interface gia ton user.
public class Hotel extends Application {

    private System system = new System();

    public static void main(String[] args) {
        System system = new System();
        system.loadReservations(); //  Fortwsi kratisewn apo to arxeio.
        launch(args);   //  Ekkinisi efarmogis.
    }

    @Override
    public void start(Stage primaryStage) {

        primaryStage.setTitle("Hotel");  //  Titlos parathirou.

// Gia na rotaei an thelei na klisei h efarmogi otan pataei to koumpi kleisimatos.
        primaryStage.setOnCloseRequest(event -> {
            event.consume();

            Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
            alert.setTitle("Exit");
            alert.setHeaderText(null);
            alert.setContentText("Are you sure you want to exit?");

//  Koumpia Yes kai No
            ButtonType yesButton = new ButtonType("Yes");
            ButtonType noButton = new ButtonType("No");

            alert.getButtonTypes().setAll(yesButton, noButton);

            Optional<ButtonType> result = alert.showAndWait();  //  Emfanisi dialogou.

/*
 *  An o xristis patisei Yes kanei eksodo
 *  allios, kleinei to parathiro alert kai sunexizei h efarmogi.
 */
            if (result.isPresent() && result.get() == yesButton) {
                primaryStage.close();
                Platform.exit();
            } else {
                alert.close();
            }
        });

//  Platos kai Ypsos parathirou.
        primaryStage.setWidth(402);
        primaryStage.setHeight(600);

// Dimiourgia stoixeiwn elegxou gia tin kratisi.
        Label addReservationLabel = new Label("Reservation");
        addReservationLabel.setFont(new Font("Arial", 16));
        addReservationLabel.setUnderline(true);

        TextField firstNameField = new TextField();
        TextField lastNameField = new TextField();
        TextField phoneNumberField = new TextField();
        DatePicker checkInDatePicker = new DatePicker();
        DatePicker checkOutDatePicker = new DatePicker();
        ComboBox<String> roomTypeComboBox = new ComboBox<>();
        roomTypeComboBox.getItems().addAll("Single", "Double", "Triple");
        CheckBox breakfastCheckBox = new CheckBox();
        Button addReservationButton = new Button("Add reservation");

//  Action gia na ginei h kataxorisi ths kratisis.
        addReservationButton.setOnAction(event -> {
//  Times apo ta pedia.
            String firstName = firstNameField.getText();
            String lastName = lastNameField.getText();
            String phoneNumber = phoneNumberField.getText();
            LocalDate checkInDate = checkInDatePicker.getValue();
            LocalDate checkOutDate = checkOutDatePicker.getValue();
            int roomType = roomTypeComboBox.getSelectionModel().getSelectedIndex() + 1;
            boolean breakfastIncluded = breakfastCheckBox.isSelected();

/*
 *  Elegxos ean einai sumplirwmena ola ta apitoumena pedia.
 *  An den einai emfanisei minimatos, allios na ginei kanonika h kataxorisi.
 */
            if (firstName.isEmpty() || lastName.isEmpty() || phoneNumber.isEmpty() || checkInDate == null || checkOutDate == null || roomType == 0) {
                Alert alert = new Alert(Alert.AlertType.ERROR);
                alert.setTitle("Error");
                alert.setHeaderText(null);
                alert.setContentText("Please fill in all fields!");

                Label contentLabel = (Label) alert.getDialogPane().lookup(".content");
                contentLabel.setStyle("-fx-font-size: 16px;");  //  Megethos tou alert

                alert.showAndWait();

            } else {
                system.addReservation(firstName, lastName, phoneNumber, checkInDate, checkOutDate, roomType, breakfastIncluded);
                firstNameField.clear();
                lastNameField.clear();
                phoneNumberField.clear();
                checkInDatePicker.setValue(null);
                checkOutDatePicker.setValue(null);
                roomTypeComboBox.getSelectionModel().clearSelection();
                breakfastCheckBox.setSelected(false);

//  Alert gia to oti egine h kratisi.
                Alert alert = new Alert(Alert.AlertType.INFORMATION);
                alert.setTitle("Success");
                alert.setHeaderText(null);
                alert.setContentText("Reservation added successfully!");
                Label contentLabel = (Label) alert.getDialogPane().lookup(".content");
                contentLabel.setStyle("-fx-font-size: 16px;");  //  Megethos tou alert

                alert.showAndWait();
            }
        });

//  Dimiourgia stoixeiwn elegxou gia tin anazitisi kratisewn
        Label searchReservationsLabel = new Label("Search reservation");
        searchReservationsLabel.setFont(new Font("Arial", 16));
        searchReservationsLabel.setUnderline(true);
        DatePicker checkInDatePicker2 = new DatePicker();
        TextField lastNameField2 = new TextField();
        Button searchReservationsButton = new Button("Search");
        searchReservationsButton.setStyle("-fx-font-family: Arial; -fx-font-size: 16;");

        ListView<Reservation> searchResultsListView = new ListView<>();

//  Action gia na ginei h anazitisi ths kratisis.
        searchReservationsButton.setOnAction(event -> {
            LocalDate checkInDate = checkInDatePicker2.getValue();
            String lastName = lastNameField2.getText().isEmpty() ? null : lastNameField2.getText();

/*  Elegxos an exei sumplhrwthei toulaxiston ena apo ta pedia
 *  An den exei sumplhrwthei kanena pedio kai patisei elegxos tote emfanizei alert oti prepei na sumplirwsei kapoio apo ta duo pedia.
 *  Allios, an den yparxei auti h anazitisei tote bgazei alert oti den vrethike h kratisi allios emfanizei tin kratisi.
 */
            if (checkInDate == null && lastName == null) {
                Alert alert = new Alert(AlertType.WARNING);
                alert.setTitle("Warning");
                alert.setHeaderText(null);
                alert.setContentText("Please fill in one of the fields: Last name or Check-in date");
                alert.showAndWait();
            } else {
                ObservableList<Reservation> reservations = system.searchReservations(checkInDate, lastName);
                if (reservations.isEmpty()) {
                    Alert alert = new Alert(AlertType.ERROR);
                    alert.setTitle("No found");
                    alert.setHeaderText(null);
                    alert.setContentText("No reservation found!");
                    alert.showAndWait();
                } else {
                    searchResultsListView.setItems(reservations);
                }
            }
        });

// Dimiourgia main diataksi.
        GridPane addReservationPane = new GridPane();
        
//  Orismos orizontia & katheta kena metaksi twn komvwn sto GridPane.
        addReservationPane.setHgap(10);
        addReservationPane.setVgap(10);
        addReservationPane.setPadding(new Insets(10));
        addReservationPane.add(addReservationLabel, 0, 0);  //  Prosthiki Label stin korifi tou GridPane.

//  Prosthiki label kai pedia gia tin kratisi.
        addReservationPane.add(new Label("First name:"), 0, 1);
        addReservationPane.add(firstNameField, 1, 1);
        addReservationPane.add(new Label("Last name:"), 0, 2);
        addReservationPane.add(lastNameField, 1, 2);
        addReservationPane.add(new Label("Phone number:"), 0, 3);
        addReservationPane.add(phoneNumberField, 1, 3);
        addReservationPane.add(new Label("Check-in date:"), 0, 4);
        addReservationPane.add(checkInDatePicker, 1, 4);
        addReservationPane.add(new Label("Check-out date:"), 0, 5);
        addReservationPane.add(checkOutDatePicker, 1, 5);
        addReservationPane.add(new Label("Room type:"), 0, 6);
        addReservationPane.add(roomTypeComboBox, 1, 6);
        addReservationPane.add(new Label("Breakfast:"), 0, 7);
        addReservationPane.add(breakfastCheckBox, 1, 7);
        addReservationPane.add(new Label(""), 0, 8); // Prosthiki kenou lebel.
        addReservationPane.add(addReservationButton, 1, 9);

        GridPane searchReservationsPane = new GridPane();
        searchReservationsPane.setHgap(10);
        searchReservationsPane.setVgap(10);
        searchReservationsPane.setPadding(new Insets(10));
        searchReservationsPane.add(searchReservationsLabel, 0, 0);

//  Prosthiki label kai pedia gia tin anazitisi.
        searchReservationsPane.add(new Label("Check-in date:"), 0, 1);
        searchReservationsPane.add(checkInDatePicker2, 1, 1);
        searchReservationsPane.add(new Label("Last name:"), 0, 2);
        searchReservationsPane.add(lastNameField2, 1, 2);
        searchReservationsPane.add(searchReservationsButton, 1, 3);
        searchReservationsPane.add(searchResultsListView, 0, 4, 2, 1);

// Dimiourgia TabPane gia prosthiki & anazitizei kratisewn.
        TabPane tabPane = new TabPane();
        Tab addReservationTab = new Tab("Reservation", addReservationPane);
        Tab searchReservationsTab = new Tab("Search Reservation", searchReservationsPane);
        addReservationTab.setClosable(false);
        searchReservationsTab.setClosable(false);
        tabPane.getTabs().addAll(addReservationTab, searchReservationsTab);

// Dimiourgia main scene & emfinisei tis.
        Scene scene = new Scene(tabPane);
        primaryStage.setScene(scene);
        primaryStage.show();
    }

//  Apothikeusi tis kratisis otan kleisei h efarmogi.
    @Override
    public void stop() {
        system.saveReservations();
    }
}
