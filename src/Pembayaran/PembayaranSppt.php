<?php

namespace Wawans\SismiopDatabase\Pembayaran;

use Wawans\SismiopDatabase\Concerns\WithRefDati2;
use Wawans\SismiopDatabase\Concerns\WithRefKecamatan;
use Wawans\SismiopDatabase\Concerns\WithRefKelurahan;
use Wawans\SismiopDatabase\Concerns\WithRefPropinsi;
use Wawans\SismiopDatabase\Model;
use Wawans\SismiopDatabase\Sppt\Sppt;
use Wawans\SismiopDatabase\TempatPembayaran;

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
