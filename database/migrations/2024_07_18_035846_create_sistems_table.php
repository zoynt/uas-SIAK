<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sistems', function (Blueprint $table) {
            $table->id();
            $table->string('no_ktp');
            $table->string('nama');
            $table->enum('kelamin', ['laki-laki','perempuan']);
            $table->enum('agama', ['islam','protestan','katholik','hindu','budha','khonghucu']);
            $table->enum('gol_darah', ['A','AB','O','B']);
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('nama_dusun');
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('no_telepon');
            $table->string('tempat_lhr');
            $table->date('tgl_lhr');
            $table->string('foto')->nullable();
            $table->string('kl_fisik');
            $table->string('kl_mental');
            $table->string('pendidikan');
            $table->enum('status_nikah',['nikah','belum nikah']);
            $table->enum('warga_negara',['WNI','WNA']);
            $table->enum('status_hidup',['hidup','mati']);
            $table->timestamps();
            
            // $table->unsignedBigInteger('pekerjaan_id')->nullable();
            $table->foreignId('pekerjaan_id')->constrained()->onDelete('cascade');
        });

        // Schema::table('sistems', function (Blueprint $table) {
        //     $table->foreign('pekerjaan_id')
        //           ->references('id')
        //           ->on('pekerjaans')
        //           ->onDelete('set null');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sistems', function (Blueprint $table) {
            $table->dropForeign(['pekerjaan_id']);
        });

        Schema::dropIfExists('sistems');
    }
};
