# Dicionário

#! Dicionário é uma coleção desordenada, alterável e indexada. Não permite duplicados.

#? Cria um dicionário
pessoa  = {
    'primeiro_nome': 'Joáo',
    'ultimo_nome': 'Varela',
    'idade': 17
}
    #* OU
pessoa_dois = dict(primeiro_nome='Matilde', ultimo_nome='Varela', idade=17)

    #* Obter o valor de uma chave
print(pessoa['primeiro_nome'])
print(pessoa.get('ultimo_nome'))

    #* Adiciona uma chave e valor
pessoa['telefone'] = '123-456-789'

    #* Obtem as chaves do dicionário
print(pessoa.keys())

    #* Obtem os valores do dicionário
print(pessoa.items())

    #* Copia um dicionário
person_dois = pessoa.copy()
pessoa_dois['cidade'] = 'Lisboa' #* Adiciona uma chave e valor ao dicionário copiado

#? Remove item
del(pessoa['idade'])
pessoa.pop('telefone')

    #* Limpa o dicionário
pessoa.clear()

    #* Obtem o tamanho do dicionário
print(len(pessoa_dois))


#? Lista de dicionários
pessoas = [
    {'nome': 'Martha', 'idade': 30},
    {'nome': 'Kevin', 'idade': 25}
]

print(pessoas[1]['nome'])