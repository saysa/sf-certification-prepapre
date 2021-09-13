<?php

declare(strict_types=1);

namespace App\MessageGenerator;

interface MessageGeneratorInterface
{
    public function generate(): array;
    public function configureOptions(): void;
}
