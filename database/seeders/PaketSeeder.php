<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\JenisPaket;
use App\Models\User;
use App\Models\Paket;
use Illuminate\Support\Str;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin role and assign permissions
        $role = Role::create(['name' => 'admin', 'guard_name' => 'web']);
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);

        // Create admin user
        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@wedding.com',
            'password' => bcrypt('qweqweqwe'),
            'email_verified_at' => now()
        ]);

        $user->assignRole($role);

        $jenisPakets = [
            ['nama' => 'Rekomendasi', 'slug' => 'rekomendasi'],
            ['nama' => 'Tema', 'slug' => 'tema'],
            ['nama' => 'Catering', 'slug' => 'catering'],
            ['nama' => 'Entertaiment', 'slug' => 'entertaiment'],
            ['nama' => 'Dekorasi', 'slug' => 'dekorasi'],
            ['nama' => 'Dokumentasi', 'slug' => 'dokumentasi'],
        ];

        foreach ($jenisPakets as $jenisPaket) {
            JenisPaket::create($jenisPaket);
        }

        $pakets = [
            // Rekomendasi (jenis_paket_id = 1)
            [
                'nama' => 'Paket Rekomendasi Basic',
                'slug' => Str::slug('Paket Rekomendasi Basic'),
                'nominal' => 80000000,
                'diskon' => 0,
                'keterangan' => 'Paket pernikahan basic dengan harga terjangkau, termasuk dekorasi minimalis, catering 300 porsi, dokumentasi sederhana, dan entertaiment akustik',
                'gambar' => 'rekomendasi_basic.jpg',
                'jenis_paket_id' => 1, // Rekomendasi
            ],
            [
                'nama' => 'Paket Rekomendasi Silver',
                'slug' => Str::slug('Paket Rekomendasi Silver'),
                'nominal' => 150000000,
                'diskon' => 0,
                'keterangan' => 'Paket rekomendasi silver dengan dekorasi lebih lengkap, catering 500 porsi, dokumentasi standar, dan entertaiment full band',
                'gambar' => 'rekomendasi_silver.jpg',
                'jenis_paket_id' => 1, // Rekomendasi
            ],
            [
                'nama' => 'Paket Rekomendasi Gold',
                'slug' => Str::slug('Paket Rekomendasi Gold'),
                'nominal' => 300000000,
                'diskon' => 0,
                'keterangan' => 'Paket rekomendasi gold untuk pernikahan mewah, termasuk dekorasi eksklusif, catering 800 porsi, dokumentasi full day, dan entertaiment dengan efek lighting',
                'gambar' => 'rekomendasi_gold.jpg',
                'jenis_paket_id' => 1, // Rekomendasi
            ],

            // Tema (jenis_paket_id = 2)
            [
                'nama' => 'Paket Tema Indoor Basic',
                'slug' => Str::slug('Paket Tema Indoor Basic'),
                'nominal' => 7500000,
                'diskon' => 0,
                'keterangan' => 'Tema pernikahan indoor sederhana namun elegan, termasuk dekorasi minimalis, dokumentasi standar, dan entertaiment akustik',
                'gambar' => 'tema_indoor_basic.jpg',
                'jenis_paket_id' => 2, // Tema
            ],
            [
                'nama' => 'Paket Tema Indoor Silver',
                'slug' => Str::slug('Paket Tema Indoor Silver'),
                'nominal' => 10000000,
                'diskon' => 0,
                'keterangan' => 'Tema pernikahan indoor dengan sentuhan modern, termasuk dekorasi lebih lengkap, dokumentasi standar, dan entertaiment full band',
                'gambar' => 'tema_indoor_silver.jpg',
                'jenis_paket_id' => 2, // Tema
            ],
            [
                'nama' => 'Paket Tema Outdoor Silver',
                'slug' => Str::slug('Paket Tema Outdoor Silver'),
                'nominal' => 15000000,
                'diskon' => 0,
                'keterangan' => 'Tema pernikahan outdoor dengan dekorasi elegan, termasuk dokumentasi standar, dan entertaiment full band',
                'gambar' => 'tema_outdoor_silver.jpg',
                'jenis_paket_id' => 2, // Tema
            ],

            // Catering (jenis_paket_id = 3)
            [
                'nama' => 'Paket Catering Basic',
                'slug' => Str::slug('Paket Catering Basic'),
                'nominal' => 10000000,
                'diskon' => 0,
                'keterangan' => 'Catering 300 porsi dengan pilihan menu tradisional, termasuk makanan ringan, makanan utama, dan makanan penutup',
                'gambar' => 'catering_basic.jpg',
                'jenis_paket_id' => 3, // Catering
            ],
            [
                'nama' => 'Paket Catering Silver',
                'slug' => Str::slug('Paket Catering Silver'),
                'nominal' => 20000000,
                'diskon' => 0,
                'keterangan' => 'Catering 500 porsi dengan menu internasional, termasuk makanan ringan, makanan utama, dan makanan penutup',
                'gambar' => 'catering_silver.jpg',
                'jenis_paket_id' => 3, // Catering
            ],
            [
                'nama' => 'Paket Catering Gold',
                'slug' => Str::slug('Paket Catering Gold'),
                'nominal' => 30000000,
                'diskon' => 0,
                'keterangan' => 'Catering 800 porsi dengan 5 stall tambahan, termasuk makanan ringan, makanan utama, dan makanan penutup',
                'gambar' => 'catering_gold.jpg',
                'jenis_paket_id' => 3, // Catering
            ],

            // Entertaiment (jenis_paket_id = 4)
            [
                'nama' => 'Paket Entertaiment Basic',
                'slug' => Str::slug('Paket Entertaiment Basic'),
                'nominal' => 10000000,
                'diskon' => 0,
                'keterangan' => 'Paket band akustik dengan sound system standar, termasuk 4 jam pemotretan dan 2 orang pemusik',
                'gambar' => 'entertaimen_basic.jpg',
                'jenis_paket_id' => 4, // Entertaiment
            ],
            [
                'nama' => 'Paket Entertaiment Silver',
                'slug' => Str::slug('Paket Entertaiment Silver'),
                'nominal' => 20000000,
                'diskon' => 0,
                'keterangan' => 'Paket band full dengan sound system profesional, termasuk 8 jam pemotretan dan 5 orang pemusik',
                'gambar' => 'entertaimen_silver.jpg',
                'jenis_paket_id' => 4, // Entertaiment
            ],
            [
                'nama' => 'Paket Entertaiment Gold',
                'slug' => Str::slug('Paket Entertaiment Gold'),
                'nominal' => 30000000,
                'diskon' => 0,
                'keterangan' => 'Paket DJ dan band dengan efek lighting, termasuk 12 jam pemotretan dan 6 orang pemusik',
                'gambar' => 'entertaimen_gold.jpg',
                'jenis_paket_id' => 4, // Entertaiment
            ],

            // Dekorasi (jenis_paket_id = 5)
            [
                'nama' => 'Paket Dekorasi Basic',
                'slug' => Str::slug('Paket Dekorasi Basic'),
                'nominal' => 10000000,
                'diskon' => 0,
                'keterangan' => 'Dekorasi pelaminan dengan bunga segar standar, termasuk 4 jam pemotretan dan 2 orang pemusik',
                'gambar' => 'dekorasi_basic.jpg',
                'jenis_paket_id' => 5, // Dekorasi
            ],
            [
                'nama' => 'Paket Dekorasi Silver',
                'slug' => Str::slug('Paket Dekorasi Silver'),
                'nominal' => 15000000,
                'diskon' => 0,
                'keterangan' => 'Dekorasi pelaminan modern dengan lighting, termasuk 8 jam pemotretan dan 4 orang pemusik',
                'gambar' => 'dekorasi_silver.jpg',
                'jenis_paket_id' => 5, // Dekorasi
            ],
            [
                'nama' => 'Paket Dekorasi Gold',
                'slug' => Str::slug('Paket Dekorasi Gold'),
                'nominal' => 25000000,
                'diskon' => 0,
                'keterangan' => 'Dekorasi eksklusif dengan bunga premium, termasuk 12 jam pemotretan dan 6 orang pemusik',
                'gambar' => 'dekorasi_gold.jpg',
                'jenis_paket_id' => 5, // Dekorasi
            ],

            // Dokumentasi (jenis_paket_id = 6)
            [
                'nama' => 'Paket Dokumentasi Basic',
                'slug' => Str::slug('Paket Dokumentasi Basic'),
                'nominal' => 5000000,
                'diskon' => 0,
                'keterangan' => 'Paket dokumentasi sederhana untuk 4 jam pemotretan, termasuk 2 orang pemusik',
                'gambar' => 'dokumentasi_basic.jpg',
                'jenis_paket_id' => 6, // Dokumentasi
            ],
            [
                'nama' => 'Paket Dokumentasi Silver',
                'slug' => Str::slug('Paket Dokumentasi Silver'),
                'nominal' => 10000000,
                'diskon' => 0,
                'keterangan' => 'Paket dokumentasi dengan 8 jam pemotretan dan video',
                'gambar' => 'dokumentasi_silver.jpg',
                'jenis_paket_id' => 6, // Dokumentasi
            ],
            [
                'nama' => 'Paket Dokumentasi Gold',
                'slug' => Str::slug('Paket Dokumentasi Gold'),
                'nominal' => 20000000,
                'diskon' => 0,
                'keterangan' => 'Paket dokumentasi full day dengan video cinematic',
                'gambar' => 'dokumentasi_gold.jpg',
                'jenis_paket_id' => 6, // Dokumentasi
            ],

        ];

        Paket::insert($pakets);
    }
}

