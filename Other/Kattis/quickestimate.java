package Other.Kattis;
import java.util.Scanner;

public class quickestimate {
    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);
        int length = 0, temp = 0, count = input.nextInt();
        int[] in = new int[count];
        String[] out = new String[count];

        for (int i = 0; i < count; i++) {
            in[i] = input.nextInt();
            temp = in[i];
            out[i] = String.valueOf(temp);
        }
        for (int j = 0; j < count; j++) {
            System.out.println(out[j].length());
        }
    }
}


