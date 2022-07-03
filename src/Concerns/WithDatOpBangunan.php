<?php

namespace Wawans\SismiopDatabase\Concerns;

use Wawans\SismiopDatabase\Dat\DatOpBangunan;

trait WithDatOpBangunan
{
    public function datOpBangunan()
    {
        return $this->belongsTo(DatOpBangunan::class,
            ['kd_propinsi','kd_dati2','kd_kecamatan','kd_kelurahan','kd_blok','no_urut','kd_jns_op','no_bng'],
            ['kd_propinsi','kd_dati2','kd_kecamatan','kd_kelurahan','kd_blok','no_urut','kd_jns_op','no_bng']);
    }
}
