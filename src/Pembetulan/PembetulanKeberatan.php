<?php

namespace Wawans\SismiopDatabase\Pembetulan;

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
 * @property string|null $thn_pelayanan_keb_kbrt
 * @property string|null $bundel_pelayanan_kep_kbrt
 * @property string|null $no_urut_pelayanan_kep_kbrt
 * @property string|null $jns_sk
 * @property string|null $no_sk
 * @property string|null $kd_kls_tanah
 * @property string|null $thn_awal_kls_tanah
 * @property string|null $kd_kls_bng
 * @property string|null $thn_awal_kls_bng
 * @property string|null $luas_bumi_pembetulan
 * @property string|null $luas_bng_pembetulan
 * @property string|null $njop_bumi_pembetulan
 * @property string|null $njop_bng_pembetulan
 * @property string|null $pbb_pembetulan
 * @property string|null $tgl_cetak_pembetulan
 * @property string|null $nip_pencetak_pembetulan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembetulanKeberatan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembetulanKeberatan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembetulanKeberatan query()
 *
 * @mixin \Eloquent
 */
class PembetulanKeberatan extends Model
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
        'thn_pelayanan_keb_kbrt',
        'bundel_pelayanan_kep_kbrt',
        'no_urut_pelayanan_kep_kbrt',
        'jns_sk',
        'no_sk',
        'kd_kls_tanah',
        'thn_awal_kls_tanah',
        'kd_kls_bng',
        'thn_awal_kls_bng',
        'luas_bumi_pembetulan',
        'luas_bng_pembetulan',
        'njop_bumi_pembetulan',
        'njop_bng_pembetulan',
        'pbb_pembetulan',
        'tgl_cetak_pembetulan',
        'nip_pencetak_pembetulan',
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
