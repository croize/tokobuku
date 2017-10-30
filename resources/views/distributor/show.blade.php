@extends('layout.app')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
  <ul class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <a href="/home">Home</a>
    </li>

    <li>
      <a href="/distributor">Distributor</a>
    </li>
    <li class="active">{{$sa->nama_distributor}}</li>
  </ul><!-- /.breadcrumb -->
</div>

<div class="page-header">
  <h1>
    Distributor View
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Berikut merupakan data data angsuran {{$sa->nama_distributor}}
    </small>
  </h1>
</div><!-- /.page-header -->
<div class="profile-user-info profile-user-info-striped">
  <div class="profile-info-row">
    <div class="profile-info-name"> Nama Distributor </div>

    <div class="profile-info-value">
      <span class="editable" id="username">{{$sa->nama_distributor}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Alamat </div>

    <div class="profile-info-value">
      {{$sa->alamat}}</span>
    </div>
  </div>

  <div class="profile-info-row">
    <div class="profile-info-name"> Telepon </div>

    <div class="profile-info-value">
      <span class="editable" id="age">{{$sa->telepon}}</span>
    </div>
  </div>
</div>

@endsection
