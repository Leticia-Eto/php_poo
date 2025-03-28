<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      background-color:lightblue;
      font-size: 30px;

      
    }
    hr{
        width: 100%;
        height: 1px;
        border: 0px;
        border-top: 1px solid white;
        background-color: #dddddd;
    }

  </style>
    
</head>

<body>
    <?php
    class Produto
    {
        private $nome = "";
        private $marca = "";
        private $qtd = 0;
        private $preco = 0.0;

        public function __construct($nome ,$marca,$qtd,$preco){
            $this->nome = $nome;
            $this->marca = $marca;
            $this->qtd = (int)$qtd;
            $this->preco = (float)$preco;

        }

        public function getNome() : String{
            return $this->nome;
        }
        public function setNome($nome) : void{
             $this->nome=$nome;
        }

        public function getMarca(): String{
            return $this->marca;
        }
        public function setMarca($marca) : void    {
             $this->marca=$marca;
        }

        public function getQtd(): int{
            return $this->qtd;
        }
        public function setQtd($qtd): void{
            if($qtd> 0){
             $this->qtd=(int)$qtd;
            }
        }

        public function getPreco(): float{
            return $this->preco;
        }
        public function setPreco($preco): void{
             $this->preco=(float)$preco;
        }
    }
    $prods = array();
    $prods[] = new Produto($_POST["nome"],$_POST["marca"],(int)$_POST["qtd"],(float)$_POST["preco"]);


    var_dump($prods);
    echo "<hr>";

    for($i= 0; $i< count($prods); $i++){
        echo"<p> Nome:  ", $prods[$i]->getNome() ,"<br> Marca: ", $prods[$i]->getMarca() ,"<br> Quantidade: " , $prods[$i]->getQtd() ,"<br> Preço: ", $prods[$i]->getPreco(), "</p>";
    }
    ?>

</body>

</html>
