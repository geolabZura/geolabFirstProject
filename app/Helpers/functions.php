<?php

function svgToCode($param){
    $svg_code = \File::get(public_path($param));

    $find_string   = '<svg';
    $position = strpos($svg_code, $find_string);
    $svg_file_new = substr($svg_code, $position);

    return  $svg_file_new;
}