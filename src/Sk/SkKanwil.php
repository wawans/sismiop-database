<?php

namespace Wawans\SismiopDatabase\Sk;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $thn_sk_kanwil
 * @property string|null $no_sk_kanwil
 * @property string|null $tgl_sk_kanwil
 * @property string|null $tgl_cetak_sk_kanwil
 * @property string|null $nip_pencetak_sk_kanwil
 * @property string|null $sys_nc00008$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkKanwil newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkKanwil newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkKanwil query()
 *
 * @mixin \Eloquent
 */
class SkKanwil extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'thn_sk_kanwil',
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
        'kd_propinsi',
        'kd_dati2',
        'thn_sk_kanwil',
        'no_sk_kanwil',
        'tgl_sk_kanwil',
        'tgl_cetak_sk_kanwil',
        'nip_pencetak_sk_kanwil',
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
