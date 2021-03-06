@extends('layouts.main')

@section('content')

@guest
<div class="container mt-5 mb-5">
      <h2 class="text-justify">IT.Forum - this is a place, where developers from all areas of programming can exchange experience
                              and be able to help each other in solving difficult tasks. It doesn't matter 
                              whether you are discovering the world of development or you are already a programming guru - 
                              here everyone will find useful information for themselves.
      </h2>
  <body>
      <style>
            .blink {
              animation: blink 1s infinite; /* Параметры анимации */
            }
            @keyframes blink {
              from { opacity: 1; /* Непрозрачный текст */ }
              to { opacity: 0; /* Прозрачный текст */ }
            }
      </style>
      <h4 style="text-align:center" class="blink text-danger">You must register/login to use IT.Forum</h4>
  </body>
</div>
@endguest 

@auth
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
@endauth

@stop