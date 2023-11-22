import requests
import json

response = requests.get("https://jsonplaceholder.typicode.com/todos")

try:
    tasks = response.json() #metoda, ktora od razu sprawdza czy jest na tej stronie json
except requests.exceptions.JSONDecodeError:
    print("Incorrect format file.")
else:
    completedTaskFrequencyByUser = dict()
    for entry in tasks:
        if(entry["completed"] == True):
            try:
                completedTaskFrequencyByUser[entry["userId"]] += 1
            except KeyError:
                completedTaskFrequencyByUser[entry["userId"]] = 1

print(completedTaskFrequencyByUser)