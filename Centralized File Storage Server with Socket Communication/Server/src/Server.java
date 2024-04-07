//3212019039 Δαβής Δημοσθένης
//3212019213 Τζάνη Σοφία

import javafx.application.Application;
import javafx.application.Platform;
import javafx.geometry.Insets;
import javafx.geometry.Pos;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.layout.BorderPane;
import javafx.scene.layout.HBox;
import javafx.stage.Stage;
import java.io.BufferedReader;
import java.io.File;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.ServerSocket;
import java.net.Socket;
import java.util.Date;
import java.util.Optional;
import java.util.concurrent.ExecutorService;
import java.util.concurrent.Executors;
import static javafx.application.Application.launch;
import javafx.scene.control.Alert;
import javafx.scene.control.ButtonType;

public class Server extends Application {

    private ServerSocket serverSocket;
    private TextArea logTextArea;
    private TextField portTextField;
    private Button startButton, stopButton;

    public static void main(String[] args) {
        launch(args);
    }

    @Override
    public void start(Stage primaryStage) throws Exception {

        // Για επιβεβαίωση αν κλείνει η εγαρμογή όταν πατάμε το κουμπί κλεισίματος
        primaryStage.setOnCloseRequest(event -> {
            event.consume();

            Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
            alert.setTitle("Exit");
            alert.setHeaderText(null);
            alert.setContentText("Are you sure you want to exit?");

            //Κουμπιά "Yes" και "Νο"
            ButtonType yesButton = new ButtonType("Yes");
            ButtonType noButton = new ButtonType("No");

            alert.getButtonTypes().setAll(yesButton, noButton);
            
            //Εμφάνιση παραθύρου διαλόγου
            Optional<ButtonType> result = alert.showAndWait();  

            //Εάν ο χρήστης επιλέξει "Ναι", κλείνει το παράθυρο και βγαίνει από την εφαρμογή.
            //Αλλιώς, απλά κλείνει το παράθυρο διαλόγου και συνεχίζει την εκτέλεση η εφαρμογή
            if (result.isPresent() && result.get() == yesButton) {
                primaryStage.close();
                Platform.exit();
            } else {
                alert.close();
            }
        });
        
        // Ρύθμιση του παραθύρου
        BorderPane root = new BorderPane();
        root.setPadding(new Insets(10));
        root.setPrefSize(700, 400);

        //Δημιουργία περιοχής κειμένου καταγραφής
        logTextArea = new TextArea();
        logTextArea.setEditable(false);
        root.setCenter(logTextArea);

        // Δημιουργία πεδίου εισόδου θύρας και των κουμπιών Start/Stop
        portTextField = new TextField("9000");
        startButton = new Button("Start");
        startButton.setOnAction(event -> startServer());
        stopButton = new Button("Stop");
        stopButton.setDisable(true);
        stopButton.setOnAction(event -> stopServer());

        HBox controlBox = new HBox(10, new Label("Port:"), portTextField, startButton, stopButton);
        controlBox.setAlignment(Pos.CENTER_LEFT);
        controlBox.setPadding(new Insets(10));
        controlBox.setSpacing(10);
        root.setBottom(controlBox);

        // Ρύθμιση παραθύρου και εμφάνιση
        Scene scene = new Scene(root);
        primaryStage.setScene(scene);
        primaryStage.setTitle("Server");    //Τίτλος παραθύρου
        primaryStage.show();
    }

    private ExecutorService executorService;

