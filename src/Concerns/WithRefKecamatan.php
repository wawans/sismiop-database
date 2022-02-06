<?php

namespace Wawans\SismiopDatabase\Concerns;

use Wawans\SismiopDatabase\Ref\RefKecamatan;

trait WithRefKecamatan
{
    public function refKecamatan()
    {
        return $this->belongsTo(RefKecamatan::class,
            ['kd_propinsi', 'kd_dati2', 'kd_kecamatan'],
            ['kd_propinsi', 'kd_dati2', 'kd_kecamatan']);
    }
}
