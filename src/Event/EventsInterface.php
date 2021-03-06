<?php

declare(strict_types=1);

namespace App\Event;

use App\Entity\Event;

interface EventsInterface
{
    public function getLatestEvent(): ?Event;

    /**
     * @return array<int, Event>
     */
    public function getPastEvents(): array;
}
