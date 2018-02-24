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
                      <td>0.00 MD(oB)</td>
                    </tr>
                    <tr>
                      <td>No of files:</td>
                      <td>0</td>
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
                  <table>
                    <tr>
                      <td>Total Size:</td>
                      <td>0.00 MD(oB)</td>
                    </tr>
                    <tr>
                      <td>No of files:</td>
                      <td>0</td>
                    </tr>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
