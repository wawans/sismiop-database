<?php

namespace Wawans\SismiopDatabase\Constants;

class Lookup
{
    /**
     * DAT_SUBJERK_PAJAK
     */
    const GROUP_JNS_PEKERJAAN_WP = '08';

    /**
     * DAT_OBJEK_PAJAK & DAT_OP_BANGUNAN
     */
    const GROUP_JNS_TRANSAKSI = '33';

    /**
     * DAT_OBJEK_PAJAK
     */
    const GROUP_STATUS_CABANG_OP = '18';
    const GROUP_STATUS_PETA_OP = '23';
    const GROUP_STATUS_WP_OP = '10';

    /**
     * DAT_OP_BUMI
     */
    const GROUP_JNS_BUMI_OP = '20';

    /**
     * DAT_OP_BANGUNAN
     */
    const GROUP_JNS_ATAP_BNG = '41';
    const GROUP_JNS_DINDING_BNG = '42';
    const GROUP_JNS_KONDISI_BNG = '21';
    const GROUP_JNS_KONSTRUKSI_BNG = '22';
    const GROUP_JNS_LANGIT2_BNG = '44';
    const GROUP_JNS_LANTAI_BNG = '43';

    /**
     * PST
     */
    const GROUP_STATUS_BERKAS_PST = '06';
    const GROUP_JNS_PENGURANGAN_PST = '77';

    /**
     * SPPT
     */
    const GROUP_STATUS_TAGIHAN_SPPT = '01';
    const GROUP_STATUS_PEMBAYARAN_SPPT = '02';
    const GROUP_STATUS_CETAK_SPPT = '55';
}
