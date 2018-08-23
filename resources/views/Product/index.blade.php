@extends('Layout.layouts')
@section('page')
<div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Page Product
        <small>Simple Laravel Blog</small>
      </h1>

      <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Namabarang</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->namabarang}}</td>
                        <td>{{$product->kategori}}</td>
                        <td>{{$product->deskripsi}}</td>
                        <td><a class="btn btn-success" href="{{action('ProductController@edit', $product->id)}}">Edit</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
      </div>
</div>
@endsection