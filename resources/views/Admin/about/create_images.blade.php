@extends('admin.template')
@section('content')



<div class="page-content">

    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.about.index')}}">Aboutページ</a></li>
                <li class="breadcrumb-item active" aria-current="page">About新規登録ページ</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-sm-10">
                <h1>About新規登録ページ</h1>
            </div>
        </div>

        <ul class="nav nav-tabs mb-3 mt-3">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('admin.about.create')}}">基本情報</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-dark" href="#" tabindex="-1" aria-disabled="true">画像情報</a>
            </li>
        </ul>

    </div>

</div>



@endsection