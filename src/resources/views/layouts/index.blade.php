@include('filemanager::layouts.header')
<div id="filemanager-bi">
    <!--  SETTINGS START  -->
        <div id="filemanager-bi-settings">
            <div class="filemanager-bi-settings-header">
                <i class="fas fa-times"></i>
            </div>
            <div class="filemanager-bi-settings-body">
                Content SETTINGS
            </div>
        </div>
    <!--  SETTINGS END  -->
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
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe.
                   It's a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides.
                        PhotoSwipe keeps only 3 of them in the DOM to save memory.
                        Don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <!--  Controls are self-explanatory. Order can be changed. -->
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>


                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('filemanager::layouts.footer')

