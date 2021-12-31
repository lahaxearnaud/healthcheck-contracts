<?php

namespace Alahaxe\HealthCheckBundle\Contract;

interface ContextProviderInterface
{
    /**
     * @return string|array<mixed>|int|float|\JsonSerializable
     */
    public function getValue():string|array|int|float|\JsonSerializable;
    public function getName():string;
}
