@extends('layouts.app')

@section('content')
<div id="app" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gallery</div>

                <div class="card-body">
                  <!--<form action="/file-upload"
                        class="dropzone"
                        id="my-awesome-dropzone">
                        <div class="icondropzone">
                        <i class="fas fa-cloud-upload-alt fa-5x"></i>
                      </div>
                    </form> -->

                    <form action="/fileupload" class="dropzone">
                      @csrf

                      <div class="fallback">
                        <input name="file" type="file" accept="image/jpeg, image/png"  multiple />
                      </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
