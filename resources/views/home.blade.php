@extends('layout.app')

@section('main_content')
    <section class="main_content">
      @foreach ($data as $item)
      <a href="{{ route('card-info') }}" class="card">
        <div>
          <img src="{{$item['thumb']}}">
        </div>
        <h3>{{ $item['series'] }}</h3>
      <a/>
      @endforeach
      <div class="main-btn">
        <button>load More</button>
      </div>
    </section>
@endsection

