<!--  JQUERY JS  -->
<script src="{{ asset('vendor/file-manager-bi/plugins/jquery/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('vendor/file-manager-bi/plugins/jquery/jquery.ui.min.js') }}"></script>

<!--  PHOTOSWIPE JS  -->
<script src='{{ asset('vendor/file-manager-bi/plugins/photoswipe/js/photoswipe.min.js') }}'></script>
<script src='{{ asset('vendor/file-manager-bi/plugins/photoswipe/js/photoswipe-ui-default.min.js') }}'></script>
<script src="{{ asset('vendor/file-manager-bi/plugins/photoswipe/js/custom.js') }}"></script>

<!--  CONST  -->
@include('filemanager::layouts.const')

<!--  MAIN JS  -->
<script src="{{ asset('vendor/file-manager-bi/js/main.js') }}"></script>

@yield('JS')

</body>
</html>

