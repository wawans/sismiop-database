<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $no_spmkp
 * @property string|null $tgl_spmkp
 * @property string|null $thn_pelayanan
 * @property string|null $bundel_pelayanan
 * @property string|null $no_urut_pelayanan
 * @property string|null $kd_propinsi_pemohon
 * @property string|null $kd_dati2_pemohon
 * @property string|null $kd_kecamatan_pemohon
 * @property string|null $kd_kelurahan_pemohon
 * @property string|null $kd_blok_pemohon
 * @property string|null $no_urut_pemohon
 * @property string|null $kd_jns_op_pemohon
 * @property string|null $no_rek_wp
 * @property string|null $nm_bank_wp
 * @property string|null $tgl_rekam_spmkp
 * @property string|null $nip_rekam_spmkp
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Spmkp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Spmkp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Spmkp query()
 *
 * @mixin \Eloquent
 */
class Spmkp extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_kanwil',
        'kd_kppbb',
        'no_spmkp',
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
        'kd_kanwil',
        'kd_kppbb',
        'no_spmkp',
        'tgl_spmkp',
        'thn_pelayanan',
        'bundel_pelayanan',
        'no_urut_pelayanan',
        'kd_propinsi_pemohon',
        'kd_dati2_pemohon',
        'kd_kecamatan_pemohon',
        'kd_kelurahan_pemohon',
        'kd_blok_pemohon',
        'no_urut_pemohon',
        'kd_jns_op_pemohon',
        'no_rek_wp',
        'nm_bank_wp',
        'tgl_rekam_spmkp',
        'nip_rekam_spmkp',
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
