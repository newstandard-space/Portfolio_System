<div class="sidebar">
    <div class="sidebar-title">ポートフォリオ<br>管理画面</div>
    <div class="sidebar-menu-dev">
        <ul class="sidebar-menu">
            <li id="about"><a href="{{route('admin.about.index')}}">Aboutページ</a></li>
            <li id="work"><a href="{{route('admin.work.index')}}">Workページ</a></li>
        </ul>
    </div>
    <input type="hidden" name="hidden_url" value="{{ request()->path() }}" id="hidden_url">
</div>
<script>
    $(function () {
        var path = $('#hidden_url');
        var sidebar_menu_list = $('.sidebar-menu').children().attr('id');
        console.log(sidebar_menu_list);
    });
</script>