EXAMPLE OF CODE

Random phrase generator code from famous American authors. Based on the http://api.quotable.io API.


Install with Composer

composer require julianowte/random-quote

in your code

require('vendor/autoload.php');

use Julianowte\RandomQuotes\RandomQuote;

$quoteClass = new RandomQuote();

//return json with random quote

echo $quoteClass->from('Jane Austen');
