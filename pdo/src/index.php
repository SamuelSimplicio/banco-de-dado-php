<?php 

require 'Produto.php';

$produto = new Produto();

switch($_GET['operacao']){

    case 'list':
        echo '<h3>Produtos: </h3>';

        foreach($produto->list() as $value){
            echo 'Id: ' . $value['id'].'<br> Descricao: '. $value ['descricao'] . '<hr>';
        }

        break;
    case 'insert':

        $produto->insert('Produto teste do Samuel Simplicio 01');

        if(!$status){
            echo "Nao foi possivel executar a operacao!";
            return false;
        }

        echo "Registro inserido com sucesso!";

        break;
    case 'update':

        $produto->update('Produto alterado do Samuel Simplicio 01', 4);

        if(!$status){
            echo "Nao foi possivel executar a operacao!";
            return false;
        }

        echo "Registro atualizado com sucesso!";

        break;
     case 'delete':

        $status -> $produto->delete(3);

        if(!$status){
            echo "Nao foi possivel executar a operacao!";
            return false;
        }

        echo "Registro removido com sucesso!";

        break;
}