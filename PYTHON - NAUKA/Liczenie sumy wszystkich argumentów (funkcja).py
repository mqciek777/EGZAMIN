#1
def count(*numbers):
    return sum(numbers)


print(count(1, 2))


#2
def count(*numbers):
    print(sum(numbers))


count(1, 2, 3, 1, 10, 10, 111, 123, 321, 0)