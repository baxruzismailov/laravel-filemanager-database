@include('filemanager::layouts.header')
<div id="filemanager-bi">
    @yield('modal')
    @include('filemanager::layouts.navbar')
    <div class="filemanager-bi-container">
        @include('filemanager::layouts.menu')
        <section class="filemanager-bi-content">
            @yield('content')
        </section>
    </div>
</div>
@include('filemanager::layouts.footer')

