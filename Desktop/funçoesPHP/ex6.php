<?php

function celsiusParaFahrenheit($celsius) {
    $fahrenheit = ($celsius * 9/5) + 32;
    return $fahrenheit;
}


$temperatura1 = readline("Digite uma temperatura: ");    
$temperatura2 = readline("Digite uma temperatura: ");  
$temperatura3 = readline("Digite uma temperatura: ");   

echo "A temperatura digitada em celsius e passada para fahrenheit é de: " . celsiusParaFahrenheit($temperatura1) . "°F" . PHP_EOL;
echo "A temperatura digitada em celsius e passada para fahrenheit é de: " . celsiusParaFahrenheit($temperatura2) . "°F" . PHP_EOL;
echo "A temperatura digitada em celsius e passada para fahrenheit é de: " . celsiusParaFahrenheit($temperatura3) . "°F" . PHP_EOL;