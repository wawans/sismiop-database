<?php

namespace Wawans\SismiopDatabase\Concerns;

use Wawans\SismiopDatabase\Ref\RefKelurahan;

trait WithRefKelurahan
{
    public function refKelurahan()
    {
        return $this->belongsTo(RefKelurahan::class,
            ['kd_propinsi', 'kd_dati2', 'kd_kecamatan', 'kd_kelurahan'],
            ['kd_propinsi', 'kd_dati2', 'kd_kecamatan', 'kd_kelurahan']);
    }
}
