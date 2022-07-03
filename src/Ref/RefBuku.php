<?php

namespace Wawans\SismiopDatabase\Ref;

use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Ref\RefBuku
 *
 * @property string $THN_AWAL
 * @property string $THN_AKHIR
 * @property string $KD_BUKU
 * @property int $NILAI_MIN_BUKU
 * @property int $NILAI_MAX_BUKU
 * @method static \Illuminate\Database\Eloquent\Builder|RefBuku newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefBuku newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RefBuku query()
 * @mixin \Eloquent
 */
class RefBuku extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = ['thn_awal', 'thn_akhir', 'kd_buku'];

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
    protected $fillable = [
        'thn_awal',
        'thn_akhir',
        'kd_buku',
        'nilai_min_buku',
        'nilai_max_buku'
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
