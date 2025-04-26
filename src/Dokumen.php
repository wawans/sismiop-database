<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $jns_dokumen
 * @property string $no_dokumen
 * @property string|null $tgl_pendataan_dok
 * @property string|null $nip_pendata_dok
 * @property string|null $tgl_pemeriksaan_dok
 * @property string|null $nip_pemeriksa_dok
 * @property string|null $tgl_perekaman_dok
 * @property string|null $nip_perekam_dok
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dokumen newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dokumen newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Dokumen query()
 *
 * @mixin \Eloquent
 */
class Dokumen extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_kanwil',
        'kd_kppbb',
        'jns_dokumen',
        'no_dokumen',
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
        'jns_dokumen',
        'no_dokumen',
        'tgl_pendataan_dok',
        'nip_pendata_dok',
        'tgl_pemeriksaan_dok',
        'nip_pemeriksa_dok',
        'tgl_perekaman_dok',
        'nip_perekam_dok',
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
