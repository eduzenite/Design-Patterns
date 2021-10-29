<?php
namespace FactoryMethod\FactoryMethod1;

//PT: Criando o projeto do carro
//EN: Creating the car project
class Car{
    private $brand;
    private $model;

    public function __construct($brand, $model){
        $this->brand = $brand;
        $this->model = $model;
    }

    public function get_vehicle(){
        return [$this->brand, $this->model];
    }
}

//PT: Criando a fábrica do carro
//EN: Creating the car factory
class VehiclesFactory{
    public static function create_car($brand, $model){
        return new Car($brand, $model);
    }
}

//PT: Definindo especificações dos carros que serão criados
//EN: Defining specifications of the cars that will be created
$projects = [
    ["Chevrolet", "Corsa"],
    ["Chevrolet", "Onix"],
    ["Chevrolet", "Spin"],
    ["Chevrolet", "Celta"],
    ["Fiat", "Bravo"],
    ["Fiat", "147"],
    ["Fiat", "Uno"],
    ["Fiat", "Argo"],
];

//PT: Foreach para criar um carro para cada especificação
//EN: Foreach to create a car for each specification
foreach ($projects as $project){
    $cars[] = VehiclesFactory::create_car($project[0], $project[1]);
}

//PT: Carro saindo da fábrica
//EN: Car leaving the factory
print_r($cars[0]->get_vehicle());
print_r($cars[1]->get_vehicle());