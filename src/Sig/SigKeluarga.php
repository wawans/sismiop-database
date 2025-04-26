<?php

namespace Wawans\SismiopDatabase\Sig;

use Wawans\SismiopDatabase\Model;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string $kd_kk
 * @property string $anggota_ke
 * @property string|null $no_ktp
 * @property string|null $nm_anggota
 * @property string|null $jns_kelamin
 * @property string|null $status_keluarga
 * @property string|null $tgl_lahir
 * @property string|null $kota_lahir
 * @property string|null $status_perkawinan
 * @property string|null $agama
 * @property string|null $pendidikan
 * @property string|null $status_pekerjaan
 * @property string|null $npwp
 * @property string|null $paspor
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SigKeluarga newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SigKeluarga newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SigKeluarga query()
 *
 * @mixin \Eloquent
 */
class SigKeluarga extends Model
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
