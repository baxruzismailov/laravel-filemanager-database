@include('filemanager::layouts.header')
<div id="filemanager-bi">
    @include('filemanager::layouts.setting')
    @yield('modal')
    @include('filemanager::layouts.navbar')
    <div id="filemanager-bi-container">
        @include('filemanager::layouts.menu')
        <section id="filemanager-bi-content">
            <div id="filemanager-bi-information">
                <div id="filemanager-bi-information-left">{!! trans('fm-translations::filemanager-bi.information') !!}</div>
                <div id="filemanager-bi-information-right"></div>
            </div>
            @yield('content')
        </section>
    </div>
    @include('filemanager::layouts.pswp')
</div>
@include('filemanager::layouts.footer')

