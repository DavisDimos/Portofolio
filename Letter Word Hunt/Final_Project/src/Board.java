//3212019039 Δαβης Δημοσθενης
//3212019213 Τζανη Σοφια

import java.applet.Applet;
import java.applet.AudioClip;
import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.Dimension;
import java.awt.Font;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.WindowAdapter;
import java.awt.event.WindowEvent;
import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import static java.lang.Character.toUpperCase;
import java.util.ArrayList;
import java.util.Collections;
import java.util.HashMap;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.BoxLayout;
import javax.swing.JButton;
import javax.swing.JFileChooser;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JMenu;
import javax.swing.JMenuBar;
import javax.swing.JMenuItem;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JScrollPane;
import javax.swing.JTextArea;
import javax.swing.JTextField;
import javax.swing.WindowConstants;
import static javax.swing.WindowConstants.DISPOSE_ON_CLOSE;
import javax.swing.filechooser.FileNameExtensionFilter;

public class Board implements ActionListener {

    //  Ορισμός μεταβλητών
    private int game_size = 10; //  Μέγεθος πίνακα

    private JFrame frame;
    private JPanel main_panel;
    private JPanel letter_panel;
    private ArrayList<JButton> buttons = new ArrayList<>(); //apothikeuei antikeimena tupou JButton
    private ArrayList<Letter> letter_board = new ArrayList<>();  //apothikeuei antikeimena tupou Letter

    //  Για το menuBar
    private JMenuBar menuBar = new JMenuBar();
    private JMenu menu1 = new JMenu("Mενού");
    private JMenu menu2 = new JMenu("Εργαλεία");
    private JMenuItem new_game = new JMenuItem("Νέο Παιχνίδι");
    private JMenuItem cancel = new JMenuItem("Ακύρωση/Τερματισμός Παιχνιδιού");
    private JMenuItem info = new JMenuItem("Εισαγωγή Στοιχείων Παίχτη");
    private JMenuItem settings = new JMenuItem("Ρυθμίσεις Βοηθειών");
    private JMenuItem search = new JMenuItem("Αναζήτηση Αρχείου Λέξεων");
    private JMenuItem exit = new JMenuItem("Έξοδος");
    private JMenuItem help = new JMenuItem("Βοήθεια");
    private JMenuItem about = new JMenuItem("About...");

    //  Για τις Βοήθειες.
    private JButton delete_line = new JButton("Διαγραφή Γραμμής");
    private JButton reform_line = new JButton("Αναδιάταξη Γραμμής");
    private JButton reform_column = new JButton("Αναδιάταξη Στήλης");
    private JButton reform_board = new JButton("Αναδιάταξη Ταμπλό");
    private JButton swap_letters = new JButton("Εναλλαγή Γραμμάτων");
    private JButton check_word = new JButton("Έλεγχος Λέξης");

    private JTextField text_field1 = new JTextField(2);

    private JLabel label1 = new JLabel("Βοήθειες", JLabel.LEFT);
    private JLabel label2 = new JLabel("Στόχος:", JLabel.LEFT);
    private JLabel label3 = new JLabel("Συνολική Βαθμολογία:", JLabel.LEFT);
    private JLabel label4 = new JLabel("Βαθμολογία Λέξης:", JLabel.LEFT);
    private JLabel label5 = new JLabel("Λέξεις που βρέθηκαν:", JLabel.LEFT);
    private JLabel label6 = new JLabel("Συγχαρητήρια βρήκες τη λέξη:", JLabel.LEFT);

    //  Για να μετράει τις βοήθειες που χρησιμοποιέι ο παικτης.
    private int count1 = 0, count2 = 0, count3 = 0, count4 = 0, count5 = 0;
    private int maxCount1 = 3, maxCount2 = 3, maxCount3 = 3, maxCount4 = 5, maxCount5 = 3;

    //  Label για να εμφανίζεται πόσες βοήθειες έχει ο παίκτης.
    private JLabel label7 = new JLabel(count1 + "/" + maxCount1, JLabel.LEFT);
    private JLabel label8 = new JLabel(count2 + "/" + maxCount2, JLabel.LEFT);
    private JLabel label9 = new JLabel(count3 + "/" + maxCount3, JLabel.LEFT);
    private JLabel label10 = new JLabel(count4 + "/" + maxCount4, JLabel.LEFT);
    private JLabel label11 = new JLabel(count5 + "/" + maxCount5, JLabel.LEFT);

    private JLabel target = new JLabel("0", JLabel.LEFT);
    private JLabel score = new JLabel("0", JLabel.LEFT);
    private JLabel score_of_word = new JLabel("0", JLabel.LEFT);
    private JLabel word_found = new JLabel("0", JLabel.LEFT);
    private JLabel win = new JLabel(" ", JLabel.LEFT);

