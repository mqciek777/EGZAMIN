#me
import random

cardList = ["9", "9", "9", "9",
            "10", "10", "10", "10",
            "Jack", "Jack", "Jack", "Jack",
            "Queen", "Queen", "Queen", "Queen",
            "King", "King", "King", "King",
            "Ace", "Ace", "Ace", "Ace",
            "Joker", "Joker"]

player1 = []
player2 = []


def shuffle_cards(list):
    list = list.copy()
    shuffled = random.sample(list, 5)
    for cards in shuffled:
        list.remove(cards)
    return shuffled

player1 = shuffle_cards(cardList)
player2 = shuffle_cards(cardList)

print("Cards for player 1:", player1)
print("Cards for player 2:", player2)






#jakbym chcial zeby to wygladalo XDDD

import random

cardList = ["9", "9", "9", "9",
            "10", "10", "10", "10",
            "Jack", "Jack", "Jack", "Jack",
            "Queen", "Queen", "Queen", "Queen",
            "King", "King", "King", "King",
            "Ace", "Ace", "Ace", "Ace",
            "Joker", "Joker"]


def shuffle_cards(cards_list, num_players):
    players = [[] for _ in range(num_players)]
    cards_list = cards_list.copy()

    for _ in range(5):
        for player in players:
            card = random.choice(cards_list)
            player.append(card)
            cards_list.remove(card)

    return players


num_players = int(input("Enter the number of players: "))
num_runs = int(input("Enter the number of times you want to shuffle: "))

for _ in range(num_runs):
    players = shuffle_cards(cardList, num_players)

    for i, player in enumerate(players):
        print(f"Cards for player {i + 1}: {player}")

    print("======================")