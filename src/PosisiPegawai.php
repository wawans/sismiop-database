<?php

namespace Wawans\SismiopDatabase;

use Illuminate\Support\Facades\DB;
use Wawans\SismiopDatabase\Model;
use Wawans\SismiopDatabase\Ref\RefJabatan;
use Wawans\SismiopDatabase\Ref\RefSeksi;
use Wawans\SismiopDatabase\Ref\RefSubSeksi;

/**
 * Wawans\SismiopDatabase\PosisiPegawai
 *
 * @property string $KD_KANWIL
 * @property string $KD_KPPBB
 * @property string $NIP
 * @property string $KD_SEKSI
 * @property string $KD_SUBSEKSI
 * @property string $TGL_AWAL_BERLAKU
 * @property string|null $TGL_AKHIR_BERLAKU
 * @property string|null $KD_WEWENANG
 * @property string|null $KD_JABATAN
 * @property-read \Wawans\SismiopDatabase\Pegawai $pegawai
 * @property-read RefJabatan $refJabatan
 * @property-read RefSeksi $refSeksi
 * @property-read RefSubSeksi $refSubSeksi
 * @property-read \Wawans\SismiopDatabase\Wewenang $refWewenang
 * @method static \Illuminate\Database\Eloquent\Builder|PosisiPegawai newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PosisiPegawai newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PosisiPegawai query()
 * @method static \Illuminate\Database\Eloquent\Builder|PosisiPegawai whereActive($date = null, $format = 'YYYY-MM-DD')
 * @mixin \Eloquent
 */
class PosisiPegawai extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'nip';

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
        'nip',
        'kd_seksi',
        'kd_subseksi',
        'tgl_awal_berlaku',
        'tgl_akhir_berlaku',
        'kd_wewenang',
        'kd_jabatan',
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
        'tgl_awal_berlaku' => 'date',
        'tgl_akhir_berlaku' => 'date',
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'nip', 'nip');
    }

    public function refJabatan()
    {
        return $this->belongsTo(RefJabatan::class, 'kd_jabatan', 'kd_jabatan');
    }

    public function refSeksi()
    {
        return $this->belongsTo(RefSeksi::class, 'kd_seksi', 'kd_seksi');
    }

    public function refSubSeksi()
    {
        return $this->belongsTo(RefSubSeksi::class, ['kd_seksi', 'kd_subseksi'], ['kd_seksi', 'kd_subseksi']);
    }

    public function refWewenang()
    {
        return $this->belongsTo(Wewenang::class, 'kd_wewenang', 'kd_wewenang');
    }

    /**
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereActive($query, $date = null, $format = 'YYYY-MM-DD')
    {
        $date = !blank($date) ? $date : date('Y-m-d');

        return $query->where('tgl_awal_berlaku', '<=', DB::raw("TO_DATE('" . $date . "','" . $format . "')"))
            ->where('tgl_akhir_berlaku', '>=', DB::raw("TO_DATE('" . $date . "','" . $format . "')"));
    }
}
