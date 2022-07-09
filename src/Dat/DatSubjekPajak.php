<?php

namespace Wawans\SismiopDatabase\Dat;

use Wawans\SismiopDatabase\Casts\StrPad;
use Wawans\SismiopDatabase\Constants\Lookup;
use Wawans\SismiopDatabase\Lookup\LookupItem;
use Wawans\SismiopDatabase\Model;

/**
 * Wawans\SismiopDatabase\Dat\DatSubjekPajak
 *
 * @property string $SUBJEK_PAJAK_ID
 * @property string|null $NM_WP
 * @property string|null $JALAN_WP
 * @property string|null $BLOK_KAV_NO_WP
 * @property string|null $RW_WP
 * @property string|null $RT_WP
 * @property string|null $KELURAHAN_WP
 * @property string|null $KOTA_WP
 * @property string|null $KD_POS_WP
 * @property string|null $TELP_WP
 * @property string|null $NPWP
 * @property string|null $STATUS_PEKERJAAN_WP
 * @property StrPad $rw_wp
 * @property StrPad $rt_wp
 * @property-read \Illuminate\Database\Eloquent\Collection|\Wawans\SismiopDatabase\Dat\DatObjekPajak[] $datObjekPajak
 * @property-read \Wawans\SismiopDatabase\Dat\DatSubjekPajakNjoptkp $datSubjekPajakNjoptkp
 * @property-read LookupItem $refStatusPekerjaan
 * @method static \Illuminate\Database\Eloquent\Builder|DatSubjekPajak newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DatSubjekPajak newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DatSubjekPajak query()
 * @mixin \Eloquent
 */
class DatSubjekPajak extends Model
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
        'nm_wp',
        'jalan_wp',
        'blok_kav_no_wp',
        'rw_wp',
        'rt_wp',
        'kelurahan_wp',
        'kota_wp',
        'kd_pos_wp',
        'telp_wp',
        'npwp',
        'status_pekerjaan_wp',
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
        'rw_wp' => StrPad::class . ':2',
        'rt_wp' => StrPad::class . ':3',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['refStatusPekerjaan'];

    public function datObjekPajak()
    {
        return $this->hasMany(DatObjekPajak::class, $this->primaryKey, $this->primaryKey);
    }

    public function datSubjekPajakNjoptkp()
    {
        return $this->belongsTo(DatSubjekPajakNjoptkp::class, 'subjek_pajak_id', 'subjek_pajak_id');
    }

    public function refStatusPekerjaan()
    {
        return $this->belongsTo(LookupItem::class, 'status_pekerjaan_wp', 'kd_lookup_item')->whereGroup(Lookup::GROUP_JNS_PEKERJAAN_WP);
    }
}
