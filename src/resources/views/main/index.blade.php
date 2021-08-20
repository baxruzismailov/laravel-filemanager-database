@extends('filemanager::layouts.index')
@section('content')

    <div id="filemanager-bi-content-item">
        <!--  CONTENT START  -->
        <div id="filemanager-bi-content-container" class="photoswipe-wrapper">


            <!--  IMAGES  -->
            <div class="filemanager-bi-content-item-box"
                 data-file-id="1"
                 data-file-name="menim screenshot filemendir burasdasd asd.png"
            >
                <!--  SELECT FILE  -->
                <div class="filemanager-bi-select-file"></div>

                <div class="filemanager-bi-content-item-image">
                    <div class="photoswipe-item">
                        <a
                            data-title="Fotodur burda"
                            href="{{ asset('storage/test.jpg') }}">
                            <img src="{{ asset('storage/test.jpg') }}">
                            <div class="fm-photoswipe-item-mobile">
                                <div>image asda sad asdasd asdasd aasd asd.png</div>
                                <div>20.08.2021 14:14</div>
                                <div>14.0 MB</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="filemanager-bi-content-item-info">
                    menim screenshot filemendir burasdasd asd.png
                </div>
                <!--  TOOLS  -->
                <div class="filemanager-bi-content-item-tools">
                    <i title="{{ trans('fm-translations::filemanager-bi.file_download') }}"
                       class="far fa-arrow-alt-circle-down"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_rename') }}"
                       class="fas fa-feather-alt"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_edit') }}" class="far fa-edit"></i>
                    <i
                        title="{{ trans('fm-translations::filemanager-bi.file_delete') }}"
                        class="far fa-trash-alt filemanager-bi-delete-one-file"
                        onclick="filemanagerModalOpen(this.getAttribute('data-modal'))"
                        data-modal="#remove-only-one-file-modal"
                    ></i>
                </div>
            </div>


            <!--  VIDEO 1  -->
            <div class="filemanager-bi-content-item-box"
                 data-file-id="2"
                 data-file-name="video menim.mp4"
            >
                <!--  SELECT FILE  -->
                <div class="filemanager-bi-select-file"></div>

                <div class="filemanager-bi-content-item-image">
                    <div class="photoswipe-item">
                        <a href="#" data-type="video"
                           data-title="Videodur burda"
                           data-video='<div class="wrapper">
                                       <div class="video-wrapper">
                                       <video width="960" class="pswp__video" src="{{ asset('storage/test.mp4') }}" controls></video>
                                       </div>
                                       </div>'>
                            <div class="photoswipe-item-files-container">
                                <img class="photoswipe-item-files"
                                     src="{{ asset('vendor/file-manager-bi/images/play.svg') }}">
                            </div>
                            <div class="fm-photoswipe-item-mobile">
                                <div>image asda sad asdasd asdasd aasd asd.png</div>
                                <div>20.08.2021 14:14</div>
                                <div>14.0 MB</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="filemanager-bi-content-item-info">
                    menim screenshot filemendir burasdasd asd.png
                </div>
                <!--  TOOLS  -->
                <div class="filemanager-bi-content-item-tools">
                    <i title="{{ trans('fm-translations::filemanager-bi.file_download') }}"
                       class="far fa-arrow-alt-circle-down"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_rename') }}"
                       class="fas fa-feather-alt"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_edit') }}" class="far fa-edit"></i>
                    <i
                        title="{{ trans('fm-translations::filemanager-bi.file_delete') }}"
                        class="far fa-trash-alt filemanager-bi-delete-one-file"
                        onclick="filemanagerModalOpen(this.getAttribute('data-modal'))"
                        data-modal="#remove-only-one-file-modal"
                    ></i>
                </div>

            </div>


            <!--  AUDIO 1 -->
            <div class="filemanager-bi-content-item-box"
                 data-file-id="3"
                 data-file-name="audio menim.mp3"
            >
                <!--  SELECT FILE  -->
                <div class="filemanager-bi-select-file"></div>

                <div class="filemanager-bi-content-item-image">
                    <div class="photoswipe-item">
                        <a href="#" data-type="audio"
                           data-title="Audiodur burda burda"
                           data-audio='<div class="wrapper">
                                       <div class="audio-wrapper">
                                       <audio controls><source class="pswp__audio" src="{{ asset('storage/test.mp3') }}" type="audio/mpeg"> Your browser does not support the audio element. </audio>
                                       </div>
                                       </div>'>
                            <div class="photoswipe-item-files-container">
                                <img class="photoswipe-item-files"
                                     src="{{ asset('vendor/file-manager-bi/images/audio.svg') }}">
                            </div>
                            <div class="fm-photoswipe-item-mobile">
                                <div>image asda sad asdasd asdasd aasd asd.png</div>
                                <div>20.08.2021 14:14</div>
                                <div>14.0 MB</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="filemanager-bi-content-item-info">
                    menim screenshot filemendir burasdasd asd.png
                </div>
                <!--  TOOLS  -->
                <div class="filemanager-bi-content-item-tools">
                    <i title="{{ trans('fm-translations::filemanager-bi.file_download') }}"
                       class="far fa-arrow-alt-circle-down"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_rename') }}"
                       class="fas fa-feather-alt"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_edit') }}" class="far fa-edit"></i>
                    <i
                        title="{{ trans('fm-translations::filemanager-bi.file_delete') }}"
                        class="far fa-trash-alt filemanager-bi-delete-one-file"
                        onclick="filemanagerModalOpen(this.getAttribute('data-modal'))"
                        data-modal="#remove-only-one-file-modal"
                    ></i>
                </div>
            </div>


            <!--  DOCUMENT  -->
            <div class="filemanager-bi-content-item-box"
                 data-file-id="4"
                 data-file-name="zip menim.zip"
            >
                <!--  SELECT FILE  -->
                <div class="filemanager-bi-select-file"></div>

                <div class="filemanager-bi-content-item-image">
                    <div class="photoswipe-item">
                        <a href="#" data-type="document"
                           data-title="Filedir burda"
                           data-document='<div class="wrapper">
                                       <div class="document-wrapper">
                                      <img src="{{ asset('vendor/file-manager-bi/images/document.svg') }}">
                                       </div>
                                       </div>'>
                            <div class="photoswipe-item-files-container">
                                <img class="photoswipe-item-files"
                                     src="{{ asset('vendor/file-manager-bi/images/document.svg') }}">
                            </div>
                            <div class="fm-photoswipe-item-mobile">
                                <div>image asda sad asdasd asdasd aasd asd.png</div>
                                <div>20.08.2021 14:14</div>
                                <div>14.0 MB</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="filemanager-bi-content-item-info">
                    menim screenshot filemendir burasdasd asd.png
                </div>
                <!--  TOOLS  -->
                <div class="filemanager-bi-content-item-tools">
                    <i title="{{ trans('fm-translations::filemanager-bi.file_download') }}"
                       class="far fa-arrow-alt-circle-down"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_rename') }}"
                       class="fas fa-feather-alt"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_edit') }}" class="far fa-edit"></i>
                    <i
                        title="{{ trans('fm-translations::filemanager-bi.file_delete') }}"
                        class="far fa-trash-alt filemanager-bi-delete-one-file"
                        onclick="filemanagerModalOpen(this.getAttribute('data-modal'))"
                        data-modal="#remove-only-one-file-modal"
                    ></i>
                </div>
            </div>


            <!--  TEST START  -->
            <!--  IMAGES  -->
            <div class="filemanager-bi-content-item-box"
                 data-file-id="5"
                 data-file-name="mamed.jpg"
            >
                <!--  SELECT FILE  -->
                <div class="filemanager-bi-select-file"></div>

                <div class="filemanager-bi-content-item-image">
                    <div class="photoswipe-item">
                        <a
                            data-title="Fotodur burda"
                            href="{{ asset('storage/test2.jpg') }}">
                            <img src="{{ asset('storage/test2.jpg') }}">
                            <div class="fm-photoswipe-item-mobile">
                                <div>image asda sad asdasd asdasd aasd asd.png</div>
                                <div>20.08.2021 14:14</div>
                                <div>14.0 MB</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="filemanager-bi-content-item-info">
                    menim screenshot filemendir burasdasd asd.png
                </div>
                <!--  TOOLS  -->
                <div class="filemanager-bi-content-item-tools">
                    <i title="{{ trans('fm-translations::filemanager-bi.file_download') }}"
                       class="far fa-arrow-alt-circle-down"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_rename') }}"
                       class="fas fa-feather-alt"></i>
                    <i title="{{ trans('fm-translations::filemanager-bi.file_edit') }}" class="far fa-edit"></i>
                    <i
                        title="{{ trans('fm-translations::filemanager-bi.file_delete') }}"
                        class="far fa-trash-alt filemanager-bi-delete-one-file"
                        onclick="filemanagerModalOpen(this.getAttribute('data-modal'))"
                        data-modal="#remove-only-one-file-modal"
                    ></i>
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

    <!--  REMOVE SELECT FILES MODAL START  -->
    <div class="filemanager-bi-modal-overlay" id="remove-files-modal">
        <div class="filemanager-bi-modal-container filemanager-bi-modal-sm">
            <div class="filemanager-bi-modal-header">
                <h4></h4>
                <div class="headerClose" onclick="filemanagerModalClose()">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="filemanager-bi-modal-body"></div>
            <div class="filemanager-bi-modal-footer">
                <button class="my-btn " onclick="filemanagerModalClose()">
                    {{ trans('fm-translations::filemanager-bi.cancle') }}
                </button>
                <button id="remove-files-modal-success" class="my-btn my-btn-success">
                    {{ trans('fm-translations::filemanager-bi.success') }}
                </button>
            </div>

        </div>
        <div class="modalOverlayClass"></div>
    </div>
    <!--  REMOVE SELECT FILES MODAL END  -->

    <!--  REMOVE ONLY ONE FILE MODAL START  -->
    <div class="filemanager-bi-modal-overlay" id="remove-only-one-file-modal">
        <div class="filemanager-bi-modal-container filemanager-bi-modal-sm">
            <div class="filemanager-bi-modal-header">
                <h4></h4>
                <div class="headerClose" onclick="filemanagerModalClose()">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="filemanager-bi-modal-body"></div>
            <div class="filemanager-bi-modal-footer">
                <button class="my-btn " onclick="filemanagerModalClose()">
                    {{ trans('fm-translations::filemanager-bi.cancle') }}
                </button>
                <button id="remove-only-one-file-modal-success" class="my-btn my-btn-success">
                    {{ trans('fm-translations::filemanager-bi.success') }}
                </button>
            </div>

        </div>
        <div class="modalOverlayClass"></div>
    </div>
    <!--  REMOVE ONLY ONE FILE MODAL END  -->
@endsection

