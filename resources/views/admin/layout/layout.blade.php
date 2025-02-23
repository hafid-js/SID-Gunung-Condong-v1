<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | General Form Elements</title>
    <!-- BS Stepper -->
    <link rel="stylesheet" href="{{ url('admin/plugins/bs-stepper/css/bs-stepper.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ url('admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('admin/css/adminlte.min.css?v=3.2.0') }}">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jsGrid -->
    <link rel="stylesheet" href="{{ url('admin/plugins/jsgrid/jsgrid.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin/plugins/jsgrid/jsgrid-theme.min.css') }}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{ url('admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    {{-- leaflet map --}}
    <link rel='stylesheet' href='https://unpkg.com/leaflet@1.8.0/dist/leaflet.css' crossorigin='' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script data-cfasync="false" nonce="6b1e2d2c-7b83-43cc-958c-e03e128b7ee4">try { (function (w, d) { !function (j, k, l, m) { if (j.zaraz) console.error("zaraz is loaded twice"); else { j[l] = j[l] || {}; j[l].executed = []; j.zaraz = { deferred: [], listeners: [] }; j.zaraz._v = "5850"; j.zaraz._n = "6b1e2d2c-7b83-43cc-958c-e03e128b7ee4"; j.zaraz.q = []; j.zaraz._f = function (n) { return async function () { var o = Array.prototype.slice.call(arguments); j.zaraz.q.push({ m: n, a: o }) } }; for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p); j.zaraz.init = () => { var q = k.getElementsByTagName(m)[0], r = k.createElement(m), s = k.getElementsByTagName("title")[0]; s && (j[l].t = k.getElementsByTagName("title")[0].text); j[l].x = Math.random(); j[l].w = j.screen.width; j[l].h = j.screen.height; j[l].j = j.innerHeight; j[l].e = j.innerWidth; j[l].l = j.location.href; j[l].r = k.referrer; j[l].k = j.screen.colorDepth; j[l].n = k.characterSet; j[l].o = (new Date).getTimezoneOffset(); if (j.dataLayer) for (const t of Object.entries(Object.entries(dataLayer).reduce(((u, v) => ({ ...u[1], ...v[1] })), {}))) zaraz.set(t[0], t[1], { scope: "page" }); j[l].q = []; for (; j.zaraz.q.length;) { const w = j.zaraz.q.shift(); j[l].q.push(w) } r.defer = !0; for (const x of [localStorage, sessionStorage]) Object.keys(x || {}).filter((z => z.startsWith("_zaraz_"))).forEach((y => { try { j[l]["z_" + y.slice(7)] = JSON.parse(x.getItem(y)) } catch { j[l]["z_" + y.slice(7)] = x.getItem(y) } })); r.referrerPolicy = "origin"; r.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l]))); q.parentNode.insertBefore(r, q) };["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener("DOMContentLoaded", zaraz.init) } }(w, d, "zarazData", "script"); window.zaraz._p = async bs => new Promise((bt => { if (bs) { bs.e && bs.e.forEach((bu => { try { const bv = d.querySelector("script[nonce]"), bw = bv?.nonce || bv?.getAttribute("nonce"), bx = d.createElement("script"); bw && (bx.nonce = bw); bx.innerHTML = bu; bx.onload = () => { d.head.removeChild(bx) }; d.head.appendChild(bx) } catch (by) { console.error(`Error executing script: ${bu}\n`, by) } })); Promise.allSettled((bs.f || []).map((bz => fetch(bz[0], bz[1])))) } bt() })); zaraz._p({ "e": ["(function(w,d){})(window,document)"] }); })(window, document) } catch (e) { throw fetch("/cdn-cgi/zaraz/t"), e; };
    </script>

    <!-- JS datepicker -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- JS datepicker -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap Datepicker CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css">

    {{-- maps leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 555px;
        }

        .bg-primary {
            background-color: #0d6efd;
        }

        /* Mengubah font untuk seluruh body */
        /* body {
    font-family: 'Roboto', sans-serif !important;
} */

        /* Mengubah ukuran font di sidebar */
        .main-sidebar .nav-pills .nav-link {
            font-size: 14px !important;
        }
    </style>
    {{-- custom css --}}
    <link rel="stylesheet" href="{{ url('admin/css/custom.css') }}">

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js') }}"></script>
    <script src="https://unpkg.com/leaflet-fullscreen/dist/leaflet.fullscreen.min.js') }}"></script>

</head>

{{-- <x-head.tinymce-config /> --}}
<!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/8mhbod4qy7z7hkyi68srd5kiu1ylu4dxjmbutvjqfspvo5t9/tinymce/7/tinymce.min.js') }}"
    referrerpolicy="origin"></script>

<style>
    body {
        font-family: 'Source Sans Pro', sans-serif;
    }

    .card {
        border: none;
    }

    [class*=sidebar-dark-] {
        background-color: #222d32;
    }
</style>
</head>


<body class="hold-transition sidebar-mini layout-fixed text-sm">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ url('admin/images/AdminLTELogo.png') }}" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        @include('admin.layout.header')

        @include('admin.layout.sidebar')

        @yield('content')

        @include('admin.layout.footer')


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ url('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ url('admin/plugins/sparklines/sparkline.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('admin/js/adminlte.js?v=3.2.0') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('admin/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('admin/js/pages/dashboard.js') }}"></script>
    <!-- bs-custom-file-input -->
    <script src="{{ url('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ url('admin/plugins/select2/js/select2.full.min.js') }}"></script>

    {{-- custom js --}}
    <script src="{{ url('admin/js/custom.js') }}"></script>

    <script src="{{ url('admin/js/demo.js') }}"></script>


    {{-- datetimepicker --}}
    <script crossorigin="anonymous" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f"
        src="https://code.jquery.com/jquery-3.2.1.min.js') }}"></script>
    <script crossorigin="anonymous" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') }}"></script>
    <script crossorigin="anonymous" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js') }}"></script>
    <script type="text/javascript"
        src="https://monim67.github.io/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="https://monim67.github.io/bootstrap-datetimepicker/js/demo.js') }}"></script>
    <!-- Bootstrap Switch -->
    <script src="{{ url('admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>

    <script>
        $(function () {
            $("input[data-bootstrap-switch]").each(function () {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
    </script>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


    {{--
    <script>
        $(document).ready(function () {
            // Mengaktifkan DataTables
            $('table').DataTable({
                "order": []  // Optional: jika Anda ingin menyetel urutan default
            });
        });
    </script> --}}
    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->

    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
    {{--
    <script>
        tinymce.init({
            selector: 'textarea#myeditorinstance',
            plugins: [
                // Core editing features
                'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
                // Your account includes a free trial of TinyMCE premium features
                // Try the most popular premium features until Feb 14, 2025:
                'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown', 'importword', 'exportword', 'exportpdf'
            ],
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
        });

    </script> --}}
</body>

</html>
