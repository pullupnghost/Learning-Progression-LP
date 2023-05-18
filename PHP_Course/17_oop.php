<?php 
/*
    ? Modificadores: 
        * Pulic - Aberto a todos 
        * Private - Apenas dentro da classe 
        * Protected - Apenas dentro da classe e por classes que herdam  
*/

//* Criar uma Classe/Objeto - parent class
    class User {
        private $name;
        public $email;
        public $password;

        public function __construct($name, $email, $password) {
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        } //? O construtor é executado quando a classe é instanciada.

        function getName() { 
            return $this->name;
        } //? Função para obter o nome do utilizador, pois o nome é privado.

        function login() {
            return "User $this->name está logado.";
        }

        function __destruct() {
            echo "O nome de utilizador é {$this->name}.";
        } //? O destrutor é executado quando a classe é destruida ou quando o script termina.
    }

    //* Instacia um Utilizador
        $user1 = new User('Joao', 'Joao@gmail.com', '123456');
            echo $user1->getName() . '<br />';
            echo $user1->login() . '<br />'; 

        $user1->email = '13400@aevf.pt'; 

        var_dump($user1);
            echo '<br />';

//* Employee herda de User - child class
    class employee extends User {
        public $title;

        public function __construct($name, $email, $password, $title) {
            parent::__construct($name, $email, $password); //? Chama o construtor da classe pai.
            $this->title = $title;
        }

        public function getTitle() {
            return $this->title;
        }
    }

    $employee1 = new employee('Jonny','jonny@gmail.com','123456','Manager');
        echo $employee1->getTitle() . '<br />';

//! A função __destruct() é executada para cada classe que é instanciada porque o script termina.
?>