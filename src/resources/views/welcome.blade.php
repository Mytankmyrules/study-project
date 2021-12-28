@extends('layouts.main')

@section('content')  
<div class="row">
        <div onclick="location.href='/BA'" style="cursor: pointer"  class="col">
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
        <div onclick="location.href='/DEV'" style="cursor: pointer" class="col">
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
        <div onclick="location.href='/QA'" style="cursor: pointer" class="col">
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