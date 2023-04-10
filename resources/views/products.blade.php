@extends('layouts.app')
  
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Quotes</div>
                <div class="card-body">
                 @foreach ($getlistanime->result as $quote)
                   <div class="col-md-12">
                 <div class="card" style="margin:5px;">
                 <div class="card-header">
                 Quote
                 </div>
                 <div class="card-body">
                <blockquote class="blockquote mb-0">
                <p>Dari Anime : {{ $quote->anime }}</p>
                <p>Jumlah Qoutes : {{ $quote->totalKata }}</p>
    </blockquote>
  </div>
</div>
</div>



 
  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
@endsection