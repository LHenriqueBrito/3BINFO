<h1> Mine Horta Vale Verde </h1>

<form method = "post" action = "dados.php">
    <p> Firma: <input type = "text" name = "firma" size = "80" value = "<?=$firma?>"/></p>
    <p> Data: <input type = "text" name = "data" size = "80" value = "<?=$data?>"></p>
    <p> Numero: <input type = "text" name = "num" size = "80" value = "<?=$num?>"></p>
    <p> Endereço: <input type = "text" name = "endereco" size = "80" value = "<?=$endereco?>"></p>
    <p> Complemento: <input type = "text" name = "complemento" size = "80" value = "<?=$complemento?>"></p>
    <p> Bairro: <input type = "text" name = "bairro" size = "80" value = "<?=$bairro?>"></p>
    <p> Cidade: <input type = "text" name = "cidade" size = "80" value = "<?=$cidade?>"></p>
    <p> Estado: <input type = "text" name = "estado" size = "80" value = "<?=$estado?>"></p>
    <p> CEP: <input type = "text" name = "cep" size = "80" value = "<?=$cep?>"></p>
    <p> CNPJ: <input type = "text" name = "cnpj" size = "80" value = "<?=$cnpj?>"></p>
    <p> Inscrição: <input type = "text" name = "inscricao" size = "80" value = "<?=$inscricao?>"></p>
    <p> Telefone: <input type = "text" name = "telefone" size = "80" value = "<?=$telefone?>"></p>
    <p> Celular: <input type = "text" name = "celular" size = "80" value = "<?=$celular?>"></p>
    <p> Email: <input type = "text" name = "email" size = "80" value = "<?=$email?>"></p>
    <p> Obs.: <textarea name = "obs" rows = "6" cols = "80"><?=$obs?></textarea></p>
    <p> <button type = "submit"> Submeter </button></p> 
</form>