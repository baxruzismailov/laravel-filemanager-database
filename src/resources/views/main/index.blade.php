@extends('filemanager::layouts.index')
@section('content')
    {{ trans('fm-translations::filemanager-bi.upload_server') }}
    <button type="button" class="my-btn my-btn-large my-btn-primary modalOpen"
            onclick="filemanagerModalOpen(this.getAttribute('data-modal'))" data-modal="#testmodal1">Modal 1
    </button>
    <button type="button" class="my-btn my-btn-large my-btn-primary modalOpen"
            onclick="filemanagerModalOpen(this.getAttribute('data-modal'))" data-modal="#testmodal2">Modal 2
    </button>
    <button type="button" class="my-btn my-btn-large my-btn-primary modalOpen"
            onclick="filemanagerModalOpen(this.getAttribute('data-modal'))" data-modal="#testmodal3">Modal 3
    </button>
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
                <button class="my-btn" onclick="filemanagerModalClose()">Imtina et</button>
                <button class="my-btn my-btn-success">tetbiq et</button>
            </div>

        </div>
        <div class="modalOverlayClass"></div>
    </div>

    <!--  MODAL 2  -->
    <div class="filemanager-bi-modal-overlay" id="testmodal2">
        <div class="filemanager-bi-modal-container filemanager-bi-modal-md">
            <div class="filemanager-bi-modal-header">
                <h4>Yeni ad</h4>
                <button type="button" class="my-btn" onclick="filemanagerModalClose()">X</button>
            </div>
            <div class="filemanager-bi-modal-body">
                Lorem ipsum dolor sit amet.
            </div>
            <div class="filemanager-bi-modal-footer">
                <button class="my-btn" onclick="filemanagerModalClose()">Imtina et</button>
                <button class="my-btn my-btn-danger">tetbiq et</button>
            </div>

        </div>
        <div class="modalOverlayClass"></div>
    </div>

    <!--  MODAL 3  -->
    <div class="filemanager-bi-modal-overlay" id="testmodal3">
        <div class="filemanager-bi-modal-container filemanager-bi-modal-sm">
            <div class="filemanager-bi-modal-header">
                <h4>Yeni ad</h4>
                <button type="button" class="my-btn" onclick="filemanagerModalClose()">X</button>
            </div>
            <div class="filemanager-bi-modal-body">
                Lorem ipsum dolor sit amet.
            </div>
            <div class="filemanager-bi-modal-footer">
                <button class="my-btn" onclick="filemanagerModalClose()">Imtina et</button>
                <button class="my-btn my-btn-warning">tetbiq et</button>
            </div>

        </div>
        <div class="modalOverlayClass"></div>
    </div>


@endsection

