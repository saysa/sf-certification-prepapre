<?php

namespace App\MessageGenerator;

class MessageGeneratorEn implements MessageGeneratorInterface
{
    public function generate(): string
    {
        $sentences = [
            'Hello in english',
            'Where is Brian',
            'Symfony for life',
            'Compiler Pass is great',
        ];

        return $sentences[rand(0, count($sentences) - 1)];
    }

    public function supports(string $lang): bool
    {
        return 'en' === $lang;
    }
}
