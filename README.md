# Factory
Extraindo um exemplo do mundo real para entender o Factory Method, cheguei nesse exemplo.

Eu tenho uma superclasse Car que recebe alguns atributos para ser criada. Depois que o objeto for criado, posso recuperá-lo utilizando o método getCar().

A mágica do factory acontece na classe CarFactory. Caso eu precise criar vários objetos de uma classe posso usar esse design pattern para facilitar o serviço.

[factory-method.php](/patterns/factory-method.php)
```php

class Car{
    ...
}

class CarFactory{
    public static function create($brand, $model){
        return new Car($brand, $model);
    }
}
```
## Onde usar?
* **Cadastro imagens:** Você têm um dropzone no seu projeto que recebe várias imagens de uma única vez. Use o Factory Method para criar os objetos das imagens dinamicamente. 
* **Processamento CSV:** Seu projeto possui um sistema de importação de dados através de CSV. Use o Factory Method para criar um objeto para cada linha do seu arquivo.

