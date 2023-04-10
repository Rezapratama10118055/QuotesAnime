@extends('layouts.app')
  
@section('content')

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
    <title>Search Anime</title>
</head>
<body>


<div class="container d-flex justify-content-center">
	<div class="card mt-5 p-4">
         <form action="{{ route('anime.search') }}" method="GET">
         <div class="input-group mb-3">
            <label for="anime" style="margin: 10px;">Anime : </label>
			<input type="text" class="form-control" name="anime" id="anime" value="{{ request('anime') }}" placeholder="Contoh : naruto">
            <label for="anime" style="margin : 10px;">Page : </label>
			<input type="number"  class="form-control" name="page" id="page" value="{{ request('page', 1) }}">
			<div class="input-group-append" style="margin: 3px;"><button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button></div>
		</div>
        </form>

@if (!empty($getlist))
	<span class="text mb-4" style="margin: 10px;">Results : </span>

    @if (isset($getlist['result']) && count($getlist['result']) > 0)
        @foreach ($getlist['result'] as $item)
            <div class="d-flex flex-row justify-content-between mb-3">
                <div class="col-md-4">
                    <div class="d-flex flex-column p-3">
                        <p class="mb-1">English Quotes</p> 
                        <small class="text-muted">{{ $item['english'] }}</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column p-3">
                        <p class="mb-1">Indonesia Quotes</p> 
                        <small class="text-muted">{{ $item['indo'] }}</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column p-3">
                        <p class="mb-1">Character Quotes</p> 
                        <small class="text-muted">{{ $item['character'] }}</small>
                    </div>
                </div>
                <div class="price pt-3 pl-3">
                    <span class="mb-2" style="margin: 10px;">Anime</span>
                    <h5><span><i class="fas fa-scroll" style="margin: 10px;"></i></span>{{ $item['anime'] }}</h5>
                </div>
            </div>
        @endforeach
    @else
        <p>No results found.</p>
    @endif
@else
    <p>No data available.</p>
@endif



	</div>	
</div>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
</body>
</html>


@endsection