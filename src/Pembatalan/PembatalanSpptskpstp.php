<?php

namespace Wawans\SismiopDatabase\Pembatalan;

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
 * @property string|null $thn_pembatalan
 * @property string|null $jns_sk
 * @property string|null $no_sk
 * @property string|null $alasan_pembatalan
 * @property string|null $status_pembatalan
 * @property string|null $sys_nc00018$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembatalanSpptskpstp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembatalanSpptskpstp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembatalanSpptskpstp query()
 *
 * @mixin \Eloquent
 */
class PembatalanSpptskpstp extends Model
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
        'thn_pembatalan',
        'jns_sk',
        'no_sk',
        'alasan_pembatalan',
        'status_pembatalan',
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