    private void startServer() {
        try {
    // Λήψη του αριθμού θύρας από το πεδίο κειμένου portTextField και μετατροπή του σε ακέραιο αριθμό
            int port = Integer.parseInt(portTextField.getText());
            
    // Δημιουργία νέου αντικειμένου ServerSocket και σύνδεσή με την καθορισμένη θύρα
            serverSocket = new ServerSocket(port);

     // Καταγραφή ενός μηνύματος που δείχνει ότι ο εξυπηρετητής έχει ξεκινήσει στην συγκεκριμένη θύρα
            logTextArea.appendText("Server started on port " + port + "\n");
  
    // Απενεργοποιήση του κουμπιού "start" και ενεργοποίηση του κουμπιού "stop".
            startButton.setDisable(true);
            stopButton.setDisable(false);

    // Δημιουργία μιας νέας υπηρεσίας εκτέλεσης με ένα μόνο νήμα
            executorService = Executors.newSingleThreadExecutor();
   
    // Βρόχος για να δούμε την εισερχόμενη συνδέση του πελάτη
            executorService.execute(() -> {
                while (true) {
                    try {
                        // Αποδοχή νέας σύνδεσης πελάτη
                        Socket socket = serverSocket.accept();
                        // Επεξεργασία του αιτήματος του πελάτη
                        processClientRequest(socket);
                    } catch (IOException e) {
                        e.printStackTrace();
                    }
                }
            });
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    private void processClientRequest(Socket socket) throws IOException {
    // Λήψη ροής εισόδου από τον πελάτη
        BufferedReader in = new BufferedReader(new InputStreamReader(socket.getInputStream()));
       
    // Δημιουργία ροής εξόδου στον πελάτη
        PrintWriter out = new PrintWriter(socket.getOutputStream(), true);
       
    // Σύνδεση πελάτη
    // Λήψη της διεύθυνσης IP του πελάτη
        String clientIP = socket.getInetAddress().getHostAddress();
      
        Date timeStamp = new Date();    // Λήψη της τρέχουσας ημερομηνίας και ώρας για όταν συνδεέται ο πελάτης.

    // Προσθήκη μηνύματος στο αρχείο καταγραφής
        logTextArea.appendText("Client connected: " + clientIP + "\t" + timeStamp.toString() + "\n");

    // Βρόχος όσο υπάρχει σύνδεση
        while (socket.isConnected()) {
            try {
                String command = in.readLine(); // Ανάγνωση της επόμενης γραμμής από τη ροή εισόδου του πελάτη
                String message = "";    // Αρχικοποίηση συμβολοσειράς μηνυμάτων
                String fileName = "";   // Αρχικοποίηση συμβολοσειράς ονόματος αρχείου
                Date timeStamp1 = new Date();   // Λήψη της τρέχουσας ημερομηνίας και ώρας για όταν κάνει μια λειτουργία ο πελάτης.

                switch (command) {
                    case "create":
                        fileName = in.readLine();   // Ανάγνωση του ονόματος του αρχείου από τη ροή εισόδου του πελάτη    
                        String fileContent = in.readLine(); // Ανάγνωση του περιεχομένου του αρχείου από τη ροή εισόδου του πελάτη
                        File file = new File(fileName);  // Δημιουργία ενός νέου αντικειμένου αρχείου με το δεδομένο όνομα αρχείου
                       // Ελέγχος αν το αρχείο υπάρχει ήδη
                        if (file.exists()) {
                            message = "File already exists";    //Αν ναι, εμφανίζεται το κατάλληλο μήνυμα
                        } else {
                            try {
                                FileWriter writer = new FileWriter(file);   // Δημιουργία νέου αντικειμένου FileWriter για εγγραφή στο αρχείο
                                writer.write(fileContent);  // Εγγραφή του περιεχομένου του αρχείου στο αρχείο
                                writer.close(); // Κλείσιμο του αντικειμένου αρχείου
                                message = "File created successfully";  //Εμφάνιση κατάλληλου μηνύματος
                            } catch (IOException e) {
                                message = "Error creating file";    // Αν υπάρξει ξαίρεση, εμφάνιση κατάλληλου μηνύματος
                            }
                        }
                        break;
                    case "download":
                        fileName = in.readLine();   // Ανάγνωση του ονόματος του αρχείου από τη ροή εισόδου του πελάτη
                        file = new File(fileName);  // Δημιουργία ενός νέου αντικειμένου αρχείου με το δεδομένο όνομα αρχείου
                    //έλεγχος αν υπάρχει ήδη το αρχείο
                        if (file.exists()) {
                            try {
            // Δημιουργία  νέου αντικειμένου BufferedReader για ανάγνωση από το αρχείο                               
                                BufferedReader reader = new BufferedReader(new FileReader(file));
                                String line = reader.readLine();    // Διάβασμα της πρώτης γραμμής από το αρχείο
            
            //Έλεγχος όσο υπάρχουν γραμμές για ανάγνωση                                
                                while (line != null) {
                                    out.println(line);  // Αποστολή της γραμμής στον πελάτη
                                    line = reader.readLine();   // Διάβασμα της επόμενης γραμμής από το αρχείο
                                }
                                reader.close(); // Κλείσιμο του αντικειμένου BufferedReader
                            } catch (IOException e) {
            // Αν υπήρξε εξαίρεση, εμφάνιση του κατάλληλου μηνύματος
                                message = "Error reading file";
                            }
                        } else {
           // Αν το αρχείο δεν υπάρχει, εμφάνιση του κατάλληλου μηνύματος                          
                            message = "File not found";
                        }
                        break;
                    case "delete":
                        fileName = in.readLine();   // Ανάγνωση του ονόματος του αρχείου από τη ροή εισόδου του πελάτη
                        file = new File(fileName);  // Δημιουργία ενός νέου αντικειμένου αρχείου με το δεδομένο όνομα αρχείου
                        //έλεγχος αν υπάρχει ήδη το αρχείο  
                        if (file.exists()) {
          // Αν ναι,  το διαγράφουμε με κατάλληλο μηνύμα   
                            if (file.delete()) {
                                message = "File deleted successfully";
                            } else {
         //Αν όχι, εμφάνιση του κατάλληλου μηνύματος                       
                                message = "Error deleting file";
                            }
                        } else {
        // Αν το αρχείο δεν υπάρχει, εμφάνιση του κατάλληλου μηνύματος
                            message = "File not found";
                        }
                        break;
                    case "add":
                        fileName = in.readLine();   // Ανάγνωση του ονόματος του αρχείου από τη ροή εισόδου του πελάτη
                        file = new File(fileName);  // Δημιουργία ενός νέου αντικειμένου αρχείου με το δεδομένο όνομα αρχείου
                        //έλεγχος αν υπάρχει ήδη το αρχείο                     
                        if (file.exists()) {
                            try {
                                FileWriter writer = new FileWriter(file);   // Δημιουργία νέου αντικειμένου FileWriter για εγγραφή στο αρχείο
                                writer.write(in.readLine());    // Εγγραφή του νέου περιεχομένου στο αρχείο
                                writer.close(); // Κλείσιμο του αντικειμένου FileWriter
                                message = "Content added successfully"; //Αν η ενέργεια ήταν επιτυχής, εμφάνιση του κατάλληλου μηνύματος
                            } catch (IOException e) {
          // Αν υπήρξε εξαίρεση, εμφάνιση του κατάλληλου μηνύματος    
                                message = "Error adding content";
                            }
                        } else {
        // Αν το αρχείο δεν υπάρχει, εμφάνιση του κατάλληλου μηνύματος
                            message = "File not found";
                        }
                        break;
                    case "attach":
                        fileName = in.readLine();   // Διάβασμα του ονόματος του αρχείου από τον πελάτη και έλεγχος αν υπάρχει
                        file = new File(fileName);  // Δημιουργία ενός νέου αντικειμένου αρχείου με το δεδομένο όνομα αρχείου
                        //έλεγχος αν υπάρχει ήδη το αρχείο  
                        if (file.exists()) {
                            try {
                                FileWriter writer = new FileWriter(file, true); // Δημιουργία νέου αντικειμένου FileWriter για εγγραφή στο αρχείο
                                writer.write(in.readLine());    // Εγγραφή του νέου περιεχομένου στο αρχείο
                                writer.close(); // Κλείσιμο του αντικειμένου FileWriter
                                message = "Content attached successfully";  //Αν η ενέργεια ήταν επιτυχής, εμφάνιση του κατάλληλου μηνύματος
                            } catch (IOException e) {
                      // Αν υπήρξε εξαίρεση, εμφάνιση του κατάλληλου μηνύματος
                                message = "Error attaching content";
                            }
                        } else {
                 // Αν το αρχείο δεν υπάρχει, εμφάνιση του κατάλληλου μηνύματος
                            message = "File not found";
                        }
                        break;
                    default:
             // Εάν η εντολή είναι άκυρη, στέλνουμε μήνυμα σφάλματος στον πελάτη.
                        message = "Invalid command";
                        break;
                }
                
                out.println(message);     // Αποστολή απάντησης στον πελάτη

                // Καταγραφή της κίνησης
                String logEntry = String.format("%s\t%s\t%s\t%s\t%s", timeStamp1.toString(), clientIP, command, fileName, message);
                Platform.runLater(() -> logTextArea.appendText(logEntry + "\n"));
            } catch (Exception ex) {
                // Αν προκύψει κάποια εξαίρεση, γίνεται έξοδος
               
                Date timeStamp2 = new Date();// Λήψη της τρέχουσας ημερομηνίας και ώρας για όταν αποσυνδεέται ο πελάτης.

              // Προσθήκη μηνύματος στο αρχείο καταγραφής
                logTextArea.appendText("Client disconnected: " + clientIP + "\t " + timeStamp2.toString() + "\n");

                socket.close();
                break;
            }
        }
    }

     //Mέθοδος που σταματά ο εξυπηρετητής
    private void stopServer() {
        try {
            executorService.shutdown(); // Τερματισμός της υπηρεσίας εκτέλεσης
            serverSocket.close();   //Κλείσιμο του socket

            logTextArea.appendText("Server stopped\n");
            startButton.setDisable(false);
            stopButton.setDisable(true);
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
