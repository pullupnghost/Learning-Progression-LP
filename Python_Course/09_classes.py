# Classes

#? Criar uma Class - classe mãe
class User:

  #* Constructor
  def __init__(self, name, email, age): #* self é igual a 'this',  __init__ é um nome comum para o método constructor
    self.name = name
    self.email = email
    self.age = age
    
#? Variáveis Encapsuladas
    self._private = 1000 #* Variáveis com um '_' na frente são consideradas privadas, mas ainda podem ser acessadas e alteradas.

#? Métodos
  def greeting(self):
      return f'Chamo-me {self.name} e tenho {self.age} anos'

  def has_birthday(self):
      self.age += 1
 
 #* Método para encapsulamento
  def print_encap(self):
      print(self._private)

#? Herança - classe filha
class Customer(User):
  #* Constructor
  def __init__(self, name, email, age):
      User.__init__(self, name, email, age) #* Chama o constructor da classe mãe
      self.email = email
      self.age = age
      self.balance = 0

  def set_balance(self, balance):
      self.balance = balance

  def greeting(self):
      return f'O meu nome é {self.name} e tenho {self.age} anos e a minha conta tem {self.balance} euros'
  


#? Inicializar um objeto
Joao = User('Joao Varela', 'joaovhorny@gmail.com', 17)
Joana = Customer('Joana Pereira', 'joana@yahoo.com', 25)

Joana.set_balance(500)
print(Joana.greeting())

Joao.has_birthday()
print(Joao.greeting())

    #* Encapsulamento
Joao.print_encap()
Joao._private = 800 #* Apenas muda o valor da variável para o objeto Joao
Joao.print_encap()

    #* Método herdado de User
Joana.print_encap() #! A variável continua a mesma, pois apenas foi alterada para Joao.
Joana._private = 600
Joana.print_encap()