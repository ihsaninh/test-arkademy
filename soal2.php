<?php 

function is_username_valid($username)
{
	$regex   = preg_match('/^[a-z.]+$/', $username);
	
	if (strlen($username) != 8) return false;
	elseif (!$regex) return false;
	elseif (!strpos($username, '.')) return false;
	else return true;
}

function is_password_valid($password) {
	if ( strlen($password) < 8 ) {
		echo "password minimal 8 karakter";
		return false;
	}
	if ( !preg_match("#[0-9]+#", $password) ) {
		echo "password harus mengandung angka";
		return false;
	}
	if ( !preg_match("#[a-z]+#", $password) ) {
		echo "password harus mengandung huruf kecil";
		return false;
	}
	if ( !preg_match("#[A-Z]+#", $password) ) {
		echo "password harus mengandung huruf kapital";
		return false;
	}
	if ( !preg_match("/[\'^£$%&*()}{@#~?><>,|=_+!-]/", $password) ) {
		echo "password harus mengandung salah satu spesial karakter";
		return false;
	}
	echo "password sudah valid";
	return true;
}
var_dump(is_password_valid('qazW_123'));
?>
