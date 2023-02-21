@extends('front.template')
@section('content')



<section id="works">
    <h1>My Works</h1>
    @foreach ($work_list as $work)
    <div class="work">
        <h2>{{ $work->title }}</h2>
        <p>
            {!! nl2br(e($work->description)) !!}
        </p>
    </div>
    @endforeach
</section>



@endsection