<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title'      => 'Revolusi AI di Dunia Programming: Apa yang Perlu Kamu Tahu?',
            'slug'       => 'revolusi-ai-di-dunia-programming',
            'thumbnail'  => 'https://picsum.photos/seed/tech1/1200/600',
            'tag'        => 'Teknologi',
            'author'     => 'Admin',
            'read_time'  => 5,
            'content'    => '
                <p>Dunia teknologi sedang mengalami perubahan besar. Jika dulu programmer harus menulis ribuan baris kode secara manual, kini <strong>Artificial Intelligence (AI)</strong> mulai mengambil peran sebagai asisten yang mampu membantu menulis, memperbaiki, bahkan menjelaskan kode secara otomatis.</p>

                <h2>AI Kini Menjadi "Pair Programmer"</h2>
                <p>Saat ini banyak developer menggunakan AI sebagai <em>pair programmer</em>. Tools berbasis AI mampu memberikan saran kode secara real-time, memperbaiki bug, hingga menghasilkan fungsi lengkap hanya dari deskripsi teks.</p>
                <p>Beberapa tools populer yang digunakan programmer antara lain:</p>
                <ul>
                    <li>GitHub Copilot</li>
                    <li>ChatGPT</li>
                    <li>Codeium</li>
                    <li>Amazon CodeWhisperer</li>
                </ul>

                <blockquote>
                    <p>"Developers using GitHub Copilot completed tasks up to 55% faster than those who did not use AI assistance."</p>
                    <p><strong>— GitHub Research, 2023</strong></p>
                </blockquote>

                <h2>AI Tidak Menggantikan Programmer</h2>
                <p>Banyak orang khawatir AI akan menggantikan pekerjaan programmer. Namun kenyataannya, AI lebih berperan sebagai alat bantu daripada pengganti.</p>
                <p>AI memang bisa menulis kode, tetapi masih membutuhkan manusia untuk:</p>
                <ul>
                    <li>Mendesain arsitektur sistem</li>
                    <li>Memahami kebutuhan bisnis</li>
                    <li>Mengambil keputusan teknis</li>
                    <li>Menjamin keamanan dan kualitas software</li>
                </ul>

                <blockquote>
                    <p>"AI won\'t replace developers. But developers who use AI will replace those who don\'t."</p>
                    <p><strong>— Thomas Dohmke, CEO GitHub</strong></p>
                </blockquote>

                <h2>Cara AI Mengubah Cara Belajar Programming</h2>
                <p>AI juga mengubah cara orang belajar coding. Dulu, ketika developer mengalami error, mereka harus mencari di Google, membuka Stack Overflow, atau membaca dokumentasi panjang. Sekarang, AI dapat langsung menjelaskan error, memberikan solusi, dan menunjukkan contoh kode.</p>

                <h2>Skill Programmer yang Akan Paling Dibutuhkan</h2>
                <p>Di era AI, fokus skill programmer juga mulai berubah. Beberapa skill yang semakin bernilai:</p>
                <ol>
                    <li><strong>Problem Solving</strong> — Kemampuan memahami masalah dan merancang solusi.</li>
                    <li><strong>System Design</strong> — Merancang sistem besar tetap membutuhkan manusia.</li>
                    <li><strong>AI Literacy</strong> — Memahami cara menggunakan AI tools dengan efektif.</li>
                    <li><strong>Critical Thinking</strong> — Mengevaluasi hasil kode yang dihasilkan AI.</li>
                </ol>

                <h2>Kesimpulan</h2>
                <p>Revolusi AI di dunia programming bukanlah ancaman, melainkan <strong>peluang besar</strong>. Di masa depan, programmer terbaik bukanlah yang menulis kode paling banyak — tetapi yang paling pintar memanfaatkan teknologi, termasuk AI.</p>
            ',
        ]);
    }
}
