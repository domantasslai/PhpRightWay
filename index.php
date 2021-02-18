<?php

// Constants

define('STATUS_PAID', 'paid');

if(defined('STATUS_PAID122')){
    echo 'Defined';
} else {
    echo 'Not Defined';
}

echo '<br>';

const STATUS_NOT_PAID = 'not payed';

echo STATUS_NOT_PAID;
echo '<br>';
echo STATUS_PAID;