<?php

namespace Wawans\SismiopDatabase\Pembayaran;

use Wawans\SismiopDatabase\Concerns\WithRefDati2;
use Wawans\SismiopDatabase\Concerns\WithRefKecamatan;
use Wawans\SismiopDatabase\Concerns\WithRefKelurahan;
use Wawans\SismiopDatabase\Concerns\WithRefPropinsi;
use Wawans\SismiopDatabase\Model;
use Wawans\SismiopDatabase\Sppt\Sppt;
use Wawans\SismiopDatabase\TempatPembayaran;

/**
 * Wawans\SismiopDatabase\Pembayaran\PembayaranSppt
 *
 * @property string $KD_PROPINSI
 * @property string $KD_DATI2
 * @property string $KD_KECAMATAN
 * @property string $KD_KELURAHAN
 * @property string $KD_BLOK
 * @property string $NO_URUT
 * @property string $KD_JNS_OP
 * @property string $THN_PAJAK_SPPT
 * @property int $PEMBAYARAN_SPPT_KE
 * @property string $KD_KANWIL_BANK
 * @property string $KD_KPPBB_BANK
 * @property string $KD_BANK_TUNGGAL
 * @property string $KD_BANK_PERSEPSI
 * @property string $KD_TP
 * @property int|null $DENDA_SPPT
 * @property int $JML_SPPT_YG_DIBAYAR
 * @property string $TGL_PEMBAYARAN_SPPT
 * @property string $TGL_REKAM_BYR_SPPT
 * @property string $NIP_REKAM_BYR_SPPT
 * @property-read \Wawans\SismiopDatabase\Ref\RefDati2 $refDati2
 * @property-read \Wawans\SismiopDatabase\Ref\RefKecamatan $refKecamatan
 * @property-read \Wawans\SismiopDatabase\Ref\RefKelurahan $refKelurahan
 * @property-read \Wawans\SismiopDatabase\Ref\RefPropinsi $refPropinsi
 * @property-read Sppt $sppt
 * @property-read TempatPembayaran $tempatPembayaran
 * @method static \Illuminate\Database\Eloquent\Builder|PembayaranSppt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PembayaranSppt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PembayaranSppt query()
 * @mixin \Eloquent
 */
class PembayaranSppt extends Model
{
    use WithRefPropinsi;
    use WithRefDati2;
    use WithRefKecamatan;
    use WithRefKelurahan;

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
        'thn_pajak_sppt',
        'pembayaran_sppt_ke',
    ];

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
        'kd_propinsi',
        'kd_dati2',
        'kd_kecamatan',
        'kd_kelurahan',
        'kd_blok',
        'no_urut',
        'kd_jns_op',
        'thn_pajak_sppt',
        'pembayaran_sppt_ke',
        'kd_kanwil_bank',
        'kd_kppbb_bank',
        'kd_bank_tunggal',
        'kd_bank_persepsi',
        'kd_tp',
        'denda_sppt',
        'jml_sppt_yg_dibayar',
        'tgl_pembayaran_sppt',
        'tgl_rekam_byr_sppt',
        'nip_rekam_byr_sppt',
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
        'tgl_pembayaran_sppt' => 'date',
        'tgl_rekam_byr_sppt' => 'datetime',
    ];

    public function sppt()
    {
        return $this->belongsTo(Sppt::class,
            ['kd_propinsi', 'kd_dati2', 'kd_kecamatan', 'kd_kelurahan', 'kd_blok', 'no_urut', 'kd_jns_op', 'thn_pajak_sppt'],
            ['kd_propinsi', 'kd_dati2', 'kd_kecamatan', 'kd_kelurahan', 'kd_blok', 'no_urut', 'kd_jns_op', 'thn_pajak_sppt']);
    }

    public function tempatPembayaran()
    {
        return $this->belongsTo(TempatPembayaran::class,
            ['kd_kanwil_bank', 'kd_kppbb_bank', 'kd_bank_tunggal', 'kd_bank_persepsi', 'kd_tp'],
            ['kd_kanwil', 'kd_kppbb', 'kd_bank_tunggal', 'kd_bank_persepsi', 'kd_tp']);
    }
}
