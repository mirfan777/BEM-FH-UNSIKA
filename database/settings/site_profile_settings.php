<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration {
    public function up(): void
    {
        $this->migrator->add('site_profile.logo', 'default-logo.png');
        $this->migrator->add('site_profile.name', 'PRAGYA DHARMA');
        $this->migrator->add('site_profile.description', 'BEM-KM FH Unsika merupakan lembaga eksekutif mahasiswa Fakultas Hukum Universitas Singaperbangsa Karawang yang berperan sebagai wadah aspirasi, penggerak perjuangan, serta pengembang potensi mahasiswa menuju keadilan dan kesejahteraan yang inklusif.');
        $this->migrator->add('site_profile.whatsapp', '081234567890');
        $this->migrator->add('site_profile.about', 'Dalam menjalankan perannya, BEM-KM FH Unsika berlandaskan visi untuk menjadi organisasi yang unggul dalam memperjuangkan keadilan inklusif demi kesejahteraan dan pengembangan mahasiswa. Misi kami mencakup pembangunan internal yang berdaya saing, komunikasi yang efektif, peran aktif dalam isu sosial politik, serta kolaborasi lintas bidang dan lembaga. Melalui berbagai program kerja dan kegiatan kolaboratif, kami berupaya menciptakan budaya kesejahteraan yang merata dan lingkungan kampus yang harmonis, tanpa memandang latar belakang atau kepentingan apa pun.');
        $this->migrator->add('site_profile.vision', 'lorem ipsum dolor sit amet, consectetur adipiscing elit.');
        $this->migrator->add('site_profile.mission', 'lorem ipsum dolor sit amet, consectetur adipiscing elit.');
        $this->migrator->add('site_profile.alamat', 'Jl. Contoh Alamat No.123, Kota Contoh, Negara Contoh');
        $this->migrator->add('site_profile.email', 'example@mail.com');
        $this->migrator->add('site_profile.twitter', 'https://twitter.com/example');
        $this->migrator->add('site_profile.facebook', 'https://facebook.com/example');
        $this->migrator->add('site_profile.instagram', 'https://instagram.com/example');
        $this->migrator->add('site_profile.tiktok', 'https://tiktok.com/@example');
        $this->migrator->add('site_profile.youtube', 'https://youtube.com/channel/example');
    }
};
