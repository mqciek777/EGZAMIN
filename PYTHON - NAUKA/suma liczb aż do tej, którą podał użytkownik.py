#sposob1

suma = 0

koniec = int(input("Podaj liczbe: "))

for liczba in range(1, koniec+1):
    suma += liczba

print("Suma:", suma)




#sposob2
def sumuj_do(liczba):
    suma = 0

    for liczba in range(1, liczba + 1):
        suma += liczba
    return suma

koniec = int(input("Podaj liczbe: "))

print('Suma:', sumuj_do(koniec))




#sposob3(generator)
def sumuj_do_v2(liczba):
    return sum([liczba for liczba in range(1, liczba + 1)])

koniec = int(input("Podaj liczbę: "))

print('Suma:', sumuj_do_v2(koniec))




#sposob4(arytmetyka)
def sumuj_do_v3(koniec):

    return (1 + koniec) / 2 * koniec


koniec = int(input("Podaj liczbe: "))

print('Suma:', sumuj_do_v3(koniec))