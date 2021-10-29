# Factory
Extraindo um exemplo do mundo real para entender o Factory Method, cheguei nesse exemplo.

Eu tenho uma superclasse Car que recebe alguns atributos para ser criada. Depois que o objeto for criado, posso recuperá-lo utilizando o método getCar().

A mágica do factory acontece na classe VehiclesFactory. Caso eu precise criar vários objetos de uma classe posso usar esse design pattern para facilitar o serviço.

[factory-method-1.php](FactoryMethod1.php)

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

Para rodar esse código da raíz do projeto, execute:
```console
php factory-method/factory-method-1.php
```

## Onde usar?
* **Cadastro imagens:** Você têm um dropzone no seu projeto que recebe várias imagens de uma única vez. Use o Factory Method para criar os objetos das imagens dinamicamente. 
* **Processamento CSV:** Seu projeto possui um sistema de importação de dados através de CSV. Use o Factory Method para criar um objeto para cada linha do seu arquivo.

## Ainda não identificou os benefícios?
Em nosso código de exemplo, temos uma classe **Car** e utilizamos a **VehiclesFactory** para criar dinâmicamente nossos carros.

Se precisarmos evoluir nosso código para começar a criar caminhões também, não precisaríamos criar uma nova fábrica, apenas uma classe **Truck** e um novo método **create_truck** dentro da nossa fábrica. O código da evolução ficaria assim:

[factory-method-2.php](FactoryMethod2.php)
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

Para rodar esse código da raíz do projeto, execute:
```console
php factory-method/factory-method-2.php
```

O nome desse design pattern vem da similaridade com as fábricas. Elas podem fabricar diversos tipos de produtos, basta apenas que você atualize os equipamentos (métodos) para que elas saibam como criar esses novos produtos.

Outra forma de entender o Factory Method é pensar que uma fábrica pode produzir todos os carros da GM por exemplo, mas se for produzir os carros da Fiat, precisará fazer adaptações em seus métodos, porém, isso não afeta em nada a fabricação dos carros da GM.

![alt text](./factory-method.png "Factory Method")