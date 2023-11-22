"""
Napisz krótką grę w której masz 5 ruchów w jedną stronę poprzez KOMNATĘ.
Za każdym razem masz szansę spotkać po drodzę skrzynkę lub NIC.
Skrzynki mają różne kolory.
Kolor skrzynki oznacza jak rzadka jest ta skrzynka.

zielona - 75%
pomarańczowa - 20%
fioletowa - 4%
złota (legendarna) - 1%

Ustaw, że jest 40% szansy, że nie spotkasz niczego. 60%, że będzie skrzynka.

Ustaw randomowo złoto jako to co może "wypaść" ze skrzynki:
zielony - 1000, (900-1100)
pomaranczowy - 4000, (3600-4400)
fioletowy - 9000, (8100-9900)
zlota - 16000""" 

import random
import os
import time
from time import sleep


def clear_console():
    os.system('clear')


def console_sleep(secs):
    time.sleep(secs)


def pause():
    print("----------------")


def findApproximateValue(value):
    lowestValue = value - value * 0.1
    highestValue = value + value * 0.1
    return random.randint(lowestValue, highestValue)



moves = 1
score = 0

listOfBoxes = ['green', 'orange', 'purple', 'gold']
doesPlayerFoundBox = ['Yes', 'No']


def boxDraw():
    global score
    box = random.choices(listOfBoxes, [75, 20, 4, 1])
    box = ''.join(box)
    print("You came across a(n)", box, "box!")

    if box == 'green':
        theAmountOfThePrize = findApproximateValue(1000)
        score += theAmountOfThePrize
        print("Inside was", theAmountOfThePrize, "!")
    elif box == 'orange':
        theAmountOfThePrize = findApproximateValue(4000)
        score += theAmountOfThePrize
        print("Inside was", theAmountOfThePrize, "!")
    elif box == 'purple':
        theAmountOfThePrize = findApproximateValue(9000)
        score += theAmountOfThePrize
        print("Inside was", theAmountOfThePrize, "!")
    elif box == 'gold':
        theAmountOfThePrize = findApproximateValue(16000)
        score += theAmountOfThePrize
        print("LEGENDARY BOX !!!", "\nInside was", theAmountOfThePrize, "!")


def playerLuckFunction():
    playerLuck = random.choices(doesPlayerFoundBox, [60, 40])
    playerLuck = ''.join(playerLuck)
    if playerLuck == 'Yes':
        print("It was your lucky move!\n")
        boxDraw()
    else:
        print("\nYou didn't found any bonus...\n")


while moves <= 5:

    if moves == 1:
        input("To start the game, press ENTER ")
    clear_console()

    print("Level", moves)
    pause()
    console_sleep(2)

    playerLuckFunction()
    pause()

    input("\nClick enter to make next step. ")
    moves += 1

if moves == 6:
    clear_console()
    pause()
    print("YOU PASSED THE GAME!")
    print("TOTAL SCORE:", score)
    pause()