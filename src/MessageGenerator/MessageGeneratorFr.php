<?php

namespace App\MessageGenerator;

class MessageGeneratorFr implements MessageGeneratorInterface
{
    public function generate(): string
    {
        $sentences = [
            'Bonjour, tu vas bien ?',
            'Symfony est la vie',
            'Message de bienvenue',
        ];

        return $sentences[rand(0, count($sentences) - 1)];
    }

    public function supports(string $lang): bool
    {
        return 'fr' === $lang;
    }
}
