<?php

namespace App\MessageGenerator;

use Symfony\Component\OptionsResolver\OptionsResolver;

class MessageGenerator implements MessageGeneratorInterface
{
    private array $options = [];
    private OptionsResolver $resolver;

    public function __construct(array $options = [])
    {
        $this->resolver = new OptionsResolver();
        $this->configureOptions();

        $this->options = $this->resolver->resolve($options);
    }

    public function generate(): array
    {
        return $this->options;
    }

    public function configureOptions(): void
    {
        $this->resolver->setDefaults([
            'lang' => 'en',
            'valid' => true,
        ]);
    }
}
