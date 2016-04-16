<?php
$arquivoNome = '/var/www/aula2/arquivos/produtos.csv';

if (end(explode(".",$arquivoNome)) !='csv')
	throw new \Exception("Nao eh csv");

$arquivo = file_get_contents($arquivoNome);

$linhas = explode("\n",$arquivo);
$titulo = false;
$titulo = explode(";",current($linhas));

while (next($linhas) != false) {
	$valores= explode(";",current($linhas));
	foreach ($titulo as $key => $value) {
		echo "$value = {$valores[$key]}<BR>";
		//Os titulos ainda precisam dos strongs
	}
	echo "<br><br>";

}
