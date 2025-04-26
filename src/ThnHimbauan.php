<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string $no_srt_himbauan
 * @property string $thn_pajak_himbauan
 * @property string|null $sys_nc00012$
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ThnHimbauan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ThnHimbauan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ThnHimbauan query()
 *
 * @mixin \Eloquent
 */
class ThnHimbauan extends Model
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
