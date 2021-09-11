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
        deleteFiletextTranslate = "{{ trans('fm-translations::filemanager-bi.file_delete_text') }}",
        FILEMANAGER_DELETE_BUTTON_TEXT = "{{ trans('fm-translations::filemanager-bi.file_delete') }}",
        FILEMANAGER_EDIT_BUTTON_TEXT = "{{ trans('fm-translations::filemanager-bi.file_edit') }}";

    /*   FOLDER   */
    const selectFolderTranslate = "{{ trans('fm-translations::filemanager-bi.select_folder_length') }}",
        selectAllFolderTranslate = "{{ trans('fm-translations::filemanager-bi.select_folder_all') }}",
        deleteAllFolderTranslate = "{{ trans('fm-translations::filemanager-bi.folder_delete_all') }}",
        deleteFoldertextTranslate = "{{ trans('fm-translations::filemanager-bi.folder_delete_text') }}",
        FILE_MANAGER_BI_CREATE_NEW_FOLDER_ROUTE = "{{ route('filemanager.bi.createNewFolder') }}",
        FILE_MANAGER_BI_RENAME_FOLDER_NAME_ROUTE = "{{ route('filemanager.bi.renameFolderName') }}",
        FILEMANAGER_FOLDER_COUNT_FILE = "{{ sprintf(trans('fm-translations::filemanager-bi.files_count'),0) }}";

    /*   UPLOAD FILES   */
    const FILEMANAGER_MAX_UPLOAD_SIZE = "{{ str_replace('M', null, ini_get('upload_max_filesize')) * 1024 * 1024 }}",
          FILEMANAGER_UPLOAD_FILE = "{{ route('filemanager.bi.uploadFile') }}";
          var csrfToken = "{{ csrf_token() }}";


    /*   LOCAL STORAGE   */
    const SET_LOCALSTORAGE_ROUTE = "{{ route('filemanager.bi.localStorage') }}";


    /*   GLOBAL   */
    const GET_HOME_PAGE_FILEMANAGER_BI_ROUTE = "{{ route('filemanager.bi.home') }}";

    {{--function filemanagerBiGetImageSize(url){--}}
    {{--    return "{{ \Baxruzismailov\Filemanager\Services\FileService::imageSize("`$_SERVER`")[0] }}x{{ \Baxruzismailov\Filemanager\Services\FileService::imageSize("+url+")[1] }}";--}}
    {{--}--}}

    {{--alert(filemanagerBiGetImageSize('/storage/test4.jpg'));--}}

</script>
<script src="{{ asset('vendor/file-manager-bi/js/main.js') }}"></script>

@yield('JS')

</body>
</html>

