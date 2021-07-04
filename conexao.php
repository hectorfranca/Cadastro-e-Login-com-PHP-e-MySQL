<?php

define ('hostname', 'sql305.epizy.com');
define ('user', 'epiz_25824494');
define ('password', '64B73ZqXqC7');
define ('database', 'epiz_25824494_cadastro');
$conexao = mysqli_connect(hostname, user, password, database) or die ('Não foi possível conectar ao banco de dados');
?>