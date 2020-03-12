<?php

namespace politecnico\modelo;



class ecuacionGrado2Test extends \PHPUnit\Framework\TestCase
{

    public function testCalcular()
    {
    $calcular = new ecuacionGrado2(1,0,10);

    //prueba1
        $prueba1 = $calcular->calcular(0);
        $this->assertEquals(10,$prueba1);
    //prueba1
        $prueba2 = $calcular->calcular(1);
        $this->assertEquals(11,$prueba2);
    //prueba3
        $prueba3 = $calcular->calcular(2);
        $this->assertEquals(14,$prueba3);
    //prueba4
        $prueba4 = $calcular->calcular(3);
        $this->assertEquals(19,$prueba4);
    //prueba5
        $prueba5 = $calcular->calcular(4);
        $this->assertEquals(26,$prueba5);
    //prueba6
        $prueba6 = $calcular->calcular(5);
        $this->assertEquals(35,$prueba6);
    }

}
