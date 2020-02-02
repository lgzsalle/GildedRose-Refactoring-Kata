<?php

namespace App;

abstract class Item
{

    public string $name;
    public int $sell_in;
    public int $quality;

    function __construct(string $name, int $sell_in, int $quality)
    {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    abstract function update(): void;
    protected function isQualityLessThan(int $value): bool
    {
        return $this->quality < $value;
    }

    protected function increaseQuality(int $value): void
    {
        $this->quality += $value;
    }

    protected function decreaseSellIn(int $value): void
    {
        $this->sell_in -= $value;
    }

    protected function isSellInLessThan(int $days): bool
    {
        return $this->sell_in < $days;
    }

    protected function resetSellIn(): void
    {
        $this->sell_in = 0;
    }
    protected function decreaseQuality(int $value): void {
        $this->sell_in -= $value;
    }
    public function __toString()
    {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }
}

