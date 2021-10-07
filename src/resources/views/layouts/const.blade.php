<script>
    /*   GLOBAL   */
    var FILEMANAGER_BI_CSRF_TOKEN = "{{ csrf_token() }}";
    const FILEMANAGER_BI_GET_HOME_PAGE_ROUTE = "{{ route('filemanager.bi.home') }}",
        FILEMANAGER_BI_GET_FOLDERS_AND_FILES_ROUTE = "{{ route('filemanager.bi.getFoldersAndFiles') }}",
        FILE_MANAGER_BI_INFORMATION_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.information') }}",
        FILE_MANAGER_BI_RENAME_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.rename') }}",
        FILE_MANAGER_BI_CUT_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.cut') }}",
        FILE_MANAGER_BI_PROPERTIES_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.properties') }}",
        FILEMANAGER_BI_ID = "#{{ config('file-manager-bi.file_manager_id') }}";

    /*   FILE   */
    const FILE_MANAGER_BI_SELECT_FILE_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.select_file_length') }}",
        FILE_MANAGER_BI_SELECT_ALL_FILE_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.select_all') }}",
        FILE_MANAGER_BI_DELETE_ALL_FILE_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.file_delete_all') }}",
        FILE_MANAGER_BI_DELETE_FILE_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.file_delete_text') }}",
        FILEMANAGER_BI_DELETE_BUTTON_TEXT_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.file_delete') }}",
        FILEMANAGER_BI_DOWNLOAD_BUTTON_TEXT_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.file_download') }}",
        FILEMANAGER_BI_EDIT_BUTTON_TEXT_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.file_edit') }}";

    /*   FOLDER   */
    const FILE_MANAGER_BI_FOLDER_IMAGE = "{{ asset('vendor/file-manager-bi/images/folder.svg') }}",
        FILE_MANAGER_BI_SELECT_FOLDER_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.select_folder_length') }}",
        FILE_MANAGER_BI_MAIN_FOLDER_NAME_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.main_folder_name') }}",
        FILE_MANAGER_BI_SELECT_ALL_FOLDER_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.select_folder_all') }}",
        FILE_MANAGER_BI_DELETE_ALL_FOLDER_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.folder_delete_all') }}",
        FILE_MANAGER_BI_DELETE_FOLDER_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.folder_delete_text') }}",
        FILE_MANAGER_BI_CUT_FOLDER_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.folders_cut') }}",
        FILE_MANAGER_BI_SELECT_FOLDER_PASTE_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.select_folder_paste') }}",
        FILE_MANAGER_BI_SUCCESS_CUT_FOLDERS_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.success_cut_folders') }}",
        FILE_MANAGER_BI_NOT_CUT_FOLDERS_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.not_cut_folders') }}",
        FILE_MANAGER_BI_EMPTY_FOLDER_NAME_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.empty_folder_name') }}",
        FILE_MANAGER_BI_FOLDER_COUNT_FILE_TRANSLATE = "{{ sprintf(trans('fm-translations::filemanager-bi.files_count'),0) }}",
        FILE_MANAGER_BI_FOLDER_FILE_COUNT_TRANSLATE = "{{ trans('fm-translations::filemanager-bi.files_count') }}",
        FILE_MANAGER_BI_CREATE_NEW_FOLDER_ROUTE = "{{ route('filemanager.bi.createNewFolder') }}",
        FILE_MANAGER_BI_CUT_FOLDER_ROUTE = "{{ route('filemanager.bi.cutFolder') }}",
        FILE_MANAGER_BI_GET_FOLDERS_ROUTE = "{{ route('filemanager.bi.getFolders') }}",
        FILE_MANAGER_BI_RENAME_FOLDER_NAME_ROUTE = "{{ route('filemanager.bi.updateFolderName') }}";

    /*   UPLOAD FILES   */
    const FILEMANAGER_BI_MAX_UPLOAD_SIZE = "{{ str_replace('M', null, ini_get('upload_max_filesize')) * 1024 * 1024 }}",
        FILEMANAGER_BI_UPLOAD_FILE_ROUTE = "{{ route('filemanager.bi.uploadFile') }}";


    /*   LOCAL STORAGE   */
    const FILEMANAGER_BI_SET_CURRENT_FOLDER_LOCAL_STORAGE_ROUTE = "{{ route('filemanager.bi.setCurrentFolderLocalStorage') }}";



</script>
