def calculate_distance(data):
    total_distance = -1

    for i in range(len(data)-1):
        speed, elapsed_time = data[i]
        if total_distance <= 0:
            total_distance += ((data[i][0]) * (data[i][1])+ 1)
        if total_distance != 0:
            total_distance += ((data[i+ 1][0]) * (data[i + 1][1]- data[i][1]))
    return total_distance

# Read the input data sets
data_sets = []
while True:
    n = int(input())
    if n == -1:
        break

    data = []
    for _ in range(n):
        speed, elapsed_time = map(int, input().split())
        data.append((speed, elapsed_time))

    data_sets.append(data)

# Process each data set and calculate the distance driven
for data in data_sets:
    distance = calculate_distance(data)
    print(distance, "miles")
