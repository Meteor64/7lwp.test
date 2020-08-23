<?php


trait Loggable
{
    public function logg()
    {
        echo "logged data";
    }
}

class Sample{
    use Loggable;
}
(new Sample())->logg();