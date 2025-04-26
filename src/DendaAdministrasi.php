<?php

namespace Wawans\SismiopDatabase;

/**
 * @property string $kd_propinsi
 * @property string $kd_dati2
 * @property string $kd_kecamatan
 * @property string $kd_kelurahan
 * @property string $kd_blok
 * @property string $no_urut
 * @property string $kd_jns_op
 * @property string $thn_denda
 * @property string|null $pokok_denda_adm
 * @property string|null $pengurangan_denda
 * @property string|null $denda_adm_stlh_pengurangan
 * @property string|null $status_tagihan_denda
 * @property string|null $tgl_rekam_denda
 * @property string|null $nip_perekam_denda
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DendaAdministrasi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DendaAdministrasi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DendaAdministrasi query()
 *
 * @mixin \Eloquent
 */
class DendaAdministrasi extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = [
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'thn_denda',
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
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'thn_denda',
        'pokok_denda_adm',
        'pengurangan_denda',
        'denda_adm_stlh_pengurangan',
        'status_tagihan_denda',
        'tgl_rekam_denda',
        'nip_perekam_denda',
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
