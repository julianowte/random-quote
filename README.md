README


require('vendor/autoload.php');

use Julianowte\RandomQuotes\RandomQuote;

$quoteClass = new RandomQuote();

//retorn json with random quote
echo $quoteClass->from('Jane Austen');
