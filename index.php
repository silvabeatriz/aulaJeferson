<?php

function vd($arr){
    echo '<pre>';
    var_dump($arr);
}

$lista = array('1','2','3','4','5');
$lista[] = 6;
$lista['vilao'] = 'coringa';
$lista[] = 7;

vd($lista);
echo $lista ['vilao'];


//$curso = array ();
$curso['InfoInter'] = array('DES'=>'Jeferson','OSA','DDW','RC','CEI');
$curso['medio'] = array('matetmatica'=> 'Tony Stark','fisica','bio');
$curso['logistica'] = [];
$curso['administracao']=[];
vd($curso);


foreach($curso['medio'] as $valor){
    echo $valor. '<br>';
}
echo '<hr>';
foreach($curso['InfoInter'] as $valor){
    echo $valor.'<br>';
}

$curso['medio'][0]= 'Artes';
unset($curso['medio']['matematica']);
$curso['medio'][11]='informatica';
$curso['medio'][]='finanças';
vd($curso);