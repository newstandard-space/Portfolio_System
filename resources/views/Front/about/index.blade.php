@extends('front.template')
@section('content')



<section id="about">
    <h1>About</h1>
    @foreach ($about_detail_list as $about_detail)
    <div class="work">
        <h2>{{ $about_detail->title }}</h2>
        <p>
            {!! nl2br(e($about_detail->description)) !!}
        </p>
    </div>
    @endforeach
</section>



@endsection