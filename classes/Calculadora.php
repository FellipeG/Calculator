<?php

    class Calculadora {

        private $primeiroNumero;
        private $segundoNumero;
        private $operador;
        private $resultado;

        public function setPrimeiroNumero($primeiroNumero) {
            $this->primeiroNumero = $primeiroNumero;
        }

        public function getPrimeiroNumero() {
            return $this->primeiroNumero;
        }

        public function setSegundoNumero($segundoNumero) {
            $this->segundoNumero = $segundoNumero;
        }

        public function getSegundoNumero() {
            return $this->segundoNumero;
        }

        public function setOperador($operador) {
            $this->operador = $operador;
        }

        public function getOperador() {
            return $this->operador;
        }

        public function setResultado() {
            switch($this->operador) {
                case '+':
                    $this->resultado = $this->primeiroNumero + $this->segundoNumero;
                    break;
                case '-':
                    $this->resultado = $this->primeiroNumero - $this->segundoNumero;
                    break;
                case '*':
                    $this->resultado = $this->primeiroNumero * $this->segundoNumero;
                    break;
                case '/':
                    $this->resultado = $this->primeiroNumero / $this->segundoNumero;
                    break;
            }
        }

        public function getResultado() {
            return 'Resultado: '.$this->resultado;
        }

    }

?>