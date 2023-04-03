
<?php
require_once('cfg/mydb.php');
require_once('core/con_my.php');
if ($cdbokmy){
    $rs = $con->query("UPDATE sc_tb_usuarios SET tent = 0, bloqueado = 0, logado = '0', tmpsenha = 1, senha = '$2y$10$5wWITwGH4723SLJmNDqLU.TuLK1l/F5y598lZDDfqGU29D83KWLO6' WHERE login = 'admin'");
    echo "Senha do admin trocada com sucesso, agora a senha eh 123456";
} else {
    echo "Nao foi possivel logar no banco de dados para alterar a senha.<br><br>";
    echo "Alternativamente você pode entrar no banco de dados manualmente e executar o comando SQL:<br>";
    echo "UPDATE sc_tb_usuarios SET tent = 0, bloqueado = 0, logado = '0', tmpsenha = 1, senha = '$2y$10$5wWITwGH4723SLJmNDqLU.TuLK1l/F5y598lZDDfqGU29D83KWLO6' WHERE login = 'admin';<br><br>";
    echo "Tal comando trocara a senha do admin para 123456";
}
?>

