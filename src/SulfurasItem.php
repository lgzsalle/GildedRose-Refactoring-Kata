<?php

declare(strict_types=1);

namespace App;


final class SulfurasItem extends Item
{

    function update(): void
    {
        if ($this->isSellInLessThan( 0)) {
            $this->resetSellIn();
        }
    }
}