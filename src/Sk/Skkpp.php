<?php

namespace Wawans\SismiopDatabase\Sk;

use Wawans\SismiopDatabase\Model;

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
 * @property string|null $kd_bank_tunggal
 * @property string|null $no_sk_skkpp
 * @property string|null $tgl_sk_skkpp
 * @property string|null $jns_keputusan_skkpp
 * @property string|null $kpkn
 * @property string|null $nilai_skkpp
 * @property string|null $tgl_rekam_skkp
 * @property string|null $nip_rekam_skkp
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skkpp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skkpp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skkpp query()
 *
 * @mixin \Eloquent
 */
class Skkpp extends Model
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
        'kd_bank_tunggal',
        'no_sk_skkpp',
        'tgl_sk_skkpp',
        'jns_keputusan_skkpp',
        'kpkn',
        'nilai_skkpp',
        'tgl_rekam_skkp',
        'nip_rekam_skkp',
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
