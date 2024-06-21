<?php

namespace Teodoriu\Whatsapp\Messages\Components\Parameters;

use Teodoriu\Whatsapp\Messages\Components\DateTime as ComponentsDateTime;

class DateTime extends ComponentsDateTime
{
    public function toArray()
    {
        return [
            'type' => 'date_time',
            'date_time' => parent::toArray(),
        ];
    }
}
