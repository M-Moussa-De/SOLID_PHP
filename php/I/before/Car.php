<?php

class Car implements IVehicle
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

    public function fly(): string
    {
        return 'can not fly';
    }

    public function land(): string
    {
        return 'does not land';
    }

    public function takeOff(): string
    {
        return 'can not take off';
    }
}
