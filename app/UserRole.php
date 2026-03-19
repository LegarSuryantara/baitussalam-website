<?php

namespace App;

enum UserRole: String
{
    case SUPER_ADMIN = 'super_admin'; // developer / owner
    case TAKMIR_ADMIN = 'takmir_admin'; // pengurus inti, full akses
    case BENDAHARA = 'bendahara'; // hanya laporan keuangan
    case SEKRETARIS = 'sekretaris'; // penjadwalan dan laporan kegiatan
    case IMARAH = 'imarah'; // galeri bidang imarah
    case IDAROH = 'idaroh'; // galeri bidang idaroh
    case RIAYAH = 'riayah'; // galeri bidang riayah
}
