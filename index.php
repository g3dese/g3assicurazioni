<?php
// Aruba apre index.php prima di index.html: questo file mostra semplicemente index.html,
// così la pagina da modificare resta una sola.
readfile(__DIR__ . '/index.html');
