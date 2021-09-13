<?php

declare(strict_types=1);

namespace App\MessageGenerator;

interface MessageGeneratorInterface
{
    public function generate(): string;

    public function supports(string $lang): bool;
}
