# Listas

#! Uma lista é uma coleção ordenada e alterável. Permite duplicados.

#? Cria uma lista
numeros = [1, 2, 3, 4, 5]
frutas = ['Banana', 'Laranja', 'Maça', 'Perâ']
    #* OU
#? Cria uma lista com o construtor list()
numeros_dois = list((6, 7, 8, 9, 10))

    #* Buscar valores
print(frutas[1])

    #* Buscar o último valor
print(frutas[-1])

#? List Functions

    #* Obter o tamanho da lista
print(len(frutas))

    #* Adicionar à lista
frutas.append('Manga')
print(frutas)

    #* Remove da lista
frutas.remove('Maça')
print(frutas)

    #* Insere na posição especifica
frutas.insert(2, 'Morango')
print(frutas)

    #* Altera o valor duma posição
frutas[0] = 'Mirtilo'
print(frutas)

    #* Remove com pop (Remove o último valor por defeito)
frutas.pop(2)
print(frutas)

    #* Inverte a lista
frutas.reverse()
print(frutas)

    #* Ordenar a lista
frutas.sort()
print(frutas)

    #* Oderna Inversamente
frutas.sort(reverse=True)
print(frutas)