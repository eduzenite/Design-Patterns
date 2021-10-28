# Factory
Extraindo um exemplo do mundo real para entender o Factory Method, cheguei nesse exemplo.

Eu tenho uma superclasse Car que recebe alguns atributos para ser criada. Depois que o objeto for criado, posso recuperá-lo utilizando o método getCar().

A mágica do factory acontece na classe VehiclesFactory. Caso eu precise criar vários objetos de uma classe posso usar esse design pattern para facilitar o serviço.

[factory-method.php](/patterns/factory-method.php)
```php

class Car{
    ...
}

class VehiclesFactory{
    public static function create_car($brand, $model){
        return new Car($brand, $model);
    }
}
```
## Onde usar?
* **Cadastro imagens:** Você têm um dropzone no seu projeto que recebe várias imagens de uma única vez. Use o Factory Method para criar os objetos das imagens dinamicamente. 
* **Processamento CSV:** Seu projeto possui um sistema de importação de dados através de CSV. Use o Factory Method para criar um objeto para cada linha do seu arquivo.

## Ainda não identificou os benefícios?
Em nosso código de exemplo, temos uma classe **Car** e utilizamos a **VehiclesFactory** para criar dinâmicamente nossos carros.

Se precisarmos evoluir nosso código para começar a criar caminhões também, não precisaríamos criar uma nova fábrica, apenas uma classe **Truck** e um novo método **create_truck** dentro da nossa fábrica. O código da evolução ficaria assim:

```php

class Car{
    ...
}

class Truck{
    ...
}

class VehiclesFactory{
    public static function create_car($brand, $model){
        return new Car($brand, $model);
    }
    public static function create_truck($brand, $model){
        return new Car($brand, $model);
    }
}
```
O nome desse design pattern vem da similaridade com as fábricas. Elas podem fabricar diversos tipos de produtos, basta apenas que você atualize os equipamentos (métodos) para que elas saibam como criar esses novos produtos.