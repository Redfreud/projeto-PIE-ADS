<h1>Editar cadastro</h1>
<?php
global $conn;
    $sql = "SELECT * FROM dados WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();

?>

<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome" value="<?php print $row->sobrenome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="datanas">Data de nascimento:</label>
        <input type="date" name="datanas" id="datanas" value="<?php print $row->datanas; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="nivel">Nivel Profissional:</label>
        <select  id="nivel" name="nivel" placeholde="<?php print $row->nivel; ?>" class="form-select" style="max-width: 20em">
            <option id="noob">Noob</option>
            <option id="junior">Junior</option>
            <option id="pleno">Pleno</option>
            <option id="senior">Senior</option>
            <option id="semi-deus">Semi Deus</option>
        </select>
    </div>
    <div class="mb-4">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>