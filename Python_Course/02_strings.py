# STRINGS

#? Strings são caracterizados por aspas simples ou duplas
nome = 'Joao' #* str
idade = 17    #* int
 
    #* Concatenar (Adicionar a variável nome e age à frase)
print('Olá, chamo-me ' + nome + ' e tenho ' + str(idade) + ' anos.')

#? Formatar Strings

    #* Argumentos por posição
print('Chamo-me {nome} e tenho {idade} + anos.'.format(nome=nome, idade=idade))

    #* F-Strings (O mesmo que o anterior mas mais simples) // versão 3.6+
print(f'Chamo-me {nome} e tenho {idade} + anos.')

#? String Functions

string = 'helloworld'

    #* Primeira letra maiúscula
print(string.capitalize())

    #* String em maiúsculas
print(string.upper())

    #* String em minúsculas
print(string.lower())

    #* Trocar maiúsculas por minúsculas e vice-versa
print(string.swapcase())

    #* Obter o tamanho da string
print(len(string))

    #* Substitui uma string por outra
print(string.replace('world', 'everyone'))

    #* Conta quantas vezes uma string aparece noutra
sub = 'h'
print(string.count(sub))

    #* Começa com
print(string.startswith('hello'))

    #* Acaba com
print(string.endswith('d'))

    #* Divide a string em uma lista
print(string.split())

    #* Encontra a posição de um caracter
print(string.find('r'))

    #* Verifica se todos os caracteres são alfanuméricos (Ex: letras e números)
print(string.isalnum())

    #* Verifica se todos os caracteres são letras
print(string.isalpha())

    #* Verifica se todos os caracteres são números
print(string.isnumeric())