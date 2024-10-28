<?php

use Julianowte\RandomQuotes\RandomQuote;



/*test('example', function () {
    expect(true)->toBeTrue();
});*/

it('should return a Stephen Hawking quote', function () {
    $fakeClient = getResponseClient();

    $quoteClass = new RandomQuote($fakeClient);

    $quote = $quoteClass->from('Stephen Hawking');

    expect($quote)->toBe('Be curious by Stephen Hawking');
});
