<?php

namespace Wawans\SismiopDatabase\Concerns;

use Wawans\SismiopDatabase\Dat\DatObjekPajak;

trait WithDatObjekPajak
{
    public function datObjekPajak()
    {
        return $this->belongsTo(DatObjekPajak::class,
            ['kd_propinsi','kd_dati2','kd_kecamatan','kd_kelurahan','kd_blok','no_urut','kd_jns_op'],
            ['kd_propinsi','kd_dati2','kd_kecamatan','kd_kelurahan','kd_blok','no_urut','kd_jns_op']);
    }
}
