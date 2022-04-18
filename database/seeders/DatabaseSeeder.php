<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


      

        User::factory(5)->create();

     
        Category::create([
            'name' => 'Japanese',
            'slug' => 'japanese'
        ]);

        // Post::factory(20)->create();

        Post::create([
            'title' => 'POP ART TOWN',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'pop-art-town',
            'excerpt' => 'After Rain adalah sebuah komunitas peminat kebudayaan Jepang berdiri semenjak 2018 dengan orang – orang yang sudah menyukai budaya Jepang semenjak menempuh jenjang sekolah formal',
            'body' => 'After Rain adalah sebuah komunitas peminat kebudayaan Jepang berdiri semenjak 2018 dengan orang – orang yang sudah menyukai budaya Jepang semenjak menempuh jenjang sekolah formal.After Rain mendukung berbagai macam minat dan bakat dari para anggota komunitas seperti : Penyanyi,Modelling,Cosplayer,Vtuber,dan para seniman digital maupun traditional art.Menjunjung tinggi kreativitas dan kekompakan dari komunitas maka kami dari komunitas After Rain ingin menambah Brand Awarness dari komunitas kami dengan mengadakan sebuah event yang berjudul POP ART TOWN.Pop Art Town adalah sebuah event gagasan dari komunitas penggemar kebudayaan jepang bernama  After Rain.Pop Art Town Indonesia atau bisa disingkat PAT.ID adalah event yang akan mengangkat bermacam – macam konsep event,dilatar belakangi oleh orang – orang yang sudah berpengalaman di bidang event di Bali selama beberapa tahun terakhir.Event kali ini akan membawa konsep Kebudayaan Jepang menjadi nilai utama dengan mempertimbangkan banyaknya peminat kebudayaan Jepang di Bali.Oleh karena itu terbentuklah gagasan untuk membangkitkan event – event kebudayaan Jepang yang ada di Bali.Dengan adanya event ini kami dari komunitas After Rain berharap akan adanya banyak peminat dengan kebudayaan Jepang terutama di wilayah Bali.Nama tema acara : Kibo No Teja : Cahaya Harapan : Light of Hope Filosofinya adalah sebuah acara yang mengimplentasikan adanya harapan setelah banyaknya hal yang terjadi selama ini. Event akan membawa sebuah angin baru bagi dunia event khususnya di Bali dengan mengangkat akulturasi Budaya Jepang dan Bali, sesuai dengan namanya bahwa Kibo dalam bahasa Jepang adalah Harapan dan Teja adalah Cahaya dalam Bahasa Bali. Dengan membawa semangat kedua budaya diharapkan terjadinya saling mengenal budaya satu sama lain, dan akan membawa arah event menjadi acara yang memajukan dan memperkenalkan budaya kedua negara.'
        ]);
       
    }
}
