<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $thn_pelayanan
 * @property string $bundel_pelayanan
 * @property string $no_urut_pelayanan
 * @property string $kd_propinsi_pemohon
 * @property string $kd_dati2_pemohon
 * @property string $kd_kecamatan_pemohon
 * @property string $kd_kelurahan_pemohon
 * @property string $kd_blok_pemohon
 * @property string $no_urut_pemohon
 * @property string $kd_jns_op_pemohon
 * @property string $no_urut_penerima_kompensasi
 * @property string|null $kd_propinsi_kompensasi
 * @property string|null $kd_dati2_kompensasi
 * @property string|null $kd_kecamatan_kompensasi
 * @property string|null $kd_kelurahan_kompensasi
 * @property string|null $kd_blok_kompensasi
 * @property string|null $no_urut_kompensasi
 * @property string|null $kd_jns_op_kompensasi
 * @property string|null $thn_pajak_kompensasi
 * @property string|null $nilai_yang_dikompensasi
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenerimaKompensasi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenerimaKompensasi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PenerimaKompensasi query()
 *
 * @mixin \Eloquent
 */
class PenerimaKompensasi extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_kanwil',
        'kd_kppbb',
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
        'no_urut_penerima_kompensasi',
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
        'no_urut_penerima_kompensasi',
        'kd_propinsi_kompensasi',
        'kd_dati2_kompensasi',
        'kd_kecamatan_kompensasi',
        'kd_kelurahan_kompensasi',
        'kd_blok_kompensasi',
        'no_urut_kompensasi',
        'kd_jns_op_kompensasi',
        'thn_pajak_kompensasi',
        'nilai_yang_dikompensasi',
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
