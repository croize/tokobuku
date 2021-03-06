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
    <li class="active">{{$sa->buku}}</li>
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
    <form class="form-horizontal" action="/buku/{{$sa->id_buku}}" method="post">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="put">
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Judul </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Judul" value="{{$sa->judul}}" name="judul" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> NO ISBN </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="NO ISBN" name="noisbn" value="{{$sa->noisbn}}" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Penulis </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Penulis" name="penulis" value="{{$sa->penulis}}" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Penerbit </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Penerbit" name="penerbit" value="{{$sa->penerbit}}" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tahun </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Tahun" name="tahun" value="{{$sa->tahun}}" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Stok </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Stok" name="stok" value="{{$sa->stok}}" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Harga Pokok </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Harga Pokok" name="harga_pokok" value="{{$sa->harga_pokok}}" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Harga Jual </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Harga Jual" name="harga_jual" value="{{$sa->harga_jual}}" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> PPN </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="PPN" name="ppn" value="{{$sa->ppn}}" class="col-xs-10 col-sm-8" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Diskon </label>

        <div class="col-sm-9">
          <input type="text" id="form-field-1" placeholder="Diskon" name="diskon" value="{{$sa->diskon}}" class="col-xs-10 col-sm-8" />
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
