<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_kls_tanah
 * @property string $thn_awal_kls_tanah
 * @property string|null $thn_akhir_kls_tanah
 * @property string|null $nilai_min_tanah
 * @property string|null $nilai_max_tanah
 * @property string|null $nilai_per_m2_tanah
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KelasTanah newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KelasTanah newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|KelasTanah query()
 *
 * @mixin \Eloquent
 */
class KelasTanah extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_kls_tanah',
        'thn_awal_kls_tanah',
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
        'kd_kls_tanah',
        'thn_awal_kls_tanah',
        'thn_akhir_kls_tanah',
        'nilai_min_tanah',
        'nilai_max_tanah',
        'nilai_per_m2_tanah',
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
