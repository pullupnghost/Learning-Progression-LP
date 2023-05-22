# Tuples

#! Um tuple é uma coleção ordenada e inalterável. Permite duplicados.

#? Cria um Tuple
frutas = ('Maças', 'Laranjas', 'Uvas')
    #* OU
#? Cria um Tuple com o construtor tuple()
frutas_dois = tuple(('Maças', 'Laranjas', 'Uvas'))

    #* Mesmo com um valor, tem de ter uma virgula
fruta_dois = ('Apples',)

    #* Obter o valor de uma posição
print(frutas[1])

    #* Não pode alterar o valor - dá Erro e o programa para
#! frutas[0] = 'Pears'

    #* Obter o tamanho do tuple
print(len(frutas))

    #? Remover um tuple
del frutas_dois


# Sets

#! Um Set é uma coleção não ordenada e não indexada. Não permite duplicados.

#? Cria um set
frutas_set = {'Maças', 'Laranjas', 'Mangas'}

    #* Verificar se existe um valor no set
print('Maças' in frutas_set)

    #* Adiciona ao set
frutas_set.add('Uvas')

    #* Remove do set
frutas_set.remove('Uvas')

    #* Adiciona duplicados
frutas_set.add('Maças')

    #* Limpa o set
frutas_set.clear()

print(frutas_set)

#? Apaga o set
del frutas_set