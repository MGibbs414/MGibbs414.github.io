package Other.Kattis.Java;
import java.util.Scanner;

public class dicegame {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        // Calculate the sums of possible outcomes for Gunnar and Emma
        int gunnarSum = 0;
        int emmaSum = 0;

        // Read Gunnar's dice
        int[] gunnarDice = new int[4];
        for (int i = 0; i < 4; i++) {
            gunnarDice[i] = scanner.nextInt();
            gunnarSum += gunnarDice[i];
        }

        // Read Emma's dice
        int[] emmaDice = new int[4];
        for (int i = 0; i < 4; i++) {
            emmaDice[i] = scanner.nextInt();
            emmaSum += emmaDice[i];
        }

        // Determine the winner or if it's a tie
        String winner = " ";
        if (gunnarSum > emmaSum) {
            winner = "Gunnar";
        } else if (gunnarSum < emmaSum) {
            winner = "Emma";
        } else if (gunnarSum == emmaSum){
            winner = "Tie";
        }

        // Print the result
        System.out.println(winner);

        scanner.close();
    }
}
