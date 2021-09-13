<?php

declare(strict_types=1);

namespace App\DependencyInjection\Compiler;

use App\MessageGenerator\MessageSenderInterface;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class MessageGeneratorPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $container->registerForAutoconfiguration(MessageSenderInterface::class);

        $messageSender = $container->findDefinition(MessageSenderInterface::class);

        $generators = $container->findTaggedServiceIds('app.message_generator');

        foreach ($generators as $id => $configs) {
            $messageSender->addMethodCall('addGenerator', [new Reference($id)]);
        }
    }
}
