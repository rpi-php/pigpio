<?php

declare(strict_types=1);

namespace Rpi\Pigpio;

use Serafim\FFILoader\BitDepth;
use Serafim\FFILoader\Library as BaseLibrary;
use Serafim\FFILoader\OperatingSystem;

class Library extends BaseLibrary
{
    private const LIBRARY_LINUX = 'libpigpio.so';

    public function getName(): string
    {
        return 'pigpio';
    }

    public function getVersion(string $library): string
    {
        return '0.0.1';
    }

    public function getHeaders(): string
    {
        return __DIR__ . '/../resources/pigpio.h';
    }

    /**
     * {@inheritDoc}
     */
    public function getOutputDirectory(): string
    {
        return __DIR__ . '/../out';
    }

    public function getLibrary(OperatingSystem $os, BitDepth $bits): ?string
    {
        switch (true) {
            case $os->isLinux():
                return self::LIBRARY_LINUX;
            default:
                return null;
        }
    }
}
