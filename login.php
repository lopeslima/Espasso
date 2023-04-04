<?php

include " conexao.php ";

// Inicializa uma sessão
sessão_inicio();

// Verifica se o formulário de login foi submetido
if ( $ _SERVER [" REQUEST_METHOD "] == " POST ") {
    // Obtém o nome de usuário e senha do formulário
    $ nome de usuário = mysqli_real_escape_string( $ conn , $ _POST [" nome de usuário "]);
    $ senha = mysqli_real_escape_string( $ conn , $ _POST [" senha "]);

    // Consulta o banco de dados para verificar se o usuário e a senha correspondem a um registro
    $ sql = " SELECT id FROM usuarios WHERE nome = ' $ username ' AND senha = ' $ password ' ";
    $ resultado = mysqli_query( $ conn , $ sql );

    // Verifica se a consulta sofreu algum resultado
    if (mysqli_num_rows( $ resultado ) == 1 ) {
        // Inicia a sessão com o ID do usuário
        $ linha = mysqli_fetch_assoc( $ resultado );
        $ _SESSION [" user_id "] = $ linha [" id "];

        // Redireciona para a página de cadastro
        header(" Localização: cadastro.php ");
        saída();
    } senão {
        // Exibe uma mensagem de erro caso o usuário e senha não correspondam a um registro
        $ login_error = " Nome de usuário ou senha inválidos. ";
    }
}

?>

<!DOCTYPEhtml >
< html  lang =" pt-br " >
< cabeça >
    < meta  charset =" UTF-8 " >
    < meta  http-equiv =" X-UA-Compatible " content =" IE=edge " >
    < meta  name =" janela de visualização " conteúdo =" largura=largura do dispositivo, escala inicial=1,0 " >
    < title > Faça seu login </ title >
    < link  rel =" folha de estilo " href =" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css " >
</ cabeça >
< corpo >

< div  classe =" recipiente " >
    < div  class =" linha " >
        < div  class =" col-sm-6 col-sm-offset-3 " >
            < h1  class =" text-center " > Login </ h1 >
            <?php  if (isset( $ login_error )) { ?>
                < div  class =" alert alert-danger " > <?php  echo  $ login_error ; ? > </div> _
            <?php } ?>
            < form  class =" form-horizontal " action ="" method =" post " >
                < div  class =" form-group " >
                    < label  for =" username " class =" col-sm-2 control-label " > Nome do usuário: </ label >
                    < div  class =" col-sm-10 " >
                        < input  type =" text " class =" form-control " name =" username " obrigatório >
                    </div> _ _
                </div> _ _
                < div  class =" form-group " >
                    < label  for =" password " class =" col-sm-2 control-label " > Senha: </ label >
                    < div  class =" col-sm-10 " >
                        < input  type =" password " class =" form-control " name =" password " obrigatório >
                    </div> _ _
                </div> _ _
                < div  class =" form-group " >
                    < div  class =" col-sm-offset-2 col-sm-10 " >
                        < button  type =" submit " class =" btn btn-primary " > Entrar </ button >
                    </div> _ _
                </div> _ _
            </forma> _ _
        </div> _ _
    </div> _ _
</div> _ _

< script  src =" https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js " > </ script >
< script  src =" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js " > </ script >
</ corpo >
</html> _ _