import hashlib
md5_hash_to_crack = 'e0ee46c9cdf0a705dd103370cb2a4cf8'

wordlist = open('norwegian.txt').readlines()

for word in wordlist:
    word = word.strip()
    result = hashlib.md5(word.encode()).hexdigest()

    if result == md5_hash_to_crack:
        print('Found password: ' + word)

print('Searched through ' + str(len(wordlist)) + ' words')

