import java.awt.BorderLayout;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JMenuItem;
import javax.swing.JOptionPane;
import javax.swing.JScrollPane;
import javax.swing.JTextArea;
import javax.swing.SwingConstants;

/**
 *
 * @author dimos
 */

//  Κλάση που περίεχει τις λειτουργείες για κάποια από το MenuBar. 
public class MenuBarListener {

//  Για ακύρωση/τερματισμό του παιχνιδιού.
    public void addCancelListener(JMenuItem cancelItem) {
        // Προσθήκη ActionListener για το αντικείμενο cancelItem
        cancelItem.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
//  Επιβεβαίωση για ακύρωση/τερματισμό του παιχνιδιού                
                int option = JOptionPane.showConfirmDialog(null, "Είσαι σίγορος ότι θέλεις να ακύρωσεις/τερματίσεις το παιχνίδι;",
                        "Ακύρωση/Τερματισμός Παιχνιδιού", JOptionPane.YES_NO_OPTION);
                if (option == JOptionPane.YES_OPTION) {
                    // Έξοδος από το πρόγραμμα
                    System.exit(0);
                }
            }
        });
    }

//  Για έξοδος από το παιχνίδι.
    public void addExitListener(JMenuItem exitItem) {
        // Προσθήκη ActionListener για το αντικείμενο exitItem
        exitItem.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                // Επιβεβαίωση για έξοδο.          
                int confirm = JOptionPane.showConfirmDialog(null,
                        "Είσαι σίγορος ότι θέλεις να βγείς από το παιχνίδι;",
                        "Έξοδος", JOptionPane.YES_NO_OPTION,
                        JOptionPane.QUESTION_MESSAGE);
                if (confirm == JOptionPane.YES_OPTION) {
                    // Έξοδος από το πρόγραμμα                 
                    System.exit(0);
                }
            }
        });
    }

