<?php

	include 'lib/app.php';

	$link = bancoConecta();

	$sql = <<<EOT

    select Name, Population, LifeExpectancy, Gnp
    from country
    where Continent = "Africa"
    order by Gnp desc

EOT; // desc -> ordenamento decrescente
?>
<h1>Países do continente africano</h1>
<table class="table table-striped table-hover">
	<thead>
		<tr>
        <th scope = "col"> Nome </th>
		<th scope="col"> População </th>
		<th scope="col"> Expectativa de vida </th>
		<th scope="col"> PIB </th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
			<tr>
                <td> <?= $linha['Name']?> </td>
				<td> <?=$linha['Population']?> </td>
				<td> <?=$linha['LifeExpectancy']?> </td>
				<td> <?=$linha['Gnp']?> </td>
			</tr>
		<?php }?>
	</tbody>
</table>
