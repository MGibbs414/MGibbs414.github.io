package Other.Kattis.Java;
import java.util.Scanner;

public class easiest {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int[] array = new int[100];
        int n,count = 0;
        while ((n = scanner.nextInt()) != 0) {
            int multiplier = 11;

            while (sumOfDigits(n * multiplier) != sumOfDigits(n)) {
                multiplier++;
            }

            array[count] = multiplier;
            count++;
        }
        for(int a=0; a < count; a++){ 
            //reading array elements from the user   
            System.out.println(array[a]);  
        }
    }

    private static int sumOfDigits(int number) {
        int sum = 0;
        while (number > 0) {
            sum += number % 10;
            number /= 10;
        }
        return sum;
    }
}
