@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Portfolio</h1>
@stop

@section('content')

<div class="box">
    <div class="box-header">
      <h3 class="box-title">Portfolio</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>Name</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($portfolios as $portfolio)
              <tr data-toggle="collapse" data-target="#{{ $portfolio->id }}" role="button">
                  <td>
                      {{ $portfolio->title }}
                      <div class="collapse expand" id="{{ $portfolio->id }}">
                          <div class="card card-body">
                              <a href="{{ route('admin.portfolio.edit', ['id' => $portfolio->id ])}}"> 
                                <i class="fa fa-edit blue-square"></i> 
                              </a> 
                              
                              <a href="{{ route('admin.portfolio.delete', ['id' => $portfolio->id ])}}" onclick="return confirm('When delting this u')"> 
                                <i class="fa fa-close red-square"></i> 
                              </a> 
                          </div>
                      </div>
                  </td>
                  
                  <td class="text-center">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                          Preview description
                      </button>

                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">{{ $portfolio->title }}</h4>
                            </div>
                            <div class="modal-body">
                            {!! $portfolio->description !!}
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                      <i class="fa fa-level-down right0" ></i>
                  </td>
              </tr>
            @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>Name</th>
            <th>Description</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
<!-- /.col -->
</div>

{!! Toastr::message() !!}

@stop