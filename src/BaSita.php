<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $no_ba_sita
 * @property string|null $no_spmp
 * @property string|null $tgl_ba_sita
 * @property string|null $keterangan_spmp
 * @property string|null $saksi_sita_1
 * @property string|null $pekerjaan_saksi_1
 * @property string|null $saksi_sita_2
 * @property string|null $pekerjaan_saksi_2
 * @property string|null $tgl_rekam_ba_sita
 * @property string|null $nip_perekam_ba_sita
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BaSita newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BaSita newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BaSita query()
 *
 * @mixin \Eloquent
 */
class BaSita extends Model
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
