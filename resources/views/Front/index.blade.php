@extends('front.template')
@section('content')


@if(!empty($about_detail))
<section id="about">
    <h1>About Me</h1>
    <div class="work">
        <h2>{{ $about_detail->title }}</h2>
        <p>
            {!! nl2br(e($about_detail->description)) !!}
        </p>
    </div>
    <p class="text-center text-muted"><a href="{{ route('front.about.index') }}" class="default-a-tag">詳しく見る</a></p>
</section>
@endif
@if(!empty($work))
<section id="works">
    <h1>My Works</h1>
    <div class="work">
        <h2>{{ $work->title }}</h2>
        <p>
            {!! nl2br(e($work->description)) !!}
        </p>
    </div>
    <p class="text-center text-muted"><a href="{{ route('front.work.index') }}" class="default-a-tag">詳しく見る</a></p>
</section>
@endif

@endsection