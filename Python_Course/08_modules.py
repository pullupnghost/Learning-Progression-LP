# Modules
'''
    Um Módulo é um arquivo que contém um conjunto de funções para incluir no programa.
    #* Para instalar um módulo, use o comando 'pip install <nome>' no terminal.
'''

    #? Importar Módulos
from datetime import date
import time
from time import time

    #? Importar Módulos Personalizados
from module_validator import validate_email

    #? Pip Módulos
from camelcase import CamelCase

#* Uso de Módulos

today = date.today()
timestamp = time()
print(today, timestamp)

email = 'test#test.com'
if validate_email(email):
  print('Email é válido')
else:
  print('Email é inválido')

c = CamelCase()
print(c.hump('olá mundo'))