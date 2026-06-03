<?php

namespace App\Http\Controllers;

class PengalamanController extends Controller
{
    public function detail($id)
    {
        $data = [
            1 => [
                'judul' => 'PKKMB ULM 2024',
                'deskripsi' => 'PKKMB merupakan kegiatan pengenalan kehidupan kampus bagi mahasiswa baru. Kegiatan ini dilaksanakan selama empat hari, yaitu tanggal 13–14 Agustus 2024 untuk PKKMB Universitas, tanggal 15 Agustus 2024 untuk PKKMB Fakultas, dan tanggal 16 Agustus 2024 untuk PKKMB Program Studi. Melalui kegiatan ini saya mengenal lingkungan kampus, sistem akademik, organisasi kemahasiswaan, fasilitas kampus, serta berbagai informasi penting yang mendukung proses perkuliahan.',
                'waktu' => '13 - 16 Agustus 2024',
                'kesan' => 'Kegiatan ini sangat berkesan karena saya mendapatkan banyak teman baru dari berbagai program studi di Fakultas Teknik. Meskipun saya berasal dari Program Studi Teknologi Informasi yang berkuliah di Banjarmasin, sedangkan teman-teman yang saya kenal berasal dari program studi lain yang berada di Banjarbaru, kami tetap bisa berteman dengan baik. Selama PKKMB, kami sering bekerja sama dalam tugas kelompok sehingga suasananya menjadi lebih seru. Dari kegiatan ini saya tidak hanya mendapatkan pengalaman baru, tetapi juga relasi pertemanan yang sampai sekarang masih terjalin dengan baik.',
                'gambar' => asset('image/pkkmb.jpeg')
            ],

            2 => [
                'judul' => 'LKMM-PD TI 2024',
                'deskripsi' => 'LKMM-PD merupakan kegiatan yang diikuti oleh mahasiswa Program Studi Teknologi Informasi. Kegiatan ini berisi penyampaian berbagai materi serta pengenalan lingkungan kampus Teknologi Informasi. Pada saat itu kami juga diberikan tugas untuk nongkrong bersama teman-teman angkatan 2024 agar lebih akrab, saling mengenal, dan membangun rasa kebersamaan serta solidaritas antar mahasiswa Teknologi Informasi.',
                'waktu' => '19 - 21 Agustus 2024',
                'kesan' => 'Kegiatan ini membuat saya lebih mengenal teman-teman satu angkatan di Program Studi Teknologi Informasi. Selain mendapatkan materi yang bermanfaat, saya juga mendapatkan banyak teman baru dan merasakan kebersamaan yang lebih baik dengan teman-teman angkatan 2024.',
                'gambar' => asset('image/lkmm-pd.jpeg')
            ],

            3 => [
                'judul' => 'HMTI IT FEST 2025',
                'deskripsi' => 'IT FEST merupakan kegiatan tahunan yang diselenggarakan oleh Himpunan Mahasiswa Teknologi Informasi Universitas Lambung Mangkurat . Pada tahun 2025 dengan tema "Time Capsule" terdiri dari berbagai rangkaian acara seperti Opening Ceremony, IT CUP, DISCOVER IT, dan ARTECH yang bertujuan menambah wawasan serta memperkenalkan dunia teknologi informasi.',
                'waktu' => '6 September - 26 Oktober 2025',
                'kesan' => 'Kegiatan ini sangat berkesan karena saya terlibat sebagai anggota Divisi Kesekretariatan. Selama persiapan hingga pelaksanaan acara, saya mendapatkan banyak pengalaman baru seperti membuat surat, merevisi surat, membuat notulensi rapat, produksian, dan sebagainya. Meskipun cukup rumit dan membutuhkan ketelitian, prosesnya tetap menyenangkan karena dilakukan bersama teman-teman panitia divisi lain, terutama dengan teman-teman kesekretariatan sehingga menambah pengalaman dan kebersamaan.',
                'gambar' => asset('image/hmti it fest.jpeg')
            ],

            4 => [
                'judul' => 'MENTORING PPAI 2024',
                'deskripsi' => 'Mentoring PPAI merupakan kegiatan pembinaan dan pendampingan mahasiswa yang bertujuan meningkatkan pemahaman nilai-nilai keislaman serta membangun karakter yang lebih baik.',
                'waktu' => '18 November, 2 Desember, 8 Desember, dan 16 Desember 2024',
                'kesan' => 'Kegiatan ini sangat berkesan bagi saya karena memberikan banyak pelajaran tentang agama yang bisa diterapkan dalam kehidupan sehari-hari. Kegiatan mentoring yang dilaksanakan di Musholla Fakultas Teknik Banjarmasin juga terasa nyaman karena diikuti oleh teman-teman perempuan Teknologi Informasi angkatan 2024. Selain mendapatkan ilmu baru, saya juga senang bisa mendengarkan berbagai pengalaman dan pembelajaran yang disampaikan oleh Kak Noviani selama kegiatan berlangsung.',
                'gambar' => asset('image/mentoring ppai.jpeg')
            ],
        ];

        $pengalaman = $data[$id] ?? null;

        return view('detail', compact('pengalaman'));
    }
}