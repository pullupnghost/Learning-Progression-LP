# JSON com Python

'''
    loads - Converte JSON para um dicionário
    dumps - Converte um dicionário para JSON
'''

import json

#? Amostra de JSON
userJSON = '{"first_name": "Joao", "last_name": "Varela", "age": 17}'

    #* Copia o JSON para um dicionário
user = json.loads(userJSON)

print(user)
print(user['first_name'])

#? Amostra de dicionário
car = {'marca': 'Mercedes', 'modelo': 'GT', 'year': 2004}

    #* Copia o dicionário para JSON
carJSON = json.dumps(car) 

print(carJSON)