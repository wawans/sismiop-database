<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string|null $sppt_terpisah
 * @property string|null $stts_terpisah
 * @property string|null $dhkp_terpisah
 * @property string|null $kelompok_buku
 * @property string|null $tahun_pajak_sppt
 * @property string|null $tahun_pajak_stts
 * @property string|null $nama_kanwil
 * @property string|null $nama_kppbb
 * @property string|null $kota_terbit
 * @property string|null $nama_kepala_kppbb
 * @property string|null $barcode_sppt
 * @property string|null $jns_barcode_sppt
 * @property string|null $barcode_stts
 * @property string|null $jns_barcode_stts
 * @property string|null $sppt_form_baru
 * @property string|null $stts_form_baru
 * @property string|null $sppt_form_lama
 * @property string|null $stts_form_lama
 * @property string|null $surat_himbauan
 * @property string|null $buku_himbauan
 * @property string|null $tunggakan_thn_lalu
 * @property string|null $sppt_pbb_nol
 * @property string|null $teks_kanwil
 * @property string|null $teks_kppbb
 * @property string|null $teks_sppt
 * @property string|null $teks_stts
 * @property string|null $pbb_minimal
 * @property string|null $kakap
 * @property string|null $teks_pratama
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParameterSpptSttsDhkp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParameterSpptSttsDhkp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ParameterSpptSttsDhkp query()
 *
 * @mixin \Eloquent
 */
class ParameterSpptSttsDhkp extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

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
    protected $fillable = [];

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
