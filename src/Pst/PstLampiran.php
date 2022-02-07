<?php

namespace Wawans\SismiopDatabase\Pst;

use Wawans\SismiopDatabase\Model;

class PstLampiran extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = ['kd_kanwil', 'kd_kppbb', 'thn_pelayanan', 'bundel_pelayanan', 'no_urut_pelayanan'];

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'kd_kanwil',
        'kd_kppbb',
        'thn_pelayanan',
        'bundel_pelayanan',
        'no_urut_pelayanan',
        'l_permohonan',
        'l_surat_kuasa',
        'l_ktp_wp',
        'l_sertifikat_tanah',
        'l_sppt',
        'l_imb',
        'l_akte_jual_beli',
        'l_sk_pensiun',
        'l_sppt_stts',
        'l_stts',
        'l_sk_pengurangan',
        'l_sk_keberatan',
        'l_skkp_pbb',
        'l_spmkp_pbb',
        'l_lain_lain',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [];

    public function pstPermohonan()
    {
        return $this->belongsTo(PstPermohonan::class, $this->primaryKey, $this->primaryKey);
    }
}
