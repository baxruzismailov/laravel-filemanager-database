@extends('filemanager::layouts.index')
@section('content')

    <div id="filemanager-bi-content-item">
        <!--  CONTENT START  -->
        <div id="filemanager-bi-content-container" class="photoswipe-wrapper">



            <!--  IMAGES  -->
            <div class="filemanager-bi-content-item-box"
                data-file-id="1"
            >
                <!--  SELECT FILE  -->
                <div class="filemanager-bi-select-file" data-select-file-checked="0"></div>

                <div class="filemanager-bi-content-item-image">
                    <div class="photoswipe-item">
                        <a
                            data-title="Fotodur burda"
                            href="{{ asset('storage/test.jpg') }}">
                            <img src="{{ asset('storage/test.jpg') }}" >
                        </a>
                    </div>
                </div>
                <div class="filemanager-bi-content-item-info">
                    menim screenshot filemendir burasdasd asd.png
                </div>
                <!--  TOOLS  -->
                <div class="filemanager-bi-content-item-tools">
                    <i title="{{ trans('fm-translations::filemanager-bi.file_download') }}" class="far fa-arrow-alt-circle-down"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_rename') }}" class="fas fa-feather-alt"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_edit') }}" class="far fa-edit"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_delete') }}" class="far fa-trash-alt"></i>
                </div>
            </div>


            <!--  VIDEO 1  -->
            <div class="filemanager-bi-content-item-box"
                 data-file-id="2"
            >
                <!--  SELECT FILE  -->
                <div class="filemanager-bi-select-file" data-select-file-checked="0"></div>

                <div class="filemanager-bi-content-item-image">
                    <div class="photoswipe-item">
                        <a href="#" data-type="video"
                           data-title="Videodur burda"
                           data-video='<div class="wrapper">
                                       <div class="video-wrapper">
                                       <video width="960" class="pswp__video" src="{{ asset('storage/test.mp4') }}" controls></video>
                                       </div>
                                       </div>'>
                            <img class="photoswipe-item-files" src="{{ asset('vendor/file-manager-bi/images/play.svg') }}">
                        </a>
                    </div>
                </div>
                <div class="filemanager-bi-content-item-info">
                    menim screenshot filemendir burasdasd asd.png
                </div>
                <!--  TOOLS  -->
                <div class="filemanager-bi-content-item-tools">
                    <i title="{{ trans('fm-translations::filemanager-bi.file_download') }}" class="far fa-arrow-alt-circle-down"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_rename') }}" class="fas fa-feather-alt"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_edit') }}" class="far fa-edit"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_delete') }}" class="far fa-trash-alt"></i>
                </div>

            </div>


            <!--  AUDIO 1 -->
            <div class="filemanager-bi-content-item-box"
                 data-file-id="3"
            >
                <!--  SELECT FILE  -->
                <div class="filemanager-bi-select-file" data-select-file-checked="0"></div>

                <div class="filemanager-bi-content-item-image">
                    <div class="photoswipe-item">
                        <a href="#" data-type="audio"
                           data-title="Audiodur burda burda"
                           data-audio='<div class="wrapper">
                                       <div class="audio-wrapper">
                                       <audio controls><source class="pswp__audio" src="{{ asset('storage/test.mp3') }}" type="audio/mpeg"> Your browser does not support the audio element. </audio>
                                       </div>
                                       </div>'>
                            <img class="photoswipe-item-files" src="{{ asset('vendor/file-manager-bi/images/audio.svg') }}">
                        </a>
                    </div>
                </div>
                <div class="filemanager-bi-content-item-info">
                    menim screenshot filemendir burasdasd asd.png
                </div>
                <!--  TOOLS  -->
                <div class="filemanager-bi-content-item-tools">
                    <i title="{{ trans('fm-translations::filemanager-bi.file_download') }}" class="far fa-arrow-alt-circle-down"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_rename') }}" class="fas fa-feather-alt"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_edit') }}" class="far fa-edit"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_delete') }}" class="far fa-trash-alt"></i>
                </div>
            </div>


            <!--  DOCUMENT  -->
            <div class="filemanager-bi-content-item-box"
                 data-file-id="4"
            >
                <!--  SELECT FILE  -->
                <div class="filemanager-bi-select-file" data-select-file-checked="0"></div>

                <div class="filemanager-bi-content-item-image">
                    <div class="photoswipe-item">
                        <a href="#" data-type="document"
                           data-title="Filedir burda"
                           data-document='<div class="wrapper">
                                       <div class="document-wrapper">
                                      <img src="{{ asset('vendor/file-manager-bi/images/document.svg') }}">
                                       </div>
                                       </div>'>
                            <img class="photoswipe-item-files" src="{{ asset('vendor/file-manager-bi/images/document.svg') }}">
                        </a>
                    </div>
                </div>
                <div class="filemanager-bi-content-item-info">
                    menim screenshot filemendir burasdasd asd.png
                </div>
                <!--  TOOLS  -->
                <div class="filemanager-bi-content-item-tools">
                    <i title="{{ trans('fm-translations::filemanager-bi.file_download') }}" class="far fa-arrow-alt-circle-down"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_rename') }}" class="fas fa-feather-alt"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_edit') }}" class="far fa-edit"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_delete') }}" class="far fa-trash-alt"></i>
                </div>
            </div>




            <!--  TEST START  -->
            <!--  IMAGES  -->
            <div class="filemanager-bi-content-item-box"
                 data-file-id="5"
            >
                <!--  SELECT FILE  -->
                <div class="filemanager-bi-select-file" data-select-file-checked="0"></div>

                <div class="filemanager-bi-content-item-image">
                    <div class="photoswipe-item">
                        <a
                            data-title="Fotodur burda"
                            href="{{ asset('storage/test.jpg') }}">
                            <img src="{{ asset('storage/test.jpg') }}" >
                        </a>
                    </div>
                </div>
                <div class="filemanager-bi-content-item-info">
                    menim screenshot filemendir burasdasd asd.png
                </div>
                <!--  TOOLS  -->
                <div class="filemanager-bi-content-item-tools">
                    <i title="{{ trans('fm-translations::filemanager-bi.file_download') }}" class="far fa-arrow-alt-circle-down"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_rename') }}" class="fas fa-feather-alt"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_edit') }}" class="far fa-edit"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_delete') }}" class="far fa-trash-alt"></i>
                </div>
            </div>

            <!--  TEST END  -->



            <div class="filemanager-bi-content-item-footer">
                <div class="filemanager-bi-content-item-footer-text">Fayl yoxdur</div>
            </div>

        </div>

        <!--  CONTENT END  -->
    </div>

