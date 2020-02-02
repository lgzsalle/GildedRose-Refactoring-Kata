<?php

namespace App;
use PHPUnit\Framework\TestCase;
class GildedRoseTest extends TestCase {
    public function testImplementations() {
        $items = [
            ItemFactory::basedOn("foo", 2, 5),
            ItemFactory::basedOn('Backstage passes to a TAFKAL80ETC concert', 2,5),
            ItemFactory::basedOn('Sulfuras, Hand of Ragnaros', 2,5),
            ItemFactory::basedOn('Aged Brie', 2,5)
        ];
        $gildedRose = new GildedRose(...$items);
        $gildedRose->updateQuality();
        $this->assertEquals("App\StandardItem", get_class($items[0]));
        $this->assertEquals("App\BackstageItem", get_class($items[1]));
        $this->assertEquals("App\SulfurasItem", get_class($items[2]));
        $this->assertEquals("App\AgedBrieItem", get_class($items[3]));
    }
}
