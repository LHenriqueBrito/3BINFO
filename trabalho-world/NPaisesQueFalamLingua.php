<?php

	include 'lib/app.php';

	$link = bancoConecta();

	$sql = <<<EOT

    select Language, count(Language) as Contagem
	from countrylanguage
	group by Language
    order by Contagem desc

EOT;
?>
<h1>Número de países que falam certa língua</h1>
<table class="table table-striped table-hover">
	<thead>
		<tr>
		<th scope="col">Língua</th>
		<th scope="col">Nº de países falantes da língua</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
			<tr>
				<td><?=$linha['Language']?></td>
				<td><?=$linha['Contagem']?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
