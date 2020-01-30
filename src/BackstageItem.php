<?php

declare(strict_types=1);

namespace App;


final class BackstageItem extends Item
{

    function update(): void
    {
        if ($this->isQualityLessThan(50)) {
            $this->increaseQuality(1);
            if ($this->isSellInLessThan(11) && $this->isQualityLessThan(50)) {
                $this->increaseQuality(1);
            }
            if ($this->isSellInLessThan(6) && $this->isQualityLessThan(50)) {
                $this->increaseQuality(1);
            }
        }
        $this->decreaseSellIn(1);
    }
}