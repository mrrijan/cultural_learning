@include("admin.header")
@include("admin.nav")
@include("admin.sidebar")
<div class="content-wrapper" id="content-wrapper">
    @include('admin.content-header')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @yield('body')
            </div>
        </div>
    </div>
</div>
@include('admin.footer')
