@include('filemanager::layouts.header')
<div id="filemanager-bi">
    <div class="filemanager-bi-container">
        @include('filemanager::layouts.menu')
        <div class="filemanager-bi-content">
            @yield('content')
        </div>
    </div>
</div>
@include('filemanager::layouts.footer')

