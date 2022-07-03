<?php

namespace Wawans\SismiopDatabase\Pst;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Constants\Lookup;
use Wawans\SismiopDatabase\Lookup\LookupItem;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Pst\PstPermohonanPengurangan
 *
 * @property string $KD_KANWIL
 * @property string $KD_KPPBB
 * @property string $THN_PELAYANAN
 * @property string $BUNDEL_PELAYANAN
 * @property string $NO_URUT_PELAYANAN
 * @property string $KD_PROPINSI_PEMOHON
 * @property string $KD_DATI2_PEMOHON
 * @property string $KD_KECAMATAN_PEMOHON
 * @property string $KD_KELURAHAN_PEMOHON
 * @property string $KD_BLOK_PEMOHON
 * @property string $NO_URUT_PEMOHON
 * @property string $KD_JNS_OP_PEMOHON
 * @property string|null $JNS_PENGURANGAN
 * @property string|null $PCT_PERMOHONAN_PENGURANGAN
 * @property StrPad $kd_kanwil
 * @property StrPad $kd_kppbb
 * @property StrPad $thn_pelayanan
 * @property StrPad $bundel_pelayanan
 * @property StrPad $no_urut_pelayanan
 * @property StrPad $kd_propinsi_pemohon
 * @property StrPad $kd_dati2_pemohon
 * @property StrPad $kd_kecamatan_pemohon
 * @property StrPad $kd_kelurahan_pemohon
 * @property StrPad $kd_blok_pemohon
 * @property StrPad $no_urut_pemohon
 * @property-read \Wawans\SismiopDatabase\Pst\PstPermohonan $pstPermohonan
 * @property-read LookupItem $refJnsPengurangan
 * @method static \Illuminate\Database\Eloquent\Builder|PstPermohonanPengurangan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PstPermohonanPengurangan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PstPermohonanPengurangan query()
 * @mixin \Eloquent
 */
class PstPermohonanPengurangan extends Model
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
        'kd_propinsi_pemohon',
        'kd_dati2_pemohon',
        'kd_kecamatan_pemohon',
        'kd_kelurahan_pemohon',
        'kd_blok_pemohon',
        'no_urut_pemohon',
        'kd_jns_op_pemohon',
        'jns_pengurangan',
        'pct_permohonan_pengurangan',
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
        'kd_propinsi_pemohon' => StrPad::class . ':2',
        'kd_dati2_pemohon' => StrPad::class . ':2',
        'kd_kecamatan_pemohon' => StrPad::class . ':3',
        'kd_kelurahan_pemohon' => StrPad::class . ':3',
        'kd_blok_pemohon' => StrPad::class . ':3',
        'no_urut_pemohon' => StrPad::class . ':4',
        'pct_permohonan_pengurangan' => 'integer',
    ];

    public function pstPermohonan()
    {
        return $this->belongsTo(PstPermohonan::class, $this->primaryKey, $this->primaryKey);
    }

    public function refJnsPengurangan()
    {
        return $this->belongsTo(LookupItem::class, 'jns_pengurangan', 'kd_lookup_item')->whereGroup(Lookup::GROUP_JNS_PENGURANGAN_PST);
    }
}
