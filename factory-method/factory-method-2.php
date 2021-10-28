<?php
class Car{
    private $brand;
    private $model;

    public function __construct($brand, $model){
        $this->brand = $brand;
        $this->model = $model;
    }

    public function get_car(){
        return [$this->brand, $this->model];
    }
}
class Truck{
    private $brand;
    private $model;

    public function __construct($brand, $model){
        $this->brand = $brand;
        $this->model = $model;
    }

    public function get_truck(){
        return [$this->brand, $this->model];
    }
}

class VehiclesFactory{
    public static function create_car($brand, $model){
        return new Car($brand, $model);
    }
    public static function create_truck($brand, $model){
        return new Car($brand, $model);
    }
}

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

foreach ($projects as $project){
    $cars[] = VehiclesFactory::create_car($project[0], $project[1]);
}

print_r($cars[0]->get_car());
print_r($cars[1]->get_car());

$projects = [
    ["Volvo", "Volvo FH"],
    ["Volvo", "Volvo FM"],
    ["Volvo", "Volvo FMX"],
    ["Volvo", "Volvo VM"],
    ["Scania", "Linha P"],
    ["Scania", "Linha G"],
    ["Scania", "Linha R"],
    ["Scania", "Linha S"],
];

foreach ($projects as $project){
    $truck[] = VehiclesFactory::create_truck($project[0], $project[1]);
}

print_r($truck[0]->get_car());
print_r($truck[1]->get_car());