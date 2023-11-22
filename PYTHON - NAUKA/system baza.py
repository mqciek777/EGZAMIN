import os
import time

baza_imie = []
baza_nazwisko = []
baza_login = []
baza_haslo = []

def clear_console():
    os.system('clear')

print("Program XYZ")


while True:
    print("MENU GŁÓWNE")
    wybor = int(input("0 - baza danych | 1 - logowanie | 2 - rejestracja | 3 - wyjście: "))

    if wybor == 0:
        pin_baza = "6969"
        check_pin = input("Podaj PIN: ")
        if check_pin != pin_baza:
            clear_console()
            print("DOSTĘP ZABRONIONY! ZAMKNIĘTO APLIKACJĘ ZE WZGLEDÓW BEZPIECZEŃSTWA.")
            break
        else:
            if not (baza_imie and baza_nazwisko and baza_login and baza_haslo):
                print("Baza jest pusta")
                time.sleep(2)
                clear_console()
            else:
                print("Imiona: ", baza_imie, "\n")
                print("Nazwiska: ", baza_nazwisko, "\n")
                print("Loginy: ", baza_login, "\n")
                print("Hasła: ", baza_haslo, "\n")
                # print("Hasła: ", ['*' * len(haslo) for haslo in baza_haslo])

    elif wybor == 1:
        clear_console()
        print("LOGOWANIE")
        login = input("Login: ")
        haslo = input("Hasło: ")

        if login in baza_login and baza_haslo[baza_login.index(login)] == haslo:
            clear_console()
            print("Witaj", login)
        else:
            clear_console()
            print("Nieprawidlowe dane logowania. Czekaj.")
            time.sleep(3)
            clear_console()
        continue

    elif wybor == 2:
        clear_console()
        print("FORMULARZ REJESTRACYJNY")

        imie = input("Imie: ")
        imie = imie.capitalize()
        baza_imie.append(imie)

        nazwisko = input("Nazwisko: ")
        nazwisko = nazwisko.capitalize()
        baza_nazwisko.append(nazwisko)

        login = input("Login: ")
        baza_login.append(login)

        haslo = input("Haslo: ")
        baza_haslo.append(haslo)
        clear_console()

        print("Zarejestrowano nowego użytkownika")
        time.sleep(3)
        clear_console()

    elif wybor == 3:
        print("Zamykanie aplikacji...")
        time.sleep(2)
        clear_console()
        print("Bye!")
        break

    else:
        clear_console()
        print("Nie wybrałeś żadnej opcji.")
        time.sleep(2)
        clear_console()