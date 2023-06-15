package Other.Kattis.Java;

import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class speedlimit {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        List<List<int[]>> dataSets = new ArrayList<>();

        while (true) {
            int n = scanner.nextInt();
            if (n == -1) {
                break;
            }

            List<int[]> dataSet = new ArrayList<>();
            for (int i = 0; i < n; i++) {
                int speed = scanner.nextInt();
                int elapsed_time = scanner.nextInt();
                dataSet.add(new int[]{speed, elapsed_time});
            }

            dataSets.add(dataSet);
        }

        for (List<int[]> dataSet : dataSets) {
            int distance = calculateDistance(dataSet);
            System.out.println(distance + " miles");
        }
    }

    public static int calculateDistance(List<int[]> data) {
        int totalDistance = 0;

        for (int i = 0; i < data.size() - 1; i++) {
            int[] currentSegment = data.get(i);
            int[] nextSegment = data.get(i + 1);

            int speed = currentSegment[0];
            int elapsed_time = currentSegment[1];
            int next_elapsed_time = nextSegment[1];

            totalDistance += speed * (next_elapsed_time - elapsed_time);
        }

        return totalDistance;
    }
}
