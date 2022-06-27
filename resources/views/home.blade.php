@extends('layout.app')

@section('main_content')
    <section class="main_content">
      
        @foreach ($data as $item)
        <div class="card">
          <div>
              <img src="{{$item['thumb']}}">
          </div>
          <h3>{{ $item['series'] }}</h3>
        </div>
      @endforeach
    
    </section>
@endsection

