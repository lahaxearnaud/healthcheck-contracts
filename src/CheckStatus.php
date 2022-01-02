<?php

namespace Alahaxe\HealthCheck\Contracts;

use Symfony\Component\HttpFoundation\Response;

class CheckStatus implements CheckStatusInterface
{
    protected int $httpStatus;

    public function __construct(
        protected string $attributeName,
        protected string $checkerClass,
        protected string $status,
        protected mixed $payload = null,
        ?int $httpStatus = null
    ) {
        if ($httpStatus === null) {
            $this->httpStatus = $status === self::STATUS_OK ? 200 : ($status === self::STATUS_WARNING ? 206 : 503);
        } else {
            $this->httpStatus = $httpStatus;
        }
    }

    /**
     * @return string
     */
    public function getCheckerClass(): string
    {
        return $this->checkerClass;
    }

    /**
     * @return mixed|null
     */
    public function getPayload(): mixed
    {
        return $this->payload;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getHttpStatus(): int
    {
        return $this->httpStatus;
    }

    /**
     * @return string
     */
    public function getAttributeName(): string
    {
        return $this->attributeName;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize():mixed
    {
        return [
            'payload' => $this->payload,
            'status' => $this->status,
        ];
    }
}
