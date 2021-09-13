<?php

declare(strict_types=1);

namespace App\DependencyInjection;

use App\MessageGenerator\MessageGeneratorInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class MessageGeneratorExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $container->registerForAutoconfiguration(MessageGeneratorInterface::class)->addTag('app.message_generator');
    }
}
