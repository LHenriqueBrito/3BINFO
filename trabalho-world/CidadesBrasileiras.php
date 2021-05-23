<?php

	include 'lib/app.php';

	$link = bancoConecta();

	$sql = <<<EOT

        select Name, Population
        from city
        where CountryCode = "BRA"

EOT;
?>
<h1>Cidades brasileiras</h1>
<table class="table table-striped table-hover">
	<thead>
		<tr>
		<th scope="col">Nome</th>
		<th scope="col">População</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
			<tr>
				<td><?=$linha['Name']?></td>
				<td><?=$linha['Population']?></td>
			</tr>
		<?php }?>
	</tbody>
</table>
