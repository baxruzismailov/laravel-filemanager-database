@include('filemanager::layouts.header')
<div id="filemanager-bi">
    @include('filemanager::layouts.setting')
    @yield('modal')
    @include('filemanager::layouts.navbar')
    <div id="filemanager-bi-container">
        @include('filemanager::layouts.menu')
        <section id="filemanager-bi-content">
            @yield('content')
        </section>
    </div>
    @include('filemanager::layouts.pswp')
    @include('filemanager::layouts.data')
</div>
@include('filemanager::layouts.footer')

