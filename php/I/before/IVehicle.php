<?php

interface IVehicle
{
    public function drive(): string;
    public function stop(): string;
    public function getSpeed(): float;
    public function fly(): string;
    public function land(): string;
    public function takeOff(): string;
}
