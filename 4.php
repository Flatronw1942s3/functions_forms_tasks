<?php
/**
<p>4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.</p>
 */
function cur_dir($dir){
return scandir($dir);
}
print_r(cur_dir(__DIR__));
