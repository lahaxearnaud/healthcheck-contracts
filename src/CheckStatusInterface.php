<?php

namespace Alahaxe\HealthCheck\Contracts;

interface CheckStatusInterface extends \JsonSerializable
{
    public const STATUS_OK = 'ok';
    public const STATUS_WARNING = 'warning';
    public const STATUS_INCIDENT = 'incident';

    public function getCheckerClass(): string;
    public function getPayload(): mixed;
    public function getStatus(): string;
    public function getHttpStatus(): int;
    public function getAttributeName(): string;
}
