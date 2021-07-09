<?php

require "vendor/autoload.php";

use PHPSandbox\Repl\OutputModifiers\PrefixDateTime;
use PHPSandbox\Repl\Repl;

$tinker = new Repl(new PrefixDateTime, getcwd());

$code = file_get_contents("index.php");
$code = array_reverse(explode('<?php', $code, 2))[0];

echo $tinker->execute($code);

exit;
