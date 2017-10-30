@extends('layout.app')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
  <ul class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <a href="/home">Home</a>
    </li>

    <li>
      <a href="/buku">Buku</a>
    </li>
    <li class="active">{{$sa->judul}}</li>
  </ul><!-- /.breadcrumb -->
</div>

<div class="page-header">
  <h1>
    Buku View
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Berikut merupakan data data judul buku {{$sa->judul}}
    </small>
  </h1>
</div><!-- /.page-header -->
<div class="profile-user-info profile-user-info-striped">
  <div class="profile-info-row">
    <div class="profile-info-name"> Judul </div>

    <div class="profile-info-value">
      <span class="editable" id="username">{{$sa->judul}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> NO ISBN </div>

    <div class="profile-info-value">
      {{$sa->noisbn}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Penulis </div>

    <div class="profile-info-value">
      <span class="editable" id="age">{{$sa->penulis}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Penerbit </div>

    <div class="profile-info-value">
      <span class="editable" id="signup">{{$sa->penerbit}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Tahun </div>

    <div class="profile-info-value">
      {{$sa->tahun}}
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Stok </div>

    <div class="profile-info-value">
      {{$sa->stok}} buah
    </div>
  </div>
  <div class="profile-info-row">
    <div class="profile-info-name"> Harga Pokok </div>

    <div class="profile-info-value">
      Rp. {{$sa->harga_pokok}}
    </div>
  </div>
    <div class="profile-info-row">
      <div class="profile-info-name"> Harga Jual </div>

      <div class="profile-info-value">
        Rp. {{$sa->harga_jual}}
      </div>
    </div>
    <div class="profile-info-row">
      <div class="profile-info-name"> PPN </div>

      <div class="profile-info-value">
        Rp. {{$sa->ppn}}
      </div>
    </div>
    <div class="profile-info-row">
      <div class="profile-info-name"> Diskon </div>

      <div class="profile-info-value">
        {{$sa->diskon}} %
      </div>
    </div>
  </div>
</div>

@endsection
