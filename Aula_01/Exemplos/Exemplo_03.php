<?php 

$nota1 = 8.5;
$nota2 = 7.0;
$nota3 = 9.0;
$media = ($nota1 + $nota2 + $nota3) / 3;
echo "Nota 1: " . $nota1 . "<br>";
echo "Nota 2: " . $nota2 . "<br>";
echo "Nota 3: " . $nota3 . "<br>";
if ($media >= 7.0) {
    echo "Média: " . number_format($media, 2) . " - Aprovado!";
} else {
    echo "Média: " . number_format($media, 2) . " - Reprovado!";
}
?>
