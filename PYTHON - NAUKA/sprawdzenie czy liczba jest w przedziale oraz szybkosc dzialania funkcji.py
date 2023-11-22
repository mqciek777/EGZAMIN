"""
FUNKCJA MA SPRAWDZIC CZY PODANA WARTOSC PRZEZ UZYTKOWNIKA JEST W ZBIORZE.
WYPISUJE CZY TAK CZY NIE
SPRAWDZAMY CO JEST SZYBSZE, KONTENER{} CZY LISTA[]
"""
import time
from enum import IntEnum
import functions

value = int(input("Enter value which you want to check: "))
userRange = int(input("Enter a range: "))

Choose_Container = IntEnum('Choose_Container', "Set, List")
choose = int(input("Do you wanna operate on set or list? (1 - set / 2 - list) : "))


def pause():
    print("--------------------------------------")


def check(container, value):
    if value in container:
        pause()
        return "\nYes, this number is in this range.\n"
    else:
        pause()
        return "\nThis number is out of range.\n"


def function_performance(fun, container, value):
    start = time.perf_counter()
    fun(container, value)
    end = time.perf_counter()
    return end - start


if choose == Choose_Container.Set:
    container = {i for i in range(1, userRange + 1)}
    print(check(container, value))
    
elif choose == Choose_Container.List:
    container = [i for i in range(1, userRange + 1)]
    print(check(container, value))
    
else:
    pause()
    print("Invalid choice. Goodbye. ")
    exit()


pause()
wannaSpeed = input("\nDo you want to check some speed? (Y / N): ").capitalize()


if wannaSpeed == "Y" and choose == Choose_Container.Set:
    print("RESULT:", function_performance(check, container, value))
    print("That's how long it took your computer to check this.")
    
elif wannaSpeed == "Y" and choose == Choose_Container.List:
    print("RESULT:", function_performance(check, container, value))
    print("That's how long it took your computer to check this.")

else:
    pause()
    print("Ok! Goodbye....")
    exit()