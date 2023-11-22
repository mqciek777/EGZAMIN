listOfNumbers = []

def numbers():
    userRange = int(input("Enter how many numbers you want to sum up: "))
    for quantity in range(userRange):
        number = int(input('Enter a number: '))
        listOfNumbers.append(number)

        positiveNumbers = [numberP
                           for numberP in listOfNumbers
                           if numberP > 0
        ]

    sumOfNumbers = sum(positiveNumbers)
    print("Here's a sum of your positive numbers: ", sumOfNumbers)


input("Hello. Click enter to continue ")
numbers()