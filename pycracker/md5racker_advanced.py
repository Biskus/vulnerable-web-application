import hashlib

md5_hash = 'e468e6e4f41e69958151761eedaabc04' #konurransedyktig
md5_hash = '2f4b1888619f3bc72b04b070b2fd01b5' #Soknepresten123

wordlist = open('norwegian.txt').readlines()

def check_password(pw_hash, word):
    #matches the exact word
    if pw_hash == hashlib.md5(word.encode()).hexdigest():
        return word

    #matches capitalized word
    word = word.capitalize()
    if pw_hash == hashlib.md5(word.encode()).hexdigest():
        return word
    
    #matches capitalized word + 123
    word = word + '123'
    if pw_hash == hashlib.md5(word.encode()).hexdigest():
        return word
    
   
for word in wordlist:
    word = word.strip()
    result = check_password(md5_hash, word)
    if result:
        print('Found password: ' + result)

print('Searched through ' + str(len(wordlist)) + ' words')

