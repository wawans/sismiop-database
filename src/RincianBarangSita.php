<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $no_ba_sita
 * @property string $no_urut_barang_sita
 * @property string|null $jns_barang_sita
 * @property string|null $nm_barang_sita
 * @property string|null $al_barang_sita
 * @property string|null $no_sertifikat
 * @property string|null $tgl_sertifikat
 * @property string|null $taksiran_harga_barang_sita
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RincianBarangSita newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RincianBarangSita newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RincianBarangSita query()
 *
 * @mixin \Eloquent
 */
class RincianBarangSita extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_kanwil',
        'kd_kppbb',
        'no_ba_sita',
        'no_urut_barang_sita',
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
        'no_ba_sita',
        'no_urut_barang_sita',
        'jns_barang_sita',
        'nm_barang_sita',
        'al_barang_sita',
        'no_sertifikat',
        'tgl_sertifikat',
        'taksiran_harga_barang_sita',
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
