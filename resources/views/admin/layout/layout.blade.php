<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('admin/css/adminlte.min.css?v=3.2.0') }}">
    {{-- custom css --}}
    <link rel="stylesheet" href="{{ url('admin/css/custom.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    {{--
    <script data-cfasync="false" nonce="6b1e2d2c-7b83-43cc-958c-e03e128b7ee4">try { (function (w, d) { !function (j, k, l, m) { if (j.zaraz) console.error("zaraz is loaded twice"); else { j[l] = j[l] || {}; j[l].executed = []; j.zaraz = { deferred: [], listeners: [] }; j.zaraz._v = "5850"; j.zaraz._n = "6b1e2d2c-7b83-43cc-958c-e03e128b7ee4"; j.zaraz.q = []; j.zaraz._f = function (n) { return async function () { var o = Array.prototype.slice.call(arguments); j.zaraz.q.push({ m: n, a: o }) } }; for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p); j.zaraz.init = () => { var q = k.getElementsByTagName(m)[0], r = k.createElement(m), s = k.getElementsByTagName("title")[0]; s && (j[l].t = k.getElementsByTagName("title")[0].text); j[l].x = Math.random(); j[l].w = j.screen.width; j[l].h = j.screen.height; j[l].j = j.innerHeight; j[l].e = j.innerWidth; j[l].l = j.location.href; j[l].r = k.referrer; j[l].k = j.screen.colorDepth; j[l].n = k.characterSet; j[l].o = (new Date).getTimezoneOffset(); if (j.dataLayer) for (const t of Object.entries(Object.entries(dataLayer).reduce(((u, v) => ({ ...u[1], ...v[1] })), {}))) zaraz.set(t[0], t[1], { scope: "page" }); j[l].q = []; for (; j.zaraz.q.length;) { const w = j.zaraz.q.shift(); j[l].q.push(w) } r.defer = !0; for (const x of [localStorage, sessionStorage]) Object.keys(x || {}).filter((z => z.startsWith("_zaraz_"))).forEach((y => { try { j[l]["z_" + y.slice(7)] = JSON.parse(x.getItem(y)) } catch { j[l]["z_" + y.slice(7)] = x.getItem(y) } })); r.referrerPolicy = "origin"; r.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l]))); q.parentNode.insertBefore(r, q) };["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener("DOMContentLoaded", zaraz.init) } }(w, d, "zarazData", "script"); window.zaraz._p = async bs => new Promise((bt => { if (bs) { bs.e && bs.e.forEach((bu => { try { const bv = d.querySelector("script[nonce]"), bw = bv?.nonce || bv?.getAttribute("nonce"), bx = d.createElement("script"); bw && (bx.nonce = bw); bx.innerHTML = bu; bx.onload = () => { d.head.removeChild(bx) }; d.head.appendChild(bx) } catch (by) { console.error(`Error executing script: ${bu}\n`, by) } })); Promise.allSettled((bs.f || []).map((bz => fetch(bz[0], bz[1])))) } bt() })); zaraz._p({ "e": ["(function(w,d){})(window,document)"] }); })(window, document) } catch (e) { throw fetch("/cdn-cgi/zaraz/t"), e; };
    </script> --}}
</head>

<body class="hold-transition sidebar-mini layout-fixed">
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
</body>

</html>