    private ArrayList<String> dictionary = new ArrayList<>();   //exei apothikeymenes tis lexeis tou lexikou
    private HashMap<Character, Integer> letters = new HashMap<Character, Integer>();  //exei ta grammata kai tous pontous pou dinei kathe gramma
    private ArrayList<Integer> selected = new ArrayList<>(); //krataei to istoriko twn grammatwn pou exoun paththei
    private ArrayList<Integer> found = new ArrayList<>();//krataei to istoriko twn grammatwn pou exoun vrethei

    private int total_score = 0;
    private int target_score = 0;

    private JLabel playerNameLabel;
    private JTextField playerNameTextField;
    private String playerName;

    private JTextArea textArea;
    private JFileChooser fileChooser;

    private JTextField swap1 = new JTextField(1);
    private JTextField swap2 = new JTextField(1);

    public Board() throws IOException {

        // Κλήση των μεθόδων init_letters και main_board
        init_letters();
        main_board();

    }

    private void init_letters() throws FileNotFoundException, IOException {
        // Δημιουργία ενός BufferedReader για το αρχείο "file.txt"        
        BufferedReader bufReader = new BufferedReader(new FileReader("file.txt"));
        // Ανάγνωση πρώτης γραμμής από το αρχείο
        String line = bufReader.readLine();
        // Επανάληψη μέχρι να μην υπάρχει άλλη γραμμή στο αρχείο
        while (line != null) {
            dictionary.add(line);         // Προσθήκη της γραμμής στον dictionary.
            line = bufReader.readLine();
        }
        bufReader.close();  // Κλείσιμο του BufferedReader

        //  Προσθήκη για τα γράμματα πόσους πόντους έχουν.
        letters.put('Α', 1);
        letters.put('Β', 8);
        letters.put('Γ', 4);
        letters.put('Δ', 4);
        letters.put('Ε', 1);
        letters.put('Θ', 1);
        letters.put('Η', 1);
        letters.put('Θ', 8);
        letters.put('Ι', 1);
        letters.put('Κ', 2);
        letters.put('Λ', 3);
        letters.put('Μ', 3);
        letters.put('Ν', 1);
        letters.put('Ξ', 10);
        letters.put('Ο', 1);
        letters.put('Π', 2);
        letters.put('Ρ', 2);
        letters.put('Σ', 1);
        letters.put('Τ', 1);
        letters.put('Υ', 2);
        letters.put('Φ', 8);
        letters.put('Χ', 10);
        letters.put('Ψ', 10);
        letters.put('Ω', 3);

    }

    // Έλεγχος αν η δοθείσα λέξη υπάρχει στον πίνακα dictionary
    private boolean check(String word) {
        return dictionary.contains(word);
    }

