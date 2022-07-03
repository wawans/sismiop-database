<?php

namespace Wawans\SismiopDatabase\Pst;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Pst\PstTambahan
 *
 * @property string $KD_KANWIL
 * @property string $KD_KPPBB
 * @property string $THN_PELAYANAN
 * @property string $BUNDEL_PELAYANAN
 * @property string $NO_URUT_PELAYANAN
 * @property string|null $THN_PENERBITAN
 * @property string|null $NO_TELP
 * @property string|null $TGL_REKAM
 * @property string|null $NIP_REKAM
 * @property StrPad $kd_kanwil
 * @property StrPad $kd_kppbb
 * @property StrPad $thn_pelayanan
 * @property StrPad $bundel_pelayanan
 * @property StrPad $no_urut_pelayanan
 * @property-read \Wawans\SismiopDatabase\Pst\PstPermohonan $pstPermohonan
 * @method static \Illuminate\Database\Eloquent\Builder|PstTambahan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PstTambahan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PstTambahan query()
 * @mixin \Eloquent
 */
class PstTambahan extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = ['kd_kanwil', 'kd_kppbb', 'thn_pelayanan', 'bundel_pelayanan', 'no_urut_pelayanan'];

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'kd_kanwil',
        'kd_kppbb',
        'thn_pelayanan',
        'bundel_pelayanan',
        'no_urut_pelayanan',
        'thn_penerbitan',
        'no_telp',
        'tgl_rekam',
        'nip_rekam',
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
    protected $casts = [
        'kd_kanwil' => StrPad::class . ':2',
        'kd_kppbb' => StrPad::class . ':2',
        'thn_pelayanan' => StrPad::class . ':4',
        'bundel_pelayanan' => StrPad::class . ':4',
        'no_urut_pelayanan' => StrPad::class . ':3',
        'tgl_rekam' => 'datetime',
    ];

    public function pstPermohonan()
    {
        return $this->belongsTo(PstPermohonan::class, $this->primaryKey, $this->primaryKey);
    }
}
