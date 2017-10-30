@extends('layout.app')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
  <ul class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <a href="/home">Home</a>
    </li>

    <li>
      <a href="/pasok">Pasok</a>
    </li>
    <li class="active">{{$sa->distributor['nama_distributor']}}</li>
  </ul><!-- /.breadcrumb -->
</div>

<div class="page-header">
  <h1>
    Pasok View
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Berikut merupakan data pasok {{$sa->distributor['nama_distributor']}}
    </small>
  </h1>
</div><!-- /.page-header -->
<div class="profile-user-info profile-user-info-striped">
  <div class="profile-info-row">
    <div class="profile-info-name"> Nama Distributor </div>

    <div class="profile-info-value">
      <span class="editable" id="username">{{$sa->distributor['nama_distributor']}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Buku </div>

    <div class="profile-info-value">
      {{$sa->buku['judul']}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Jumlah </div>

    <div class="profile-info-value">
      <span class="editable" id="age">{{$sa->jumlah}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Tanggal </div>

    <div class="profile-info-value">
      <span class="editable" id="signup">{{$sa->tanggal}}</span>
    </div>
  </div>
</div>

@endsection
