"""
Napisz program, który doda 3 parzyste liczby dodatnie podane przez użytkownika.

Jeśli liczba będzie niedodatnia lub nieparzysta to program ma zapytać się o liczbę jeszcze raz.

Program ma pytać się o liczby parzyste dodatnie, dopóki nie doda 3 liczb.
"""


print("Witaj!")

wynik = 0
ilosc = 0

while ilosc < 3:
    liczba = int(input("Podaj parzysta liczbe dodatnia: "))
    if liczba >= 0 and liczba % 2 == 0:
        wynik += liczba
        ilosc += 1
    elif liczba <= 0 and liczba % 2 != 0:
        print("To nie jest ani liczba dodatnia ani parzysta")
        continue
    elif liczba % 2 != 0:
        print("To nie jest liczba parzysta!")
        continue
    else:
        print("To nie jest liczba dodatnia")
        continue


print("Wynik dodawania tych trzech liczb to:", wynik)