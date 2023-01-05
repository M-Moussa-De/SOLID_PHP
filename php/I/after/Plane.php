<?php

class Plane implements IFlyable
{
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
