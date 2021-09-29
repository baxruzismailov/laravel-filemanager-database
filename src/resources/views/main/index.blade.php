@extends('filemanager::layouts.index')
@section('content')
    <!--  INFORMATION  -->
    <div id="filemanager-bi-information">
        <div id="filemanager-bi-information-left">
            <span id="filemanager-bi-get-home"><i class="fa fa-home"></i></span>
            <span id="filemanager-bi-information-folder-name"></span>
            <span id="filemanager-bi-folders-and-files-count"></span>
        </div>
        <div id="filemanager-bi-information-right"></div>
    </div>

    <div id="filemanager-bi-content-item">
        <!--  CONTENT START  -->
        <div id="filemanager-bi-content-container" class="photoswipe-wrapper">

            <!--  FOLDER BACK  -->
        {{--                    <div class="filemanager-bi-content-item-folder-back-box"--}}
        {{--                         data-back-folder-id="1"--}}
        {{--                    >--}}

        {{--                        <div class="filemanager-bi-content-item-folder-back-image">--}}
        {{--                            <i class="fas fa-arrow-left"></i>--}}
        {{--                        </div>--}}
        {{--                        <div class="filemanager-bi-content-item-folder-back-name">--}}
        {{--                           Geri--}}
        {{--                        </div>--}}
        {{--                    </div>--}}


        <!--  FOLDERS  -->
{{--            @foreach($folders as $folder)--}}
{{--                <div class="filemanager-bi-content-item-folder-box"--}}
{{--                     data-folder-id="{{ $folder->id }}"--}}
{{--                     data-folder-name="{{ $folder->name }}"--}}
{{--                >--}}
{{--                    <!--  CONTEXT MENU START -->--}}
{{--                    <div class="filemanager-bi-context-menu">--}}
{{--                        <div class="filemanager-bi-context-menu-item">--}}
{{--                            <ul>--}}
{{--                                <!--  RENAMAE  -->--}}
{{--                                <li onclick="filemanagerModalOpen(this.getAttribute('data-modal'))"--}}
{{--                                    data-modal="#filemanager-bi-rename-folder-modal"--}}
{{--                                    class="filemanager-bi-context-menu-rename">--}}
{{--                                    <i title="{{ trans('fm-translations::filemanager-bi.rename') }}"--}}
{{--                                       class="far fa-edit"></i>--}}
{{--                                    <span>{{ trans('fm-translations::filemanager-bi.rename') }}</span>--}}
{{--                                </li>--}}
{{--                                <!--  CUT  -->--}}
{{--                                <li class="filemanager-bi-context-menu-cut">--}}
{{--                                    <i title="{{ trans('fm-translations::filemanager-bi.cut') }}"--}}
{{--                                       class="fas fa-cut"></i>--}}
{{--                                    <span>{{ trans('fm-translations::filemanager-bi.cut') }}</span>--}}
{{--                                </li>--}}
{{--                                <!--  DELETE  -->--}}
{{--                                <li class="filemanager-bi-delete-one-folder"--}}
{{--                                    onclick="filemanagerModalOpen(this.getAttribute('data-modal'))"--}}
{{--                                    data-modal="#filemanager-bi-remove-only-one-folder-modal">--}}
{{--                                    <i title="{{ trans('fm-translations::filemanager-bi.file_delete') }}"--}}
{{--                                       class="far fa-trash-alt"></i>--}}
{{--                                    <span>{{ trans('fm-translations::filemanager-bi.file_delete') }}</span>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="filemanager-bi-context-menu-properties">--}}
{{--                            <!--  properties  -->--}}
{{--                            <div--}}
{{--                                class="filemanager-bi-context-menu-properties-name">{{ trans('fm-translations::filemanager-bi.properties') }}</div>--}}
{{--                            <div>--}}

{{--                                <!--  NAME  -->--}}
{{--                                <div>--}}
{{--                                    <i class="fas fa-bookmark"></i>--}}
{{--                                    <span>{{ $folder->name }}</span>--}}
{{--                                </div>--}}
{{--                                <!--  COUNT FILE  -->--}}
{{--                                <div>--}}
{{--                                    <i class="fas fa-file-image"></i>--}}
{{--                                    <span>{{ sprintf(trans('fm-translations::filemanager-bi.files_count'),$folder->files_count) }}</span>--}}
{{--                                </div>--}}
{{--                                <!--  CREATED AT  -->--}}
{{--                                <div>--}}
{{--                                    <i class="far fa-calendar-alt"></i>--}}
{{--                                    <span>{{ \Illuminate\Support\Carbon::parse($folder->created_at)->format('Y.m.d H:i') }}</span>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--  CONTEXT MENU END -->--}}

