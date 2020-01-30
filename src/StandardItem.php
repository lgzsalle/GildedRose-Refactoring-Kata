<?php

declare(strict_types=1);

namespace App;


final class StandardItem extends Item
{

    function update(): void
    {
        $this->decreaseSellIn(1);
        $this->decreaseQuality(1);

        if ($this->isSellInLessThan(0)) {
            $this->decreaseQuality(1);
        }
    }
}