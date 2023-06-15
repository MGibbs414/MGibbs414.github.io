package Other.Kattis.Java;

import java.util.*;

class Friend implements Comparable<Friend> {
    String name;
    int like;
    String birthday;

    public Friend(String name, int like, String birthday) {
        this.name = name;
        this.like = like;
        this.birthday = birthday;
    }

    @Override
    public int compareTo(Friend other) {
        if (this.birthday.equals(other.birthday)) {
            return Integer.compare(other.like, this.like);
        }
        return this.birthday.compareTo(other.birthday);
    }
}

public class fodelsedagsmemorisering {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int N = scanner.nextInt();
        scanner.nextLine();

        List<Friend> friends = new ArrayList<>();

        for (int i = 0; i < N; i++) {
            String[] friendData = scanner.nextLine().split(" ");
            String name = friendData[0];
            int like = Integer.parseInt(friendData[1]);
            String birthday = friendData[2];
            friends.add(new Friend(name, like, birthday));
        }

        Collections.sort(friends);

        List<String> rememberedFriends = new ArrayList<>();
        rememberedFriends.add(friends.get(0).name);

        for (int i = 1; i < N; i++) {
            if (!friends.get(i).birthday.equals(friends.get(i - 1).birthday)) {
                rememberedFriends.add(friends.get(i).name);
            }
        }

        System.out.println(rememberedFriends.size());
        Collections.sort(rememberedFriends);   
        for (String name : rememberedFriends) {
            System.out.println(name);
        }
    }
}
