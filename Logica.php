<?php

// camel case

//Operadores booleanos
// <, >, >=, <=, ==, !=
// ===, !== ???????
// == e ===: o primeiro compara somente o conteúdo, o segundo referenci também
//o tipo da variável.

//Operadores Aritméticos:
// +, - , *, /, %(resto), **(potência)

//Operadores Lógicos
// and e or
// && e ||

//$a = true && false;
//$b - true and false

//Problemas com precedentes com o and: o php entende o exemplo acima como:
// ($b = true) and false, ele atribui true a variável. Com o && o Problema
// não ocorre

//$b = (true and false);

//if($nota>=5)
//{
//    echo "Você foi aprovado";
//    elseif ($nota>=3)
//    {
  //      echo"Recuperação";
  //  }
    //else
    //{
      //  echo "Reprovado";
    //}
//}

for ($i=0; $i < 10; $i++)
{
  echo $i + 1 . PHP_EOL;
}

//PHP_EOL: pula para uma nova linha
