# Funções

#! Uma função começa semrpre com a palavra reservada def

#? Criar uma função
name = str(input())
def sayHello(name):
    print(f'Hello {name}')

    #* Chamar a função
sayHello(name)
    #* OU
print(sayHello(name))


#? Função com retorno
def getSoma(numero1, numero2): 
    total = numero1 + numero2
    return total

print(getSoma(10, 3)) #* 13


#? Funções Lambda
    #* Funções lambda são funções que apenas possuiem uma expressão
    #* São funções anônimas e simples

getSum = lambda numero1, numero2: numero1 + numero2 
print(getSum(5, 25)) #* 30


def getMedia(nota1, nota2, nota3, nota4):
    media = lambda: (nota1 + nota2 + nota3 + nota4) / 4
    return media()

print(getMedia(10, 15, 15, 10))