@extends('Layout.layouts')
@section('page')
<div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Page Home
        <small>Simple Laravel Edit Product</small>
      </h1>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
            {{ Form::open(['action' => ['ProductController@update', $id], 'method' => 'POST'])}}
                   @method('put')
                    <div class="form-group">
                        {{ Form::label('namabarang', 'Nama Barang')}}
                        {{ Form::text('namabarang',$product->namabarang, array('class' => 'form-control'))}}
                    </div>

                    <div class="form-group">
                        {{ Form::label('kategori', 'Kategori')}}
                        {{ Form::text('kategori',$product->kategori, array('class' => 'form-control'))}}
                    </div>

                     <div class="form-group">
                        {{ Form::label('deskripsi', 'Deskripsi')}}
                        {{ Form::text('deskripsi',$product->deskripsi, array('class' => 'form-control'))}}
                    </div>

                    {{ Form::submit('Submit', array('class' => 'btn btn-success'))}}
            {{ Form::close() }}
        </div>
     </div>
</div>
@endsection