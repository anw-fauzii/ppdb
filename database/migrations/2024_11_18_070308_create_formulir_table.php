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
        Schema::create('formulir', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('nama_lengkap', 100);
            $table->integer('anak_ke');
            $table->integer('jumlah_saudara');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->string('asal_sekolah', 100);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->bigInteger('nik')->unique()->nullable();
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->enum('agama', ['1', '2', '3', '4', '5', '6', '7']);
            $table->string('alamat');
            $table->string('rt', 5)->nullable();
            $table->string('rw', 5)->nullable();
            $table->string('desa', 20)->nullable();
            $table->string('kecamatan', 20)->nullable();
            $table->string('kabupaten', 20)->nullable();
            $table->string('provinsi', 20)->nullable();
            $table->string('kode_pos', 20)->nullable();
            $table->enum('jenis_tinggal', ['1', '2', '3','4','5','6']);
            $table->enum('penerima_pks', ['Ya', 'Tidak']);
            $table->enum('kewarganegaraan', ['WNI', 'WNA']);
            $table->bigInteger('telepon')->nullable();
            $table->bigInteger('whatsapp')->nullable();
            $table->bigInteger('nik_ayah')->unique()->nullable();
            $table->string('nama_ayah', 30)->nullable();
            $table->integer('lahir_ayah')->nullable();
            $table->string('pendidikan_ayah', 30)->nullable();
            $table->string('pekerjaan_ayah', 30)->nullable();
            $table->string('penghasilan_ayah', 30)->nullable();
            $table->bigInteger('nik_ibu')->unique()->nullable();
            $table->string('nama_ibu', 30)->nullable();
            $table->integer('lahir_ibu')->nullable();
            $table->string('pendidikan_ibu', 30)->nullable();
            $table->string('pekerjaan_ibu', 30)->nullable();
            $table->string('penghasilan_ibu', 30)->nullable();
            $table->bigInteger('nik_wali')->unique()->nullable();
            $table->string('nama_wali', 30)->nullable();
            $table->integer('lahir_wali')->nullable();
            $table->string('pendidikan_wali', 30)->nullable();
            $table->string('pekerjaan_wali', 30)->nullable();
            $table->string('penghasilan_wali', 30)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulir');
    }
};
