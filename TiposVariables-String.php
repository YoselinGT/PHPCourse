<?php
$nombre = "Yoselin";
//Heredoc en este si mapea la variable $nombre
print <<<EOD
Mi nombre es : $nombre
Mas informacion ....
....
EOD;
//Nowdoc no mapea la variable $nombre
print <<<'EOD'
Mi nombre es : $nombre
Mas informacion ....
....
EOD;