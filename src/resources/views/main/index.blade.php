@extends('filemanager::layouts.index')
@section('content')

    <div id="filemanager-bi-content-item">
        <!--  CONTENT START  -->
        <div id="filemanager-bi-content-container" class="photoswipe-wrapper">


            <!--  FOLDER BACK  -->
            <div class="filemanager-bi-content-item-folder-back-box"
                 data-back-folder-id="1"
            >

                <div class="filemanager-bi-content-item-folder-back-image">
                    <i class="fas fa-arrow-left"></i>
                </div>
                <div class="filemanager-bi-content-item-folder-back-name">
                   Geri
                </div>
            </div>


            <!--  FOLDERS  -->
            <div class="filemanager-bi-content-item-folder-box"
                 data-folder-id="1"
                 data-folder-name="Toshiba"
            >
                <!--  SELECT FILE  -->
                <div class="filemanager-bi-select-folder"></div>

                <div class="filemanager-bi-content-item-folder-image">
                    <img src="{{ asset('vendor/file-manager-bi/images/folder.svg') }}" alt="Folder Name">
                </div>
                <div class="filemanager-bi-content-item-folder-info-mobile">
                    <div>Papka adi</div>
                    <div>20.08.2021 14:14</div>
                    <div>150 fayl</div>
                </div>
                <div class="filemanager-bi-content-item-folder-name">
                    Folderin adi
                </div>
                <!-- FOLDER TOOLS  -->
                <div class="filemanager-bi-content-item-folder-tools">
                    <i title="{{ trans('fm-translations::filemanager-bi.file_edit') }}" class="far fa-edit"></i>
                    <i
                        title="{{ trans('fm-translations::filemanager-bi.file_delete') }}"
                        class="far fa-trash-alt filemanager-bi-delete-one-folder"
                        onclick="filemanagerModalOpen(this.getAttribute('data-modal'))"
                        data-modal="#remove-only-one-folder-modal"
                    ></i>
                </div>
            </div>

            <div class="filemanager-bi-content-item-folder-box"
                 data-folder-id="2"
                 data-folder-name="Samsung"
            >
                <!--  SELECT FILE  -->
                <div class="filemanager-bi-select-folder"></div>

                <div class="filemanager-bi-content-item-folder-image">
                    <img src="{{ asset('vendor/file-manager-bi/images/folder.svg') }}" alt="Folder Name">
                </div>
                <div class="filemanager-bi-content-item-folder-info-mobile">
                    <div>Papka adi</div>
                    <div>20.08.2021 14:14</div>
                    <div>150 fayl</div>
                </div>
                <div class="filemanager-bi-content-item-folder-name">
                    Folderin adi
                </div>
                <!-- FOLDER TOOLS  -->
                <div class="filemanager-bi-content-item-folder-tools">
                    <i title="{{ trans('fm-translations::filemanager-bi.file_edit') }}" class="far fa-edit"></i>
                    <i
                        title="{{ trans('fm-translations::filemanager-bi.file_delete') }}"
                        class="far fa-trash-alt filemanager-bi-delete-one-folder"
                        onclick="filemanagerModalOpen(this.getAttribute('data-modal'))"
                        data-modal="#remove-only-one-folder-modal"
                    ></i>
                </div>
            </div>

            <div class="filemanager-bi-content-item-folder-box"
                 data-folder-id="3"
                 data-folder-name="Samsung"
            >
                <!--  SELECT FILE  -->
                <div class="filemanager-bi-select-folder"></div>

                <div class="filemanager-bi-content-item-folder-image">
                    <img src="{{ asset('vendor/file-manager-bi/images/folder.svg') }}" alt="Folder Name">
                </div>
                <div class="filemanager-bi-content-item-folder-info-mobile">
                    <div>Papka adi</div>
                    <div>20.08.2021 14:14</div>
                    <div>150 fayl</div>
                </div>
                <div class="filemanager-bi-content-item-folder-name">
                    Folderin adi
                </div>
                <!-- FOLDER TOOLS  -->
                <div class="filemanager-bi-content-item-folder-tools">
                    <i title="{{ trans('fm-translations::filemanager-bi.file_edit') }}" class="far fa-edit"></i>
                    <i
                        title="{{ trans('fm-translations::filemanager-bi.file_delete') }}"
                        class="far fa-trash-alt filemanager-bi-delete-one-folder"
                        onclick="filemanagerModalOpen(this.getAttribute('data-modal'))"
                        data-modal="#remove-only-one-folder-modal"
                    ></i>
                </div>
            </div>

            <div class="filemanager-bi-content-item-folder-box"
                 data-folder-id="4"
                 data-folder-name="Samsung"
            >
                <!--  SELECT FILE  -->
                <div class="filemanager-bi-select-folder"></div>

                <div class="filemanager-bi-content-item-folder-image">
                    <img src="{{ asset('vendor/file-manager-bi/images/folder.svg') }}" alt="Folder Name">
                </div>
                <div class="filemanager-bi-content-item-folder-info-mobile">
                    <div>Papka adi</div>
                    <div>20.08.2021 14:14</div>
                    <div>150 fayl</div>
                </div>
                <div class="filemanager-bi-content-item-folder-name">
                    Folderin adi
                </div>
                <!-- FOLDER TOOLS  -->
                <div class="filemanager-bi-content-item-folder-tools">
                    <i title="{{ trans('fm-translations::filemanager-bi.file_edit') }}" class="far fa-edit"></i>
                    <i
                        title="{{ trans('fm-translations::filemanager-bi.file_delete') }}"
                        class="far fa-trash-alt filemanager-bi-delete-one-folder"
                        onclick="filemanagerModalOpen(this.getAttribute('data-modal'))"
                        data-modal="#remove-only-one-folder-modal"
                    ></i>
                </div>
            </div>



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
                                     src="{{ asset('vendor/file-manager-bi/images/extensions/mp4.png') }}">
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
                                     src="{{ asset('vendor/file-manager-bi/images/extensions/mp3.png') }}">
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
                                      <img src="{{ asset('vendor/file-manager-bi/images/extensions/zip.png') }}">
                                       </div>
                                       </div>'>
                            <div class="photoswipe-item-files-container">
                                <img class="photoswipe-item-files"
                                     src="{{ asset('vendor/file-manager-bi/images/extensions/zip.png') }}">
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


            <!--  FOLDER BACK  -->
            <div class="filemanager-bi-content-item-folder-not-box" >
                FAYL YOXDUR
            </div>


            <div class="filemanager-bi-content-item-footer">
                <!--  NOT FILE   -->
                <div class="filemanager-bi-content-item-footer-text"></div>
            </div>

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

