<?php

declare(strict_types=1);

namespace GildedRose;

final class GildedRose
{
    /**
     * @param Item[] $items
     */
    public function __construct(private array $items) { }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {
            $this->updateItem($item);
        }
    }

    private function updateItem(Item $item): void
    {
        switch ($item->name) {
            case 'Aged Brie':
                $this->changeQuality($item, 1);
                break;
            case 'Backstage passes to a TAFKAL80ETC concert':
                if ($item->quality < 50) {
                    $this->changeQuality($item, 1);
                    if ($item->sellIn < 11) {
                        $this->changeQuality($item, 1);
                    }
                    if ($item->sellIn < 6) {
                        $this->changeQuality($item, 1);
                    }
                }
                break;
            case 'Sulfuras, Hand of Ragnaros':
                break;
            default:
                $this->changeQuality($item, -1);
                break;
        }
        $item->sellIn -= ($item->name === 'Sulfuras, Hand of Ragnaros') ? 0 : 1;

        if ($item->sellIn < 0) {
            switch ($item->name) {
                case 'Aged Brie':
                    $this->changeQuality($item, 1);
                    break;
                case 'Backstage passes to a TAFKAL80ETC concert':
                    $item->quality = 0;
                    break;
                case 'Sulfuras, Hand of Ragnaros':
                    break;
                default:
                    $this->changeQuality($item, -1);
                    break;
            }
        }
    }
    private function changeQuality(Item $item, int $change): void
    {
        $item->quality += $change;
        if ($item->quality > 50) {
            $item->quality = 50;
        } elseif ($item->quality < 0) {
            $item->quality = 0;
        }
    }
}