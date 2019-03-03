<?php
// $arr_files = scandir('.');
// foreach( $arr_files as $file )
// {
//     if( in_array($file,['.','..']) )
//     {
//         continue;
//     }

//     $file_content_old = file_get_contents($file);
//     //正则匹配替换，结束标签不好确定
//     $replace_patten = array(
//         '/<div\s+class="site-navbar"/'
//     );

// }

var_dump(glob('*.(html|htm)'));

/**
 * 
 * /html/body/header/div/div[1]
 * document.querySelector('body > header')
 */

