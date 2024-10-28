<?php

require('../vendor/autoload.php');

use Julianowte\RandomQuotes\RandomQuote;

$quoteClass = new RandomQuote();

echo $quoteClass->from('Jane Austen');
