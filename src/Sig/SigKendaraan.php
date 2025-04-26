<?php

namespace Wawans\SismiopDatabase\Sig;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string $no_polisi
 * @property string|null $nm_pemilik
 * @property string|null $thn_kendaraan
 * @property string|null $jns_kendaraan
 * @property string|null $merk_kendaraan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SigKendaraan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SigKendaraan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SigKendaraan query()
 *
 * @mixin \Eloquent
 */
class SigKendaraan extends Model
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
