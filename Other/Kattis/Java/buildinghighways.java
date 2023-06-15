package Other.Kattis.Java;

import java.util.Arrays;
import java.util.Scanner;

public class buildinghighways {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int N = scanner.nextInt();
        int[] cities = new int[N];

        for (int i = 0; i < N; i++) {
            cities[i] = scanner.nextInt();
        }

        long totalDifficulty = calculateMinimumSum(cities, N);
        System.out.println(totalDifficulty);
    }

    private static long calculateMinimumSum(int[] cities, int N) {
        long totalDifficulty = 0;
        for (int i = 0; i < N; i++) {
            for (int j = i + 1; j < N; j++) {
                totalDifficulty += cities[i] + cities[j];
            }
        }
        return totalDifficulty;
    }
}

