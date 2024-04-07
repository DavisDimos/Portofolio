/**
 *
 * @author SofiaTzani
 */
public class Player {

    //  Μεταβλήτες για το όνομα και το score του παίκτη.
    private String name;
    private int score;

    public Player(String name, int score) {
        this.name = name;
        this.score = score;
    }

    // Μέθοδος για να επιστρέψει το όνομα του παίκτη
    public String getName() {
        return name;
    }

    // Μέθοδος για να ορίσει το όνομα του παίκτη
    public void setName(String name) {
        this.name = name;
    }

    // Μέθοδος για να επιστρέψει το σκορ του παίκτη
    public int getScore() {
        return score;
    }

    // Μέθοδος για να ορίσει το σκορ του παίκτη
    public void setScore(int score) {
        this.score = score;
    }

    // Μέθοδος toString για να επιστρέψει τα στοιχεία του παίκτη ως συνδυασμένη συμβολοσειρά
    public String toString() {
        return "Player:" + " " + name + " " + "has score: " + score;
    }
}
