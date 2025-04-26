<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $kd_bank_tunggal
 * @property string $kd_bank_persepsi
 * @property string $kd_tp
 * @property string|null $stts_byr
 * @property string|null $stts_btl
 * @property string|null $stts_salinan
 * @property string|null $tgl_lapor
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabStts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabStts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabStts query()
 *
 * @mixin \Eloquent
 */
class TabStts extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_kanwil',
        'kd_kppbb',
        'kd_bank_tunggal',
        'kd_bank_persepsi',
        'kd_tp',
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
        'kd_bank_tunggal',
        'kd_bank_persepsi',
        'kd_tp',
        'stts_byr',
        'stts_btl',
        'stts_salinan',
        'tgl_lapor',
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