@endsection

@section('CSS')
@endsection
@section('JS')
@endsection
@section('modal')


    <!--  MODAL 1  -->
    <div class="filemanager-bi-modal-overlay" id="testmodal1">
        <div class="filemanager-bi-modal-container filemanager-bi-modal-lg">
            <div class="filemanager-bi-modal-header">
                <h4>Yeni ad</h4>
                <div class="headerClose" onclick="filemanagerModalClose()">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="filemanager-bi-modal-body">
                Lorem ipsum dolor sit amet.
            </div>
            <div class="filemanager-bi-modal-footer">
                <button class="my-btn my-btn-danger" onclick="filemanagerModalClose()">Imtina et</button>
                <button class="my-btn my-btn-success">tetbiq et</button>
            </div>

        </div>
        <div class="modalOverlayClass"></div>
    </div>

    <!--  MODAL 2 -->
    <div class="filemanager-bi-modal-overlay" id="testmodal2">
        <div class="filemanager-bi-modal-container filemanager-bi-modal-md">
            <div class="filemanager-bi-modal-header">
                <h4>Yeni ad</h4>
                <div class="headerClose" onclick="filemanagerModalClose()">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="filemanager-bi-modal-body">
                Lorem ipsum dolor sit amet.
            </div>
            <div class="filemanager-bi-modal-footer">
                <button class="my-btn my-btn-warning" onclick="filemanagerModalClose()">Imtina et</button>
                <button class="my-btn my-btn-success">tetbiq et</button>
            </div>

        </div>
        <div class="modalOverlayClass"></div>
    </div>

    <!--  MODAL 3  -->
    <div class="filemanager-bi-modal-overlay" id="testmodal3">
        <div class="filemanager-bi-modal-container filemanager-bi-modal-sm">
            <div class="filemanager-bi-modal-header">
                <h4>Yeni ad</h4>
                <div class="headerClose" onclick="filemanagerModalClose()">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="filemanager-bi-modal-body">
                Lorem ipsum dolor sit amet.
            </div>
            <div class="filemanager-bi-modal-footer">
                <button class="my-btn " onclick="filemanagerModalClose()">Imtina et</button>
                <button class="my-btn my-btn-success">tetbiq et</button>
            </div>

        </div>
        <div class="modalOverlayClass"></div>
    </div>

@endsection

