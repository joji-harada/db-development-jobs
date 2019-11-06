<?php
//configuration to switch class name for styles

$PAGE = basename($_SERVER['PHP_SELF']);

switch($PAGE){
    case 'index.php':
        $body = 'main';
    break;
    case 'history.php':
        $body = 'history';
    break;
    default:
        $body = 'nothing';
}

?>