@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gallery</div>

                <div class="card-body">

                    <form id="my-dropzone" action="/fileupload" class="dropzone">
@csrf
                      <div class="icondropzone">
                        <i class="fas fa-cloud-upload-alt fa-5x"></i>
                      </div>
                      </form>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Size</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody v-for="item in images" >
                        <tr>
                          <td>@{{item.image_name}}</td>
                          <td>@{{item.image_name}}</td>
                          <td>@{{item.image_size}}</td>
                          <td>@{{item.id}}</td>

                        </tr>
                      </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>
</div>

@endsection
