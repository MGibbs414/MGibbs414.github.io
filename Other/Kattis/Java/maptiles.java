package Other.Kattis.Java;

import java.util.Scanner;

public class maptiles {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        // Read the quadkey from input
        String quadkey = scanner.nextLine().trim();

        // Get the tile coordinates
        int[] result = getTileCoordinates(quadkey);

        // Output the results
        System.out.print(result[0] + " ");
        System.out.println(result[1] + " " + result[2]);
    }

    public static int[] getTileCoordinates(String quadkey) {
        int zoomLevel = quadkey.length();
        int[] tileCoordinates = new int[3];
        int mapSize = (int) Math.pow(2, zoomLevel);
        int tempZoom = zoomLevel;
        for (char digit : quadkey.toCharArray()) {
            tempZoom--;
            int quadrant = Character.getNumericValue(digit);
            mapSize /= 2;

            if (quadrant == 1 || quadrant == 3) {
                tileCoordinates[1] += mapSize;
            }

            if (quadrant == 2 || quadrant == 3) {
                tileCoordinates[2] += mapSize;
            }
        }

        tileCoordinates[0] = zoomLevel;
        return tileCoordinates;
    }
}
