<?php
/* i will update this file next time */
function install(){


}

function set_config($user,$pass,$host,$db,$root){

		$p = fopen("../config.php", "a+");
			 fwrite("<?php\ndefine('HOST','".$host."');\n", $p);
			 fwrite("define('USERNAME','".$user."');\n", $p);
			 fwrite("define('PASSWORD','".$pass."');\n", $p);
			 fwrite("define('DATABASE','".$db."');\n", $p);
			 fwrite("define('ROOT','".$root."');\n", $p);
		fclose($p);
}

function set_htaccess(){

	$p = fopen('../.htaccess', 'a+');
		fwrite('<IfModule mod_rewrite.c>', $p);
		fwrite('RewriteEngine on',$p);
		fwrite('RewriteRule ^articles/(.*) artikel.php?id=$1 [L]',$p);
		fwrite('RewriteRule ^search search.php',$p);
		fwrite('Options All -Indexes', $p);
		fwrite('</IfModule>', $p);
		fwrite('ErrorDocument 404 "https://localhost/blog/404.php"',$p);
	fclose($p);
}
