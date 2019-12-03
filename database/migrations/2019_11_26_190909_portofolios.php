<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Portofolios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_portofolios', function (Blueprint $table){
          $table->bigIncrements('id');
          $table->string('icon');
          $table->string('title');
          $table->text('content');

          $table->timestamps();
        });
// ini yang bawah lu isi sesuai sama elu aja itu apaan sir isinya
//service lu apaan aja?? oke pahambentar
        DB::table('tb_portofolios')->insert([
        'icon' => 'icon-style',
        'title' => 'Holiday Planning',
        'content'=> 'Membantu merencanakan liburan anda.',
        ]);

        DB::table('tb_portofolios')->insert([
            'icon' => 'icon-airport_shuttle"',
            'title' => 'Transportation',
            'content'=> 'Membantu mendapatkan tiket keberangkatan anda.',
            ]);
        
        DB::table('tb_portofolios')->insert([
            'icon' => 'icon-hotel',
            'title' => 'Hotel & Home Stay',
            'content'=> 'Membantu anda memilih & menyewa penginapan.',
                ]);

         DB::table('tb_portofolios')->insert([
            'icon' => 'icon-person',
            'title' => 'Travel Guide',
            'content'=> 'Menyediakan Travel Guide.',
                 ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('tb_portofolios');
    }
}
