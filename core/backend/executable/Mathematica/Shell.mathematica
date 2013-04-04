#!/usr/local/bin/MathematicaScript -script

value=ToExpression[
    $ScriptCommandLine[[2]]
];

Export[
    $ScriptCommandLine[[3]], 
    value
];