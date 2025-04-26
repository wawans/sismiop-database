<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $mfnpwp_comp
 * @property string $mfkpp_comp
 * @property string $mfcab_comp
 * @property string $tahun_porto
 * @property string|null $nm_kap
 * @property string|null $kd_stat_fin_rep
 * @property string|null $kd_pendapat
 * @property string|null $peredaran_usaha
 * @property string|null $laba_bruto
 * @property string|null $pengurang_bruto
 * @property string|null $hasilan_net_dlm
 * @property string|null $hasil_net_luar
 * @property string|null $hasil_net
 * @property string|null $kompensasi_rugi
 * @property string|null $pkp
 * @property string|null $pph_terutang
 * @property string|null $kredit_pajak
 * @property string|null $pph_kurang_byr
 * @property string|null $pajak_masukan
 * @property string|null $pajak_keluaran
 * @property string|null $krg_lbh_bayar
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CompPorto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CompPorto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CompPorto query()
 *
 * @mixin \Eloquent
 */
class CompPorto extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'mfnpwp_comp',
        'mfkpp_comp',
        'mfcab_comp',
        'tahun_porto',
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
        'mfnpwp_comp',
        'mfkpp_comp',
        'mfcab_comp',
        'tahun_porto',
        'nm_kap',
        'kd_stat_fin_rep',
        'kd_pendapat',
        'peredaran_usaha',
        'laba_bruto',
        'pengurang_bruto',
        'hasilan_net_dlm',
        'hasil_net_luar',
        'hasil_net',
        'kompensasi_rugi',
        'pkp',
        'pph_terutang',
        'kredit_pajak',
        'pph_kurang_byr',
        'pajak_masukan',
        'pajak_keluaran',
        'krg_lbh_bayar',
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
