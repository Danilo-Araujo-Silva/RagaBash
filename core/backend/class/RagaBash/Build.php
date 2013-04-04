<?php
namespace RagaBash;

use RagaBash\Model;

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
            $class = "Model\\$engine\\$engine";
            return new $class;
        } else {
            return false;
        }
    }
}