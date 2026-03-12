<h1>Pg02_1 -12/03/26</h1>
<?php
$idade=34;
$nome="Lukin";
$entrada=false;
echo "Idade é igual $idade anos <br> e o  nome do maluco é $nome .";
$cep = "010121123"; //todo número que começa com zero deve ser string, porque ele vai se trasnformar automaticamente em número octal com base 10  o padrão do octal é 010 p ophp automaticamente vai seta-lo como numero inteiro por isso ele deve ser texto
echo "<br>cep = $cep <br>";

/*
bases :
decimal 0123456789 10
binaria 01 10
octal 01234567 10
hexadecimal 0123456789abcdef 10(10 equivale a 16 em número decimal)

*/
$preco = 10025247.543;


echo "preço = R$ ";
echo number_format($preco,2,",","."); //formatação de números com 2 casas decimais( a primeira virgula serve para separar os dois números finais no caso 123,43(43) os pontos para separar os vlaores)
$cor ="red";
echo "<br>cor = $cor ";
echo 'cor = $cor<br>';
echo "<h2 style='color : $cor;'>Outro Titulo estilizado com o php</h2>";
$ativo =false;
echo "está ativo ? $ativo <br>";
echo "hr";
echo "aquela era: ".$cor;
echo "<hr>";
$nota = 7.8;
echo "nota = ".$nota- (int)$nota;//(valor flutuante 7.8 - o valor inteiro formatado )

//arrendodamento deve-se usar o number format, agr se quiser só mostrar os inteiros é só setar o (int) desprezando os números decimais

?>
<h2 style='color : blue;'>Outro Titulo 1 </h2>