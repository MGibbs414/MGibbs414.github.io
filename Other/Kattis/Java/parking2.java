package Other.Kattis.Java;
import java.util.Arrays;
import java.util.Scanner;

public class parking2 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        // Read the number of test cases
        int T = scanner.nextInt();
        scanner.nextLine(); // Consume the newline

        // Process each test case
        for (int i = 0; i < T; i++) {
            // Read the number of stores and their positions
            int N = scanner.nextInt();
            scanner.nextLine(); // Consume the newline
            String[] positionsStr = scanner.nextLine().split(" ");

            int[] positions = new int[N];
            for (int j = 0; j < N; j++) {
                positions[j] = Integer.parseInt(positionsStr[j]);
            }

            // Calculate the sum of the differences
            int sumOfDifferences = calculateSumOfDifferences(positions);
            System.out.println(sumOfDifferences);
        }

        scanner.close();
    }

    private static int calculateSumOfDifferences(int[] positions) {
        // Sort the positions in least to greatest order
        Arrays.sort(positions);

        int sum = 0;
        for (int i = 1; i < positions.length; i++) {
            sum += positions[i] - positions[i - 1];
        }
        int temp = positions.length-1;
        sum += positions[temp] - positions[0];

        return sum;
    }
}
