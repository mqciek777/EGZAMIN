wynik = 0
ilosc = 1
n = 0

while (ilosc <= 5):
    n = ilosc
    liczba = int(input("Podaj " + str(n) + " liczbe: "))
    wynik += liczba
    ilosc += 1


print(wynik)