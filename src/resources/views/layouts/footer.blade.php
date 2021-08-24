<!--  JQUERY JS  -->
<script src="{{ asset('vendor/file-manager-bi/plugins/jquery/jquery-3.6.0.min.js') }}"></script>

<!--  PHOTOSWIPE JS  -->
<script src='{{ asset('vendor/file-manager-bi/plugins/photoswipe/js/photoswipe.min.js') }}'></script>
<script src='{{ asset('vendor/file-manager-bi/plugins/photoswipe/js/photoswipe-ui-default.min.js') }}'></script>
<script src="{{ asset('vendor/file-manager-bi/plugins/photoswipe/js/custom.js') }}"></script>

<!--  MAIN JS  -->
<script>
    /*   FILE   */
    const selectFileTranslate = "{{ trans('fm-translations::filemanager-bi.select_file_length') }}",
        selectAllFileTranslate = "{{ trans('fm-translations::filemanager-bi.select_all') }}",
        deleteAllFileTranslate = "{{ trans('fm-translations::filemanager-bi.file_delete_all') }}",
        deleteFiletextTranslate = "{{ trans('fm-translations::filemanager-bi.file_delete_text') }}";
    /*   FOLDER   */
    const selectFolderTranslate = "{{ trans('fm-translations::filemanager-bi.select_folder_length') }}",
        selectAllFolderTranslate = "{{ trans('fm-translations::filemanager-bi.select_folder_all') }}",
        deleteAllFolderTranslate = "{{ trans('fm-translations::filemanager-bi.folder_delete_all') }}",
        deleteFoldertextTranslate = "{{ trans('fm-translations::filemanager-bi.folder_delete_text') }}";
</script>
<script src="{{ asset('vendor/file-manager-bi/js/main.js') }}"></script>

@yield('JS')

</body>
</html>

