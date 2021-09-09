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
        deleteFoldertextTranslate = "{{ trans('fm-translations::filemanager-bi.folder_delete_text') }}",
        FILE_MANAGER_BI_CREATE_NEW_FOLDER = "{{ route('filemanager.bi.createNewFolder') }}";

    /*   UPLOAD FILES   */
    const FILEMANAGER_MAX_UPLOAD_SIZE = "{{ str_replace('M', null, ini_get('upload_max_filesize')) * 1024 * 1024 }}",
          FILEMANAGER_UPLOAD_FILE = "{{ route('filemanager.bi.uploadFile') }}";
          var csrfToken = "{{ csrf_token() }}";


    /*   LOCAL STORAGE   */
    const SET_LOCALSTORAGE_ROUTE = "{{ route('filemanager.bi.localStorage') }}";


</script>
<script src="{{ asset('vendor/file-manager-bi/js/main.js') }}"></script>

@yield('JS')

</body>
</html>

