<?php
//  \n = não tem no meu teclado pt1
//  | = não tem no meu teclado pt2

$titular = "andré Luiz Blazius";
$saldo = 1000;

    echo "\n***********************************************\n\n";
        echo "TITULAR : $titular\n";
        echo "SALDO ATUAL: R$$saldo\n";
    echo "\n***********************************************\n\n";

do{

echo "ESCOLHA UMA AÇÂO A SER TOMADA :\n";
    echo "1 - CONSULTAR SALDO ATUAL\n";
    echo "2 - REALIZAR SAQUE\n";
    echo "3 - REALIZAR DEPOSITO\n";
    echo "4 - SAIR\n";

switch ($escolha = (int) fgets(STDIN) ) {

    case 1:     echo "***********************************************\n\n";
                echo "TITULAR : $titular\n";
                echo "SALDO ATUAL: R$$saldo\n\n";
                echo "***********************************************\n";
        break;

    case 2:  echo "Qual valor deseja sacar?\n";

    $saque = (float) fgets(STDIN);

        if ($saque > $saldo) {
            echo "Esse saque não foi possivel, devido a falta de saldo\n\nSeu saldo atual é $saldo\n\n";
        } else {    $saldo -= $saque;
            echo "Saque realizado com sucesso!!\n\n";
        }
        break;

    case 3:  echo "Qual valor deseja depositar?\n";
            $saldo += $saque = (float) fgets(STDIN);
        break;

    case 4: echo "Até outro dia ^_^\n";
        break;

    default: echo "nenhuma ação foi tomada!!\n";
        break;

}} while ($escolha != 4);