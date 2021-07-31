<?php

    function SeculoAno($ano)
    {

        // caso o ano fosse acima de 1970 poderia usar a função  strftime
        //$a = strtotime($ano);
        //$seculo = strftime("%C %G", strtotime($ano)); 
        
        $seculo = round($ano / 100);
        return $seculo;
    }


    echo SeculoAno(2021);