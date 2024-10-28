EXAMPLE OF CODE

Install with Composer
composer require julianowte/random-quote


require('vendor/autoload.php');

use Julianowte\RandomQuotes\RandomQuote;

$quoteClass = new RandomQuote();

//retorn json with random quote
echo $quoteClass->from('Jane Austen');
