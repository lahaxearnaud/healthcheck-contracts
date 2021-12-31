<?php

namespace Alahaxe\HealthCheck\Contracts;

interface CheckInterface
{
    public function check():CheckStatusInterface;
}
