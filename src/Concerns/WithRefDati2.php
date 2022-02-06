<?php

namespace Wawans\SismiopDatabase\Concerns;

use Wawans\SismiopDatabase\Ref\RefDati2;

trait WithRefDati2
{
    public function refDati2()
    {
        return $this->belongsTo(RefDati2::class,
            ['kd_propinsi', 'kd_dati2'],
            ['kd_propinsi', 'kd_dati2']);
    }
}
