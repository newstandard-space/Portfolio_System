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
                <a class="nav-link active text-dark" aria-current="page" href="#">基本情報</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.about.create.images')}}" tabindex="-1" aria-disabled="true">画像情報</a>
            </li>
        </ul>

        <form method="POST" action="{{route('admin.about.store')}}">
            @csrf
            <div class="mb-3">
                <label for="TitleInputText" class="form-label">タイトル</label>
                <input type="Text" class="form-control" id="TitleInputText" name="title">
            </div>
            <div class="mb-3">
                <label for="DescriptionFormControlTextarea1" class="form-label">詳細</label>
                <textarea class="form-control" id="DescriptionFormControlTextarea1" rows="7"
                    name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">新規登録</button>
        </form>

    </div>

</div>



@endsection