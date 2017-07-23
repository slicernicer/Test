<?php

namespace Emil\Vildt1;

use Exception;

class Api
{
    private $date;

    public function __construct()
    {
        $this->date = date('l');
        //new DateTime()->format('l');
    }

    public function when(): string
    {
        return $this->date;
    }

    public function setDate($date): void
    {
        if (!is_string($date)) {
            throw new Exception('This is not allowed!!!');
        }

        $this->date = $date;
    }

    public function getSevenDays(): string
    {
        $output = '';
        for ($i=0; $i<7; $i++) {
            $oneDay = 60 * 60 * 24;
            $dayString = date('l', time() + $oneDay *$i);
            $this->setDate($dayString);
            $output .= $this->when() . "\n";
        }

        return $output;
    }
}
