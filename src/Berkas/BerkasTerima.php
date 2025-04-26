<?php

namespace Wawans\SismiopDatabase\Berkas;

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
 * @property string $kd_seksi
 * @property string $thn_agenda_kirim
 * @property string $no_agenda_kirim
 * @property string $kd_seksi_terima
 * @property string|null $tgl_terima
 * @property string|null $nip_penerima_berkas
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BerkasTerima newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BerkasTerima newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BerkasTerima query()
 *
 * @mixin \Eloquent
 */
class BerkasTerima extends Model
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
