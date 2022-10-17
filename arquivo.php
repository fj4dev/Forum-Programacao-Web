<?php
$data = $_POST["dataNasc];
$date = new DateTime($data);
SdateSig = $date->format('m-d');
$xml = simplexml_load_file('signos.xml');
echo '<h2>' . $xml->titulo . '</h2>';
echo '<h1>';
foreach ($xml->signo as $registro);
	if ($dateSig >= $registro->dataInicio and $datesig <= $registro->dataFim)
	{
		eco$registro->signoNome . '</h1>';
		eco <p> . $registro->descricao . '<p>';
	}
endforeach;
?>