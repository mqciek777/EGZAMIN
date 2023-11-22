import random


def lotto_draw(how_many_numbers, total_range):
    random.sample(range(total_range + 1), how_many_numbers)


lotto_draw(6, 49)


"""
sample() - tworzy liste unikanlnych liczb, jesli są unikalne wewnatrz listy z ktorej wybieramy
"""