<?php

/**
 * Class Planes *
 */
abstract class Planes
{
    abstract public function Takeoff();

    abstract public function Landing();
}

/**
 * Class MIG
 */
class MIG extends Planes
{
    public function Takeoff()
    {
        // TODO: Implement Takeoff() method.
    }

    public function Landing()
    {
        // TODO: Implement Landing() method.
    }

    public function Attack()
    {
    }
}

/**
 * Class TU154
 */
class TU154 extends Planes
{
    public function Takeoff()
    {
        // TODO: Implement Takeoff() method.
    }

    public function Landing()
    {
        // TODO: Implement Landing() method.
    }
}
