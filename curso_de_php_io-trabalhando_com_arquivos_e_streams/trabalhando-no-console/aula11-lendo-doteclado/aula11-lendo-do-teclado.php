<?php

$novoCurso = trim(fgets(STDIN));

file_put_contents('lista-de-cursos', "\n$novoCurso", FILE_APPEND);

