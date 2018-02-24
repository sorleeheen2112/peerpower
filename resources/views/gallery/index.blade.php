@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gallery</div>

                <div class="card-body">
                  <form action="/file-upload"
                        class="dropzone"
                        id="my-awesome-dropzone">
                        <div class="icondropzone">
                        <i class="fas fa-cloud-upload-alt fa-5x"></i>
                      </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
