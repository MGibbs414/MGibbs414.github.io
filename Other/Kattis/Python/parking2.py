def min_walk_distance(stores):
    min_position = min(stores)
    max_position = max(stores)
    distance = max_position - min_position
    return distance

# Read the number of test cases
T = int(input())

# Process each test case
for _ in range(T):
    # Read the number of stores and their positions
    N = int(input())
    positions = list(map(int, input().split()))

    # Calculate and output the minimal distance Michael must walk
    distance = min_walk_distance(positions)
    print(distance)
