<?php

declare(strict_types=1);

namespace App;


final class AgedBrieItem extends Item
{
    public function update(): void
    {
        if ($this->isQualityLessThan(50)) {
            $this->increaseQuality(1);
        }
        $this->decreaseSellIn(1);
        if ($this->isSellInLessThan(0) && $this->isQualityLessThan(50)) {
            $this->increaseQuality(1);
        }
    }
}