<?php 

/* O NOME DO BANCO DE DADOS*/
define ('DB_NAME','testecrud');

/*USUARIO DO BANCO DE DADOS*/
define('DB_USER','root');

/*SENHA DO BANCO DE DADOS*/
define('DB_PASSWORD','');

/*NOME DO HOST(CAMINHO) DO MYSQL */
define('DB_HOST','localhost');

if ( !defined('ABSPATH') )
	Define('ABSPATH', dirname(__FILE__) . '/');

/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/aeps/bootstrap%20basico/html/'); //caminho do sistema **NAO É O INDEX** É O CAMINHO DO INDEX

/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'database.php');

/** caminhos dos templates de header e footer **/
define('CABECALHO_TEMPLATE', ABSPATH . 'cabecalho.php');
/*Define('FOOTER_TEMPLATE', ABSPATH . 'footer.php');*/

?>
