<?php

namespace App\MessageGenerator;

interface MessageSenderInterface
{
    public function send(string $lang): string;

    public function addGenerator(MessageGeneratorInterface $generator): void;
}
