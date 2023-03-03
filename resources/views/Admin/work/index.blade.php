@extends('admin.template')
@section('content')



<div class="page-content">

    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <h1>Workページ</h1>
            </div>
            <div class="col-sm-2 text-right mt-1">
                <a href="{{ route('admin.work.create') }}" class="btn btn-primary">
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
                @foreach($work_list as $work)
                <tr id="sortable-item-{{ $work->id }}">
                    <td>{{$work->title}}</td>
                    <td>{!! nl2br(e($work->description)) !!}</td>
                    <!-- <td>{{$work->updated_at}}</td> -->
                    <td><a href="{{ route('admin.work.edit', $work->id) }}"
                            class="btn btn-secondary btn-sm">詳細</a></td>
                    <td><i class="bi bi-arrow-down-up sort-item-icon"></i></td>
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

                workDetailSortUpdate(id_list);
            }
        });
    });

    function workDetailSortUpdate(id_list) {
        $.ajax({
            url: 'work/sort_update',
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
            alert('並び順の変更が失敗しました。');
        });
    }
</script>


@endsection