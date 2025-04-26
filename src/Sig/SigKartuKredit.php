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
 * @property string $no_ktp
 * @property string $no_kartu_kredit
 * @property string|null $nm_kartu_kredit
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SigKartuKredit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SigKartuKredit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SigKartuKredit query()
 *
 * @mixin \Eloquent
 */
class SigKartuKredit extends Model
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
