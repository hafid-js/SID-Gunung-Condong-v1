@extends('admin.layout.layout')
@section('content')


    <script src="https://cdn.tiny.cloud/1/8mhbod4qy7z7hkyi68srd5kiu1ylu4dxjmbutvjqfspvo5t9/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>


    <div class="content-wrapper" style="min-height: 912.43px;">
        <section class="content-header">
            <h1>
            </h1>
            <h1>Form Artikel </h1>


            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i>Beranda</a>
                </li>
                <li><a href="{{ url('artikel') }}">Daftar Artikel</a></li>
                <li class="active">Form Artikel</li>
            </ol>

        </section>

        <section id="maincontent" class="content">



            <form action="#" id="validasi" enctype="multipart/form-data"
                method="post" accept-charset="utf-8">
                <input type="hidden" name="sidcsrf" value="5138bb1923cf32516eb547c907b652ef">

                <div class="row">
                    <div class="col-md-8">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <a href="{{ url('artikel') }}"
                                    class="btn btn-social btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                                    title="Tambah Artikel">
                                    <i class="fa fa-arrow-circle-left "></i>Kembali ke Daftar Artikel
                                </a>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label class="control-label" for="judul">Judul Artikel</label>
                                    <input id="judul" name="judul" class="form-control input-sm required strip_tags judul"
                                        type="text" placeholder="Judul Artikel" minlength="5" maxlength="200" value="">
                                    <span
                                        class="help-block"><code>Judul artikel minimal 5 karakter dan maksimal 200 karakter</code></span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="kode_desa">Isi Artikel</label>
                                    <textarea name="isi"
                                        data-filemanager="{&quot;external_filemanager_path&quot;:&quot;https:\/\/berputar.opendesa.id\/assets\/kelola_file\/&quot;,&quot;filemanager_title&quot;:&quot;Responsive Filemanager&quot;,&quot;filemanager_access_key&quot;:&quot;1dc05c9932a35ed8262d7d75d2e5d19d&quot;}"
                                        class="form-control input-sm required" style="height: 350px; display: none;"
                                        id="mce_0" aria-hidden="true"></textarea>
                                    <div role="application" class="tox tox-tinymce" aria-disabled="false"
                                        style="visibility: hidden; height: 700px;">
                                        <div class="tox-editor-container">
                                            <div data-alloy-vertical-dir="toptobottom" class="tox-editor-header">
                                                <div role="menubar" data-alloy-tabstop="true" class="tox-menubar"><button
                                                        aria-haspopup="true" role="menuitem" type="button" tabindex="-1"
                                                        data-alloy-tabstop="true" unselectable="on"
                                                        class="tox-mbtn tox-mbtn--select" aria-expanded="false"
                                                        style="user-select: none; width: 38.4141px;"><span
                                                            class="tox-mbtn__select-label">File</span>
                                                        <div class="tox-mbtn__select-chevron"><svg width="10" height="10"
                                                                focusable="false">
                                                                <path
                                                                    d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z"
                                                                    fill-rule="nonzero"></path>
                                                            </svg></div>
                                                    </button><button aria-haspopup="true" role="menuitem" type="button"
                                                        tabindex="-1" data-alloy-tabstop="true" unselectable="on"
                                                        class="tox-mbtn tox-mbtn--select" aria-expanded="false"
                                                        style="user-select: none; width: 40.8828px;"><span
                                                            class="tox-mbtn__select-label">Edit</span>
                                                        <div class="tox-mbtn__select-chevron"><svg width="10" height="10"
                                                                focusable="false">
                                                                <path
                                                                    d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z"
                                                                    fill-rule="nonzero"></path>
                                                            </svg></div>
                                                    </button><button aria-haspopup="true" role="menuitem" type="button"
                                                        tabindex="-1" data-alloy-tabstop="true" unselectable="on"
                                                        class="tox-mbtn tox-mbtn--select" aria-expanded="false"
                                                        style="user-select: none; width: 47.1328px;"><span
                                                            class="tox-mbtn__select-label">View</span>
                                                        <div class="tox-mbtn__select-chevron"><svg width="10" height="10"
                                                                focusable="false">
                                                                <path
                                                                    d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z"
                                                                    fill-rule="nonzero"></path>
                                                            </svg></div>
                                                    </button><button aria-haspopup="true" role="menuitem" type="button"
                                                        tabindex="-1" data-alloy-tabstop="true" unselectable="on"
                                                        class="tox-mbtn tox-mbtn--select" aria-expanded="false"
                                                        style="user-select: none; width: 52.8984px;"><span
                                                            class="tox-mbtn__select-label">Insert</span>
                                                        <div class="tox-mbtn__select-chevron"><svg width="10" height="10"
                                                                focusable="false">
                                                                <path
                                                                    d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z"
                                                                    fill-rule="nonzero"></path>
                                                            </svg></div>
                                                    </button><button aria-haspopup="true" role="menuitem" type="button"
                                                        tabindex="-1" data-alloy-tabstop="true" unselectable="on"
                                                        class="tox-mbtn tox-mbtn--select" aria-expanded="false"
                                                        style="user-select: none; width: 61.8438px;"><span
                                                            class="tox-mbtn__select-label">Format</span>
                                                        <div class="tox-mbtn__select-chevron"><svg width="10" height="10"
                                                                focusable="false">
                                                                <path
                                                                    d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z"
                                                                    fill-rule="nonzero"></path>
                                                            </svg></div>
                                                    </button><button aria-haspopup="true" role="menuitem" type="button"
                                                        tabindex="-1" data-alloy-tabstop="true" unselectable="on"
                                                        class="tox-mbtn tox-mbtn--select" aria-expanded="false"
                                                        style="user-select: none; width: 50.1719px;"><span
                                                            class="tox-mbtn__select-label">Tools</span>
                                                        <div class="tox-mbtn__select-chevron"><svg width="10" height="10"
                                                                focusable="false">
                                                                <path
                                                                    d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z"
                                                                    fill-rule="nonzero"></path>
                                                            </svg></div>
                                                    </button><button aria-haspopup="true" role="menuitem" type="button"
                                                        tabindex="-1" data-alloy-tabstop="true" unselectable="on"
                                                        class="tox-mbtn tox-mbtn--select" aria-expanded="false"
                                                        style="user-select: none; width: 50.5547px;"><span
                                                            class="tox-mbtn__select-label">Table</span>
                                                        <div class="tox-mbtn__select-chevron"><svg width="10" height="10"
                                                                focusable="false">
                                                                <path
                                                                    d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z"
                                                                    fill-rule="nonzero"></path>
                                                            </svg></div>
                                                    </button></div>
                                                <div class="tox-toolbar-overlord">
                                                    <div role="group" class="tox-toolbar" aria-disabled="false">
                                                        <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                            class="tox-toolbar__group"><button aria-label="Undo"
                                                                data-mce-name="undo" type="button" tabindex="-1"
                                                                class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"
                                                                style="width: 34px;"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24" focusable="false">
                                                                        <path
                                                                            d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 0 1-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 1 1-1.4 1.4l-5-5a1 1 0 0 1 0-1.4l5-5a1 1 0 0 1 1.4 1.4L6.4 8Z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span></button><button aria-label="Redo"
                                                                data-mce-name="redo" type="button" tabindex="-1"
                                                                class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"
                                                                style="width: 34px;"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24" focusable="false">
                                                                        <path
                                                                            d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 1 1-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 1 1 1.4-1.4l5 5a1 1 0 0 1 0 1.4l-5 5a1 1 0 0 1-1.4-1.4l3.3-3.3Z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span></button></div>
                                                        <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                            class="tox-toolbar__group"><button aria-label="Bold"
                                                                data-mce-name="bold" type="button" tabindex="-1"
                                                                class="tox-tbtn" aria-disabled="false" aria-pressed="false"
                                                                style="width: 34px;"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24" focusable="false">
                                                                        <path
                                                                            d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 0 1-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8Zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4Zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4Z"
                                                                            fill-rule="evenodd"></path>
                                                                    </svg></span></button><button aria-label="Italic"
                                                                data-mce-name="italic" type="button" tabindex="-1"
                                                                class="tox-tbtn" aria-disabled="false" aria-pressed="false"
                                                                style="width: 34px;"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24" focusable="false">
                                                                        <path
                                                                            d="m16.7 4.7-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8Z"
                                                                            fill-rule="evenodd"></path>
                                                                    </svg></span></button><button aria-label="Underline"
                                                                data-mce-name="underline" type="button" tabindex="-1"
                                                                class="tox-tbtn" aria-disabled="false" aria-pressed="false"
                                                                style="width: 34px;"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24" focusable="false">
                                                                        <path
                                                                            d="M16 5c.6 0 1 .4 1 1v5.5a4 4 0 0 1-.4 1.8l-1 1.4a5.3 5.3 0 0 1-5.5 1 5 5 0 0 1-1.6-1c-.5-.4-.8-.9-1.1-1.4a4 4 0 0 1-.4-1.8V6c0-.6.4-1 1-1s1 .4 1 1v5.5c0 .3 0 .6.2 1l.6.7a3.3 3.3 0 0 0 2.2.8 3.4 3.4 0 0 0 2.2-.8c.3-.2.4-.5.6-.8l.2-.9V6c0-.6.4-1 1-1ZM8 17h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 0 1 0-2Z"
                                                                            fill-rule="evenodd"></path>
                                                                    </svg></span></button></div>
                                                        <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                            class="tox-toolbar__group"><button aria-label="Align left"
                                                                data-mce-name="alignleft" type="button" tabindex="-1"
                                                                class="tox-tbtn" aria-disabled="false" aria-pressed="false"
                                                                style="width: 34px;"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24" focusable="false">
                                                                        <path
                                                                            d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 4h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Zm0-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z"
                                                                            fill-rule="evenodd"></path>
                                                                    </svg></span></button><button aria-label="Align center"
                                                                data-mce-name="aligncenter" type="button" tabindex="-1"
                                                                class="tox-tbtn" aria-disabled="false" aria-pressed="false"
                                                                style="width: 34px;"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24" focusable="false">
                                                                        <path
                                                                            d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm3 4h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 1 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 0 1 0-2Zm-3-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z"
                                                                            fill-rule="evenodd"></path>
                                                                    </svg></span></button><button aria-label="Align right"
                                                                data-mce-name="alignright" type="button" tabindex="-1"
                                                                class="tox-tbtn" aria-disabled="false" aria-pressed="false"
                                                                style="width: 34px;"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24" focusable="false">
                                                                        <path
                                                                            d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm6 4h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm-6-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z"
                                                                            fill-rule="evenodd"></path>
                                                                    </svg></span></button><button aria-label="Justify"
                                                                data-mce-name="alignjustify" type="button" tabindex="-1"
                                                                class="tox-tbtn" aria-disabled="false" aria-pressed="false"
                                                                style="width: 34px;"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24" focusable="false">
                                                                        <path
                                                                            d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z"
                                                                            fill-rule="evenodd"></path>
                                                                    </svg></span></button></div>
                                                        <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                            class="tox-toolbar__group">
                                                            <div aria-pressed="false" aria-label="Bullet list"
                                                                data-mce-name="bullist" role="button" aria-haspopup="true"
                                                                tabindex="-1" unselectable="on" class="tox-split-button"
                                                                aria-disabled="false" aria-expanded="false"
                                                                aria-describedby="aria_3745122302511740627651498"
                                                                style="user-select: none;"><span role="presentation"
                                                                    class="tox-tbtn" aria-disabled="false"
                                                                    style="width: 34px;"><span
                                                                        class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                            height="24" focusable="false">
                                                                            <path
                                                                                d="M11 5h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0 6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0 6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2ZM4.5 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1Zm0 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1Zm0 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1Z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg></span></span><span role="presentation"
                                                                    class="tox-tbtn tox-split-button__chevron"
                                                                    aria-disabled="false"><svg width="10" height="10">
                                                                        <path
                                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span><span aria-hidden="true"
                                                                    style="display: none;"
                                                                    id="aria_3745122302511740627651498">To open the popup,
                                                                    press Shift+Enter</span></div>
                                                            <div aria-pressed="false" aria-label="Numbered list"
                                                                data-mce-name="numlist" role="button" aria-haspopup="true"
                                                                tabindex="-1" unselectable="on" class="tox-split-button"
                                                                aria-disabled="false" aria-expanded="false"
                                                                aria-describedby="aria_5003973842521740627651499"
                                                                style="user-select: none;"><span role="presentation"
                                                                    class="tox-tbtn" aria-disabled="false"
                                                                    style="width: 34px;"><span
                                                                        class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                            height="24" focusable="false">
                                                                            <path
                                                                                d="M10 17h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 1 1 0-2ZM6 4v3.5c0 .3-.2.5-.5.5a.5.5 0 0 1-.5-.5V5h-.5a.5.5 0 0 1 0-1H6Zm-1 8.8.2.2h1.3c.3 0 .5.2.5.5s-.2.5-.5.5H4.9a1 1 0 0 1-.9-1V13c0-.4.3-.8.6-1l1.2-.4.2-.3a.2.2 0 0 0-.2-.2H4.5a.5.5 0 0 1-.5-.5c0-.3.2-.5.5-.5h1.6c.5 0 .9.4.9 1v.1c0 .4-.3.8-.6 1l-1.2.4-.2.3ZM7 17v2c0 .6-.4 1-1 1H4.5a.5.5 0 0 1 0-1h1.2c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.4a.4.4 0 1 1 0-.8h1.3c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.5a.5.5 0 1 1 0-1H6c.6 0 1 .4 1 1Z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg></span></span><span role="presentation"
                                                                    class="tox-tbtn tox-split-button__chevron"
                                                                    aria-disabled="false"><svg width="10" height="10">
                                                                        <path
                                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span><span aria-hidden="true"
                                                                    style="display: none;"
                                                                    id="aria_5003973842521740627651499">To open the popup,
                                                                    press Shift+Enter</span></div><button
                                                                aria-label="Decrease indent" data-mce-name="outdent"
                                                                type="button" tabindex="-1"
                                                                class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"
                                                                style="width: 34px;"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24" focusable="false">
                                                                        <path
                                                                            d="M7 5h12c.6 0 1 .4 1 1s-.4 1-1 1H7a1 1 0 1 1 0-2Zm5 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 0 1 0-2Zm0 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 0 1 0-2Zm-5 4h12a1 1 0 0 1 0 2H7a1 1 0 0 1 0-2Zm1.6-3.8a1 1 0 0 1-1.2 1.6l-3-2a1 1 0 0 1 0-1.6l3-2a1 1 0 0 1 1.2 1.6L6.8 12l1.8 1.2Z"
                                                                            fill-rule="evenodd"></path>
                                                                    </svg></span></button><button
                                                                aria-label="Increase indent" data-mce-name="indent"
                                                                type="button" tabindex="-1" class="tox-tbtn"
                                                                aria-disabled="false" style="width: 34px;"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24" focusable="false">
                                                                        <path
                                                                            d="M7 5h12c.6 0 1 .4 1 1s-.4 1-1 1H7a1 1 0 1 1 0-2Zm5 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 0 1 0-2Zm0 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 0 1 0-2Zm-5 4h12a1 1 0 0 1 0 2H7a1 1 0 0 1 0-2Zm-2.6-3.8L6.2 12l-1.8-1.2a1 1 0 0 1 1.2-1.6l3 2a1 1 0 0 1 0 1.6l-3 2a1 1 0 1 1-1.2-1.6Z"
                                                                            fill-rule="evenodd"></path>
                                                                    </svg></span></button>
                                                        </div>
                                                        <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                            class="tox-toolbar__group"><button aria-label="Block Paragraph"
                                                                data-mce-name="blocks" aria-haspopup="true" type="button"
                                                                tabindex="-1" unselectable="on"
                                                                class="tox-tbtn tox-tbtn--select tox-tbtn--bespoke"
                                                                aria-expanded="false"
                                                                style="user-select: none; width: 130px;"><span
                                                                    class="tox-tbtn__select-label">Paragraph</span>
                                                                <div class="tox-tbtn__select-chevron"><svg width="10"
                                                                        height="10" focusable="false">
                                                                        <path
                                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></div>
                                                            </button></div>
                                                    </div>
                                                    <div role="group" class="tox-toolbar" aria-disabled="false">
                                                        <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                            class="tox-toolbar__group"><button aria-label="Insert file"
                                                                data-mce-name="responsivefilemanager" type="button"
                                                                tabindex="-1" class="tox-tbtn" aria-disabled="false"
                                                                style="width: 34px;"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24" focusable="false">
                                                                        <path
                                                                            d="M19 4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-4v-2h4V8H5v10h4v2H5a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h14Zm-8 9.4-2.3 2.3a1 1 0 1 1-1.4-1.4l4-4a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1-1.4 1.4L13 13.4V20a1 1 0 0 1-2 0v-6.6Z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span></button></div>
                                                        <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                            class="tox-toolbar__group"><button aria-label="Insert/edit link"
                                                                data-mce-name="link" type="button" tabindex="-1"
                                                                class="tox-tbtn" aria-disabled="false" aria-pressed="false"
                                                                style="width: 34px;"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24" focusable="false">
                                                                        <path
                                                                            d="M6.2 12.3a1 1 0 0 1 1.4 1.4l-2 2a2 2 0 1 0 2.6 2.8l4.8-4.8a1 1 0 0 0 0-1.4 1 1 0 1 1 1.4-1.3 2.9 2.9 0 0 1 0 4L9.6 20a3.9 3.9 0 0 1-5.5-5.5l2-2Zm11.6-.6a1 1 0 0 1-1.4-1.4l2-2a2 2 0 1 0-2.6-2.8L11 10.3a1 1 0 0 0 0 1.4A1 1 0 1 1 9.6 13a2.9 2.9 0 0 1 0-4L14.4 4a3.9 3.9 0 0 1 5.5 5.5l-2 2Z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span></button><button aria-label="Remove link"
                                                                data-mce-name="unlink" type="button" tabindex="-1"
                                                                class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"
                                                                style="width: 34px;"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24" focusable="false">
                                                                        <path
                                                                            d="M6.2 12.3a1 1 0 0 1 1.4 1.4l-2 2a2 2 0 1 0 2.6 2.8l4.8-4.8a1 1 0 0 0 0-1.4 1 1 0 1 1 1.4-1.3 2.9 2.9 0 0 1 0 4L9.6 20a3.9 3.9 0 0 1-5.5-5.5l2-2Zm11.6-.6a1 1 0 0 1-1.4-1.4l2.1-2a2 2 0 1 0-2.7-2.8L11 10.3a1 1 0 0 0 0 1.4A1 1 0 1 1 9.6 13a2.9 2.9 0 0 1 0-4L14.4 4a3.9 3.9 0 0 1 5.5 5.5l-2 2ZM7.6 6.3a.8.8 0 0 1-1 1.1L3.3 4.2a.7.7 0 1 1 1-1l3.2 3.1ZM5.1 8.6a.8.8 0 0 1 0 1.5H3a.8.8 0 0 1 0-1.5H5Zm5-3.5a.8.8 0 0 1-1.5 0V3a.8.8 0 0 1 1.5 0V5Zm6 11.8a.8.8 0 0 1 1-1l3.2 3.2a.8.8 0 0 1-1 1L16 17Zm-2.2 2a.8.8 0 0 1 1.5 0V21a.8.8 0 0 1-1.5 0V19Zm5-3.5a.7.7 0 1 1 0-1.5H21a.8.8 0 0 1 0 1.5H19Z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span></button><button aria-label="Anchor"
                                                                data-mce-name="anchor" type="button" tabindex="-1"
                                                                class="tox-tbtn" aria-disabled="false" aria-pressed="false"
                                                                style="width: 34px;"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24" focusable="false">
                                                                        <path
                                                                            d="M6 4v17l6-4 6 4V4c0-.6-.4-1-1-1H7a1 1 0 0 0-1 1Z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span></button></div>
                                                        <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                            class="tox-toolbar__group"><button
                                                                aria-label="Insert/edit image" data-mce-name="image"
                                                                type="button" tabindex="-1" class="tox-tbtn"
                                                                aria-disabled="false" aria-pressed="false"
                                                                style="width: 34px;"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24" focusable="false">
                                                                        <path
                                                                            d="m5 15.7 3.3-3.2c.3-.3.7-.3 1 0L12 15l4.1-4c.3-.4.8-.4 1 0l2 1.9V5H5v10.7ZM5 18V19h3l2.8-2.9-2-2L5 17.9Zm14-3-2.5-2.4-6.4 6.5H19v-4ZM4 3h16c.6 0 1 .4 1 1v16c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V4c0-.6.4-1 1-1Zm6 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span></button><button
                                                                aria-label="Insert/edit media" data-mce-name="media"
                                                                type="button" tabindex="-1" class="tox-tbtn"
                                                                aria-disabled="false" aria-pressed="false"
                                                                style="width: 34px;"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24" focusable="false">
                                                                        <path
                                                                            d="M4 3h16c.6 0 1 .4 1 1v16c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V4c0-.6.4-1 1-1Zm1 2v14h14V5H5Zm4.8 2.6 5.6 4a.5.5 0 0 1 0 .8l-5.6 4A.5.5 0 0 1 9 16V8a.5.5 0 0 1 .8-.4Z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span></button></div>
                                                        <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                            class="tox-toolbar__group">
                                                            <div aria-pressed="false" aria-label="Text color Black"
                                                                data-mce-name="forecolor" role="button" aria-haspopup="true"
                                                                tabindex="-1" unselectable="on" class="tox-split-button"
                                                                aria-disabled="false" aria-expanded="false"
                                                                aria-describedby="aria_3337118362581740627651506"
                                                                style="user-select: none;"><span role="presentation"
                                                                    class="tox-tbtn" aria-disabled="false"
                                                                    style="width: 34px;"><span
                                                                        class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                            height="24" focusable="false">
                                                                            <g fill-rule="evenodd">
                                                                                <path class="tox-icon-text-color__color"
                                                                                    d="M3 18h18v3H3z" fill="#000000"></path>
                                                                                <path
                                                                                    d="M8.7 16h-.8a.5.5 0 0 1-.5-.6l2.7-9c.1-.3.3-.4.5-.4h2.8c.2 0 .4.1.5.4l2.7 9a.5.5 0 0 1-.5.6h-.8a.5.5 0 0 1-.4-.4l-.7-2.2c0-.3-.3-.4-.5-.4h-3.4c-.2 0-.4.1-.5.4l-.7 2.2c0 .3-.2.4-.4.4Zm2.6-7.6-.6 2a.5.5 0 0 0 .5.6h1.6a.5.5 0 0 0 .5-.6l-.6-2c0-.3-.3-.4-.5-.4h-.4c-.2 0-.4.1-.5.4Z">
                                                                                </path>
                                                                            </g>
                                                                        </svg></span></span><span role="presentation"
                                                                    class="tox-tbtn tox-split-button__chevron"
                                                                    aria-disabled="false"><svg width="10" height="10">
                                                                        <path
                                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span><span aria-hidden="true"
                                                                    style="display: none;"
                                                                    id="aria_3337118362581740627651506">To open the popup,
                                                                    press Shift+Enter</span></div>
                                                            <div aria-pressed="false" aria-label="Background color Black"
                                                                data-mce-name="backcolor" role="button" aria-haspopup="true"
                                                                tabindex="-1" unselectable="on" class="tox-split-button"
                                                                aria-disabled="false" aria-expanded="false"
                                                                aria-describedby="aria_5372943152591740627651507"
                                                                style="user-select: none;"><span role="presentation"
                                                                    class="tox-tbtn" aria-disabled="false"
                                                                    style="width: 34px;"><span
                                                                        class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                            height="24" focusable="false">
                                                                            <g fill-rule="evenodd">
                                                                                <path
                                                                                    class="tox-icon-highlight-bg-color__color"
                                                                                    d="M3 18h18v3H3z" fill="#000000"></path>
                                                                                <path fill-rule="nonzero"
                                                                                    d="M7.7 16.7H3l3.3-3.3-.7-.8L10.2 8l4 4.1-4 4.2c-.2.2-.6.2-.8 0l-.6-.7-1.1 1.1zm5-7.5L11 7.4l3-2.9a2 2 0 0 1 2.6 0L18 6c.7.7.7 2 0 2.7l-2.9 2.9-1.8-1.8-.5-.6">
                                                                                </path>
                                                                            </g>
                                                                        </svg></span></span><span role="presentation"
                                                                    class="tox-tbtn tox-split-button__chevron"
                                                                    aria-disabled="false"><svg width="10" height="10">
                                                                        <path
                                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span><span aria-hidden="true"
                                                                    style="display: none;"
                                                                    id="aria_5372943152591740627651507">To open the popup,
                                                                    press Shift+Enter</span></div>
                                                        </div>
                                                        <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                            class="tox-toolbar__group"><button aria-label="Print"
                                                                data-mce-name="print" type="button" tabindex="-1"
                                                                class="tox-tbtn" aria-disabled="false"
                                                                style="width: 34px;"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24" focusable="false">
                                                                        <path
                                                                            d="M18 8H6a3 3 0 0 0-3 3v6h2v3h14v-3h2v-6a3 3 0 0 0-3-3Zm-1 10H7v-4h10v4Zm.5-5c-.8 0-1.5-.7-1.5-1.5s.7-1.5 1.5-1.5 1.5.7 1.5 1.5-.7 1.5-1.5 1.5Zm.5-8H6v2h12V5Z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span></button><button aria-label="Preview"
                                                                data-mce-name="preview" type="button" tabindex="-1"
                                                                class="tox-tbtn" aria-disabled="false"
                                                                style="width: 34px;"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24" focusable="false">
                                                                        <path
                                                                            d="M3.5 12.5c.5.8 1.1 1.6 1.8 2.3 2 2 4.2 3.2 6.7 3.2s4.7-1.2 6.7-3.2a16.2 16.2 0 0 0 2.1-2.8 15.7 15.7 0 0 0-2.1-2.8c-2-2-4.2-3.2-6.7-3.2a9.3 9.3 0 0 0-6.7 3.2A16.2 16.2 0 0 0 3.2 12c0 .2.2.3.3.5Zm-2.4-1 .7-1.2L4 7.8C6.2 5.4 8.9 4 12 4c3 0 5.8 1.4 8.1 3.8a18.2 18.2 0 0 1 2.8 3.7v1l-.7 1.2-2.1 2.5c-2.3 2.4-5 3.8-8.1 3.8-3 0-5.8-1.4-8.1-3.8a18.2 18.2 0 0 1-2.8-3.7 1 1 0 0 1 0-1Zm12-3.3a2 2 0 1 0 2.7 2.6 4 4 0 1 1-2.6-2.6Z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></span></button><button aria-label="Source code"
                                                                data-mce-name="code" type="button" tabindex="-1"
                                                                class="tox-tbtn" aria-disabled="false"
                                                                style="width: 34px;"><span
                                                                    class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                        height="24" focusable="false">
                                                                        <g fill-rule="nonzero">
                                                                            <path
                                                                                d="M9.8 15.7c.3.3.3.8 0 1-.3.4-.9.4-1.2 0l-4.4-4.1a.8.8 0 0 1 0-1.2l4.4-4.2c.3-.3.9-.3 1.2 0 .3.3.3.8 0 1.1L6 12l3.8 3.7ZM14.2 15.7c-.3.3-.3.8 0 1 .4.4.9.4 1.2 0l4.4-4.1c.3-.3.3-.9 0-1.2l-4.4-4.2a.8.8 0 0 0-1.2 0c-.3.3-.3.8 0 1.1L18 12l-3.8 3.7Z">
                                                                            </path>
                                                                        </g>
                                                                    </svg></span></button></div>
                                                        <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                            class="tox-toolbar__group"><button aria-label="Font sans-serif"
                                                                data-mce-name="fontfamily" aria-haspopup="true"
                                                                type="button" tabindex="-1" unselectable="on"
                                                                class="tox-tbtn tox-tbtn--select tox-tbtn--bespoke"
                                                                aria-expanded="false"
                                                                style="user-select: none; width: 130px;"><span
                                                                    class="tox-tbtn__select-label">sans-serif</span>
                                                                <div class="tox-tbtn__select-chevron"><svg width="10"
                                                                        height="10" focusable="false">
                                                                        <path
                                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></div>
                                                            </button>
                                                            <div data-mce-name="fontsizeinput" tabindex="-1"
                                                                class="tox-number-input"><button
                                                                    aria-label="Decrease font size" data-mce-name="minus"
                                                                    type="button" tabindex="-1" class="minus"><span
                                                                        class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                            height="24" focusable="false">
                                                                            <path
                                                                                d="M19 11a1 1 0 0 1 .1 2H5a1 1 0 0 1-.1-2H19Z">
                                                                            </path>
                                                                        </svg></span></button>
                                                                <div tabindex="-1" class="tox-input-wrapper"><input
                                                                        type="text" tabindex="-1"></div><button
                                                                    aria-label="Increase font size" data-mce-name="plus"
                                                                    type="button" tabindex="-1" class="plus"><span
                                                                        class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                            height="24" focusable="false">
                                                                            <path
                                                                                d="M12 4c.5 0 1 .4 1 .9V11h6a1 1 0 0 1 .1 2H13v6a1 1 0 0 1-2 .1V13H5a1 1 0 0 1-.1-2H11V5c0-.6.4-1 1-1Z">
                                                                            </path>
                                                                        </svg></span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div role="group" class="tox-toolbar" aria-disabled="false">
                                                        <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                            class="tox-toolbar__group"><button
                                                                data-mce-name="laporan_keuangan" aria-haspopup="true"
                                                                type="button" tabindex="-1" unselectable="on"
                                                                class="tox-tbtn tox-tbtn--select" aria-expanded="false"
                                                                style="user-select: none; width: 152.414px;"><span
                                                                    class="tox-tbtn__select-label">Laporan Keuangan</span>
                                                                <div class="tox-tbtn__select-chevron"><svg width="10"
                                                                        height="10" focusable="false">
                                                                        <path
                                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></div>
                                                            </button></div>
                                                        <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                            class="tox-toolbar__group"><button
                                                                data-mce-name="penerima_bantuan" aria-haspopup="true"
                                                                type="button" tabindex="-1" unselectable="on"
                                                                class="tox-tbtn tox-tbtn--select" aria-expanded="false"
                                                                style="user-select: none; width: 149.328px;"><span
                                                                    class="tox-tbtn__select-label">Penerima Bantuan</span>
                                                                <div class="tox-tbtn__select-chevron"><svg width="10"
                                                                        height="10" focusable="false">
                                                                        <path
                                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></div>
                                                            </button></div>
                                                        <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                            class="tox-toolbar__group"><button data-mce-name="sotk"
                                                                aria-haspopup="true" type="button" tabindex="-1"
                                                                unselectable="on" class="tox-tbtn tox-tbtn--select"
                                                                aria-expanded="false"
                                                                style="user-select: none; width: 156.43px;"><span
                                                                    class="tox-tbtn__select-label">Struktur
                                                                    Organisasi</span>
                                                                <div class="tox-tbtn__select-chevron"><svg width="10"
                                                                        height="10" focusable="false">
                                                                        <path
                                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg></div>
                                                            </button></div>
                                                    </div>
                                                </div>
                                                <div class="tox-anchorbar"></div>
                                            </div>
                                            <div class="tox-sidebar-wrap">
                                                <div class="tox-edit-area"><iframe id="mce_0_ifr" frameborder="0"
                                                        allowtransparency="true" title="Rich Text Area"
                                                        class="tox-edit-area__iframe"
                                                        srcdoc="<!DOCTYPE html><html><head><meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot; /></head><body id=&quot;tinymce&quot; class=&quot;mce-content-body &quot; data-id=&quot;mce_0&quot; aria-label=&quot;Rich Text Area. Press ALT-0 for help.&quot;><br></body></html>"></iframe>
                                                </div>
                                                <div role="presentation" class="tox-sidebar">
                                                    <div data-alloy-tabstop="true" tabindex="-1"
                                                        class="tox-sidebar__slider tox-sidebar--sliding-closed"
                                                        style="width: 0px;">
                                                        <div class="tox-sidebar__pane-container"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tox-bottom-anchorbar"></div>
                                        </div>
                                        <div aria-hidden="true" class="tox-view-wrap" style="display: none;">
                                            <div class="tox-view-wrap__slot-container"></div>
                                        </div>
                                        <div class="tox-statusbar">
                                            <div
                                                class="tox-statusbar__text-container tox-statusbar__text-container--flex-start">
                                                <div role="navigation" data-alloy-tabstop="true" class="tox-statusbar__path"
                                                    aria-disabled="false">
                                                    <div data-index="0" role="button" tabindex="-1"
                                                        class="tox-statusbar__path-item" aria-disabled="false">p</div>
                                                </div>
                                                <div class="tox-statusbar__right-container"><button type="button"
                                                        tabindex="-1" data-alloy-tabstop="true"
                                                        class="tox-statusbar__wordcount">0 words</button><span
                                                        class="tox-statusbar__branding"><a
                                                            href="https://www.tiny.cloud/powered-by-tiny?utm_campaign=poweredby&amp;utm_source=tiny&amp;utm_medium=referral&amp;utm_content=v7"
                                                            rel="noopener" target="_blank" aria-label="Build with TinyMCE"
                                                            tabindex="-1">Build with <svg height="16" viewBox="0 0 80 16"
                                                                width="80" xmlns="http://www.w3.org/2000/svg">
                                                                <g opacity=".8">
                                                                    <path
                                                                        d="m80 3.537v-2.202h-7.976v11.585h7.976v-2.25h-5.474v-2.621h4.812v-2.069h-4.812v-2.443zm-10.647 6.929c-.493.217-1.13.337-1.864.337s-1.276-.156-1.805-.47a3.732 3.732 0 0 1 -1.3-1.298c-.324-.554-.48-1.191-.48-1.877s.156-1.335.48-1.877a3.635 3.635 0 0 1 1.3-1.299 3.466 3.466 0 0 1 1.805-.481c.65 0 .914.06 1.263.18.36.12.698.277.986.47.289.192.578.384.842.6l.12.085v-2.586l-.023-.024c-.385-.35-.855-.614-1.384-.818-.53-.205-1.155-.313-1.877-.313-.721 0-1.6.144-2.333.445a5.773 5.773 0 0 0 -1.937 1.251 5.929 5.929 0 0 0 -1.324 1.9c-.324.735-.48 1.565-.48 2.455s.156 1.72.48 2.454c.325.734.758 1.383 1.324 1.913.553.53 1.215.938 1.937 1.25a6.286 6.286 0 0 0 2.333.434c.819 0 1.384-.108 1.961-.313.59-.216 1.083-.505 1.468-.866l.024-.024v-2.49l-.12.096c-.41.337-.878.626-1.396.866zm-14.869-4.15-4.8-5.04-.024-.025h-.902v11.67h2.502v-6.847l2.827 3.08.385.409.397-.41 2.791-3.067v6.845h2.502v-11.679h-.902l-4.788 5.052z">
                                                                    </path>
                                                                    <path clip-rule="evenodd"
                                                                        d="m15.543 5.137c0-3.032-2.466-5.113-4.957-5.137-.36 0-.745.024-1.094.096-.157.024-3.85.758-3.85.758-3.032.602-4.62 2.466-4.704 4.788-.024.89-.024 4.27-.024 4.27.036 3.165 2.406 5.138 5.017 5.126.337 0 1.119-.109 1.287-.145.144-.024.385-.084.746-.144.661-.12 1.684-.325 3.067-.602 2.37-.409 4.103-2.009 4.44-4.33.156-1.023.084-4.692.084-4.692zm-3.213 3.308-2.346.457v2.31l-5.859 1.143v-5.75l2.346-.458v3.441l3.513-.686v-3.44l-3.513.685v-2.297l5.859-1.143v5.75zm20.09-3.296-.083-1.023h-2.13v8.794h2.346v-4.884c0-1.107.95-1.985 2.057-1.997 1.095 0 1.901.89 1.901 1.997v4.884h2.346v-5.245c-.012-2.105-1.588-3.777-3.67-3.765a3.764 3.764 0 0 0 -2.778 1.25l.012-.011zm-6.014-4.102 2.346-.458v2.298l-2.346.457z"
                                                                        fill-rule="evenodd"></path>
                                                                    <path d="m28.752 4.126h-2.346v8.794h2.346z"></path>
                                                                    <path clip-rule="evenodd"
                                                                        d="m43.777 15.483 4.043-11.357h-2.418l-1.54 4.355-.445 1.324-.36-1.324-1.54-4.355h-2.418l3.151 8.794-1.083 3.08zm-21.028-5.51c0 .722.541 1.034.878 1.034s.638-.048.95-.144l.518 1.708c-.217.145-.879.518-2.13.518a2.565 2.565 0 0 1 -2.562-2.587c-.024-1.082-.024-2.49 0-4.21h-1.54v-2.142h1.54v-1.912l2.346-.458v2.37h2.201v2.142h-2.2v3.693-.012z"
                                                                        fill-rule="evenodd"></path>
                                                                </g>
                                                            </svg></a></span></div>
                                            </div>
                                            <div aria-label="Press the Up and Down arrow keys to resize the editor."
                                                data-mce-name="resize-handle" data-alloy-tabstop="true" tabindex="-1"
                                                class="tox-statusbar__resize-handle"><svg width="10" height="10"
                                                    focusable="false">
                                                    <g fill-rule="nonzero">
                                                        <path
                                                            d="M8.1 1.1A.5.5 0 1 1 9 2l-7 7A.5.5 0 1 1 1 8l7-7ZM8.1 5.1A.5.5 0 1 1 9 6l-3 3A.5.5 0 1 1 5 8l3-3Z">
                                                        </path>
                                                    </g>
                                                </svg></div>
                                        </div>
                                        <div aria-hidden="true" class="tox-throbber" style="display: none;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box box-info collapsed-box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Unggah Gambar</h3>
                                <div class="box-tools">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <img class="profile-user-img img-responsive img-circle"
                                            src="data:image/png;base64,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"
                                            alt="Tidak Ada Gambar">
                                        <label class="control-label" for="gambar">Gambar Utama</label>
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" id="file_path">
                                            <input type="file" class="hidden" id="file" name="gambar">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-info" id="file_browser"><i
                                                        class="fa fa-search"></i> Browse</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <img class="profile-user-img img-responsive img-circle"
                                            src="data:image/png;base64,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"
                                            alt="Tidak Ada Gambar">
                                        <label class="control-label" for="gambar1">Gambar Tambahan</label>
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" id="file_path1">
                                            <input type="file" class="hidden" id="file1" name="gambar1">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-info" id="file_browser1"><i
                                                        class="fa fa-search"></i> Browse</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <img class="profile-user-img img-responsive img-circle"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAEnSAABJ0gGoRYr4AAAAIGNIUk0AAHpFAACAgwAA90YAAITSAABzPgAA5uMAADcTAAAlgMp2cXkAAAscSURBVHja1FvbbxzVHf5+58xefInv+BZir2PH2AlxbMcJSYGEOE5IAoSq4qFCqlQe2iekqq0qlIoiWjWNgEBBalWJ/gHtWx9bqQL1AhII1QIhSEhIsr7n4viy3vvM+f36sLPr8caO7Tix12Md7XrWMz7fd37X78wSNug41xsCAB8AApA+MxjekHmoDQTvB+QlQH4CoNQ9t+6H3gjwRGSJyA+01r8jpQeY2Sai/w00VNgfTMys63xoA8BrNub7lt//5o7exxr9gSAufPrRbDqVOEtK/wEiiTOD4ayVWADqRcQSEQAQosVhEFEcwCQAWY07WesJXimljON8V1vW2dbufY1dh49D+3wgrcu/+vhfZ+x00iGl/3SuN5R0L2sA8GelVIiIOHsv4QwbLnYBoEXknwBeAZBYzbys9QKvLYsc2z6ptH6jZc/e5q6njoPn5mDEoOOxJyHGVH79yX9etdMph5R+HyIpEfEprbeHOrt21DZvh3hw58gQxtBXX+DG8LWLRFCrNWprPcD7A0GkkokBpdT55p17WruPnADiccRGhwEwilnQefAwmLnq4qf/fc22045S+s/MLARIfUsb2nr2w45FIQCIABGAlIIOFmF28iZuhK9AlAKt0qmtBw0+MjOFLeWVh4jo/MPtuzp6jj0DlUojNjoMcWyACPGJMRQTYdcTRyDMNRc/+/h1x06nifBvAEZEYMejiFz+BiI8H8EDQZS2tWfYAORe5mg9SPDGONhSXvkYAW9vbevo6j32LHzMiI4OgdNpZJdLjEF8fNQloR9sTO2lwU9+49jp9wFYQgBYIGwgzFnbh1gmCz7nEQVBwLneEJgZSukeAG/Xb9/Rt/f4cwhojWj4KjiVQr6tijGIj42ghAiPHhoAMzdeHvzk5yLiA7u4vNcQAYpyZBRMIXSuNwQRARHtAnC+rqnl8b6nT6PIF0Bs6Bo4lcRSjirGIDY6AolF0fXUMbT17t+ilAqKyDzY+3xY9xs8ICDCDhF5q6ax6UjfyedRUlyKaPgKTDKB5aKUGAexkWGUNDWj6/BxBErLUFpbC5NMAcx3WUraWAuYL2UpJCxvVtVvPdF34nkqK61AbPgaTGJ58F4S4iNDkGgUHb0HUF5ShsTN64umwYKwAE8d/7AIn6uorT/dd/w0VdbUIhq+AicWW/U92XEQHxsGaR/ABuw4hekCHvD1IvzbsuqHXth7/DlV07AV0aGrcKLRe763GIaY1PJ/VwDdYI0Iv15aWf1i78CzVl1TCNGha7AjkfWps9dQB6j7sPqVIvxqSVnFD3uOnvI1trQhNhSGHZldD9Abpwe44MtE+JWi0rIf7zlyIrBtRyfio8NIz0xjsxzWGsCXiPBPg8WlL3cdOlbU3Lkb8dFhpKZuZ+qAB231nldZTwLO9YYAoiJh87I/WPyzR5/sL2nZ3YPE+CiSkzczTQqtbVIrIoDFTYuyfr2AC94vbH7k8wdf2XnwcFnrnn1IXB9H8uYNCDNIEUQevOmKCMQwsmWysFQqrUoBxB+IJOaC94kxL1n+wK87DzxZ3bH/CaRu3kDi+gREOGP2IusyMm0xwV9VA4bg1ki4zrFTIKLPBhoq0iuV1vRKwRORFmNetPz+s+17D9Z2HjyM9OQtxCfGMiu/zsFLBG53KKgOtcIXCPhuj430OE7arEZf1CsCr5Ri5he0z/dGa/e+xl1P9MOZnkJsbATCZtUixP10A5OIAyKobXsE2rL8UxNjvcaxk6TU4EBDhbMcCXpZHU9rYmNOK63Pb9/d07z70DFwZBax4SEwm3U1+zuGS4ITnQOBULujAwQKTk2M7TWOPUdKfT7QUGHuRoK+q47n85Gx7aeVUu807exq6zp8HBKPYW4oDLZt0EYBz48HnFGMlFKobesAMxdN3xjvY8e5TUp9OdBQwUuRoJcCX7+tGZGp20eI6N2H23d2dvefBBJJzIWvZsAXWEEjzHBic9CWD3XtnXBS6ZKZW9f72JjrSqmvjjZUyGIk6MXAO+k0YtG57xDRew3b27u6j5yENg7mrl2BSaUKDnyugxSGHY3A8gdQ29YBO5XcMnvreh8zjyitLx6tL7+DBH2HlGUMlGX1AXi3PtS6r/voKfhAiFz7FiaZLOy6VgA2BvZcBL6iYtS1PYJUIlY+e+vGXma+pi3r0tH6cnhJ0ItIWbsBvFe7rfnx7qPPIODzIXLlMpxEwiPLSQEPgA0jPReBr6QUtS3tSEYjlZGpyb1szCXL77/aX1eWI0EvlLKoAyLvVm/d1t/TfwpFwSLMXv4GTiJ+hyZZ6Ac7DtKRWQRKSvFQqA2JyEz13PTtbjbm6/qmUPhACeGDiRloj5TVKiLvVNY3nujuP0XlVTWIDoVhUslMuW1MpvzcJANupSjGoLiqGtXbmhGdvl0bm53eE4vMfMksI8caK6EHGioAoElE3iqrqjm956kTqmZbMwDAX16Oorp6+Msr4MRjYDu1SdZfoANBbGlpRbDmIQgRfMEgyitrEJmabEhE53YR0ecAJiwAIQBnieh7ls+nxr+9gPHLF+ald8uHpl3dKKpvRPrbSxllVhW2L4gIiiur4CjChY8+RCoeAxGBiGDsNIjogIj8HsAvLADHABQD+Mf0jQmZuj4+TyOhVCm9v6y6priusQkgQEgAIwVvA2RZSM5FMH7lYjqZiH8IwRgAi5RSRKSR2UU9ZAH4C4C/5kSm+UjHgLQT0d+YOSTMEOaMfxUyfjVfGIkwiFSKiP5ISv3d0/5TdlhnBsPRpapBEYkCYDEMdoMgO1zY2cBkFWUDoQVnzZnBsLknQUSEXYmaAci6CB5rToOGvYonrUUREjEZcxKR+d3ZQs8DwpCMCdBaCJDczVz/Z5aCL4gkW7eQzsa0e7cAgbtDkw2Am8UFmCGcA6/WYgEiENekMkQUtAnkhBKGJwreqwW4eo8xGUZFwCIZIaTQY4AxmWfqZK1BkAUCybkBmJd6WK+grIANQ7SsOQgC5GaBbDMEyWnxhVsGuhbAelkXUCuIAfP+n2W2wH/YsBsEeUEQXOx55JXXAdkbSoFnAfYGQV52oVdcCbIzrwdshmZImDPVIGRNQTCTBnk+BW6WSpCNyViArK0OmGfTTYOCAu8Gs0FQGDDuYhGtsRdwewBxNyE2RS9gPDFAoJZyguVdQESY3TRoNkEl6AZCNiZjAbRGF8jswnq6Qc++XKEHQc+DlWt0Ac5mAd5U7bDrAjkLkFUQQGcGw/LLrm1qi6XpDgvYDAQ4BnAyApDDYr32xVCWDFmOAOWe1+OxVFF7eTHl6gDmzZEFIGBmkDDAQinDRcgIvwzAcSUyySeAkNkp8rlDz6RNUEQolwWQeTjpbkGwEOKjMBa4a5olAKDIJcD2DPYS4AXvB6AThn0CEJhBWqOoqjrzOIwHpSzSi6/eX1dwXe47Ayu7p7IsOMYBAHIgfgABd+XJM3UnXyZWLhEagHZEtAgoHp3DjG/yzkl4+wJahgTvdxtElj13R8dJeYR755K9Po8cx7ZhxJAHE1wSsjjZWqr8dYOHw4Rbk9OTFbdnJnNbbgs6xcVWKVuAyqIrJit25FV+5v47WdjJimMzosjfQnbfW55fjBsgspZAF2bjN6sC1q80UYltWBuCZhbF2W/r0cLv8El+G52/yt7POLdi+Taz4HfJu7Xke44ssAkFQJQiowGjiYwmcsYS6VsefI4nEDItkQGyscDymIvlvip3FGIuIM8qm7yRBZ4NgAZe1TDvJvmgdR54WqU5rycBcKN9dngJyL5fvkT0BEYvIcpzrlAtIEuA5JGw6HPV/x8AsQUIleM4dGcAAAAASUVORK5CYII="
                                            alt="Tidak Ada Gambar">
                                        <label class="control-label" for="gambar2">Gambar Tambahan</label>
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" id="file_path2">
                                            <input type="file" class="hidden" id="file2" name="gambar2">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-info" id="file_browser2"><i
                                                        class="fa fa-search"></i> Browse</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <img class="profile-user-img img-responsive img-circle"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAEnSAABJ0gGoRYr4AAAAIGNIUk0AAHpFAACAgwAA90YAAITSAABzPgAA5uMAADcTAAAlgMp2cXkAAAscSURBVHja1FvbbxzVHf5+58xefInv+BZir2PH2AlxbMcJSYGEOE5IAoSq4qFCqlQe2iekqq0qlIoiWjWNgEBBalWJ/gHtWx9bqQL1AhII1QIhSEhIsr7n4viy3vvM+f36sLPr8caO7Tix12Md7XrWMz7fd37X78wSNug41xsCAB8AApA+MxjekHmoDQTvB+QlQH4CoNQ9t+6H3gjwRGSJyA+01r8jpQeY2Sai/w00VNgfTMys63xoA8BrNub7lt//5o7exxr9gSAufPrRbDqVOEtK/wEiiTOD4ayVWADqRcQSEQAQosVhEFEcwCQAWY07WesJXimljON8V1vW2dbufY1dh49D+3wgrcu/+vhfZ+x00iGl/3SuN5R0L2sA8GelVIiIOHsv4QwbLnYBoEXknwBeAZBYzbys9QKvLYsc2z6ptH6jZc/e5q6njoPn5mDEoOOxJyHGVH79yX9etdMph5R+HyIpEfEprbeHOrt21DZvh3hw58gQxtBXX+DG8LWLRFCrNWprPcD7A0GkkokBpdT55p17WruPnADiccRGhwEwilnQefAwmLnq4qf/fc22045S+s/MLARIfUsb2nr2w45FIQCIABGAlIIOFmF28iZuhK9AlAKt0qmtBw0+MjOFLeWVh4jo/MPtuzp6jj0DlUojNjoMcWyACPGJMRQTYdcTRyDMNRc/+/h1x06nifBvAEZEYMejiFz+BiI8H8EDQZS2tWfYAORe5mg9SPDGONhSXvkYAW9vbevo6j32LHzMiI4OgdNpZJdLjEF8fNQloR9sTO2lwU9+49jp9wFYQgBYIGwgzFnbh1gmCz7nEQVBwLneEJgZSukeAG/Xb9/Rt/f4cwhojWj4KjiVQr6tijGIj42ghAiPHhoAMzdeHvzk5yLiA7u4vNcQAYpyZBRMIXSuNwQRARHtAnC+rqnl8b6nT6PIF0Bs6Bo4lcRSjirGIDY6AolF0fXUMbT17t+ilAqKyDzY+3xY9xs8ICDCDhF5q6ax6UjfyedRUlyKaPgKTDKB5aKUGAexkWGUNDWj6/BxBErLUFpbC5NMAcx3WUraWAuYL2UpJCxvVtVvPdF34nkqK61AbPgaTGJ58F4S4iNDkGgUHb0HUF5ShsTN64umwYKwAE8d/7AIn6uorT/dd/w0VdbUIhq+AicWW/U92XEQHxsGaR/ABuw4hekCHvD1IvzbsuqHXth7/DlV07AV0aGrcKLRe763GIaY1PJ/VwDdYI0Iv15aWf1i78CzVl1TCNGha7AjkfWps9dQB6j7sPqVIvxqSVnFD3uOnvI1trQhNhSGHZldD9Abpwe44MtE+JWi0rIf7zlyIrBtRyfio8NIz0xjsxzWGsCXiPBPg8WlL3cdOlbU3Lkb8dFhpKZuZ+qAB231nldZTwLO9YYAoiJh87I/WPyzR5/sL2nZ3YPE+CiSkzczTQqtbVIrIoDFTYuyfr2AC94vbH7k8wdf2XnwcFnrnn1IXB9H8uYNCDNIEUQevOmKCMQwsmWysFQqrUoBxB+IJOaC94kxL1n+wK87DzxZ3bH/CaRu3kDi+gREOGP2IusyMm0xwV9VA4bg1ki4zrFTIKLPBhoq0iuV1vRKwRORFmNetPz+s+17D9Z2HjyM9OQtxCfGMiu/zsFLBG53KKgOtcIXCPhuj430OE7arEZf1CsCr5Ri5he0z/dGa/e+xl1P9MOZnkJsbATCZtUixP10A5OIAyKobXsE2rL8UxNjvcaxk6TU4EBDhbMcCXpZHU9rYmNOK63Pb9/d07z70DFwZBax4SEwm3U1+zuGS4ITnQOBULujAwQKTk2M7TWOPUdKfT7QUGHuRoK+q47n85Gx7aeVUu807exq6zp8HBKPYW4oDLZt0EYBz48HnFGMlFKobesAMxdN3xjvY8e5TUp9OdBQwUuRoJcCX7+tGZGp20eI6N2H23d2dvefBBJJzIWvZsAXWEEjzHBic9CWD3XtnXBS6ZKZW9f72JjrSqmvjjZUyGIk6MXAO+k0YtG57xDRew3b27u6j5yENg7mrl2BSaUKDnyugxSGHY3A8gdQ29YBO5XcMnvreh8zjyitLx6tL7+DBH2HlGUMlGX1AXi3PtS6r/voKfhAiFz7FiaZLOy6VgA2BvZcBL6iYtS1PYJUIlY+e+vGXma+pi3r0tH6cnhJ0ItIWbsBvFe7rfnx7qPPIODzIXLlMpxEwiPLSQEPgA0jPReBr6QUtS3tSEYjlZGpyb1szCXL77/aX1eWI0EvlLKoAyLvVm/d1t/TfwpFwSLMXv4GTiJ+hyZZ6Ac7DtKRWQRKSvFQqA2JyEz13PTtbjbm6/qmUPhACeGDiRloj5TVKiLvVNY3nujuP0XlVTWIDoVhUslMuW1MpvzcJANupSjGoLiqGtXbmhGdvl0bm53eE4vMfMksI8caK6EHGioAoElE3iqrqjm956kTqmZbMwDAX16Oorp6+Msr4MRjYDu1SdZfoANBbGlpRbDmIQgRfMEgyitrEJmabEhE53YR0ecAJiwAIQBnieh7ls+nxr+9gPHLF+ald8uHpl3dKKpvRPrbSxllVhW2L4gIiiur4CjChY8+RCoeAxGBiGDsNIjogIj8HsAvLADHABQD+Mf0jQmZuj4+TyOhVCm9v6y6priusQkgQEgAIwVvA2RZSM5FMH7lYjqZiH8IwRgAi5RSRKSR2UU9ZAH4C4C/5kSm+UjHgLQT0d+YOSTMEOaMfxUyfjVfGIkwiFSKiP5ISv3d0/5TdlhnBsPRpapBEYkCYDEMdoMgO1zY2cBkFWUDoQVnzZnBsLknQUSEXYmaAci6CB5rToOGvYonrUUREjEZcxKR+d3ZQs8DwpCMCdBaCJDczVz/Z5aCL4gkW7eQzsa0e7cAgbtDkw2Am8UFmCGcA6/WYgEiENekMkQUtAnkhBKGJwreqwW4eo8xGUZFwCIZIaTQY4AxmWfqZK1BkAUCybkBmJd6WK+grIANQ7SsOQgC5GaBbDMEyWnxhVsGuhbAelkXUCuIAfP+n2W2wH/YsBsEeUEQXOx55JXXAdkbSoFnAfYGQV52oVdcCbIzrwdshmZImDPVIGRNQTCTBnk+BW6WSpCNyViArK0OmGfTTYOCAu8Gs0FQGDDuYhGtsRdwewBxNyE2RS9gPDFAoJZyguVdQESY3TRoNkEl6AZCNiZjAbRGF8jswnq6Qc++XKEHQc+DlWt0Ac5mAd5U7bDrAjkLkFUQQGcGw/LLrm1qi6XpDgvYDAQ4BnAyApDDYr32xVCWDFmOAOWe1+OxVFF7eTHl6gDmzZEFIGBmkDDAQinDRcgIvwzAcSUyySeAkNkp8rlDz6RNUEQolwWQeTjpbkGwEOKjMBa4a5olAKDIJcD2DPYS4AXvB6AThn0CEJhBWqOoqjrzOIwHpSzSi6/eX1dwXe47Ayu7p7IsOMYBAHIgfgABd+XJM3UnXyZWLhEagHZEtAgoHp3DjG/yzkl4+wJahgTvdxtElj13R8dJeYR755K9Po8cx7ZhxJAHE1wSsjjZWqr8dYOHw4Rbk9OTFbdnJnNbbgs6xcVWKVuAyqIrJit25FV+5v47WdjJimMzosjfQnbfW55fjBsgspZAF2bjN6sC1q80UYltWBuCZhbF2W/r0cLv8El+G52/yt7POLdi+Taz4HfJu7Xke44ssAkFQJQiowGjiYwmcsYS6VsefI4nEDItkQGyscDymIvlvip3FGIuIM8qm7yRBZ4NgAZe1TDvJvmgdR54WqU5rycBcKN9dngJyL5fvkT0BEYvIcpzrlAtIEuA5JGw6HPV/x8AsQUIleM4dGcAAAAASUVORK5CYII="
                                            alt="Tidak Ada Gambar">
                                        <label class="control-label" for="gambar3">Gambar Tambahan</label>
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" id="file_path3">
                                            <input type="file" class="hidden" id="file3" name="gambar3">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-info" id="file_browser3"><i
                                                        class="fa fa-search"></i> Browse</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Pengaturan Tampilan</h3>
                                <div class="box-tools">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="box-body no-padding">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label" for="tampilan">Posisi</label>
                                        <select name="tampilan"
                                            class="form-control input-sm select2 select2-hidden-accessible"
                                            data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option value="1" data-select2-id="3">Konten + Sidebar Kanan</option>
                                            <option value="2">Konten + Sidebar Kiri</option>
                                            <option value="3">Konten Lebar Penuh</option>
                                        </select><span class="select2 select2-container select2-container--default"
                                            dir="ltr" data-select2-id="2" style="width: 410px;"><span
                                                class="selection"><span class="select2-selection select2-selection--single"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-labelledby="select2-tampilan-2x-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-tampilan-2x-container" role="textbox"
                                                        aria-readonly="true" title="Konten + Sidebar Kanan">Konten + Sidebar
                                                        Kanan</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Pengaturan Lainnya</h3>
                                <div class="box-tools">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="box-body no-padding">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label" for="dokumen">Dokumen Lampiran</label>
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" id="file_path4">
                                            <input type="file" class="hidden" id="file4" name="dokumen" accept=".pdf">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-info" id="file_browser4"><i
                                                        class="fa fa-search"></i></button>
                                                <button type="button" class="btn btn-info btn-danger" id="hapus_file"><i
                                                        class="fa fa-stop"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="nama_dokumen">Nama Dokumen</label>
                                        <input id="link_dokumen" name="link_dokumen"
                                            class="form-control input-sm strip_tags" type="text" value="" maxlength="100">
                                        <span
                                            class="help-block"><code>(Nantinya akan menjadi link unduh/download)</code></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="tgl_upload">Tanggal Posting</label>
                                        <div class="input-group input-group-sm date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input class="form-control input-sm pull-right tgl_jam" id="tgl_1" name="tgl_upload"
                                                type="text" value="">
                                        </div>
                                        <span
                                            class="help-block"><code>(Kosongkan jika ingin langsung di post, bisa digunakan untuk artikel terjadwal)</code></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box box-info">
                            <div class="box-body no-padding">
                                <div class="box-footer">
                                    <button type="reset" class="btn btn-social btn-danger btn-sm pull-left"><i
                                            class="fa fa-times"></i> Batal</button>
                                    <button type="submit" class="btn btn-social btn-info btn-sm pull-right"><i
                                            class="fa fa-check"></i> Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </section>
    </div>


    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
        $('#tglPost input').datepicker({
        });
    </script>

    <script>
        $('#tgl_1').datepicker({
           autoclose: true
       })

   </script>
@endsection
