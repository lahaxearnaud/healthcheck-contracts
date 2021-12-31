<?php

namespace Alahaxe\HealthCheckBundle\Contract;

interface ContextProviderInterface
{
    public function getValue():string|array|int|float|\JsonSerializable;
    public function getName():string;
}
