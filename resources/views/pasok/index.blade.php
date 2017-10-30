@extends('layout.app')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
  <ul class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <a href="/home">Home</a>
    </li>
    <li class="active">Pasok</li>
  </ul><!-- /.breadcrumb -->
</div>

<div class="col-xs-12">
  <h3 class="header smaller lighter blue">Pasok</h3>
  <a href="/pasok/create"><button class="btn btn-primary">
    <i class="ace-icon fa fa-pencil align-top bigger-125"></i>
    Create
  </button></a>
  <div class="clearfix">
    <div class="pull-right tableTools-container"></div>
  </div>

  <div class="table-header">
    Data Pasok
  </div>

  <!-- div.table-responsive -->

  <!-- div.dataTables_borderWrap -->
  <div>
    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Distributor</th>
          <th>Judul Buku</th>
          <th>Tanggal</th>
          <th>Jumlah</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        @foreach($sa as $su)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{$su->distributor['nama_distributor']}}</td>
          <td>{{$su->buku['judul']}}</td>
          <td>{{$su->tanggal}}</td>
          <td>{{$su->jumlah}}</td>
          <td>
            <div class="hidden-sm hidden-xs action-buttons">
              <a class="blue" href="/pasok/{{$su->id_pasok}}">
                <i class="ace-icon fa fa-search-plus bigger-130"></i>
              </a>

              <a class="green" href="/pasok/{{$su->id_pasok}}/edit">
                <i class="ace-icon fa fa-pencil bigger-130"></i>
              </a>

              <a class="red" href="{{url('pasok/delete',$su->id_pasok)}}">
                <i class="ace-icon fa fa-trash-o bigger-130"></i>
              </a>
            </div>

            <div class="hidden-md hidden-lg">
              <div class="inline pos-rel">
                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                  <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                </button>

                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                  <li>
                    <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                      <span class="blue">
                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                      </span>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                      <span class="green">
                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                      </span>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                      <span class="red">
                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
@section('jumlahdata')
  null, null,null,null,
@endsection
