import os
import time

def clear_console():
    os.system('clear')

slownik = {'Test': 2137}

print("Witaj! Oto twój prywatny słownik \n")

while True:

    print("MENU:")
    print("1. Dodaj definicje")
    print("2. Wyszukaj definicje")
    print("3. Usun definicje")
    print("4. Wyswietl slownik")
    print("5. Zakoncz program")

    wybor = input("\nWybierz opcję: ")

    if wybor == '1':
        clear_console()
        print("Twoj wybor: dodawanie")
        slowo = input("Podaj slowo definiowane: ")
        definicja = input("Podaj definicje tego slowa: ")
        slownik[slowo] = definicja
        clear_console()
        print("Pomyślnie dodano pozycję do słownika")
        input("Wcisnij enter, aby kontynuowac...")
        clear_console()

    elif wybor == '2':
        clear_console()
        print("Twoj wybor: wyszukiwanie")
        szukane = input("Podaj slowo, dla ktorego definicje chcesz wyszukac: ")
        clear_console()
        if szukane in slownik:
            print("Definicja dla slowa", szukane, ":", slownik[szukane])
            input("Wcisnij enter, aby kontynuowac...")
            clear_console()
        else:
            print("Nie znaleziono definicji dla słowa", szukane)
            input("Wcisnij enter, aby kontynuowac...")
            clear_console()

    elif wybor == '3':
        clear_console()
        print("Twoj wybor: usuwanie")
        usuwane = input("Podaj slowo, ktore chcesz usunac ze slownika: ")
        clear_console()
        if usuwane in slownik:
            slownik.pop(usuwane)
            print("Pomyslnie usunieto pozycje", usuwane, "ze slownika")
            input("Wcisnij enter, aby kontynuowac...")
            clear_console()
        else:
            print("Slowo", usuwane, "nie istnieje w slowniku")
            input("Wcisnij enter, aby kontynuowac...")
            clear_console()

    elif wybor == '4':
        clear_console()
        print("Slownik: ")
        for key in slownik:
            #print('\n')
            print(key, '-', slownik[key])
        input("Wcisnij enter, aby kontynuowac...")
        clear_console()

    elif wybor == '5':
        clear_console()
        print("Trwa wylaczanie...")
        time.sleep(3)
        clear_console()
        print("Bezpiecznie zakonczono dzialanie programu")
        break

    else:
        clear_console()
        print("Cos Ci sie chyba pomylilo. Czekaj... ")
        time.sleep(3)
        clear_console()