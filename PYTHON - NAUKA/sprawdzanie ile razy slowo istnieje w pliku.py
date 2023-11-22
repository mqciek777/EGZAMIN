"""
Napisz kod, który sprawdzi, jak często słowo "kot" występuje w pliku "tekst.txt".

Dane wejściowe:
Ścieżka do pliku: "tekst.txt"
Słowo do wyszukania: "kot"

Dane wyjściowe:
Liczba wystąpień słowa "kot" w pliku "tekst.txt":
Jeśli w pliku "tekst.txt" znajduje się tekst "Kot jest bardzo fajnym zwierzęciem",
to kod powinien wyświetlić "Słowo 'kot' wystąpiło 1 razy w pliku 'tekst.txt'."

Wskazówki:
Otwórz plik w trybie odczytu i za pomocą metody count zlicz wystąpienia słowa w całym pliku.
Wyświetl wynik za pomocą instrukcji print.

Pamiętaj o obsłudze wyjątków!
FileNotFoundError występuje, gdy plik o podanej ścieżce nie zostanie znaleziony.
PermissionError występuje, gdy brak jest uprawnień do odczytu pliku.

3) Gdy wypiszesz dane skorzystaj z formatted stringa
"""


fileName = input("Enter a catito filename or path (with extension): ")
wordToCheck = "kot"

try:
    with open(fileName, "r", encoding="UTF-8") as file:
        openedFile = file.read()
        wordCounter = openedFile.count("kot")
        print(f"In file '{fileName}', word '{wordToCheck}' occurred {wordCounter} time(s)")
except FileNotFoundError:
    print(f"It seems, that file '{fileName}' doesn't exist...")
except PermissionError:
    print(f"You are not allowed to open file: '{fileName}'")