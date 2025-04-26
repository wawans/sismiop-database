<?php

namespace Wawans\SismiopDatabase\Sk;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $jns_sk
 * @property string $no_sk
 * @property string|null $tgl_sk
 * @property string|null $no_ba_kantor
 * @property string|null $tgl_ba_kantor
 * @property string|null $no_ba_lapangan
 * @property string|null $tgl_ba_lapangan
 * @property string|null $tgl_cetak_sk
 * @property string|null $nip_pencetak_sk
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkSk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkSk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkSk query()
 *
 * @mixin \Eloquent
 */
class SkSk extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_kanwil',
        'kd_kppbb',
        'jns_sk',
        'no_sk',
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
        'jns_sk',
        'no_sk',
        'tgl_sk',
        'no_ba_kantor',
        'tgl_ba_kantor',
        'no_ba_lapangan',
        'tgl_ba_lapangan',
        'tgl_cetak_sk',
        'nip_pencetak_sk',
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
