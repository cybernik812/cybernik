<?php
    
$type = 'insert';

switch ($type) {
    case 'select':
        echo 'Запрос на выборку';
        break;
    case 'update':
        echo 'Запрос на изменнеие';
        break;
    case 'insert':
        echo 'Запрос на вставку';
        break;
    case 'delete':
        echo 'Запрос на удаление';
        break;
    default:
        echo 'Неизвестный запрос';
        break;
    }
        ?>
