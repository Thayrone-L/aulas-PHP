<?php

class Monitor
{
    var $modelo;
    var $marca;
    var $tamanho;
    var $ligado;

    function ligar()
    {
      $this->ligado=true;
    }
    function desligar()
    {
        $this->ligado=false;
    }
}