//  Για τους Help/κανόνες
    public void addHelpListener(JMenuItem helpItem) {
        // Προσθήκη ActionListener για το αντικείμενο helpItem
        helpItem.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                // Ανοίγει ένα νέο παράθυρο
                JFrame newWindow = new JFrame("Βοήθεια");
                newWindow.setSize(600, 400);
                newWindow.setLayout(new BorderLayout());

                //  label για τιτλος "Κανόνες"
                JLabel label = new JLabel("<html><u>Κανόνες</u></html>", SwingConstants.CENTER);
                label.setFont(new Font(label.getFont().getName(), label.getFont().getStyle(), 24));
                newWindow.add(label, BorderLayout.PAGE_START);

                //   Δημιουργία textarea με το αντίστοιχο κείμενο
                JTextArea descArea = new JTextArea();
                descArea.setText("• Ο βασικός στόχος του παίκτη είναι να δημιουργήσει όσο το δυνατόν μεγαλύτερες λέξεις επιλέγοντας κατάλληλα γράμματα ακολουθώντας τους κανόνες του παιχνιδιού.\n• Σε κάθε γράμμα του Ελληνικού αλφαβήτου που είναι τοποθετημένο στο κεντρικό πάνελ αναγράφεται ένας ακέραιος θετικός αριθμός που αντιστοιχεί στους πόντους που θα λάβει ο παίκτης αν χρησιμοποιήσει το συγκεκριμένο γράμμα για την δημιουργία μιας λέξης.\n"
                        + "• Ο αριθμός των πόντων που πρέπει ο παίκτης να συγκεντρώσει είναι\n"
                        + "• Το παιχνίδι ολοκληρώνεται με αποτυχία ακόμα και σε περίπτωση που ο παίκτης καταφέρει να δημιουργήσει ένα σύνολο λέξεων αλλά δεν έχει καταφέρει να συγκεντρώσει το επιθυμητό αριθμό των πόντων.\n"
                        + "• Αν ο παίκτης κατά την εξέλιξη του παιχνιδιού θεωρήσει ότι δεν μπορεί να δημιουργήσει τις κατάλληλες λέξεις για να συγκεντρώσει τους επιθυμητούς πόντους, μπορεί είτε να τερματίσει το παιχνίδι είτε να ζητήσει επανεκκίνηση του παιχνιδιού.\n"
                        + "• Για να φτιάξει ο παίκτης μία λέξη θα πρέπει να επιλέξει το αρχικό της γράμμα και στη συνέχεια να επιλέγει ένα-ένα τα υπόλοιπα. Θα πρέπει να λάβει υπόψη του ότι όταν επιλέξει ένα γράμμα το αμέσως επόμενο θα πρέπει να είναι απαραίτητα γειτονικό, προς οποιαδήποτε κατεύθυνση.\n\nΔιαφορετικά είδη γραμμάτων\n"
                        + "▪ Κλασσικά Γράμματα με άσπρο φόντο:  Ο παίκτης μπορεί να επιλέξει οποιοδήποτε από αυτά τα γράμματα για να δημιουργήσει τη λέξη που επιθυμεί με βάση τους κανόνες που αναφέρθηκαν και η βαθμολογία που αντιστοιχεί σε αυτού τους είδους τα γράμματα είναι ακριβώς αυτή που αναγράφεται στο κάτω μέρος τους\n"
                        + "▪ Γράμματα με κόκκινο φόντο: Στην αρχική διαμόρφωση του ταμπλό αλλά και σε κάθε γέμισμα του με πρόσθετους χαρακτήρες, θα τοποθετείται με τυχαίο τρόπο ένας περιορισμένος αριθμός από γράμματα με κόκκινο φόντο. Αυτό που αλλάζει όταν ο χρήστης επιλέξει ένα τέτοιο γράμμα, είναι ότι κατά τον υπολογισμό της βαθμολογίας της λέξης, η βαθμολογία του συγκεκριμένου γράμματος θα είναι η διπλάσια από αυτήν που αναγράφεται. Φροντίστε στο ταμπλό σας κάθε φορά που ανανεώνεται να υπάρχουν το πολύ μέχρι 2 γράμματα αυτού του τύπου.\n"
                        + "▪ Γράμματα με μπλε φόντο :Αν στο ταμπλό υπάρχει γράμμα με μπλε φόντο και το χρησιμοποιήσει ο παίκτης για τη δημιουργία μίας λέξης, τότε θα υπολογιστεί αρχικά το άθροισμα των πόντων που προκύπτει σύμφωνα με όλα τα γράμματα που χρησιμοποιήθηκαν και ακολούθως αυτό το σύνολο θα διπλασιαστεί. Αυτή θα είναι και η τελική βαθμολογία της λέξης. Αν σε μία λέξη υπάρχουν περισσότερα από ένα γράμμα με μπλε φόντο ο διπλασιασμός των πόντων θα συμβεί μόνο μία φορά. Φροντίστε στο ταμπλό σας κάθε φορά να υπάρχουν το πολύ μέχρι 3 γράμματα αυτού του τύπου.\n"
                        + "▪ Σύμβολο μπαλαντέρ (?) :Αν σε κάποια περιοχή του ταμπλό εμφανίζεται το σύμβολο του μπαλαντέρ (?) αντί για γράμμα, ο παίκτης έχει τη δυνατότητα να το επιλέξει και να καθορίσει ο ίδιος ποιο γράμμα θα πρέπει να τοποθετηθεί σε αυτή την περιοχή. Φροντίστε το πλήθος των χαρακτήρων μπαλαντέρ στο ταμπλό να είναι από 0 έως 4.");
                descArea.setFont(new Font(descArea.getFont().getName(), descArea.getFont().getStyle(), 14));
                descArea.setLineWrap(true);
                descArea.setWrapStyleWord(true);
                descArea.setEditable(false);
                newWindow.add(descArea, BorderLayout.CENTER);
                newWindow.setVisible(true);

                //  Προσθήκη δυνατότητας scroll.
                JScrollPane scrollPane = new JScrollPane(descArea);
                newWindow.add(scrollPane, BorderLayout.CENTER);
                scrollPane.setVerticalScrollBarPolicy(JScrollPane.VERTICAL_SCROLLBAR_AS_NEEDED);
            }
        });
    }

    // Για το About...   
    public void addAboutListener(JMenuItem aboutItem) {
        // Προσθήκη ActionListener για το αντικείμενο aboutItem
        aboutItem.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                // Ανοίγει ένα νέο παράθυρο
                JFrame newWindow = new JFrame("About...");
                newWindow.setSize(680, 320);

                //   Δημιουργία textarea με το αντίστοιχο κείμενο
                JTextArea textArea = new JTextArea(
                        "\n\n\n        Η εφαρμογή δημιουργήθηκε στα πλαίσια του μαθήματος: Αντικειμενοστρεφής Προγραμματισμός ΙΙ\n\n\n        Έτος: 2022-2023\n\n\n        Aπό τους φοιτητές : Τζάνη Σοφία (Α.Μ. :3212019213) και Δαβής Δημοσθένης (Α.Μ. :3212019038)\n\n\n        Για το Πανεπιστήμιο Αιγαίου του Tμήματος Μηχανικών Πληροφοριακών και Επικοινωνιακών Συστημάτων.");
                textArea.setFont(new Font("Book Antiqua", Font.PLAIN, 13));
                textArea.setEditable(false);

                //  Προσθήκη δυνατότητας scroll.
                JScrollPane scrollPane = new JScrollPane(textArea);
                newWindow.add(scrollPane);
                newWindow.setVisible(true);
            }
        });
    }
}