<!--  JQUERY JS  -->
<script src="{{ asset('vendor/file-manager-bi/plugins/jquery/jquery-3.6.0.min.js') }}"></script>

<!--  PHOTOSWIPE JS  -->
<script src='{{ asset('vendor/file-manager-bi/plugins/photoswipe/js/photoswipe.min.js') }}'></script>
<script src='{{ asset('vendor/file-manager-bi/plugins/photoswipe/js/photoswipe-ui-default.min.js') }}'></script>
<script src="{{ asset('vendor/file-manager-bi/plugins/photoswipe/js/custom.js') }}"></script>

<!--  MAIN JS  -->
<script>
    const selectFileTranslate = "{{ trans('fm-translations::filemanager-bi.select_file_length') }}",
          deleteAllFileTranslate = "{{ trans('fm-translations::filemanager-bi.file_delete_all') }}",
          deleteFiletextTranslate = "{{ trans('fm-translations::filemanager-bi.file_delete_text') }}",
        selectFolderTranslate = "{{ trans('fm-translations::filemanager-bi.select_folder_length') }}",
        deleteAllFolderTranslate = "{{ trans('fm-translations::filemanager-bi.folder_delete_all') }}",
        deleteFoldertextTranslate = "{{ trans('fm-translations::filemanager-bi.folder_delete_text') }}";
</script>
<script src="{{ asset('vendor/file-manager-bi/js/main.js') }}"></script>

@yield('JS')

</body>
</html>

