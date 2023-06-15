package Other.Kattis.Java;
import java.util.Scanner;

public class helpaphd {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        // Read the number of testcases
        int numTestcases = scanner.nextInt();
        scanner.nextLine(); // Consume the newline character

        String[] result = new String[numTestcases];
        // Process each testcase
        for (int i = 0; i < numTestcases; i++) {
            String problem = scanner.nextLine();

            // Check if the problem is "P=NP"
            if (problem.equals("P=NP")) {
                result[i]=("skipped");
            } else {
                // Split the problem into two numbers
                String[] numbers = problem.split("\\+");
                int a = Integer.parseInt(numbers[0]);
                int b = Integer.parseInt(numbers[1]);
                // Compute the sum
                int sum = a + b;
                // Output the result
                result[i]= String.valueOf(sum);
            }
        }
        for (int i = 0; i < numTestcases; i++) { 
            System.out.println(result[i]);
        }
    }
}
