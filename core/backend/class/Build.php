<?php
namespace GarouDan\RagaBash;

use GarouDan\RagaBash\Model;

class Build
{
    public static function engine($engine)
    {
        if (
            in_array(
                $engine,
                array(
                    "MatLab",
                    "Maple",
                    "Mathematica",
                    "Octave"
                )
            )
        ) {
            $class = "GarouDan\\RagaBash\\Model\\$engine\\$engine";
            return new $class;
        } else {
            return false;
        }
    }
}