@extends("admin.app")
@section('page-title')
    {{__("Admin")}}
@endsection
@section('breadcrumbs')
    <!--    <li class="breadcrumb-item active"><a href="{{url('/')}}">Admn</a></li>
-->    <li class="breadcrumb-item active">@yield('page-title')</li>
@endsection
@section("body")
    <div class="col-lg-12 m-auto">
        <div class="card">
        @php
            $user = \Illuminate\Support\Facades\Auth::user();
        @endphp
            <div class="card-header border-0">
                <p>Your Info</p>
                <!-- Button trigger modal -->
            </div>
            @if(\Illuminate\Support\Facades\Auth::user())
                <div class="card-body table-responsive p-0">
                    <table class="table table-valign-middle">
                        <thead>
                        <tr>
                            <th>{{__('Name')}}</th>
                            <th>{{__("Role")}}</th>
                            <th>{{__("Email")}}</th>
                        </tr>
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->role}}</td>
                            <td>{{$user->email}}</td>
                        </tr>
                        </thead>

                    </table>
                </div>
            @endif

        </div>
    </div>
@endsection
