<?php

namespace Wawans\SismiopDatabase\Dat;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Dat\DatSubjekPajakNjoptkp
 *
 * @property string $subjek_pajak_id
 * @property string|null $kd_propinsi
 * @property string|null $kd_dati2
 * @property string|null $kd_kecamatan
 * @property string|null $kd_kelurahan
 * @property string|null $kd_blok
 * @property string|null $no_urut
 * @property string|null $kd_jns_op
 * @property string|null $thn_njoptkp
 * @property-read \Wawans\SismiopDatabase\Dat\DatSubjekPajak $datSubjekPajak
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatSubjekPajakNjoptkp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatSubjekPajakNjoptkp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DatSubjekPajakNjoptkp query()
 *
 * @mixin \Eloquent
 */
class DatSubjekPajakNjoptkp extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'subjek_pajak_id';

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
        'subjek_pajak_id',
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'thn_njoptkp',
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
        'kd_propinsi' => StrPad::class.':2',
        'kd_dati2' => StrPad::class.':2',
        'kd_kecamatan' => StrPad::class.':3',
        'kd_kelurahan' => StrPad::class.':3',
        'kd_blok' => StrPad::class.':3',
        'no_urut' => StrPad::class.':4',
    ];

    public function datSubjekPajak()
    {
        return $this->belongsTo(DatSubjekPajak::class, 'subjek_pajak_id', 'subjek_pajak_id');
    }
}
