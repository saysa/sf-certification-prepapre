<?php

declare(strict_types=1);

namespace App\MessageGenerator;

class MessageSender implements MessageSenderInterface
{
    private array $generators = [];

    public function send(string $lang): string
    {
        $message = '';

        /** @var MessageGeneratorInterface $generator */
        foreach ($this->generators as $generator) {
            if ($generator->supports($lang)) {
                $message = $generator->generate();
            }
        }

        return $message;
    }

    public function addGenerator(MessageGeneratorInterface $generator): void
    {
        $this->generators[] = $generator;
    }
}
