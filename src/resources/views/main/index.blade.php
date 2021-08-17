@extends('filemanager::layouts.index')
@section('content')

    Codlar olacaq

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

