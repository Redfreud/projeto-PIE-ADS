<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
<?php


?>

<div class="container">
  <div class="row">
    <div class="col mt-5">


    </div>
  </div>
</div>

<form action="?page=salvar" autocomplete="off" class="container" id="formulario" method="post">
  <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
  <div class="mb-3" id="area">
    <fieldset>
      <legend>Formulário</legend>
      <label class="fs-5 fw-semibold " for="nome">Nome:</label><input  id="nome" name="nome" value="<?php print $row->nome; ?>" class="form-control form-text p-1" type="text" placeholder="Nome" style="max-width: 25rem">
      <label class="fs-5 fw-semibold " for="sobrenome">Sobrenome:</label><input id="sobrenome" name="sobrenome" value="<?php print $row->sobrenome; ?>" class="form-control form-text" type="text" placeholder="Sobrenome" style="max-width: 25rem">
      <label class="fs-5 fw-semibold " for="email">Email:</label><input id="email" name="email" value="<?php print $row->email; ?>" class="form-control form-text p-1" type="email" placeholder="exemplo@exemplo.com.br" style="max-width: 25rem">
      <label class="fs-5 fw-semibold " for="datanas">Data de Nascimento:</label><input id="datanas"  name="datanas" value="<?php print $row->datanas; ?>" class="form-control form-text p-1" type="date" style="max-width: 20rem">
      <label class="fs-5 fw-semibold" for="nivel">Nivel Profissional:  </label>
      <select  id="nivel" name="nivel" value="<?php print $row->nivel; ?>" class="form-select" style="max-width: 20em">
        <option id="noob">Noob</option>
        <option id="junior">Junior</option>
        <option id="pleno">Pleno</option>
        <option id="senior">Senior</option>
        <option id="semi-deus">Semi Deus</option>
      </select>
    </fieldset>
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>


</form>
</body>
</html>