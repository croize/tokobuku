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
    Distributor
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Isi data dengan benar
    </small>
  </h1>
</div><!-- /.page-header -->
  <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <form class="form-horizontal" action="/distributor/{{$sa->id_distributor}}" method="post">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="put">
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Distributor </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Nama Distributor" value="{{$sa->nama_distributor}}" name="nama_distributor" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alamat </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Alamat" name="alamat" value="{{$sa->alamat}}" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Telepon </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Telepon" name="telepon" value="{{$sa->telepon}}" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <div class="center">
          <button class="btn btn-info" type="submit">
            <i class="ace-icon fa fa-check bigger-110"></i>
            Submit
          </button>
        </div>
      </div>
    </form>
  </div><!-- /.col -->
@endsection
