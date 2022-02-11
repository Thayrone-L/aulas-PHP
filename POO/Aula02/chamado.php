<?php

    class Chamado{

        var $titulo;
        var $cliente;
        var $solicitacao;
        var $data;
        var $finalizado;
    
        function abre() {
            $this->finalizado = false;
        }
    
        function finaliza() {
            $this->finalizado = true; 
                   
                
        }

    }