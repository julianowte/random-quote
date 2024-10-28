<?php

namespace Julianowte\RandomQuotes;

use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class RandomQuote
{
    const BASE_ENDPOINT = 'http://api.quotable.io/random/';

    public function __construct(
        private Client $client = new Client
    ) {}

    public function from(string $author): string
    {
        try {
            $response = $this->client->get(self::BASE_ENDPOINT, [
                'query' => [
                    'author'  => str_replace(' ', '_', $author)
                ]
            ])->getBody()->getContents();

            $quote = json_decode($response, true);

            return json_encode([
                "author" => $author,
                "quote" => $quote['content'],
                "error" => []
            ]);
        } catch (RequestException $e) {
            $error['error'] = $e->getMessage();
            $error['request'] = Psr7\Message::toString($e->getRequest());
            if ($e->hasResponse()) {
                $error['response'] = Psr7\Message::toString($e->getResponse());
            }
            http_response_code(400);
            return json_encode([
                "author" => "",
                "quote" => "",
                "error" => $error
            ]);
        }
    }
}
