import os

def clear_console():
    os.system('clear')
def pole_Prostokata(a,b):
    return a * b

def pole_Kwadratu(a):
    return a ** 2

def pole_Trojkata(a,h):
    return (a * h)/2

def pole_Trapezu(a,b,h):
    return ((a + b) * h) / 2

def pole_Kola(r):
    pi = 3.14
    return pi * (r**2)

while True:
    print("MENU:")
    print("1. Prostokąt" + "\n2. Kwadrat" + "\n3. Trójkąt" + "\n4. Trapez" + "\n5. Koło")
    wybor = input("Wybierz czego pole chcesz policzyć: ")


    if wybor == "1":
        clear_console()
        print("Obliczanie pola prostokata")
        a = int(input("Podaj bok a: "))
        b = int(input("Podaj bok b: "))
        print("Pole tego prostokąta wynosi:", pole_Prostokata(a,b))
        input("Wcisnij enter, aby kontynuowac...")
        clear_console()
    elif wybor == "2":
        clear_console()
        print("Obliczanie pola kwadratu")
        a = int(input("Podaj bok: "))
        print("Pole tego kwadratu wynosi:", pole_Kwadratu(a))
        input("Wcisnij enter, aby kontynuowac...")
        clear_console()
    elif wybor == "3":
        clear_console()
        print("Obliczanie pola trojkata")
        a = int(input("Podaj bok: "))
        h = int(input("Podaj wysokosc: "))
        print("Pole tego trojkata wynosi:", pole_Trojkata(a,h))
        input("Wcisnij enter, aby kontynuowac...")
        clear_console()
    elif wybor == "4":
        clear_console()
        print("Obliczanie pola trapezu")
        a = int(input("Podaj bok a: "))
        b = int(input("Podaj bok b: "))
        h = int(input("Podaj wysokosc: "))
        print("Pole tego trapezu wynosi:", pole_Trapezu(a,b,h))
        input("Wcisnij enter, aby kontynuowac...")
        clear_console()
    else:
        clear_console()
        print("Obliczanie pola kola")
        r = int(input("Podaj promien: "))
        print("Pole tego kola wynosi:", pole_Kola(r))
        input("Wcisnij enter, aby kontynuowac...")
        clear_console()