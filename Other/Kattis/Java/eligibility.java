package Other.Kattis.Java;
import java.util.Scanner;

public class eligibility {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        // Read the number of cases
        int cases = scanner.nextInt();
        scanner.nextLine(); // Consume the newline

        // Process each case
        for (int i = 0; i < cases; i++) {
            // Read the student's information
            String name = scanner.next();
            String startDateStr = scanner.next();
            String birthDateStr = scanner.next();
            int courses = scanner.nextInt();

            // Check the student's eligibility
            String eligibility = checkEligibility(startDateStr, birthDateStr, courses);

            // Print the result
            System.out.println(name + " " + eligibility);
        }

        scanner.close();
    }

    private static String checkEligibility(String startDateStr, String birthDateStr, int courses) {
        int startYear = Integer.parseInt(startDateStr.split("/")[0]);
        int birthYear = Integer.parseInt(birthDateStr.split("/")[0]);

        // Check eligibility conditions
        if (startYear >= 2010 || birthYear >= 1991) {
            return "eligible";
        } else if (courses >= 41) {
            return "ineligible";
        } else {
            return "coach petitions";
        }
    }
}
