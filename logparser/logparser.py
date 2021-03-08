import re
from pprint import pprint as p
#import apache_log_parser
#line_parser = apache_log_parser.make_parser("%v %h %l %u %t \"%r\" %>s %b")


log = r'E:\Arvid\xampp\apache\logs\access.log'
log = r'E:\Arvid\xampp\apache\logs\filipnenehacker.txt'

regex = r'([(\d\.)]+) - - \[(.*?)\] "(.*?)" (\d+)'# - "(.*?)" "(.*?)"'



log = open(log).readlines()

access_codes = []
special_acces_codes = []

for entry in log:
    print(entry)
    matches = re.match(regex, entry).groups()
    print (matches)
    access_code = matches[3]
    print (access_code)
    #access_codes.append(access_code)
    if access_code != '404':
        special_acces_codes.append(entry)
print(len(log))
p(special_acces_codes)
