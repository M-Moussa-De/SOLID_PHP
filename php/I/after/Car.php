<?php

class Car implements IDrivable
{
    public function drive(): string
    {
        return 'driving...';
    }

    public function stop(): string
    {
        return 'stopping...';
    }

    public function getSpeed(): float
    {
        return 118.50;
    }
}
