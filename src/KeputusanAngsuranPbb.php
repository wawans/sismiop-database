<?php

namespace Wawans\SismiopDatabase;

use Wawans\SismiopDatabase\Model;

class KeputusanAngsuranPbb extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'thn_pajak_sppt',
    ];

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'int';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'thn_pajak_sppt',
        'no_sk_angsuran',
        'tgl_sk_angsuran',
        'nm_pemohon',
        'no_srt_permohonan',
        'tgl_srt_permohonan',
        'jns_ketetapan',
        'no_srt_ketetapan',
        'pbb_terutang',
        'no_tanda_terima',
        'tgl_tanda_terima',
        'no_lap_penelitian',
        'tgl_lap_penelitian',
        'tgl_rekam_sk_angsuran',
        'nip_perekam_sk_angsuran',
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
}
