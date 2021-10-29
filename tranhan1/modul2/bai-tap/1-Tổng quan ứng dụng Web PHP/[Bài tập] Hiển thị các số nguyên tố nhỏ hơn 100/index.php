<?php
function so_nguyen_to($n): bool
{
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "Các số nguyên tố nhỏ hơn 100 là: <br>";
for ($i = 0; $i < 100; $i++) {
    if (so_nguyen_to($i)) {
        echo($i . " ");
    }
}