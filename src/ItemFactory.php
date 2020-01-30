<?php

declare(strict_types=1);

namespace App;


final class ItemFactory
{
    public static function basedOn(string $name, int $days, int $quality) {
        switch ($name) {
            case 'Aged Brie':
                return new AgedBrieItem($name, $days, $quality);
            case 'Backstage passes to a TAFKAL80ETC concert':
                return new BackstageItem($name, $days, $quality);
            case 'Sulfuras, Hand of Ragnaros':
                return new SulfurasItem($name, $days, $quality);
            default:
                return new StandardItem($name, $days, $quality);
        }
    }
}