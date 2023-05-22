# Loops

pessoas = ['João', 'Matilde', 'Isabel', 'Maria']

#? Loop Simples
for pessoa in pessoas:
  print(f'Pessoa: {pessoa}')

#? Break
for pessoa in pessoas:
    if pessoa == 'Matilde':
        break
    print(f'Pessoa Atual: {pessoa}')

#? Continue
for pessoa in pessoas:
    if pessoa == 'Matilde':
        continue
    print(f'Pessoa Continua: {pessoa}')

#? Range
for i in range(len(pessoas)):
    print(pessoas[i])

for i in range(0, 11):
    print(f'Número: {i}')

#? While
count = 1
while count <= 10:
    print(f'Contador: {count}')
    count += 1 