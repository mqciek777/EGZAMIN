persons = {
    'john': {
        'name': 'John Doe',
        'age': 30,
        'skills': ['Python', 'JavaScript', 'C++']
},
    'jane': {
        'name': 'Jane Smith',
        'age': 25,
        'skills': ['Python', 'Java']
    }
}


def all_skills_required(person, *skills):
    return all(skill in person['skills'] for skill in skills)


if all_skills_required(persons['john'], 'Python', 'JavaScript'):
    print("Accepted")
else:
    print("Denied")


if all_skills_required(persons['jane'], 'Python', 'JavaScript'):
    print("Accepted")
else:
    print("Denied")