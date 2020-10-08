<?php

/**
 * Class Planes *
 */
abstract class Planes
{
    /**
     * @return mixed
     */
    public function Takeoff()
    {
    }

    /**
     * @return mixed
     */
    public function Landing()
    {
    }
}

/**
 * Class MIG
 */
class MIG extends Planes
{
    public function Attack()
    {
    }
}

/**
 * Class TU154
 */
class TU154 extends Planes
{
}
