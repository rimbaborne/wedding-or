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
                'keterangan' => 'Paket pernikahan yang paling sederhana namun tetap elegan.<br>
                    <br>
                    <ul>
                        <li> - Dekorasi minimalis namun tetap elegan</li>
                        <li> - Catering 300 porsi</li>
                        <li> - Dokumentasi sederhana namun tetap mempunyai nilai yang tinggi</li>
                        <li> - Entertaiment akustik</li>
                        <li> - Penyediaan peralatan sound system, lighting, dan peralatan lainnya</li>
                        <li> - Penyediaan tim MC yang handal dan berpengalaman</li>
                        <li> - Penyediaan tim dokumentasi yang handal dan berpengalaman</li>
                    </ul>',
                'gambar' => '1.png',
                'jenis_paket_id' => 1, // Rekomendasi
            ],
            [
                'nama' => 'Paket Rekomendasi Silver',
                'slug' => Str::slug('Paket Rekomendasi Silver'),
                'nominal' => 150000000,
                'diskon' => 0,
                'keterangan' => 'Paket pernikahan yang lebih lengkap dan mewah.<br>
                    <br>
                    <ul>
                        <li> - Dekorasi yang lebih lengkap dan mewah</li>
                        <li> - Catering 500 porsi</li>
                        <li> - Dokumentasi standar yang lengkap dan rapih</li>
                        <li> - Entertaiment full band</li>
                        <li> - Penyediaan peralatan sound system, lighting, dan peralatan lainnya</li>
                        <li> - Penyediaan tim MC yang handal dan berpengalaman</li>
                        <li> - Penyediaan tim dokumentasi yang handal dan berpengalaman</li>
                        <li> - Penyediaan tim dekorasi yang handal dan berpengalaman</li>
                    </ul>',
                'gambar' => '1.png',
                'jenis_paket_id' => 1, // Rekomendasi
            ],
            [
                'nama' => 'Paket Rekomendasi Gold',
                'slug' => Str::slug('Paket Rekomendasi Gold'),
                'nominal' => 300000000,
                'diskon' => 0,
                'keterangan' => 'Paket pernikahan yang paling lengkap dan mewah.<br>
                    <br>
                    <ul>
                        <li> - Dekorasi yang paling lengkap dan mewah</li>
                        <li> - Catering 800 porsi</li>
                        <li> - Dokumentasi full day yang lengkap dan rapih</li>
                        <li> - Entertaiment dengan efek lighting</li>
                        <li> - Penyediaan peralatan sound system, lighting, dan peralatan lainnya</li>
                        <li> - Penyediaan tim MC yang handal dan berpengalaman</li>
                        <li> - Penyediaan tim dokumentasi yang handal dan berpengalaman</li>
                        <li> - Penyediaan tim dekorasi yang handal dan berpengalaman</li>
                        <li> - Penyediaan tim fotografer yang handal dan berpengalaman</li>
                        <li> - Penyediaan tim videografer yang handal dan berpengalaman</li>
                    </ul>',
                'gambar' => '1.png',
                'jenis_paket_id' => 1, // Rekomendasi
            ],

            // Tema (jenis_paket_id = 2)
            [
                'nama' => 'Paket Tema Indoor Basic',
                'slug' => Str::slug('Paket Tema Indoor Basic'),
                'nominal' => 7500000,
                'diskon' => 0,
                'keterangan' => '<p>Paket tema pernikahan indoor sederhana namun elegan, termasuk dekorasi minimalis, dokumentasi standar, dan entertaiment akustik.</p>
                    <br>
                    <ul>
                        <li> - Dekorasi minimalis namun tetap elegan</li>
                        <li> - Catering 300 porsi</li>
                        <li> - Dokumentasi standar dengan 4 jam pemotretan dan 2 orang pemusik</li>
                        <li> - Entertaiment akustik</li>
                        <li> - Penyediaan peralatan sound system, lighting, dan peralatan lainnya</li>
                        <li> - Penyediaan tim MC yang handal dan berpengalaman</li>
                        <li> - Penyediaan tim dokumentasi yang handal dan berpengalaman</li>
                        <li> - Penyediaan tim dekorasi yang handal dan berpengalaman</li>
                    </ul>',
                'gambar' => '1.png',
                'jenis_paket_id' => 2, // Tema
            ],
            [
                'nama' => 'Paket Tema Indoor Silver',
                'slug' => Str::slug('Paket Tema Indoor Silver'),
                'nominal' => 10000000,
                'diskon' => 0,
                'keterangan' => '<p>Paket tema pernikahan indoor dengan sentuhan modern, termasuk dekorasi lebih lengkap, dokumentasi standar, dan entertaiment full band.</p>
                    <br>
                    <ul>
                        <li> - Dekorasi lebih lengkap dan modern</li>
                        <li> - Catering 500 porsi</li>
                        <li> - Dokumentasi standar dengan 8 jam pemotretan dan 5 orang pemusik</li>
                        <li> - Entertaiment full band</li>
                        <li> - Penyediaan peralatan sound system, lighting, dan peralatan lainnya</li>
                        <li> - Penyediaan tim MC yang handal dan berpengalaman</li>
                        <li> - Penyediaan tim dokumentasi yang handal dan berpengalaman</li>
                        <li> - Penyediaan tim dekorasi yang handal dan berpengalaman</li>
                        <li> - Penyediaan tim fotografer yang handal dan berpengalaman</li>
                        <li> - Penyediaan tim videografer yang handal dan berpengalaman</li>
                    </ul>',
                'gambar' => '1.png',
                'jenis_paket_id' => 2, // Tema
            ],
            [
                'nama' => 'Paket Tema Outdoor Silver',
                'slug' => Str::slug('Paket Tema Outdoor Silver'),
                'nominal' => 15000000,
                'diskon' => 0,
                'keterangan' => '<p>Paket tema pernikahan outdoor dengan dekorasi elegan, termasuk dokumentasi standar, dan entertaiment full band.</p>
                    <br>
                    <ul>
                        <li> - Dekorasi elegan</li>
                        <li> - Catering 800 porsi</li>
                        <li> - Dokumentasi standar dengan 12 jam pemotretan dan 6 orang pemusik</li>
                        <li> - Entertaiment full band</li>
                        <li> - Penyediaan peralatan sound system, lighting, dan peralatan lainnya</li>
                        <li> - Penyediaan tim MC yang handal dan berpengalaman</li>
                        <li> - Penyediaan tim dokumentasi yang handal dan berpengalaman</li>
                        <li> - Penyediaan tim dekorasi yang handal dan berpengalaman</li>
                        <li> - Penyediaan tim fotografer yang handal dan berpengalaman</li>
                        <li> - Penyediaan tim videografer yang handal dan berpengalaman</li>
                        <li> - Penyediaan tim drone yang handal dan berpengalaman</li>
                        </ul>',
                'gambar' => '1.png',
                'jenis_paket_id' => 2, // Tema
            ],

            // Catering (jenis_paket_id = 3)
            [
                'nama' => 'Paket Catering Basic',
                'slug' => Str::slug('Paket Catering Basic'),
                'nominal' => 10000000,
                'diskon' => 0,
                'keterangan' => '<p>Paket catering 300 porsi dengan pilihan menu tradisional, termasuk makanan ringan, makanan utama, dan makanan penutup.</p>
                    <br>
                    <ul>
                        <li> - Makanan ringan</li>
                        <li> - Makanan utama</li>
                        <li> - Makanan penutup</li>
                    </ul>',
                'gambar' => '1.png',
                'jenis_paket_id' => 3, // Catering
            ],
            [
                'nama' => 'Paket Catering Silver',
                'slug' => Str::slug('Paket Catering Silver'),
                'nominal' => 20000000,
                'diskon' => 0,
                'keterangan' => '<p>Paket catering 500 porsi dengan menu internasional, termasuk makanan ringan, makanan utama, dan makanan penutup.</p>
                    <br>
                    <ul>
                        <li> - Makanan ringan</li>
                        <li> - Makanan utama</li>
                        <li> - Makanan penutup</li>
                    </ul>',
                'gambar' => '1.png',
                'jenis_paket_id' => 3, // Catering
            ],
            [
                'nama' => 'Paket Catering Gold',
                'slug' => Str::slug('Paket Catering Gold'),
                'nominal' => 30000000,
                'diskon' => 0,
                'keterangan' => '<p>Paket catering 800 porsi dengan 5 stall tambahan, termasuk makanan ringan, makanan utama, dan makanan penutup.</p>
                    <br>
                    <ul>
                        <li> - Makanan ringan</li>
                        <li> - Makanan utama</li>
                        <li> - Makanan penutup</li>
                        <li> - 5 stall tambahan</li>
                    </ul>',
                'gambar' => '1.png',
                'jenis_paket_id' => 3, // Catering
            ],

            // Entertaiment (jenis_paket_id = 4)
            [
                'nama' => 'Paket Entertaiment Basic',
                'slug' => Str::slug('Paket Entertaiment Basic'),
                'nominal' => 10000000,
                'diskon' => 0,
                'keterangan' => '<p>Paket band akustik dengan sound system standar, termasuk 4 jam pemotretan dan 2 orang pemusik.</p>
                    <br>
                    <ul>
                        <li> - Band akustik</li>
                        <li> - Sound system standar</li>
                        <li> - 4 jam pemotretan</li>
                        <li> - 2 orang pemusik</li>
                    </ul>',
                'gambar' => '1.png',
                'jenis_paket_id' => 4, // Entertaiment
            ],
            [
                'nama' => 'Paket Entertaiment Silver',
                'slug' => Str::slug('Paket Entertaiment Silver'),
                'nominal' => 20000000,
                'diskon' => 0,
                'keterangan' => '<p>Paket band full dengan sound system profesional, termasuk 8 jam pemotretan dan 5 orang pemusik.</p>
                    <br>
                    <ul>
                        <li> - Band full</li>
                        <li> - Sound system profesional</li>
                        <li> - 8 jam pemotretan</li>
                        <li> - 5 orang pemusik</li>
                    </ul>',
                'gambar' => '1.png',
                'jenis_paket_id' => 4, // Entertaiment
            ],
            [
                'nama' => 'Paket Entertaiment Gold',
                'slug' => Str::slug('Paket Entertaiment Gold'),
                'nominal' => 30000000,
                'diskon' => 0,
                'keterangan' => '<p>Paket DJ dan band dengan efek lighting, termasuk 12 jam pemotretan dan 6 orang pemusik.</p>
                    <br>
                    <ul>
                        <li> - DJ dan band</li>
                        <li> - Sound system profesional</li>
                        <li> - 12 jam pemotretan</li>
                        <li> - 6 orang pemusik</li>
                    </ul>',
                'gambar' => '1.png',
                'jenis_paket_id' => 4, // Entertaiment
            ],

            // Dekorasi (jenis_paket_id = 5)
            [
                'nama' => 'Paket Dekorasi Basic',
                'slug' => Str::slug('Paket Dekorasi Basic'),
                'nominal' => 10000000,
                'diskon' => 0,
                'keterangan' => '<p>Paket dekorasi pelaminan dengan bunga segar standar, termasuk 4 jam pemotretan dan 2 orang pemusik.</p>
                    <br>
                    <ul>
                        <li> - Dekorasi pelaminan</li>
                        <li> - Bunga segar standar</li>
                        <li> - 4 jam pemotretan</li>
                        <li> - 2 orang pemusik</li>
                    </ul>',
                'gambar' => '1.png',
                'jenis_paket_id' => 5, // Dekorasi
            ],
            [
                'nama' => 'Paket Dekorasi Silver',
                'slug' => Str::slug('Paket Dekorasi Silver'),
                'nominal' => 15000000,
                'diskon' => 0,
                'keterangan' => '<p>Paket dekorasi pelaminan modern dengan lighting, termasuk 8 jam pemotretan dan 4 orang pemusik.</p>
                    <br>
                    <ul>
                        <li> - Dekorasi pelaminan modern</li>
                        <li> - Lighting</li>
                        <li> - 8 jam pemotretan</li>
                        <li> - 4 orang pemusik</li>
                    </ul>',
                'gambar' => '1.png',
                'jenis_paket_id' => 5, // Dekorasi
            ],
            [
                'nama' => 'Paket Dekorasi Gold',
                'slug' => Str::slug('Paket Dekorasi Gold'),
                'nominal' => 25000000,
                'diskon' => 0,
                'keterangan' => '<p>Paket dekorasi eksklusif dengan bunga premium yang disusun oleh perancang dekorasi profesional. Dekorasi ini dilengkapi dengan peralatan yang lengkap dan modern, seperti lighting, sound system, dan peralatan pemotretan yang lengkap.</p>
                    <h4>Rangkuman</h4>
                    <br>
                    <ul>
                        <li> - Dekorasi pelaminan dengan bunga premium</li>
                        <li> - Lighting dan sound system yang modern</li>
                        <li> - 12 jam pemotretan</li>
                        <li> - 6 orang pemusik</li>
                    </ul>',
                'gambar' => '1.png',
                'jenis_paket_id' => 5, // Dekorasi
            ],

            // Dokumentasi (jenis_paket_id = 6)
            [
                'nama' => 'Paket Dokumentasi Basic',
                'slug' => Str::slug('Paket Dokumentasi Basic'),
                'nominal' => 5000000,
                'diskon' => 0,
                'keterangan' => '<p>Paket dokumentasi sederhana yang dilengkapi dengan peralatan yang standard. Paket ini termasuk 2 orang pemusik dan 4 jam pemotretan.</p>
                    <h4>Rangkuman</h4>
                    <br>
                    <ul>
                        <li> - 4 jam pemotretan</li>
                        <li> - 2 orang pemusik</li>
                    </ul>',
                'gambar' => '1.png',
                'jenis_paket_id' => 6, // Dokumentasi
            ],
            [
                'nama' => 'Paket Dokumentasi Silver',
                'slug' => Str::slug('Paket Dokumentasi Silver'),
                'nominal' => 10000000,
                'diskon' => 0,
                'keterangan' => '<p>Paket dokumentasi yang dilengkapi dengan peralatan yang modern. Paket ini termasuk 8 jam pemotretan dan video.</p>
                    <h4>Rangkuman</h4>
                    <br>
                    <ul>
                        <li> - 8 jam pemotretan</li>
                        <li> - Video</li>
                    </ul>',
                'gambar' => '1.png',
                'jenis_paket_id' => 6, // Dokumentasi
            ],
            [
                'nama' => 'Paket Dokumentasi Gold',
                'slug' => Str::slug('Paket Dokumentasi Gold'),
                'nominal' => 20000000,
                'diskon' => 0,
                'keterangan' => '<p>Paket dokumentasi yang dilengkapi dengan peralatan yang lengkap dan modern. Paket ini termasuk full day pemotretan dan video cinematic.</p>
                    <h4>Rangkuman</h4>
                    <br>
                    <ul>
                        <li> - Full day pemotretan</li>
                        <li> - Video cinematic</li>
                    </ul>',
                'gambar' => '1.png',
                'jenis_paket_id' => 6, // Dokumentasi
            ],

        ];

        Paket::insert($pakets);
    }
}

