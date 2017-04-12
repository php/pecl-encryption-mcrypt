--TEST--
Bug #8040 (MCRYPT_MODE_* do not seem to exist)
--SKIPIF--
<?php if (!extension_loaded("mcrypt")) print "skip"; ?>
--FILE--
<?php
	error_reporting (E_ALL ^ E_NOTICE);
	echo MCRYPT_TWOFISH."\n";
	echo MCRYPT_MODE_CBC."\n";

	define ("MODE1", MCRYPT_MODE_CBC);
	echo MODE1."\n";

	define ("CIPHER", MCRYPT_TWOFISH);
	define ("MODE2", MCRYPT_MODE_CBC);

	printf ("cipher=".CIPHER. " mode1=".MODE2."\n");
?>
--EXPECTF--
twofish
cbc
cbc
cipher=twofish mode1=cbc
