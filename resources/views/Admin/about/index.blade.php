@extends('admin.template')
@section('content')



<div class="page-content">

    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <h1>Aboutページ</h1>
            </div>
            <div class="col-sm-2 text-right mt-1">
                <a href="{{ route('admin.about.create') }}" class="btn btn-primary">
                    新規登録
                </a>
            </div>
        </div>

        <table class="table mt-3">
            <thead class="table-light">
                <tr>
                    <th class="col-md-2">タイトル</th>
                    <th class="col-md-8">詳細</th>
                    <!-- <th class="col-md-2">最終更新日</th> -->
                    <th class="col-md-1">詳細</th>
                    <th class="col-md-1">順番</th>
                </tr>
            </thead>
            <tbody id="sortable">
                @foreach($about_detail_list as $about_detail)
                <tr id="sortable-item-{{ $about_detail->id }}">
                    <td>{{$about_detail->title}}</td>
                    <td>{!! nl2br(e($about_detail->description)) !!}</td>
                    <!-- <td>{{$about_detail->updated_at}}</td> -->
                    <td><a href="{{ route('admin.about.edit', $about_detail->id) }}"
                            class="btn btn-secondary btn-sm">詳細</a></td>
                    <td><i class="bi bi-arrow-down-up"></i></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
<script>
    $(function () {
        $("#sortable").sortable({
            handle: 'i',

            update: function(){

                var tr_list = $('#sortable').sortable("toArray");
                var id_list = [];
                tr_list.forEach(function(ele, index) {
                    id_list.push(ele.split('-')[2]);
                });

                aboutDetailSortUpdate(id_list);
            }
        });
    });

    function aboutDetailSortUpdate(id_list) {
        $.ajax({
            url: 'about/sort_update',
            type: 'POST',
            dataType: 'json',
            data: {
                id_list: id_list,
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')//④
            },
        }).done(function (json) {
            alert('並び順を変更しました。');
        }).fail(function (json) {
            console.log(json);
            alert('並び順の変更が失敗しました。');
        });
    }
</script>


@endsection