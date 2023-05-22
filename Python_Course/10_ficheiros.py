# Ficheiros
import os  #? Módulo para trabalhar com o sistema operativo

'''
#? Modos de abertura de ficheiros
    #? r - Abre um arquivo somente para leitura.
    #? w - Abre um arquivo somente para gravação. Apaga o conteúdo do arquivo ou cria um novo arquivo se ele não existir.
    #! a - Abra um arquivo somente para gravação. Os dados existentes no arquivo são guardados. Cria um novo arquivo se o arquivo não existir
    #* x - Cria um novo arquivo somente para gravação. Retorna FALSE e um erro se o arquivo já existir
    #? r+ - Abre um arquivo para leitura/gravação.
    #? w+ - Abre um arquivo para leitura/gravação. Apaga o conteúdo do arquivo ou cria um novo arquivo se ele não existir.
    #! a+ - Abre um arquivo para leitura/gravação. Os dados existentes no arquivo são preservados. Cria um novo arquivo se o arquivo não existir
    #* x+ - Cria um novo arquivo para leitura/gravação. Retorna FALSE e um erro se o arquivo já existir
    etc..
'''

#? Abre um ficheiro
myFile = open('./Python_Course/10_file_nomes.txt', 'w')

    #* Obter informação do ficheiro
print('Nome: ', os.path.basename(myFile.name)) #? os apenas obtém o nome do ficheiro e não o caminho
print('Está Fechado: ', myFile.closed)
print('Modo de Abertura: ', myFile.mode)

    #* Escrever para o ficheiro
myFile.write('Olá Mundo!')
myFile.write(' 123 ')
myFile.close()

    #* Adiciona ao ficheiro
myFile = open('./Python_Course/10_file_nomes.txt', 'a')
myFile.write(' Adeus Mundo!')
myFile.close()

    #* Lê do ficheiro
myFile = open('./Python_Course/10_file_nomes.txt', 'r+')
text = myFile.read(100)  # Lê os primeiros 100 caracteres
print(text)
myFile.close()