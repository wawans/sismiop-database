<?php

namespace Wawans\SismiopDatabase\Pst;

use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Pst\PstLampiran
 *
 * @property string $KD_KANWIL
 * @property string $KD_KPPBB
 * @property string $THN_PELAYANAN
 * @property string $BUNDEL_PELAYANAN
 * @property string $NO_URUT_PELAYANAN
 * @property bool|null $L_PERMOHONAN
 * @property bool|null $L_SURAT_KUASA
 * @property bool|null $L_KTP_WP
 * @property bool|null $L_SERTIFIKAT_TANAH
 * @property bool|null $L_SPPT
 * @property bool|null $L_IMB
 * @property bool|null $L_AKTE_JUAL_BELI
 * @property bool|null $L_SK_PENSIUN
 * @property bool|null $L_SPPT_STTS
 * @property bool|null $L_STTS
 * @property bool|null $L_SK_PENGURANGAN
 * @property bool|null $L_SK_KEBERATAN
 * @property bool|null $L_SKKP_PBB
 * @property bool|null $L_SPMKP_PBB
 * @property bool|null $L_LAIN_LAIN
 * @property-read \Wawans\SismiopDatabase\Pst\PstPermohonan $pstPermohonan
 * @method static \Illuminate\Database\Eloquent\Builder|PstLampiran newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PstLampiran newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PstLampiran query()
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
