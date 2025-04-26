<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $tipe_bng
 * @property string|null $nm_tipe_bng
 * @property string|null $luas_min_tipe_bng
 * @property string|null $luas_max_tipe_bng
 * @property string|null $faktor_pembagi_tipe_bng
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TipeBangunan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TipeBangunan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TipeBangunan query()
 *
 * @mixin \Eloquent
 */
class TipeBangunan extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'tipe_bng';

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
        'tipe_bng',
        'nm_tipe_bng',
        'luas_min_tipe_bng',
        'luas_max_tipe_bng',
        'faktor_pembagi_tipe_bng',
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
