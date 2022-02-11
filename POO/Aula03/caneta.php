<?php

class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    function status()
    {
        echo $this ->modelo;
        echo $this ->cor;
        echo $this->ponta;
        echo $this ->carga;
        echo $this ->tampada;
    }

    function rabiscar()
    {
        if($this->tampada){
            echo"Não posso rabiscar pois a caneta está tampada.";
        }
    }

    function tampar()
    {
        $this->tampada=true;
    }

    function destampar()
    {
        $this->tampada=false;
    }
}
