<?php

namespace Wawans\SismiopDatabase;

use Illuminate\Support\Facades\DB;
use Wawans\SismiopDatabase\Ref\RefJabatan;
use Wawans\SismiopDatabase\Ref\RefSeksi;
use Wawans\SismiopDatabase\Ref\RefSubSeksi;

/**
 * Wawans\SismiopDatabase\PosisiPegawai
 *
 * @property string $kd_kanwil
 * @property string $kd_kppbb
 * @property string $nip
 * @property string $kd_seksi
 * @property string $kd_subseksi
 * @property \Illuminate\Support\Carbon $tgl_awal_berlaku
 * @property \Illuminate\Support\Carbon|null $tgl_akhir_berlaku
 * @property string|null $kd_wewenang
 * @property string|null $kd_jabatan
 * @property string|null $sys_nc00010$
 * @property-read \Wawans\SismiopDatabase\Pegawai $pegawai
 * @property-read RefJabatan|null $refJabatan
 * @property-read RefSeksi $refSeksi
 * @property-read RefSubSeksi $refSubSeksi
 * @property-read \Wawans\SismiopDatabase\Wewenang|null $refWewenang
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PosisiPegawai newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PosisiPegawai newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PosisiPegawai query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PosisiPegawai whereActive($date = null, $format = 'YYYY-MM-DD')
 *
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
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereActive($query, $date = null, $format = 'YYYY-MM-DD')
    {
        $date = ! blank($date) ? $date : date('Y-m-d');

        return $query->where('tgl_awal_berlaku', '<=', DB::raw("TO_DATE('".$date."','".$format."')"))
            ->where('tgl_akhir_berlaku', '>=', DB::raw("TO_DATE('".$date."','".$format."')"));
    }
}
