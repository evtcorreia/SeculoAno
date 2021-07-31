<?php



    function SeculoAno($ano)
    {

        /*
            Função para calculo de seculo com base no ano Informado
        */


        // caso o ano fosse superiro a 1970 poderia usar a função  strftime
        //$a = strtotime($ano);
        //$seculo = strftime("%C %G", strtotime($ano)); 

        $seculo = round($ano / 100);
        return $seculo;
    }


    echo SeculoAno(2021);