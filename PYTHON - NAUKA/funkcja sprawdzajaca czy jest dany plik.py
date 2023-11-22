"""
Zapytaj się użytkownika o nazwę pliku, który chce otworzyć do wczytania.

Jeśli plik nie istnieje wypisz mu odpowiedni komunikat.

Jeśli plik istnieje wczytaj całą jego zawartość i zwróć jako wynik funkcji.
"""
import os


def ifFileExist():
    try:
        with open(fileToCheck, "r", encoding="UTF-8") as file:
            os.system('clear')
            print(fileToCheck, ":")
            print(file.read())
    except FileNotFoundError:
        os.system('clear')
        print("It seems, that file", fileToCheck, "doesn't exist...")


print("Hello", os.getlogin(), "!\n")

print("Enter a name of file, which you want to open (with extension).")
fileToCheck = input("Filename: ")

ifFileExist()