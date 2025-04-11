<?php

use PHPUnit\Framework\TestCase;
use App\Item;


class ItemTest extends TestCase{
    

    public function testEstadoInicialItem(){
        $item = new Item();

       

        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());

    }

    public function testGeteSetDescricao(){
        $descricao = 'Produto 1';

        $item = new Item();
        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao());
      
    }

    public function testGeteSetValor(){
        $valor = 25.50;

        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals($valor, $item->getvalor());
      
    }

    public function testItemValido(){
        $item = new Item();

        //submeter um item valido para o teste e retornar ok
        $item->setDescricao('Produto 1');
        $item->setValor(25.50);
        $this->assertEquals(true, $item->itemValido());


        //submeter um item invalido para o teste e retornar false (descricao)
        $item->setDescricao('');
        $item->setValor(25.50);
        $this->assertEquals(false, $item->itemValido());


        //submeter um item invalido para o teste e retornar false (valor)
        $item->setDescricao('produto 1');
        $item->setValor(0);
        $this->assertEquals(false, $item->itemValido());

        //submeter um item invalido para o teste e retornar false (descricao e valor)
        $item->setDescricao('');
        $item->setValor(0);
        $this->assertEquals(false, $item->itemValido());
    }

}