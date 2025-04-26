<?php

namespace Wawans\SismiopDatabase\Log;

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
 * @property string $log_tahun_pajak
 * @property string|null $kd_jns_pelayanan
 * @property string|null $log_sppt
 * @property string|null $log_stts
 * @property string|null $log_dhkp
 * @property string|null $log_sk
 * @property string|null $log_status
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogKeluaranPst newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogKeluaranPst newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogKeluaranPst query()
 *
 * @mixin \Eloquent
 */
class LogKeluaranPst extends Model
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
        'log_tahun_pajak',
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
        'log_tahun_pajak',
        'kd_jns_pelayanan',
        'log_sppt',
        'log_stts',
        'log_dhkp',
        'log_sk',
        'log_status',
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
