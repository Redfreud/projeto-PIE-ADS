
<h1>lista de Contatos</h1>
    <?php
    global $conn;
        $sql = "SELECT * FROM dados";
        // selecionaa o Tabela a ser usada.

        $res = $conn -> query($sql);

        $qtd = $res->num_rows; // traz a quantidade de linhas do banco de dados.

        if ($qtd > 0){
            print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Sobrenome</th>";
            print "<th>E-mail</th>";
            print "<th>Data de Nascimento</th>";
            print "<th>Nivel</th>";
            print "<th>Açoes</th>";
            print "</tr>";
            While($row = $res->fetch_object()){
                print "<tr>";
                print "<td>".$row->id."</td>";
                print "<td>".$row->nome."</td>";
                print "<td>".$row->sobrenome."</td>";
                print "<td>".$row->email."</td>";
                print "<td>".$row->datanas."</td>";
                print "<td>".$row->nivel."</td>";
                print "<td>
                            <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                            <button onclick=\"if (confirm('Tem Certeza disso?'))
                                {location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class = 'btn btn-danger'>Excluir</button>

                        </td>";
                print "</tr>";
                }
            print "</tabela>";
        }else{
            print "<p class= 'Alert-danger'>Não encontramos nada, nenhum resultado!</p>";
        }
    ?>

