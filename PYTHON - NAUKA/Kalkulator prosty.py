import math
print("Prosty kalkulator. Wybierz opcję:")
print(("1 - dodawanie, 2 - odejmowanie, 3 - mnozenie, 4 - dzielenie, 5 - potegowanie, 6 - pierwiastek"))
wybor = (input("Twoj wybor: "))

pierwszaLiczba = int(input("Podaj pierwsza liczbe: "))
drugaLiczba = int(input("Podaj druga liczbe: "))

if (wybor == '1'):
    print("Wynik:", pierwszaLiczba + drugaLiczba)
elif (wybor == '2'):
    print("Wynik:", pierwszaLiczba - drugaLiczba)
elif (wybor == '3'):
    print("Wynik:", pierwszaLiczba * drugaLiczba)
elif (wybor == '4'):
    if (drugaLiczba == 0):
        print("Pamietaj cholero nie dziel przez zero!!!")
    else:
        print("Wynik:", pierwszaLiczba / drugaLiczba)
elif (wybor == '5'):
    print("Wynik:", pierwszaLiczba ** drugaLiczba)
elif (wybor == '6'):
    print("Wynik:", math.sqrt(pierwszaLiczba), math.sqrt(drugaLiczba))
else:
    print("Nie wybrano żadnej opcji. Spróbuj ponownie")