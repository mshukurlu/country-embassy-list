<?php

function removeHtml($string){
    return strip_tags($string);
}

function getValuesOfColumnObjects($resource,$column,$glue=',')
{
    $list = [];
    foreach ($resource as $item)
    {
        $list[] = $item->$column;
    }
    return implode($glue,$list);
}
