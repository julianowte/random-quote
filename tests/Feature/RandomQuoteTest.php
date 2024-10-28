<?php

use Julianowte\RandomQuotes\RandomQuote;



/*test('example', function () {
    expect(true)->toBeTrue();
});*/

it('should return a json Jane Austen quote', function () {
    $fakeClient = getResponseClient();

    $quoteClass = new RandomQuote($fakeClient);

    $quote = $quoteClass->from('Jane Austen');

    expect($quote)
        ->json()
        ->toHaveCount(3)
        ->author->toBe('Jane Austen')
        ->quote->toBeString();
});
