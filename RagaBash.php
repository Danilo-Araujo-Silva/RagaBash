<?php
namespace GarouDan\RagaBash;

use Garoudan\RagaBash\Core\Backend\Model;

class RagaBash
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