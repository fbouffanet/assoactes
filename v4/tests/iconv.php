<?php

//phpinfo();
//setlocale(LC_CTYPE, 'en_US.UTF8');
setlocale(LC_CTYPE, 'fr_FR.UTF8');
echo iconv("cp1252", "ASCII//TRANSLIT", "conversion de René et François");
?>