<?php

	include 'lib/app.php';

	$link = bancoConecta();

	$sql = <<<EOT

    select c.Name, cl.Language, c.Population, cl.Percentage
    from country as c, countrylanguage as cl
    where c.Code = cl.CountryCode

EOT;
?>
<h1>Língua dos países armazenados e suas porcentagens</h1>
<table class="table table-striped table-sm table-bordered">
	<thead>
		<tr>
		<th scope="col">Nome</th>
		<th scope="col">Língua</th>
		<th scope="col">População</th>
		<th scope="col">Porcentagem</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
			<tr>
				<td><?=$linha['Name']?></td>
				<td><?=$linha['Language']?></td>
				<td><?=$linha['Population']?></td>
				<td><?=$linha['Percentage']?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
