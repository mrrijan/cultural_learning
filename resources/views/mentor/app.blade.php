@include("mentor.header")
@include("mentor.nav")
@include("mentor.sidebar")
<div class="content-wrapper" id="content-wrapper">
    @include('mentor.content-header')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @yield('body')
            </div>
        </div>
    </div>
</div>
@include('mentor.footer')
