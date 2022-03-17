<html>

    <head>

        <title>Formulário de usuário</title>

        <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous">

        </script>

    </head>

    <body>

        <a href="#janela1" rel="modal">Novo Usuario</a>

        <div id="table">

            <table>

                <tr> 
                    <th>Id</th> 
                    <th>Nome</th> 
                    <th>Notas</th>
                    <th>Ação</th>
                </tr>

                <?php

                include 'conexao_pweb_r2.php';
                $select = "SELECT * FROM usuarios";
                $result = mysqli_query($connect, $select); 

                while ($row = mysqli_fetch_array($result)) {
                    $id = $row['id_usuario'];
                    $nome = $row['nome'];
                    $notas = $row['notas'];
                    echo "   
                        <tr>
                            <td>$id</td>
                            <td>$nome</td>
                            <td>$notas</td>
                            <td><button id='excluir' onclick='excluir($id);'>Excluir</button></td>
                        </tr>";
                }

                ?>

            </table>

            <div class="window" id="janela1">
                
                <a href="#" class="fechar">X Fechar</a>
                
                <h4>Cadastro de usuario</h4>
                
                <form id="cadUsuario" action="" method="post">
                    <label>Nome:</label><input type="text" name="nome" id="nome" />
                    <label>Email:</label><input type="text" name="email" id="email" />
                    <label>Senha:</label> <input type="text" name="senha" id="senha" />
                    <br/><br/>
                
                     <input type="button" value="Salvar" id="salvar" />
                </form>

            </div>

            <div id="mascara"></div>
    
        </div>
    
    </body>

</html>

<script type="text/javascript" language="javascript">

function excluir(id){
        var id = {id: id};
        $.ajax({
            type: 'POST',
            url: 'excluir_pweb_r2.php',
            async: true,
            data: id,
            success: function(response) {
                console.log(response);
                location.reload();
            },
            error: function(req, err){ console.log('Mensagem:' + err); }
        });
    }

    $(document).ready(function() {
        /// Quando usuário clicar em salvar serão feitos todos os passos abaixo
        $('#salvar').click(function() {

            var dados = $('#cadUsuario').serialize();

            $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: 'salvar_pweb_r2.php',
            

                    async: true,
                    data: dados,
                    success: function(response) {
                        console.log(response);
                        location.reload();
                    },
                    error: function(req, err){ console.log('Mensagem:' + err); }
            });

            return false;
        });

        $("a[rel=modal]").click(function(ev) {
            ev.preventDefault();

            var id = $(this).attr("href"); 

            var alturaTela = $(document).height();
            var larguraTela = $(window).width();

</script>