<?php

namespace Wawans\SismiopDatabase\Pst;

use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Pst\PstLampiran
 *
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $thn_pelayanan
 * @property string $bundel_pelayanan
 * @property string $no_urut_pelayanan
 * @property string|null $l_permohonan
 * @property string|null $l_surat_kuasa
 * @property string|null $l_ktp_wp
 * @property string|null $l_sertifikat_tanah
 * @property string|null $l_sppt
 * @property string|null $l_imb
 * @property string|null $l_akte_jual_beli
 * @property string|null $l_sk_pensiun
 * @property string|null $l_sppt_stts
 * @property string|null $l_stts
 * @property string|null $l_sk_pengurangan
 * @property string|null $l_sk_keberatan
 * @property string|null $l_skkp_pbb
 * @property string|null $l_spmkp_pbb
 * @property string|null $l_lain_lain
 * @property-read \Wawans\SismiopDatabase\Pst\PstPermohonan|null $pstPermohonan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PstLampiran newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PstLampiran newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PstLampiran query()
 *
 * @mixin \Eloquent
 */
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
