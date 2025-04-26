<?php

namespace Wawans\SismiopDatabase\His;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string $no_bng
 * @property string $his_indeks_nilai_individu
 * @property string|null $his_no_formulir_individu
 * @property string|null $his_nilai_individu
 * @property string|null $his_tgl_penilaian_individu
 * @property string|null $his_nip_penilai_individu
 * @property string|null $his_tgl_perekaman_individu
 * @property string|null $his_nip_perekam_individu
 * @property string|null $sys_nc00016$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisNilaiIndividu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisNilaiIndividu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HisNilaiIndividu query()
 *
 * @mixin \Eloquent
 */
class HisNilaiIndividu extends Model
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
        'no_bng',
        'his_indeks_nilai_individu',
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
        'no_bng',
        'his_indeks_nilai_individu',
        'his_no_formulir_individu',
        'his_nilai_individu',
        'his_tgl_penilaian_individu',
        'his_nip_penilai_individu',
        'his_tgl_perekaman_individu',
        'his_nip_perekam_individu',
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