    private void main_board() {
        //  Δημιουργία του Frame
        frame = new JFrame("Βρες τη λέξη");
        frame.setDefaultCloseOperation(WindowConstants.EXIT_ON_CLOSE);
        main_panel = new JPanel();
        letter_panel = new JPanel();

        frame.setSize(900, 700);

        // Δημιουργία αντικειμένου παίκτη
        Player player = new Player(null, 0);

        // Για να ζητάει από τον παίκτη το όνομα του.
        player.setName(JOptionPane.showInputDialog(frame, "Όνομα παίκτη:"));
        int option = JOptionPane.showConfirmDialog(frame, "Καλως ηρθές στο παιχνίδι, " + player.getName() + ". Θέλεις να παίξεις?", "Start Game", JOptionPane.YES_NO_OPTION);
        if (option == JOptionPane.YES_OPTION) {

            frame = new JFrame("Βρες τη λέξη");

            frame.setSize(900, 700);
            delete_line.setEnabled(true);
            reform_line.setEnabled(true);
            reform_column.setEnabled(true);
            swap_letters.setEnabled(true);
            reform_board.setEnabled(true);
            check_word.setEnabled(true);

        } else {
            System.exit(0);
        }

        // Για να ζητάει από τον παίκτη τον στόχο του παιχνιδιού.
        String targetScoreStr = JOptionPane.showInputDialog("Στόχος του score:");
        target_score = Integer.parseInt(targetScoreStr);

        // Μήνυμα για να το ποιό είναι αυτός ο στόχος.
        JOptionPane.showMessageDialog(null, "Ο στόχος του score είναι " + target_score + ".");
        this.target.setText(Integer.toString(target_score));

        // Για να ρωτάει αν θα κλείσει το παραθύρο απο το κουμπί Χ.
        frame.addWindowListener(new WindowAdapter() {
            @Override
            public void windowClosing(WindowEvent e) {
                int confirm = JOptionPane.showOptionDialog(frame,
                        "Είσαι σίγουρος ότι θέλεις να βγείς από το παιχνίδι;",
                        "Έξοδος", JOptionPane.YES_NO_OPTION,
                        JOptionPane.QUESTION_MESSAGE, null, null, null);
                if (confirm == JOptionPane.YES_OPTION) {
                    System.exit(0);
                }
            }
        });

        initialize_buttons();

        main_panel.setLayout(null);

        letter_panel.setBounds(0, 30, 500, 500);
        letter_panel.setLayout(new GridLayout(game_size, game_size));

        //  Προσθήκη του MenuBar στο frame.
        frame.add(menuBar);

        // Προσθήκη των επιλογών στο menu1
        menu1.add(new_game);
        menu1.add(cancel);
        menu1.add(info);
        menu1.add(settings);
        menu1.add(search);
        menu1.add(exit);

        // Προσθήκη των επιλογών στο menu2
        menu2.add(help);
        menu2.add(about);

        delete_line.setBounds(550, 70, 160, 35);
        reform_line.setBounds(550, 130, 160, 35);
        reform_column.setBounds(550, 190, 160, 35);
        reform_board.setBounds(550, 250, 160, 35);
        swap_letters.setBounds(550, 310, 160, 35);
        check_word.setBounds(150, 580, 160, 35);

        swap1.setBounds(720, 310, 20, 35);
        swap2.setBounds(740, 310, 20, 35);

        // ActionListener για την βοήθεια διαγραφή γραμμής. 
        delete_line.addActionListener(new ActionListener() {

            public void actionPerformed(ActionEvent e) {

                String lineNumber = JOptionPane.showInputDialog("Εισήγαγε τον αριθμό γραμμής που θα ήθελες να διαγράψεις:");
                int lineNum = Integer.parseInt(lineNumber);

                for (int i = (lineNum - 1) * game_size; i < (lineNum * game_size); i++) {
                    // Αφαιρει απο το  letter_board
                    letter_board.remove(i);
                    // Προσθέτει ενα νέο αντικείμενο
                    letter_board.add(i, new White((char) ('Α' + Math.random() * ('Ω' - 'Α' + 1)))); //mi sviseis mporei na xreiastei

                    // new JButton("<html>" + letter_board.get(i).getLetter() + "<sub>" + letters.get(letter_board.get(i).getLetter()) + "</sub></html>");
                }

                //Ανανεώνει τα κουμπια
                for (int i = 0; i < game_size * game_size; i++) {
                    buttons.get(i).setText(letter_board.get(i).getLetter() + "");
                }
                count1++;
                label7.setText(count1 + "/" + maxCount1);

                if (count1 < maxCount1) {
                    delete_line.setEnabled(true);
                } else {
                    delete_line.setEnabled(false);
                }
            }
        });

        //  ActionListener για αναδίαταξη γραμμής.
        reform_line.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {

                //  Ζητάει από τον παίκτη.
                String lineNumber = JOptionPane.showInputDialog("Εισήγαγε τον αριθμό γραμμής που θα ήθελες να αναδιατάξεις:");
                int lineNum = Integer.parseInt(lineNumber);

                //  Αλλάζει το label για την βοήθεια.
                count2++;
                label8.setText(count2 + "/" + maxCount2);

                if (count2 < maxCount2) {
                    reform_line.setEnabled(true);
                } else {
                    reform_line.setEnabled(false);  //  Θα κλείσει το κουμπί οτάν ξεπεράσει το μέγιστο αριθμό βοηθείων.
                }
                //  Δημιουργία ενός νέου ArrayList για να αποθηκεύει τα γράμματα της επιλεγμένης γραμμής
                ArrayList<Letter> selectedLine = new ArrayList<>();

                for (int i = (lineNum - 1) * game_size; i < (lineNum * game_size); i++) {
                    selectedLine.add(letter_board.get(i));
                }

                // Ανακατεύει (shuffle) τα γράμματα στο νέο ArrayList.
                Collections.shuffle(selectedLine);

                //  Τοποθετεί ξάνα τα ανακατεμένα γράμματα στον αρχικό ArrayList.
                int j = (lineNum - 1) * game_size;
                for (int i = 0; i < selectedLine.size(); i++) {
                    letter_board.set(j, selectedLine.get(i));
                    j++;
                }

                for (int k = 0; k < game_size * game_size; k++) {
                    buttons.get(k).setText(letter_board.get(k).getLetter() + "");
                }

            }
        });

        //  ActionListener για αναδίαταξη στήλης.
        reform_column.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {

                // Ζητάει από τον παίκτη να είσαγει τον αριθμό στήλης που θέλει να αναδιατάξει.
                String columnNumber = JOptionPane.showInputDialog("Εισήγαγε τον αριθμό στήλης που θα ήθελες να αναδιατάξεις:");
                int columnNum = Integer.parseInt(columnNumber);

                //  Αλλάζει το label για την βοήθεια.
                count3++;
                label9.setText(count3 + "/" + maxCount3);

                if (count3 < maxCount3) {
                    reform_column.setEnabled(true);
                } else {
                    reform_column.setEnabled(false);    //  Θα κλείσει το κουμπί οτάν ξεπεράσει το μέγιστο αριθμό βοηθείων.
                }
                // Δημιουργία ενός νέου ArrayList για να αποθηκεύσει τα γράμματα της επιλεγμένης στήλης
                ArrayList<Letter> selectedColumn = new ArrayList<>();

                for (int i = columnNum - 1; i < game_size * game_size; i = i + game_size) {
                    selectedColumn.add(letter_board.get(i));
                }

                // Ανακατεύει τα γράμματα στο νεό ArrayList.
                Collections.shuffle(selectedColumn);

                //  Τοποθέτηση ξανά των ανακατεμένων γραμμάτων στο αρχικό ArrayList.
                int j = columnNum - 1;
                for (int i = 0; i < selectedColumn.size(); i++) {
                    letter_board.set(j, selectedColumn.get(i));
                    j = j + game_size;
                }

                for (int k = 0; k < game_size * game_size; k++) {
                    buttons.get(k).setText(letter_board.get(k).getLetter() + "");
                }
            }
        });

        //  ActionListener για αναδίαταξη του πίνακα.
        reform_board.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {

                Collections.shuffle(letter_board);  // Ανακατεύει τα στοιχεία στο ArrayList του letter_board.
                initialize_buttons();
                //  Αλλάζει το label για την βοήθεια.
                count4++;
                label10.setText(count4 + "/" + maxCount4);

                if (count4 < maxCount4) {
                    reform_board.setEnabled(true);
                } else {
                    reform_board.setEnabled(false); //  Θα κλείσει το κουμπί οτάν ξεπεράσει το μέγιστο αριθμό βοηθείων.
                }
            }

        });

        //  ActionListener για να αλλάζει δύο γράμματα.  
        swap_letters.addActionListener(new ActionListener() {

            @Override
            public void actionPerformed(ActionEvent e) {

                int button1Index = buttons.indexOf(buttons);
                int button2Index = buttons.indexOf(buttons);
                JButton tempButton1 = buttons.get(button1Index);
                JButton tempButton2 = buttons.get(button2Index);
                String tempText = tempButton1.getText();
                tempButton1.setText(tempButton2.getText());
                tempButton2.setText(tempText);
                buttons.set(button1Index, tempButton2);
                buttons.set(button2Index, tempButton1);

                // buttons.setText();
                //  Αλλάζει το label για την βοήθεια.
                count5++;
                label11.setText(count5 + "/" + maxCount5);

                if (count5 < maxCount5) {
                    swap_letters.setEnabled(true);
                } else {
                    swap_letters.setEnabled(false); //  Θα κλείσει το κουμπί οτάν ξεπεράσει το μέγιστο αριθμό βοηθείων.
                }
            }
        });

        check_word.addActionListener(this);         //  ActionListener για τον έλεγχο της λέξης.

        label1.setBounds(800, 20, 60, 60);
        menuBar.setBounds(0, 0, 1530, 30);
        // text_field1.setBounds(750, 70, 25, 34);

        main_panel.add(text_field1);

        main_panel.add(menuBar);
        menuBar.add(menu1);
        menuBar.add(menu2);

        label2.setBounds(550, 370, 300, 60);
        label3.setBounds(550, 420, 300, 60);
        label4.setBounds(550, 470, 300, 60);
        label5.setBounds(550, 520, 300, 60);
        label6.setBounds(550, 570, 300, 60);
        label7.setBounds(810, 70, 160, 35);
        label8.setBounds(810, 130, 160, 35);
        label9.setBounds(810, 190, 160, 35);
        label10.setBounds(810, 250, 160, 35);
        label11.setBounds(810, 310, 160, 35);
        target.setBounds(790, 370, 300, 60);
        score.setBounds(790, 420, 300, 60);
        score_of_word.setBounds(790, 470, 300, 60);
        word_found.setBounds(790, 520, 300, 60);
        win.setBounds(810, 570, 300, 60);

        label2.setFont(new Font("Consolas", Font.BOLD, 16));
        label3.setFont(new Font("Consolas", Font.BOLD, 16));
        label4.setFont(new Font("Consolas", Font.BOLD, 16));
        label5.setFont(new Font("Consolas", Font.BOLD, 16));
        label6.setFont(new Font("Consolas", Font.BOLD, 16));

        //  Προσθήκη στο main_panel.
        main_panel.add(delete_line);
        main_panel.add(reform_line);
        main_panel.add(reform_column);
        main_panel.add(reform_board);
        main_panel.add(swap_letters);
        main_panel.add(check_word);
        main_panel.add(letter_panel);
        main_panel.add(label1);
        main_panel.add(label2);
        main_panel.add(label3);
        main_panel.add(label4);
        main_panel.add(label5);
        main_panel.add(label6);
        main_panel.add(label7);
        main_panel.add(label8);
        main_panel.add(label9);
        main_panel.add(label10);
        main_panel.add(label11);
        main_panel.add(score);
        main_panel.add(target);
        main_panel.add(score_of_word);
        main_panel.add(word_found);
        main_panel.add(win);
        main_panel.add(swap1);
        main_panel.add(swap2);

        //  Προσθήκη του main_panel στο frame.
        frame.add(main_panel);

        frame.setVisible(true);

        // ActionListener για να ρυθμίζει πόσες βοήθειες θα έχει ο παικτης.
        settings.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                //  Δημιουργία νέου παράθυρου
                JFrame settingsFrame = new JFrame("Ρυθμίσεις Βοηθειών");
                settingsFrame.setSize(315, 240);

                JPanel mainPanel = new JPanel();
                mainPanel.setLayout(new BoxLayout(mainPanel, BoxLayout.Y_AXIS));

                JLabel settingsTitle = new JLabel("<html><u><b>Αλλαγή του μέγιστου αριθμού των βοηθειών</b></u><br></html>");

                settingsTitle.setFont(settingsTitle.getFont().deriveFont(Font.BOLD));

                JLabel deleteLineLabel = new JLabel("Διαγραφή Γραμμής:");
                JTextField maxcountField = new JTextField(5);
                maxcountField.setMaximumSize(new Dimension(300, maxcountField.getPreferredSize().height));
                JButton changeButton = new JButton("Αλλαγή");

                JLabel reformLineLabel = new JLabel("Αναδιάταξη Γραμμής:");
                JTextField maxcountField1 = new JTextField(5);
                maxcountField1.setMaximumSize(new Dimension(300, maxcountField1.getPreferredSize().height));
                JButton changeButton1 = new JButton("Αλλαγή");

                JLabel reformColumnLabel = new JLabel("Αναδιάταξη Στήλης:");
                JTextField maxcountField2 = new JTextField(5);
                maxcountField2.setMaximumSize(new Dimension(300, maxcountField2.getPreferredSize().height));
                JButton changeButton2 = new JButton("Αλλαγή");

                JLabel reformBoardLabel = new JLabel("Αναδιάταξη Ταμπλό:");
                JTextField maxcountField3 = new JTextField(5);
                maxcountField3.setMaximumSize(new Dimension(300, maxcountField3.getPreferredSize().height));
                JButton changeButton3 = new JButton("Αλλαγή");

                JLabel swapLettersLabel = new JLabel("Εναλλαγή Γραμμάτων:");
                JTextField maxcountField4 = new JTextField(5);
                maxcountField4.setMaximumSize(new Dimension(300, maxcountField4.getPreferredSize().height));
                JButton changeButton4 = new JButton("Αλλαγή");

                //  ActionListener των κουμπιων που θα κάνουν τις αλλαγές στο μέγιστο αριθμό των βοηθείων.
                changeButton.addActionListener(new ActionListener() {
                    public void actionPerformed(ActionEvent e) {
                        try {
                            maxCount1 = Integer.parseInt(maxcountField.getText());
                        } catch (NumberFormatException nfe) {
                            JOptionPane.showMessageDialog(settingsFrame, "Μη έγκυρη εισαγωγή. Παρακαλώ εισάγετε έναν αριθμό.");
                        }

                        label7.setText(count1 + "/" + maxCount1);   //  Ενημέρωση του label
                    }
                });

                changeButton1.addActionListener(new ActionListener() {
                    public void actionPerformed(ActionEvent e) {
                        try {
                            maxCount2 = Integer.parseInt(maxcountField1.getText());
                        } catch (NumberFormatException nfe) {
                            JOptionPane.showMessageDialog(settingsFrame, "Μη έγκυρη εισαγωγή. Παρακαλώ εισάγετε έναν αριθμό.");
                        }
                        label8.setText(count2 + "/" + maxCount2);   //  Ενημέρωση του label
                    }
                });

                changeButton2.addActionListener(new ActionListener() {
                    public void actionPerformed(ActionEvent e) {
                        try {
                            maxCount3 = Integer.parseInt(maxcountField2.getText());
                        } catch (NumberFormatException nfe) {
                            JOptionPane.showMessageDialog(settingsFrame, "Μη έγκυρη εισαγωγή. Παρακαλώ εισάγετε έναν αριθμό.");
                        }
                        label9.setText(count3 + "/" + maxCount3);   //  Ενημέρωση του label
                    }
                });

                changeButton3.addActionListener(new ActionListener() {
                    public void actionPerformed(ActionEvent e) {
                        try {
                            maxCount4 = Integer.parseInt(maxcountField3.getText());
                        } catch (NumberFormatException nfe) {
                            JOptionPane.showMessageDialog(settingsFrame, "Μη έγκυρη εισαγωγή. Παρακαλώ εισάγετε έναν αριθμό.");
                        }
                        label10.setText(count4 + "/" + maxCount4);  //  Ενημέρωση του label
                    }
                });

                changeButton4.addActionListener(new ActionListener() {
                    public void actionPerformed(ActionEvent e) {
                        try {
                            maxCount5 = Integer.parseInt(maxcountField4.getText());
                        } catch (NumberFormatException nfe) {
                            JOptionPane.showMessageDialog(settingsFrame, "Μη έγκυρη εισαγωγή. Παρακαλώ εισάγετε έναν αριθμό.");
                        }
                        label11.setText(count5 + "/" + maxCount5);  //  Ενημέρωση του label
                    }
                });

                //  Προσθήκη στο mainPanel για τις βοήθειες 
                mainPanel.add(settingsTitle);
                mainPanel.add(deleteLineLabel);
                mainPanel.add(maxcountField);
                mainPanel.add(changeButton);

                mainPanel.add(reformLineLabel);
                mainPanel.add(maxcountField1);
                mainPanel.add(changeButton1);

                mainPanel.add(reformColumnLabel);
                mainPanel.add(maxcountField2);
                mainPanel.add(changeButton2);

                mainPanel.add(reformBoardLabel);
                mainPanel.add(maxcountField3);
                mainPanel.add(changeButton3);

                mainPanel.add(swapLettersLabel);
                mainPanel.add(maxcountField4);
                mainPanel.add(changeButton4);

                settingsFrame.getContentPane().add(mainPanel);

