<?php

namespace Wawans\SismiopDatabase\Pembatalan;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $no_sk_pembatalan_spmkp
 * @property string|null $no_spmkp
 * @property string|null $tgl_pembatalan_spmkp
 * @property string|null $tgl_cetak_pembatalan_spmkp
 * @property string|null $nip_pencetak_pembatalan_spmkp
 * @property string|null $alasan_pembatalan_spmkp
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembatalanSpmkp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembatalanSpmkp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PembatalanSpmkp query()
 *
 * @mixin \Eloquent
 */
class PembatalanSpmkp extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_kanwil',
        'kd_kppbb',
        'no_sk_pembatalan_spmkp',
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
        'no_sk_pembatalan_spmkp',
        'no_spmkp',
        'tgl_pembatalan_spmkp',
        'tgl_cetak_pembatalan_spmkp',
        'nip_pencetak_pembatalan_spmkp',
        'alasan_pembatalan_spmkp',
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
