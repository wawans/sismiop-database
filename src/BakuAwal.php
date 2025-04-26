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
 * @property string $thn_pajak_sppt
 * @property string $siklus_sppt
 * @property string $kd_kanwil_bank
 * @property string $kd_kppbb_bank
 * @property string $kd_bank_tunggal
 * @property string $kd_bank_persepsi
 * @property string $kd_tp
 * @property string $nm_wp_sppt
 * @property string $jln_wp_sppt
 * @property string|null $blok_kav_no_wp_sppt
 * @property string|null $rw_wp_sppt
 * @property string|null $rt_wp_sppt
 * @property string|null $kelurahan_wp_sppt
 * @property string|null $kota_wp_sppt
 * @property string|null $kd_pos_wp_sppt
 * @property string|null $npwp_sppt
 * @property string|null $no_persil_sppt
 * @property string $kd_kls_tanah
 * @property string $thn_awal_kls_tanah
 * @property string $kd_kls_bng
 * @property string $thn_awal_kls_bng
 * @property \Illuminate\Support\Carbon $tgl_jatuh_tempo_sppt
 * @property string $luas_bumi_sppt
 * @property string $luas_bng_sppt
 * @property string $njop_bumi_sppt
 * @property string $njop_bng_sppt
 * @property string $njop_sppt
 * @property string $njoptkp_sppt
 * @property string|null $njkp_sppt
 * @property string $pbb_terhutang_sppt
 * @property string|null $faktor_pengurang_sppt
 * @property string $pbb_yg_harus_dibayar_sppt
 * @property string $status_pembayaran_sppt
 * @property string $status_tagihan_sppt
 * @property string $status_cetak_sppt
 * @property \Illuminate\Support\Carbon $tgl_terbit_sppt
 * @property \Illuminate\Support\Carbon $tgl_cetak_sppt
 * @property string $nip_pencetak_sppt
 * @property string|null $tarif_sppt
 * @property-read \Wawans\SismiopDatabase\Dat\DatObjekPajak|null $datObjekPajak
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Wawans\SismiopDatabase\Pembayaran\PembayaranSppt> $pembayaranSppt
 * @property-read \Wawans\SismiopDatabase\Ref\RefDati2|null $refDati2
 * @property-read \Wawans\SismiopDatabase\Ref\RefKecamatan|null $refKecamatan
 * @property-read \Wawans\SismiopDatabase\Ref\RefKelurahan|null $refKelurahan
 * @property-read \Wawans\SismiopDatabase\Ref\RefPropinsi|null $refPropinsi
 * @property-read \Wawans\SismiopDatabase\Lookup\LookupItem|null $refStatusCetak
 * @property-read \Wawans\SismiopDatabase\Lookup\LookupItem|null $refStatusPembayaran
 * @property-read \Wawans\SismiopDatabase\Lookup\LookupItem|null $refStatusTagihan
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BakuAwal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BakuAwal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BakuAwal orderByTahun($order = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BakuAwal query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BakuAwal statusPembayaran($status = 1)
 *
 * @mixin \Eloquent
 */
class BakuAwal extends Sppt\Sppt
{
    //
}
