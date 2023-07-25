<?php

//Para fazer o autload:
spl_autoload_register(function($class){
    if(file_exists('classes/'.$class.'.php')) {
        require 'classes/'.$class.'.php';
    } else {
        echo "Not Found file";
    }
});
//Se tivermos estanciado um objeto e não fizemos o require da mesma, podemos usar o spl_autoload_register, que ele mesmo identificará a classe que estamos usando e irá executar o código. Vale ressaltar que o nome do arquivo precisa serigual o da Classe.

?>