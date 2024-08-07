<?php
function getPrices() {
    $now = new DateTime();
    $dayOfWeek = $now->format('w');
    $time = $now->format('H:i:s');
    $prices = [];
    if ($dayOfWeek >= 3 && $dayOfWeek < 6) { 
        if ($dayOfWeek == 5 && $time > '23:59:59') {
            return null; 
        }
        $prices = [
            'Standart' => ['price' => 4900, 'old_price' => 27700],
            'Business' => ['price' => 9900, 'old_price' => 46300],
            'Vip' => ['price' => 19900, 'old_price' => 66400],
            'Premium' => ['price' => 29900, 'old_price' => 99700],
        ];
    } else { 
        if ($dayOfWeek == 0 && $time < '23:59:59') {
            return null; 
        }
        $prices = [
            'Standart' => ['price' => 9900, 'old_price' => 37700],
            'Business' => ['price' => 14900, 'old_price' => 56300],
            'Vip' => ['price' => 29900, 'old_price' => 76400],
            'Premium' => ['price' => 39900, 'old_price' => 119700],
        ];
    }
    return $prices;
}
$prices = getPrices();
if ($prices) {
    foreach ($prices as $type => $priceInfo) {
        echo "{$type}: Основная цена - {$priceInfo['price']} ; Зачеркнутая цена - {$priceInfo['old_price']}<br>";
    }
} else {
    echo "Время не попадает в заданный диапазон.";
}
?>
