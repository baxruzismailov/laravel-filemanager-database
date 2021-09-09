<!--  SETTINGS START  -->
<div id="filemanager-bi-settings">
    <div class="filemanager-bi-settings-header">
        <i class="fas fa-times"></i>
    </div>
    <div class="filemanager-bi-settings-body">
        <div class="filemanager-bi-settings-item">
            <h4>{{ trans('fm-translations::filemanager-bi.file_sorting') }}</h4>
            <label for="filemanager-bi-sorting-field-name">
                <input
                    {{  $filemanagerBiSortField == 1 ? 'checked' : null }}
                    id="filemanager-bi-sorting-field-name" type="radio" name="sorting_field">
                <span>{{ trans('fm-translations::filemanager-bi.file_sorting_name') }}</span>
            </label>
            <label for="filemanager-bi-sorting-field-date">
                <input
                    {{  $filemanagerBiSortField == 2 ? 'checked' : null }}
                    id="filemanager-bi-sorting-field-date" type="radio" name="sorting_field">
                <span>{{ trans('fm-translations::filemanager-bi.file_sorting_date') }}</span>
            </label>
        </div>
        <div class="filemanager-bi-settings-item">
            <h4>{{ trans('fm-translations::filemanager-bi.file_sorting_order_by') }}</h4>
            <label for="filemanager-bi-sorting-desc">
                <input
                    {{  $filemanagerBiOrderBy == 1 ? 'checked' : null }}
                    id="filemanager-bi-sorting-desc" type="radio" name="sorting">
                <span>{{ trans('fm-translations::filemanager-bi.file_sorting_order_by_asc') }}</span>
            </label>
            <label for="filemanager-bi-sorting-asc">
                <input
                    {{  $filemanagerBiOrderBy == 2 ? 'checked' : null }}
                    id="filemanager-bi-sorting-asc" type="radio" name="sorting">
                <span>{{ trans('fm-translations::filemanager-bi.file_sorting_order_by_desc') }}</span>
            </label>
        </div>
    </div>
</div>
<!--  SETTINGS END  -->
