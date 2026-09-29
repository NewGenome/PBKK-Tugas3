@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8 md:p-12 mb-6">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight mb-4">
            Kampus Perjuangan dan kental dengan semangat patriotik ala Arek ITS
        </h1>
        <p class="text-lg text-gray-600">
            Selamat datang di website <span class="font-semibold text-gray-800">Profil Akademis Mahasiswa ITS (PAMITS)</span>! <br>
            Surabaya
        </p>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <p class="text-sm text-gray-500 mb-2">Lokasi</p>
        <p class="text-base font-semibold text-gray-800">
            Jl. Raya ITS, Keputih, Kecamatan Sukolilo, Kota Surabaya, Jawa Timur 60111
        </p>
    </div>
    
    <h3 class="text-xl font-bold mt-8 mb-4"></h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <x-info-card title="Fakultas" value="8" />
    <x-info-card title="Program Studi" value="42" />
    <x-info-card title="Simetris" value="Ya" />
    
</div>
@endsection