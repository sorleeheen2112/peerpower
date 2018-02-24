@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Disk Usage Overview</div>

                <div class="card-body">
                  <table>
                    <tr>
                      <td>Total Size:</td>
                      <td>@{{sum}}</td>
                    </tr>
                    <tr>
                      <td>No of files:</td>
                      <td>@{{c_sum}}</td>
                    </tr>
                  </table>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Disl Usage Compositions </div>

                <div class="card-body">
                  <table class="table" v-if="c_sum > 0">
                    <thead>
                      <tr>
                        <th>Type</th>
                        <th>No of files</th>
                        <th>Size</th>
                      </tr>
                    </thead>
                    <tbody >
                      <tr>
                        <td>image/jpeg</td>
                        <td>@{{c_jpg}}</td>
                        <td>@{{sum_jpg}}</td>
                      </tr>
                      <tr>
                        <td>image/png</td>
                        <td>@{{c_png}}</td>
                        <td>@{{sum_png}}</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="nodata" v-if="c_sum == 0">
                    No data
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
