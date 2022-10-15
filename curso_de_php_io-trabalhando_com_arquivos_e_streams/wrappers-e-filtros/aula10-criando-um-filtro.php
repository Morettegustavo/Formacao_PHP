<?php

require 'MeuFiltro.php';

$fileCursos = fopen('lista-de-cursos', 'r');

stream_filter_register('texto.partes', MeuFiltro::class);
stream_filter_append($fileCursos, 'texto.partes');

echo fread($fileCursos, filesize('lista-de-cursos'));