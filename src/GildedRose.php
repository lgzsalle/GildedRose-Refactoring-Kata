<?php

namespace App;

final class GildedRose
{

    private $items = [];

    public function __construct(Item ...$items)
    {
        $this->items = $items;
    }

    public function updateQuality()
    {
        foreach ($this->items as $item) {
            $item->update();
        }
    }
}

