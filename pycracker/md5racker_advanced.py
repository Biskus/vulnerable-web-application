import hashlib

md5_hash_to_crack = 'e468e6e4f41e69958151761eedaabc04'

wordlist = open('norwegian.txt').readlines()

def check_password(pw_hash, word):
    #matches the exact word 
    if pw_hash == hashlib.md5(word.encode()).hexdigest():
        print('Found password: ' + word)

    #matches capitalized word
    word = word.capitalize()
    if pw_hash == hashlib.md5(word.encode()).hexdigest():
        print('Found password: ' + word)
    
    #matches capitalized word + 123
    word = word + '123'
    if pw_hash == hashlib.md5(word.encode()).hexdigest():
        print('Found password: ' + word)
   

for word in wordlist:
    word = word.strip()
    check_password(md5_hash_to_crack, word)

print('Searched through ' + str(len(wordlist)) + ' words')

