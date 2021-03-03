import sys

try:
    input_filename = sys.argv[1]
except:
    print('I need a file for input')
    raise SystemExit ('Correct usage: ' + sys.argv[0] + ' <filename>')

input_file_name = sys.argv[1]
output_file = input_file_name + '_processed.txt'

def delete_every_other_line():
    print('Starting delete every other line...')
    with open(output_file, 'w') as output:
        with open(input_file_name,'r') as input_file:
            for i, line in enumerate(input_file):
                if i % 2:
                    output.write(line)


menu = [
    (1,'Delete every other line'),

]
print('Menu\n'+str(menu))
choice = input('What would you like to do?')
try: choice=int(choice) 
except:print('Choice must be a number, exiting...')
if choice == 1:
    delete_every_other_line()




