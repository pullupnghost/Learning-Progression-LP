# If/elif/else

'''
    #* Operadores de comparação
        == igual
        != diferente
        > maior que
        < menor que
        >= maior ou igual que
        <= menor ou igual que

    #* Operadores lógicos
        and - e
        or - ou
        not - não

    #* Operadores de associação
        in - em
        not in - não em

    #* Operadores de identidade
        is - é
        is not - não é
'''

x = 21
y = 20

#? Operadores de comparação

    #* If
if x > y:
  print(f'{x} é maior que {y}')

    #* If/else
if x > y:
  print(f'{x} é maior que {y}')
else:
  print(f'{y} é maior que {x}')  

    #* If/elif/else - elif é o mesmo que else if
if x > y:
  print(f'{x} é maior que {y}')
elif x == y:
  print(f'{x} é igual a {y}')  
else:
  print(f'{y} é maior que {x}')  

    #* If dentro de if
if x > 2:
  if x <= 10:
    print(f'{x} é maior que 2 e menor ou igual a 10')
  else: 
    print(f'{x} é maior que 10')
    

#? Operadores lógicos

    #* and
if x > 2 and x <= 10:
    print(f'{x} é maior que 2 e menor ou igual a 10')
else: 
    print(f'{x} é maior que 10')

    #* or
if x > 2 or x <= 10:
    print(f'{x} é maior que 2 ou menor ou igual a 10')

    #* not
if not(x == y):
  print(f'{x} não é igual a {y}')


#? Operadores de associação - compara se o valor está na lista

    #* Retorna True se o valor estiver na lista

numeros = [1,2,3,4,5]

    #* in
if x in numeros:
  print(x in numeros)

    #* not in
if x not in numeros:
  print(x not in numeros) 

#? Operadores de identidade - compara se os objetos são os mesmos

    #* Retorna True se os objetos forem iguais

    #* is
if x is y:
  print(x is y) 

    #* is not
if x is not y:
  print(x is not y)