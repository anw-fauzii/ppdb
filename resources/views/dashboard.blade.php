@extends('layouts.app2')

@section('title')
    <title>Beranda</title>
@endsection

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-home icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Hallo {{Auth::user()->name}} !!
                    <div class="page-title-subheading">
                        Selamat datang di sistem Penerimaan Peserta Didik Baru
                    </div>
                </div>
            </div>  
        </div> 
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Alur Penerimaan peserta didik baru</h5>
            <div class="vertical-time-icons vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                <div class="vertical-timeline-item vertical-timeline-element">
                    <div>
                        <div class="vertical-timeline-element-icon bounce-in">
                            <div class="timeline-icon border-primary">
                                <i class="pe-7s-note2"></i>
                            </div>
                        </div>
                        <div class="vertical-timeline-element-content bounce-in">
                            <p>Langkah Pertama</p>
                            <h4 class="timeline-title mt-2">Mengisi Formulir Pendaftaran</h4>
                            <p>Isi setiap formulir dengan benar dan sesuai dengan identitas diri ananda.</p>
                        </div>
                    </div>
                </div>
                <div class="vertical-timeline-item vertical-timeline-element">
                    <div>
                        <div class="vertical-timeline-element-icon bounce-in">
                            <div class="timeline-icon border-primary">
                                <i class="pe-7s-id"></i>
                            </div>
                        </div>
                        <div class="vertical-timeline-element-content bounce-in">
                            <p>Langkah Kedua</p>
                            <h4 class="timeline-title mt-2">Unggah Dokumen Kependudukan</h4>
                            <p>Unggah dokumen kependudukan dengan benar dan sesuai dengan identitas diri ananda.</p>
                        </div>
                    </div>
                </div>
                <div class="vertical-timeline-item vertical-timeline-element">
                    <div>
                        <div class="vertical-timeline-element-icon bounce-in">
                            <div class="timeline-icon border-primary">
                                <i class="pe-7s-cloud-upload"></i>
                            </div>
                        </div>
                        <div class="vertical-timeline-element-content bounce-in">
                            <p>Langkah Ketiga</p>
                            <h4 class="timeline-title mt-2">Ajukan Pendaftaran</h4>
                            <p>Pilih gelombang pendaftaran dan pilih jursan yang anda inginkan di menu pendaftaran.</p>
                        </div>
                    </div>
                </div>
                <div class="vertical-timeline-item vertical-timeline-element">
                    <div>
                        <div class="vertical-timeline-element-icon bounce-in">
                            <div class="timeline-icon border-primary">
                                <i class="pe-7s-speaker"></i>
                            </div>
                        </div>
                        <div class="vertical-timeline-element-content bounce-in">
                            <p>Langkah Keempat</p>
                            <h4 class="timeline-title mt-2">Tunggu Pengumuman</h4>
                            <p>Panitia akan mengumumkan hasil seleksi penerimaan peserta didik baru di menu pendaftaran.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection