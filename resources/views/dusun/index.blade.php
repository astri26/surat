@extends('master')
@section('content')
<section class="section">
    <div class="section-body">
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h4>Daftar Data Keluarga Dusun Batur</h4>
            </div>
                                <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Daftar Dusun</label>
                        <div class="col-sm-12 col-md-7">
                            <!-- <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin"> -->
                            <select class="form-control select2" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" required>
                                <option value selected="selected">-- Jenis Kelamin --</option>    
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>No KK</th>
                    <th>No KTP</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Dusun</th>
                    <th>RT</th>
                    <th>RW</th>
                    <th>Ekonomi</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>1</td>
                    <td>330283729723821</td>
                    <td>333239271084817</td>
                    <td>Astri Purwandari</td>
                    <td>Bibrik</td>
                    <td>Batur</td>
                    <td>18</td>
                    <td>07</td>
                    <td>Mampu</td>
                 </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<div class="settingSidebar">
    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
    </a>
    <div class="settingSidebar-body ps-container ps-theme-default">
    <div class=" fade show active">
        <div class="setting-panel-header">Setting Panel
        </div>
        <div class="p-15 border-bottom">
        <h6 class="font-medium m-b-10">Select Layout</h6>
        <div class="selectgroup layout-color w-50">
            <label class="selectgroup-item">
            <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
            <span class="selectgroup-button">Light</span>
            </label>
            <label class="selectgroup-item">
            <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
            <span class="selectgroup-button">Dark</span>
            </label>
        </div>
        </div>
        <div class="p-15 border-bottom">
        <h6 class="font-medium m-b-10">Sidebar Color</h6>
        <div class="selectgroup selectgroup-pills sidebar-color">
            <label class="selectgroup-item">
            <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
            </label>
            <label class="selectgroup-item">
            <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
            </label>
        </div>
        </div>
        <div class="p-15 border-bottom">
        <h6 class="font-medium m-b-10">Color Theme</h6>
        <div class="theme-setting-options">
            <ul class="choose-theme list-unstyled mb-0">
            <li title="white" class="active">
                <div class="white"></div>
            </li>
            <li title="cyan">
                <div class="cyan"></div>
            </li>
            <li title="black">
                <div class="black"></div>
            </li>
            <li title="purple">
                <div class="purple"></div>
            </li>
            <li title="orange">
                <div class="orange"></div>
            </li>
            <li title="green">
                <div class="green"></div>
            </li>
            <li title="red">
                <div class="red"></div>
            </li>
            </ul>
        </div>
        </div>
        <div class="p-15 border-bottom">
        <div class="theme-setting-options">
            <label class="m-b-0">
            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                id="mini_sidebar_setting">
            <span class="custom-switch-indicator"></span>
            <span class="control-label p-l-10">Mini Sidebar</span>
            </label>
        </div>
        </div>
        <div class="p-15 border-bottom">
        <div class="theme-setting-options">
            <label class="m-b-0">
            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                id="sticky_header_setting">
            <span class="custom-switch-indicator"></span>
            <span class="control-label p-l-10">Sticky Header</span>
            </label>
        </div>
        </div>
        <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
        <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
            <i class="fas fa-undo"></i> Restore Default
        </a>
        </div>
    </div>
    </div>
</div>
@endsection