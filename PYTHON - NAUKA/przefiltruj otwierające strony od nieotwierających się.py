import requests

web_list = [
    "http://www.onet.pl",
    "http://www.interia.pl",
    "http://www.zsti.pl",
    "http://www.facebook.com",
    "http://www.wp.pl",
    "http://nk.pl",
    "http://asdf.pl",
    "http://dupa123231.com"

]


def check_site():
    try:
        response = requests.get(url)

        if response.status_code == 200:
            print(url + " - works")
            with open("working_websites.txt", "a+", encoding="UTF-8") as working_sites:
                working_sites.write(url + "\n")
    except:
        print(url + " - doesn't work")


for url in web_list:
    check_site()
    
print("\nList exported to 'working_websites.txt'")