//  Προσθήκη Scroll.
                JScrollPane scrollPane = new JScrollPane(mainPanel);
                settingsFrame.add(scrollPane, BorderLayout.CENTER);
                scrollPane.setVerticalScrollBarPolicy(JScrollPane.VERTICAL_SCROLLBAR_AS_NEEDED);

                settingsFrame.setVisible(true);
            }
        });

        //  Δημιουργούμε αντικοίμενα από την κλάση MenuBarListener που θα καλεί τις λειτουργίες της.
        MenuBarListener menuBarListener = new MenuBarListener();
        menuBarListener.addExitListener(exit);

        MenuBarListener menuBarListener1 = new MenuBarListener();
        menuBarListener1.addHelpListener(help);

        MenuBarListener menuBarListener2 = new MenuBarListener();
        menuBarListener2.addAboutListener(about);
        MenuBarListener menuBarListener3 = new MenuBarListener();
        menuBarListener3.addCancelListener(cancel);
        //  ActionListener για τα στοιχεία του παίκτη και να μπορεί να αλλάξει το όνομα του.
        info.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                //  Δημιουργία νέου παραθύρου
                JFrame playerNameFrame = new JFrame("Εισαγωγή Στοιχείων Παίχτη");
                playerNameFrame.setSize(350, 150);
                playerNameFrame.setDefaultCloseOperation(DISPOSE_ON_CLOSE);

                playerNameLabel = new JLabel("Όνομα παίκτη: ");
                playerNameTextField = new JTextField(player.getName()); //  textfield για το όνομα.

                JButton changeNameButton = new JButton("Αλλαγή");
                // ActionListener που αλλάζει το όνομα. 
                changeNameButton.addActionListener(new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent e) {
                        player.setName(playerNameTextField.getText());
                        playerNameFrame.dispose();
                    }

                });
                JPanel playerNamePanel = new JPanel();
                playerNamePanel.add(playerNameLabel);
                playerNamePanel.add(playerNameTextField);
                playerNamePanel.add(changeNameButton);

                playerNameFrame.add(playerNamePanel);
                playerNameFrame.setVisible(true);
            }
        });

        // ActionListener που κάνει αναζήτηση αρχειού.
        search.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                fileChooser = new JFileChooser();
                fileChooser.setCurrentDirectory(new java.io.File("."));
                FileNameExtensionFilter filter = new FileNameExtensionFilter("Text files", "txt");
                fileChooser.setFileFilter(filter);
                fileChooser.showOpenDialog(null);
                File file = fileChooser.getSelectedFile();
                if (file != null) {
                    try {
                        BufferedReader bufReader = new BufferedReader(new FileReader(file));
                        String line = bufReader.readLine();
                        while (line != null) {
                            dictionary.add(line);
                            line = bufReader.readLine();
                        }
                        bufReader.close();
                    } catch (IOException ex) {
                        JOptionPane.showMessageDialog(null, "Error reading file", "Error", JOptionPane.ERROR_MESSAGE);
                    }
                }
            }
        });

        //    ActionListener για την δημιουργία νέου παιχνιδιού.
        new_game.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                try {
                    restart();  //  καλεί την συναρτηση restart.
                } catch (IOException ex) {
                    Logger.getLogger(Board.class.getName()).log(Level.SEVERE, null, ex);
                }
            }
        });
    }

    //  Ορισμός της restart για να κάνει ένα καινούργιο παιχνίδι.
    public void restart() throws IOException {
        frame.dispose();

        main_board();
        main_panel = new JPanel();
        letter_panel = new JPanel();
        clear_selection();
    }

