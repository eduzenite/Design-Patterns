<?php
//PT: Criando o projeto do carro
//EN: Creating the car project
class Car{
    private $brand;
    private $model;

    public function __construct($brand, $model){
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getCar(){
        return [$this->brand, $this->model];
    }
}

//PT: Criando a fábrica do carro
//EN: Creating the car factory
class CarFactory{
    public static function create($brand, $model){
        return new Car($brand, $model);
    }
}

//PT: Definindo especificações dos carros que serão criados
//EN: Defining specifications of the cars that will be created
$projects = [
    ["GM", "Onix"],
    ["Fiat", "Bravo"]
];

//PT: Foreach para criar um carro para cada especificação
//EN: Foreach to create a car for each specification
foreach ($projects as $project){
    $cars[] = CarFactory::create($project[0], $project[1]);
}

//PT: Carro saindo da fábrica
//EN: Car leaving the factory
print_r($cars[0]->getCar());
print_r($cars[1]->getCar());