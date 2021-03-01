import hashlib
import time
md5_hash_to_crack = 'e0ee46c9cdf0a705dd103370cb2a4cf8'

def capitalize(string):
    return string.capitalize()
wordlist = open('norwegian.txt').readlines()[-30:]
counter = 0
start = time.time()

for word in wordlist:
    word = word.strip()
    print(word.encode('utf-8'))
    result = hashlib.md5(word.encode()).hexdigest()
    if result == md5_hash_to_crack:
        print('Found password: ' + word)
end = time.time()
delta = end - start
print('Searched through ' + str(len(wordlist)) + ' words'+ ' ('+str(delta)+' seconds)')
print()
