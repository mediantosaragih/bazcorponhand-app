<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Employe;

class EmployeImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        // dd($collection);
        $indexKe = 1;

        foreach($collection as $row){
            if($indexKe > 1){   

                $data['general_karyawan_id'] = !empty($row[1]) ? $row[1] : '';
                $data['general_nomor_kartu_akses'] = !empty($row[2]) ? $row[2] : '';
                $data['general_firstname'] = !empty($row[3]) ? $row[3] : '';
                $data['general_lastname'] = !empty($row[4]) ? $row[4] : '';
                $data['general_nickname'] = !empty($row[5]) ? $row[5] : '';
                $data['general_nik'] = !empty($row[6]) ? $row[6] : '';
                $data['general_tempat_lahir'] = !empty($row[7]) ? $row[7] : '';
                $data['general_tanggal_lahir'] = !empty($row[8]) ? $row[8] : '';
                $data['general_jenis_kelamin'] = !empty($row[9]) ? $row[9] : '';
                $data['general_status_perkawinan'] = !empty($row[10]) ? $row[10] : '';
                $data['general_agama'] = !empty($row[11]) ? $row[11] : '';
                $data['general_tinggi_badan'] = !empty($row[12]) ? $row[12] : '';
                $data['genaral_berat_badan'] = !empty($row[13]) ? $row[13] : '';
                $data['general_golongan_darah']      = !empty($row[14]) ? $row[14] : '';
                $data['general_alamat_ktp']      = !empty($row[15]) ? $row[15] : '';
                $data['general_alamat_domisili']      = !empty($row[16]) ? $row[16] : '';
                $data['general_npwp']      = !empty($row[17]) ? $row[17] : '';
                $data['general_bpjs_ketenagakerjaan']      = !empty($row[18]) ? $row[18] : '';
                $data['general_bpjs_kesehatan']      = !empty($row[19]) ? $row[19] : '';
                $data['general_no_rek']      = !empty($row[20]) ? $row[20] : '';
                $data['general_no_hp']      = !empty($row[21]) ? $row[21] : '';
                $data['general_email']      = !empty($row[22]) ? $row[22] : '';
                $data['general_medsos']      = !empty($row[23]) ? $row[23] : '';
                $data['general_ukuran_baju']      = !empty($row[24]) ? $row[24] : '';
                $data['general_ukuran_celana']      = !empty($row[25]) ? $row[25] : '';
                $data['general_ukuran_sepatu']      = !empty($row[26]) ? $row[26] : '';
                $data['general_bahasa']      = !empty($row[27]) ? $row[27] : '';
                $data['general_pendidikan_a']      = !empty($row[28]) ? $row[28] : '';
                $data['general_pendidikan_b']      = !empty($row[29]) ? $row[29] : '';
                $data['general_keterampilan']      = !empty($row[30]) ? $row[30] : '';
                $data['general_izin_tipe']      = !empty($row[31]) ? $row[31] : '';
                $data['general_izin_nomor']      = !empty($row[32]) ? $row[32] : '';
                $data['general_izin_masa']      = !empty($row[33]) ? $row[33] : '';
                $data['general_nama_kontak_darurat']      = !empty($row[34]) ? $row[34] : '';
                $data['general_nohp_kontak_darurat']      = !empty($row[35]) ? $row[35] : '';
                $data['general_lokasi_perusahaan']      = !empty($row[36]) ? $row[36] : '';
                $data['general_lokasi_negara']      = !empty($row[37]) ? $row[37] : '';
                $data['general_lokasi_site']      = !empty($row[38]) ? $row[38] : '';
                $data['general_department']      = !empty($row[39]) ? $row[39] : '';
                $data['general_riwayat_jabatan']      = !empty($row[40]) ? $row[40] : '';
                $data['general_riwayat_first_join']      = !empty($row[41]) ? $row[41] : '';
                $data['general_riwayat_kontrak_1_mulai']      = !empty($row[42]) ? $row[42] : '';
                $data['general_riwayat_kontrak_1_berakhir']      = !empty($row[43]) ? $row[43] : '';
                $data['general_riwayat_kontrak_2_mulai']      = !empty($row[44]) ? $row[44] : '';
                $data['general_riwayat_kontrak_2_berakhir']      = !empty($row[45]) ? $row[45] : '';
                $data['general_riwayat_kontrak_3_mulai']      = !empty($row[46]) ? $row[46] : '';
                $data['general_riwayat_kontrak_3_berakhir']      = !empty($row[47]) ? $row[47] : '';
                $data['general_kontrak_berjalan_mulai']      = !empty($row[48]) ? $row[48] : '';
                $data['general_kontrak_berjalan_berakhir']      = !empty($row[49]) ? $row[49] : '';
                $data['general_catatan']      = !empty($row[50]) ? $row[50] : '';

                Employe::create($data);
            }

            $indexKe++;
        }
    }
}
