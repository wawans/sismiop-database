<?php

namespace Wawans\SismiopDatabase\Concerns;

use Wawans\SismiopDatabase\Ref\RefPropinsi;

trait WithRefPropinsi
{
    public function refPropinsi()
    {
        return $this->belongsTo(RefPropinsi::class,'kd_propinsi','kd_propinsi');
    }
}
