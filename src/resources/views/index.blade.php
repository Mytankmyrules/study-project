@extends('layouts.main')

@section('content')  
<h3 style="text-align:center" class="text-danger">You must register/login to use IT.Forum</h3>
<div class="row">
        <div class="col">
          <div class="card shadow-lg" style="width: 417px; height: 420px">
            <img src="/images/BA.jpg" class="w-100" alt="Redirect to BA-room">
            <div class="card-body">
              <p class="card-text" style="font-size: 2em">BA</p>
              <div class="d-flex justify-content-between align-items-center">
               <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-lg" style="width: 416,9px; height: 420px">
          <img src="/images/DEV.jpg" class="w-100" alt="Redirect to DEV-room">
            <div class="card-body">
              <p class="card-text" style="font-size: 2em">DEV</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-lg" style="width: 417px; height: 420px">
          <img src="/images/QA.jpg" class="w-100" alt="Redirect to QA-room">
            <div class="card-body">
              <p class="card-text" style="font-size: 2em">QA</p>
              <div class="d-flex justify-content-between align-items-center">
                <small>9 mins</small>
              </div>
            </div>
          </div>
        </div>
</div>
@stop