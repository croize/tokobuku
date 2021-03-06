@extends('layout.app')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
  <ul class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <a href="/home">Home</a>
    </li>

    <li>
      <a href="/penjualan">Penjualan</a>
    </li>
    <li class="active">Input Penjualan</li>
  </ul><!-- /.breadcrumb -->
</div>
<div class="page-header">
  <h1>
    Penjualan
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Isi data dengan benar
    </small>
  </h1>
</div><!-- /.page-header -->
  <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <form class="form-horizontal" action="/penjualan" method="post">
      {{csrf_field()}}
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal </label>
        <div class="col-sm-6">
          <div class="input-group">
            <input type="text" placeholder="Tanggal" name="tanggal" class="form-control col-xs-10 col-sm-8" data-toggle="datepicker"><div data-toggle="datepicker"></div>
            <span class="input-group-addon">
              <i class="fa fa-calendar bigger-110"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Buku </label>
        <div class="col-sm-6">
          <select class="js-example-basic-single js-states form-control" name="id_buku">
            <option value="">--SELECT--</option>
            @foreach($sa as $buku)
            <option value="{{$buku->id_buku}}">{{$buku->judul}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kasir </label>
        <div class="col-sm-6">
          <select class="js-example-basic-single js-states form-control" name="id_kasir">
            <option value="">--SELECT--</option>
            @foreach($dis as $but)
            <option value="{{$but->id}}">{{$but->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jumlah</label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Jumlah" name="jumlah" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Total</label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Total" name="total" class="col-xs-10 col-sm-8" />
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
