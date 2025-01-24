@extends("mentor.app")
@section('page-title')
    {{__("Mentor")}}
@endsection
@section('breadcrumbs')
    <!--    <li class="breadcrumb-item active"><a href="{{url('/')}}">@yield('page-title')</a></li>
-->    <li class="breadcrumb-item active">@yield('page-title')</li>
@endsection
@section("body")
    <div class="col-lg-12 m-auto">
        <div class="card">

            <div class="card-header border-0">
                <p>Your Info</p>
                <!-- Button trigger modal -->
            </div>
            @if($mentor)
                <div class="card-body table-responsive p-0">
                    <table class="table table-valign-middle">
                        <thead>
                        <tr>
                            <th>{{__('Name')}}</th>
                            <th>{{__("Address")}}</th>
                            <th>{{__("Email")}}</th>
                            <th>{{__("Phone")}}</th>
                            <th>{{__("Verification")}}</th>
                        </tr>
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$mentor->address}}</td>
                            <td>{{$mentor->email}}</td>
                            <td>{{$mentor->phone}}</td>
                            <td>{{$mentor->verified === 0 ? "unverified" : "verified"}}</td>
                        </tr>
                        </thead>

                    </table>
                </div>
            @endif

        </div>
    </div>

@endsection
