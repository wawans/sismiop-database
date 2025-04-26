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
 * @property string $kode_area
 * @property string $no_telepon
 * @property string $thn_tagihan
 * @property string $bln_tagihan
 * @property string|null $jml_tagihan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SigTeleponTagihan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SigTeleponTagihan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SigTeleponTagihan query()
 *
 * @mixin \Eloquent
 */
class SigTeleponTagihan extends Model
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
