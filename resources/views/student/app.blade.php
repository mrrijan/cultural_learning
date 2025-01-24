@include("student.header")
@include("student.nav")
@include("student.sidebar")
<div class="content-wrapper" id="content-wrapper">
    @include('student.content-header')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @yield('body')
            </div>
        </div>
    </div>
</div>
@include('student.footer')
