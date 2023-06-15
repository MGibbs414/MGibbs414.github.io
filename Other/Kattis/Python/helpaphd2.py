# Read the number of testcases
num_testcases = int(input())

# Process each testcase
for _ in range(num_testcases):
    problem = input()

    # Check if the problem is "P=NP"
    if problem == "P=NP":
        print("skipped")
    else:
        # Split the problem into two numbers
        a, b = map(int, problem.split("+"))
        # Compute the sum
        result = a + b
        # Output the result
        print(result)

