# Comentário de uma linha

'''
    Comentário de várias linhas. Pode ser usado com 'aspas simples' ou "duplas".
'''

"""
    VARIAVEIS:
    - Não pode começar com números mas pode conter números
    - Não pode conter espaços
    - Não pode conter caracteres especiais
    - Não pode conter acentos
    - Deve começar com uma letra ou underscore
    - Case Sensitive(Ex: nome != Nome)
"""

#? Declaração de variáveis

x = 1           #* int
y = 2.5         #* float
nome = 'João'   #* str
is_rich = True  #* bool

print(x, y, nome, is_rich)

#? Atribuição múltipla

x, y, nome, is_rich = (1, 2.5, 'João', True) 

print(x, y, nome, is_rich)

#? Matemática básica

a = x + y

print(a, type(a)) #* type() retorna o tipo da variável

#? Conversão de tipos

x = str(x)  #* int -> str
y = int(y)  #* float -> int
z = float(y)#* int -> float

print(x, type(x))