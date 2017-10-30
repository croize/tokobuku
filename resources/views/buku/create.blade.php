@extends('layout.app')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
  <ul class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <a href="/home">Home</a>
    </li>

    <li>
      <a href="/angsuran">Buku</a>
    </li>
    <li class="active">Input Buku</li>
  </ul><!-- /.breadcrumb -->
</div>
<div class="page-header">
  <h1>
    Buku
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Isi data dengan benar
    </small>
  </h1>
</div><!-- /.page-header -->
  <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <form class="form-horizontal" action="/buku" method="post">
      {{csrf_field()}}
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Judul </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Judul" name="judul" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> NO ISBN </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="NO ISBN" name="noisbn" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Penulis </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Penulis" name="penulis" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Penerbit </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Penerbit" name="penerbit" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tahun </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Tahun" name="tahun" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> STOK </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="STOK" name="stok" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Harga Pokok </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Harga Pokok" name="harga_pokok" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Harga Jual </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Harga Jual" name="harga_jual" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> PPN </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="PPN" name="ppn" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Diskon </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Diskon" name="diskon" class="col-xs-10 col-sm-8" />
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
