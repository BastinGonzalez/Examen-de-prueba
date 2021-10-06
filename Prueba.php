<?php

class Persona{
    public $nombre;
    public $peso;
    public $estatura;
    public $IMC;

    public function calcularIMC(){
     echo('Paciente '.$this->nombre.' con peso '.$this->peso.'kg y estatura '.$this->estatura.'m'.'<br>'.'Su IMC es '.$this->IMC);
     echo '<br>';

    if($this->IMC>0 && $this->IMC<18.5){
        echo 'Está dentro de los valores correspondientes a “delgadez o bajo
        peso".';
    }else if($this->IMC >=18.5 && $this->IMC <=24.9 ){
        echo 'Está dentro de los valores "normales" o de peso saludable.';
    }else if($this->IMC >=25.0 && $this->IMC <=29.9 ){
        echo 'Está dentro de los valores correspondientes a "sobrepeso".';
    }else if($this->IMC >=30){
        echo 'Está dentro de los valores de "obesidad".';
    }else{
        echo 'Valores invalidos';
    }

}
}
