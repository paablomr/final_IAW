<?php


namespace politecnico\modelo;


class ecuacionGrado2
{
    private $a,$b,$c;
    public function __construct($a,$b,$c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function calcular($x){
        return $this->a*pow($x,2) + $this->b*$x + $this->c;
    }
}
