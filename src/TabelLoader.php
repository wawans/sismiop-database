<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $nama_tabel
 * @property string|null $kode_tabel
 * @property string|null $jenis_tabel
 * @property string|null $no_urut
 * @property string|null $status_load
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabelLoader newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabelLoader newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabelLoader query()
 *
 * @mixin \Eloquent
 */
class TabelLoader extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'nama_tabel';

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
        'nama_tabel',
        'kode_tabel',
        'jenis_tabel',
        'no_urut',
        'status_load',
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
