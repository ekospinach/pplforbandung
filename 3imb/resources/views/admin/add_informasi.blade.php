@extends('admin.app')

@section('content')
  <section id="main-content">
          <section class="wrapper">
<div class="row mt">
<div class="col-md-12">
  <section class="task-panel tasks-widget">
              
  <div class="panel-body">
    <div class="task-content">

  {!! Form::open(['url' => '/admin/informasi/tambah' , 'class'=>'form-horizontal style-form', 'files'=>true]) !!}
      <div class='form-group'>
        <div class="controls" style="margin-left: 20px"><h3>Tambah Informasi</h3></div>
      </div>
      <div class='control-group'>
        <label class="col-sm-2 col-sm-2 control-label">{!! Form::label('judul','Judul:') !!}</label>
        <div class="col-sm-10">{!! Form::text('judul','',['required', 'placeholder' => 'Judul', 'class' => 'form-control']) !!}</div>
      </div><br><br><br>
      <div class='control-group'>
        <label class="col-sm-2 col-sm-2 control-label">{!! Form::label('konten','Konten:') !!}</label>
        <div class="col-sm-10">{!! Form::textarea('konten','',['required', 'class' => 'form-control','rows' => '3']) !!}</div>
      </div><br><br><br><br><br>
      <div class='control-group'>
        <label class="col-sm-2 col-sm-2 control-label">{!! Form::label('referensi','Referensi (opsional):') !!}</label>
        <div class="col-sm-10">{!! Form::text('referensi','',['placeholder' => 'referensi', 'class' => 'form-control']) !!}</div>
      </div><br><br><br>
      <div class='control-group'>
        <div class="controls">{!! Form::submit('Tambah Informasi',['class' => 'btn btn-warning form-control']) !!}</div>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
              
  </section>                      
</div><!-- /col-md-12-->   
</div>   
</section>
</section>
@stop