{{--                    <!--  SELECT FILE  -->--}}
{{--                    <div class="filemanager-bi-select-folder"></div>--}}

{{--                    <div class="filemanager-bi-content-item-folder-image">--}}
{{--                        <img src="{{ asset('vendor/file-manager-bi/images/folder.svg') }}" alt="{{ $folder->name }}">--}}
{{--                    </div>--}}
{{--                    <div class="filemanager-bi-content-item-folder-info-mobile">--}}
{{--                        <div>{{ $folder->name }}</div>--}}
{{--                        <div>{{ \Illuminate\Support\Carbon::parse($folder->created_at)->format('Y.m.d H:i') }}</div>--}}
{{--                        <div>{{ sprintf(trans('fm-translations::filemanager-bi.files_count'),$folder->files_count) }}</div>--}}
{{--                    </div>--}}
{{--                    <div class="filemanager-bi-content-item-folder-name">{{ $folder->name }}</div>--}}
{{--                    <!-- FOLDER TOOLS  -->--}}
{{--                    <div class="filemanager-bi-content-item-folder-tools">--}}
{{--                        <i--}}
{{--                            title="{{ trans('fm-translations::filemanager-bi.rename') }}"--}}
{{--                            onclick="filemanagerModalOpen(this.getAttribute('data-modal'))"--}}
{{--                            data-modal="#filemanager-bi-rename-folder-modal"--}}
{{--                            class="far fa-edit filemanager-bi-menu-rename"></i>--}}
{{--                        <i--}}
{{--                            title="{{ trans('fm-translations::filemanager-bi.file_delete') }}"--}}
{{--                            class="far fa-trash-alt filemanager-bi-delete-one-folder"--}}
{{--                            onclick="filemanagerModalOpen(this.getAttribute('data-modal'))"--}}
{{--                            data-modal="#filemanager-bi-remove-only-one-folder-modal"--}}
{{--                        ></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}


        <!--  FILES  -->
{{--            @foreach($files as $file)--}}
{{--            <!--  IMAGES  -->--}}
{{--                @if($file->type == 'image')--}}
{{--                    <div class="filemanager-bi-content-item-box"--}}
{{--                         data-file-id="{{ $file->id }}"--}}
{{--                         data-file-name="{{ $file->name }}"--}}
{{--                    >--}}
{{--                        <!--  SELECT FILE  -->--}}
{{--                        <div class="filemanager-bi-select-file"></div>--}}

{{--                        <div class="filemanager-bi-content-item-image">--}}
{{--                            <div class="photoswipe-item">--}}
{{--                                <a--}}
{{--                                    data-size="{{ \Baxruzismailov\Filemanager\Services\FileService::imageSize($file->url)[0] }}x{{ \Baxruzismailov\Filemanager\Services\FileService::imageSize($file->url)[1] }}"--}}
{{--                                    data-title="{{ $file->name }}"--}}
{{--                                    href="{{ $file->url }}">--}}
{{--                                    <img src="{{ $file->url }}">--}}
{{--                                    <div class="fm-photoswipe-item-mobile">--}}
{{--                                        <div>{{ $file->name }}</div>--}}
{{--                                        <div>{{ \Illuminate\Support\Carbon::parse($file->created_at)->format('Y.m.d H:i') }}</div>--}}
{{--                                        <div>{{ \Baxruzismailov\Filemanager\Services\FileService::fileSize($file->url) }}</div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="filemanager-bi-content-item-info">{{ $file->name }}</div>--}}
{{--                        <!--  TOOLS  -->--}}
{{--                        <div class="filemanager-bi-content-item-tools">--}}
{{--                            <i title="{{ trans('fm-translations::filemanager-bi.file_download') }}"--}}
{{--                               class="far fa-arrow-alt-circle-down"></i>--}}
{{--                            <i title="{{ trans('fm-translations::filemanager-bi.file_edit') }}"--}}
{{--                               class="fas fa-feather-alt"></i>--}}
{{--                            <i title="{{ trans('fm-translations::filemanager-bi.rename') }}" class="far fa-edit"></i>--}}
{{--                            <i--}}
{{--                                title="{{ trans('fm-translations::filemanager-bi.file_delete') }}"--}}
{{--                                class="far fa-trash-alt filemanager-bi-delete-one-file"--}}
{{--                                onclick="filemanagerModalOpen(this.getAttribute('data-modal'))"--}}
{{--                                data-modal="#filemanager-bi-remove-only-one-file-modal"--}}
{{--                            ></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endif--}}

{{--            <!--  VIDEO  -->--}}
{{--                @if($file->type == 'video')--}}
{{--                    <div class="filemanager-bi-content-item-box"--}}
{{--                         data-file-id="{{ $file->id }}"--}}
{{--                         data-file-name="{{ $file->name }}"--}}
{{--                    >--}}
{{--                        <!--  SELECT FILE  -->--}}
{{--                        <div class="filemanager-bi-select-file"></div>--}}

{{--                        <div class="filemanager-bi-content-item-image">--}}
{{--                            <div class="photoswipe-item">--}}


{{--                                <a href="#" data-type="video"--}}
{{--                                   data-title="{{ $file->name }}"--}}
{{--                                   data-size="512x512"--}}
{{--                                   data-video='<div class="wrapper">--}}
{{--                                           <div class="video-wrapper">--}}
{{--                                           <video width="960" class="pswp__video" src="{{ $file->url }}" controls></video>--}}
{{--                                           </div>--}}
{{--                                           </div>'>--}}
{{--                                    <div class="photoswipe-item-files-container">--}}
{{--                                        <img class="photoswipe-item-files"--}}
{{--                                             src="{{ \Baxruzismailov\Filemanager\Services\FileService::fileExtension($file->url) }}">--}}
{{--                                    </div>--}}
{{--                                    <div class="fm-photoswipe-item-mobile">--}}
{{--                                        <div>{{ $file->name }}</div>--}}
{{--                                        <div>{{ \Illuminate\Support\Carbon::parse($file->created_at)->format('Y.m.d H:i') }}</div>--}}
{{--                                        <div>{{ \Baxruzismailov\Filemanager\Services\FileService::fileSize($file->url) }}</div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}


{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="filemanager-bi-content-item-info">{{ $file->name }}</div>--}}
{{--                        <!--  TOOLS  -->--}}
{{--                        <div class="filemanager-bi-content-item-tools">--}}
{{--                            <i title="{{ trans('fm-translations::filemanager-bi.file_download') }}"--}}
{{--                               class="far fa-arrow-alt-circle-down"></i>--}}
{{--                            <i title="{{ trans('fm-translations::filemanager-bi.rename') }}" class="far fa-edit"></i>--}}
{{--                            <i--}}
{{--                                title="{{ trans('fm-translations::filemanager-bi.file_delete') }}"--}}
{{--                                class="far fa-trash-alt filemanager-bi-delete-one-file"--}}
{{--                                onclick="filemanagerModalOpen(this.getAttribute('data-modal'))"--}}
{{--                                data-modal="#filemanager-bi-remove-only-one-file-modal"--}}
{{--                            ></i>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                @endif--}}

{{--            <!--  AUDIO -->--}}
{{--                @if($file->type == 'audio')--}}

{{--                    <div class="filemanager-bi-content-item-box"--}}
{{--                         data-file-id="{{ $file->id }}"--}}
{{--                         data-file-name="{{ $file->name }}"--}}
{{--                    >--}}
{{--                        <!--  SELECT FILE  -->--}}
{{--                        <div class="filemanager-bi-select-file"></div>--}}

{{--                        <div class="filemanager-bi-content-item-image">--}}
{{--                            <div class="photoswipe-item">--}}


{{--                                <a href="#" data-type="audio"--}}
{{--                                   data-size="512x512"--}}
{{--                                   data-title="{{ $file->name }}"--}}
{{--                                   data-audio='<div class="wrapper">--}}
{{--                                               <div class="audio-wrapper">--}}
{{--                                               <audio controls><source class="pswp__audio" src="{{ $file->url }}" type="audio/mpeg"> Your browser does not support the audio element. </audio>--}}
{{--                                               </div>--}}
{{--                                               </div>'>--}}
{{--                                    <div class="photoswipe-item-files-container">--}}
{{--                                        <img class="photoswipe-item-files"--}}
{{--                                             src="{{ \Baxruzismailov\Filemanager\Services\FileService::fileExtension($file->url) }}">--}}
{{--                                    </div>--}}
{{--                                    <div class="fm-photoswipe-item-mobile">--}}
{{--                                        <div>{{ $file->name }}</div>--}}
{{--                                        <div>{{ \Illuminate\Support\Carbon::parse($file->created_at)->format('Y.m.d H:i') }}</div>--}}
{{--                                        <div>{{ \Baxruzismailov\Filemanager\Services\FileService::fileSize($file->url) }}</div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}


{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="filemanager-bi-content-item-info">{{ $file->name }}</div>--}}
{{--                        <!--  TOOLS  -->--}}
{{--                        <div class="filemanager-bi-content-item-tools">--}}
{{--                            <i title="{{ trans('fm-translations::filemanager-bi.file_download') }}"--}}
{{--                               class="far fa-arrow-alt-circle-down"></i>--}}
{{--                            <i title="{{ trans('fm-translations::filemanager-bi.rename') }}" class="far fa-edit"></i>--}}
{{--                            <i--}}
{{--                                title="{{ trans('fm-translations::filemanager-bi.file_delete') }}"--}}
{{--                                class="far fa-trash-alt filemanager-bi-delete-one-file"--}}
{{--                                onclick="filemanagerModalOpen(this.getAttribute('data-modal'))"--}}
{{--                                data-modal="#filemanager-bi-remove-only-one-file-modal"--}}
{{--                            ></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endif--}}


{{--            <!--  FILES, DOCUMENTS AND ARCHIVES  -->--}}
{{--                @if($file->type == 'archive' || $file->type == 'document' || $file->type == 'file')--}}
{{--                    <div class="filemanager-bi-content-item-box"--}}
{{--                         data-file-id="{{ $file->id }}"--}}
{{--                         data-file-name="{{ $file->name }}"--}}
{{--                    >--}}
{{--                        <!--  SELECT FILE  -->--}}
{{--                        <div class="filemanager-bi-select-file"></div>--}}

{{--                        <div class="filemanager-bi-content-item-image">--}}
{{--                            <div class="photoswipe-item">--}}
{{--                                <a href="#" data-type="file"--}}
{{--                                   data-size="512x512"--}}
{{--                                   data-title="{{ $file->name }}"--}}
{{--                                   data-file='<div class="wrapper">--}}
{{--                                           <div class="document-wrapper">--}}
{{--                                          <img src="{{ \Baxruzismailov\Filemanager\Services\FileService::fileExtension($file->url) }}">--}}
{{--                                           </div>--}}
{{--                                           </div>'>--}}
{{--                                    <div class="photoswipe-item-files-container">--}}
{{--                                        <img class="photoswipe-item-files"--}}
{{--                                             src="{{ \Baxruzismailov\Filemanager\Services\FileService::fileExtension($file->url) }}">--}}
{{--                                    </div>--}}
{{--                                    <div class="fm-photoswipe-item-mobile">--}}
{{--                                        <div>{{ $file->name }}</div>--}}
{{--                                        <div>{{ \Illuminate\Support\Carbon::parse($file->created_at)->format('Y.m.d H:i') }}</div>--}}
{{--                                        <div>{{ \Baxruzismailov\Filemanager\Services\FileService::fileSize($file->url) }}</div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}


{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="filemanager-bi-content-item-info">{{ $file->name }}</div>--}}
{{--                        <!--  TOOLS  -->--}}
{{--                        <div class="filemanager-bi-content-item-tools">--}}
{{--                            <i title="{{ trans('fm-translations::filemanager-bi.file_download') }}"--}}
{{--                               class="far fa-arrow-alt-circle-down"></i>--}}
{{--                            <i title="{{ trans('fm-translations::filemanager-bi.rename') }}" class="far fa-edit"></i>--}}
{{--                            <i--}}
{{--                                title="{{ trans('fm-translations::filemanager-bi.file_delete') }}"--}}
{{--                                class="far fa-trash-alt filemanager-bi-delete-one-file"--}}
{{--                                onclick="filemanagerModalOpen(this.getAttribute('data-modal'))"--}}
{{--                                data-modal="#filemanager-bi-remove-only-one-file-modal"--}}
{{--                            ></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endif--}}

{{--            @endforeach--}}



        <!--  NOT FILE  -->
            {{--            <div class="filemanager-bi-content-item-folder-not-box">--}}
            {{--                FAYL YOXDUR--}}
            {{--            </div>--}}


{{--            <div class="filemanager-bi-content-item-footer">--}}
{{--                <!--  NOT FILE   -->--}}
{{--                <div class="filemanager-bi-content-item-footer-text">t</div>--}}
{{--            </div>--}}

        </div>


        <!--  CONTENT END  -->

    </div>



@endsection

@section('CSS')
@endsection
@section('JS')

    <script>
        $(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        });


    </script>


@endsection
@section('modal')
    @include('filemanager::main.modal')
@endsection

