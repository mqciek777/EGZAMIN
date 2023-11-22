"""
Dostep do systemu tylko dla osob ktore sa w bazie
good: Witaj, imie
not good: Brak dostepu.
"""

uzytkownicyUprzywilejowani = ["Kasia", "Rysiu", "Zenek"]

login = input("Dzień dobry. Podaj swoje imie: ")
login = login.capitalize()

if login in uzytkownicyUprzywilejowani:
    print("Witaj,", login)
else:
    print("Brak dostępu.")