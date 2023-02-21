@extends('admin.template')
@section('content')



<div class="page-content">


    <div class="container">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.work.index')}}">Workページ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Work詳細ページ</li>
            </ol>
        </nav>


        <div class="row">
            <div class="col-sm-10">
                <h1>Work詳細ページ</h1>
            </div>
        </div>

        <ul class="nav nav-tabs mb-3 mt-3">
            <li class="nav-item">
                <a class="nav-link active text-dark" aria-current="page" href="#">基本情報</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.work.edit.images', $work_detail->id)}}" tabindex="-1"
                    aria-disabled="true">画像情報</a>
            </li>
        </ul>


        <form method="POST" action="{{route('admin.work.update')}}">
            @csrf
            <input type="hidden" value="{{$work_detail->id}}" name="id">
            <div class="mb-3">
                <label for="TitleInputText" class="form-label">タイトル</label>
                <input type="Text" class="form-control" id="TitleInputText" value="{{$work_detail->title}}"
                    name="title">
            </div>
            <div class="mb-3">
                <label for="DescriptionFormControlTextarea1" class="form-label">詳細</label>
                <textarea class="form-control" id="DescriptionFormControlTextarea1" rows="7"
                    name="description">{{$work_detail->description}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">更新</button>
        </form>

        <hr class="mt-5 mb-5">

        <form method="POST" action="{{route('admin.work.delete')}}">
            @csrf
            <input type="hidden" name="id" value="{{$work_detail->id}}">
            <input type="hidden" name="_method" value="DELETE">
            <button id="delete_btn" type="submit" class="btn btn-danger">削除</button>
        </form>

    </div>

</div>
<script>
    $("#delete_btn").click(function () {
        if (window.confirm('削除しますか？')) {
            return true;
        } else {
            return false;
        }
    });
</script>


@endsection