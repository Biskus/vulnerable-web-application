

output_file = 'rule.rule'

def append_numbers(start_str, start_num = 0, end_num = 999):
    """Returns list of strings with numbers"""
    temp_ret = [] #temp list
    ret = [] #actual list to return
    for i in range(start_num, end_num + 1):
        str_to_append = start_str
        if i < 10:
            str_to_append += '00'
        elif i < 100:
            str_to_append += '0'
        str_to_append += str(i)

        temp_ret.append(start_str + str_to_append)
    
    for str_to_append in temp_ret:
        temp_str = ''
        for i, char in enumerate(str_to_append):
            if i + 1 % 2:
                temp_str += '$' + char
            else:
                temp_str += char
        ret.append(temp_str)
    return ret

prepend_chars = ['']
rule_counter = 0
with open(output_file,'w') as output:
    for prepend_char in prepend_chars:
        start_str = prepend_char
        for rule in append_numbers(start_str):
            output.write(str(rule) + '\n')
            rule_counter += 1
print('Finished writing ' + str(rule_counter) + ' rules to ' + output_file)
