<?php

class Plane implements IVehicle
{
    public function drive(): string
    {
        return 'no driving...';
    }

    public function stop(): string
    {
        return 'no stopping...';
    }

    public function getSpeed(): float
    {
        return 907;
    }

    public function fly(): string
    {
        return 'flying...';
    }

    public function land(): string
    {
        return 'landing...';
    }

    public function takeOff(): string
    {
        return 'taking off';
    }
}
