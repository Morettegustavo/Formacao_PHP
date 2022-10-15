<?php
$fileCursos = fopen('lista-de-cursos', 'r');

stream_filter_append($fileCursos, 'string.toupper');

echo fread($fileCursos, filesize('lista-de-cursos'));