//  Για την αρχικοποίηση κουμπιών
    private void initialize_buttons() {
        Collections.shuffle(dictionary);              // Ανακάτεμα λέξεων.
        String temp;
        for (int i = 0; i < dictionary.size(); i++) {
            temp = dictionary.get(i);   //  Αποθηκεύση των ανακατεμένων λέξεων σε μια προσωρινη μεταβλήτη μια-μια

            for (int j = 0; j < temp.length() && letter_board.size() < game_size * game_size; j++) {
                letter_board.add(new White(temp.charAt(j)));   //  Προσθέτει τα γράμματα τύπου "άσπρο" μέσα στην arraylist
            }
            //    Έλεγχος όταν γεμίσει με γράμματα για να βγεί.          
            if (letter_board.size() == game_size * game_size) {
                break;
            }
        }
        Collections.shuffle(letter_board);

        letter_board.set(0, new Red(letter_board.get(0).getLetter()));
        letter_board.set(1, new Red(letter_board.get(1).getLetter()));
        letter_board.set(2, new Blue(letter_board.get(2).getLetter()));
        letter_board.set(3, new Blue(letter_board.get(3).getLetter()));
        letter_board.set(4, new Blue(letter_board.get(4).getLetter()));
        letter_board.set(5, new Balader('?'));
        letter_board.set(6, new Balader('?'));
        letter_board.set(7, new Balader('?'));
        letter_board.set(8, new Balader('?'));

        Collections.shuffle(letter_board);

        JButton b;
        for (int i = 0; i < game_size * game_size; i++) {
            b = new JButton("<html>" + letter_board.get(i).getLetter() + "<sub>" + letters.get(letter_board.get(i).getLetter()) + "</sub></html>");  //για τον ποντο του καθε γραμματος
            if (letter_board.get(i) instanceof White) {
                b.setBackground(Color.white);
            } else if (letter_board.get(i) instanceof Red) {
                b.setBackground(Color.red);
            } else if (letter_board.get(i) instanceof Blue) {
                b.setBackground(Color.cyan);
            } else if (letter_board.get(i) instanceof Balader) {
                b.setBackground(Color.ORANGE);
                b.setText("?");
            }

            b.addActionListener(this);
            buttons.add(b);
            letter_panel.add(b);

        }
    }

    /*
*   Κλειδώνει όλα τα κουμπία εκτός από τα κοντινά του κουμπια οτάν επιλέγει ο παίκτης ένα κουμπί.
*   Περιορίζει τους περιορισμούς στα όρια του πίνακα
*   Κλειδώνει το κουμπί που επιλέχθηκε και κλειδώνει τα κουμπιά που επιλέχθηκαν προηγουμένως.
     */
    private void lock_letters(int index) {
        for (JButton b : buttons) {
            b.setEnabled(false);
        }

        int limit_left = -1;
        int limit_right = 3;
        int limit_up = -game_size;
        int limit_down = game_size * 3;

        if (index % 10 == 0) {
            limit_left = 0;
            limit_right = 2;
        }
        if (index % 10 == (game_size - 1)) {
            limit_right = 2;
        }
        if (index < game_size) {
            limit_up = 0;
            limit_down = game_size * 2;
        }
        if (index >= 90) {
            limit_down = game_size * 2;
        }

        for (int i = index + limit_up + limit_left; i < index + limit_up + limit_left + limit_down; i = i + game_size) {
            for (int j = 0; j < limit_right; j++) {

                if ((i + j) >= 0 && (i + j) < game_size * game_size) {
                    buttons.get(i + j).setEnabled(true);
                }
            }
        }
        buttons.get(index).setBackground(Color.GRAY);
        for (Integer i : selected) {
            buttons.get(i).setEnabled(false);
        }
    }

    // Ελέγχει το αποτελέσμα της ενέργειας που εγίνε από το χρήστη
    @Override
    public void actionPerformed(ActionEvent ae) {
        if (ae.getSource().equals(delete_line)) {
            System.out.println("delete_line");
        } else if (ae.getSource().equals(reform_line)) {
            System.out.println("reform_line");
        } else if (ae.getSource().equals(reform_column)) {
            System.out.println("reform_column");
        } else if (ae.getSource().equals(reform_board)) {
            System.out.println("reform_board");
        } else if (ae.getSource().equals(swap_letters)) {
            System.out.println("swap_letters");
        } else if (ae.getSource().equals(check_word)) {
            System.out.println("check_word");
            String word = "";
            int score = 0;
            int word_counter = 0;
            int word_score = 0;

            for (Integer i : selected) {
                word = word + letter_board.get(i).getLetter();
                score += letters.get(letter_board.get(i).getLetter());
            }

            System.out.println(word);
            System.out.println(score);

//  Δημιουργία αντικειμένων για να βγάλει ήχους
            AudioClip sound = Applet.newAudioClip(getClass().getResource("bravo.wav"));
            AudioClip soundWin = Applet.newAudioClip(getClass().getResource("won.wav"));
// Ελέγχος για το όταν γίνεται έλεγχος λέξης.
            if (check(word)) {
                total_score += score;
                word_counter++;
                word_score += score;

                this.score.setText(Integer.toString(total_score));
                this.score_of_word.setText(Integer.toString(word_score));
                this.word_found.setText(Integer.toString(word_counter++));
                this.win.setText(word);

                for (Integer i : selected) {
                    found.add(i);
                }

                selected = new ArrayList<>();
                clear_selection();
                JFrame f = new JFrame();
                sound.play(); // παίζει ήχο όταν ο παίκτης βρίσκει την λέξη.
                JOptionPane.showMessageDialog(f, "Βρήκες τη λέξη: " + word);

                if (total_score >= target_score) {
                    JFrame f1 = new JFrame();
                    soundWin.play(); // παίζει ήχο όταν ο παίκτης κερδίζει.
                    JOptionPane.showMessageDialog(f, "ΚΕΡΔΙΣΕΣ!");
                    //   Απενεργοποιεί τα κουμπιά όταν κερδίζει.
                    delete_line.setEnabled(false);
                    reform_line.setEnabled(false);
                    reform_column.setEnabled(false);
                    swap_letters.setEnabled(false);
                    reform_board.setEnabled(false);
                    check_word.setEnabled(false);
                }
            } else {
                selected = new ArrayList<>();
                clear_selection();
            }

        } else if (buttons.contains(ae.getSource())) {
            int pos_button = buttons.indexOf(ae.getSource());
            if (letter_board.get(pos_button) instanceof Balader) {
                JFrame f = new JFrame();
                String l = JOptionPane.showInputDialog(f, "Εισήγαγε γράμμα:");
//  προσθήκη του γράμματος δίνει ο παίκτης στον πίνακα με τα κουμπία και τα γράμματα.
                letter_board.set(pos_button, new White(toUpperCase(l.charAt(0))));
                buttons.get(pos_button).setText("<html>" + toUpperCase(l.charAt(0)) + "<sub>" + letters.get(toUpperCase(l.charAt(0))) + "</sub></html>");
            }
            selected.add(pos_button);
            lock_letters(pos_button);
        }
    }

    //  Μέθοσ για να κάνει καθάριση
    private void clear_selection() {
        // Επαναφορά των κουμπιών
        for (int i = 0; i < buttons.size(); i++) {
            buttons.get(i).setEnabled(true);
            // Επαναφορά του χρώματος των κουμπιών ανάλογα με τον τύπο του γράμματος
            if (letter_board.get(i) instanceof White) {
                buttons.get(i).setBackground(Color.white);
            } else if (letter_board.get(i) instanceof Red) {
                buttons.get(i).setBackground(Color.red);
            } else if (letter_board.get(i) instanceof Blue) {
                buttons.get(i).setBackground(Color.cyan);
            } else if (letter_board.get(i) instanceof Balader) {
                buttons.get(i).setBackground(Color.ORANGE);
            }
        }
        // Απενεργοποίηση των κουμπιών που βρέθηκαν
        for (Integer i : found) {
            buttons.get(i).setBackground(Color.DARK_GRAY);
            buttons.get(i).setEnabled(false);
        }

    }
}
