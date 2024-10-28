EXAMPLE OF CODE


Install with Composer

composer require julianowte/random-quote

in your code

require('vendor/autoload.php');

use Julianowte\RandomQuotes\RandomQuote;

$quoteClass = new RandomQuote();

//return json with random quote

echo $quoteClass->from('Jane Austen');
