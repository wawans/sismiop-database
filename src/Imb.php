<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $no_imb
 * @property string|null $kd_jns_imb
 * @property string|null $kd_propinsi
 * @property string|null $kd_dati2
 * @property string|null $kd_kecamatan
 * @property string|null $kd_kelurahan
 * @property string|null $kd_blok
 * @property string|null $no_urut
 * @property string|null $kd_jns_op
 * @property string|null $no_bng
 * @property string|null $tgl_imb
 * @property string|null $nama_imb
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Imb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Imb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Imb query()
 *
 * @mixin \Eloquent
 */
class Imb extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'no_imb';

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
        'no_imb',
        'kd_jns_imb',
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'no_bng',
        'tgl_imb',
        'nama_imb',
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
