@extends("admin.app")
@section('page-title')
    {{__('Admin')}}
@endsection
@section('breadcrumbs')
    <li class="breadcrumb-item active"><a href="{{url('/dashboard/admin')}}">{{__('Dashboard')}}</a></li>
    <li class="breadcrumb-item active">{{__('Add')}}</li>
@endsection
@section("body")
    <div class="col-lg-12 m-auto">
        <div class="card">
            <div class="card-body table-responsive p-0">
                <table class="table table-valign-middle">
                    <thead>
                    <tr>
                        <th>{{__('SN')}}</th>
                        <th>{{__("Name")}}</th>
                        <th>{{__('Address')}}</th>
                        <th>{{__('Email')}}</th>
                        <th>{{__('Phone')}}</th>
                        <th>{{__('Type')}}</th>
                        <th>{{__("Actions")}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mentors as $mentor)

                        @php
                            $count = (string)$loop->iteration;
                        @endphp
                        <tr>
                            <td>
                                 {{$count}}
                            </td>
                            <td>
                                {{$mentor->name}}
                            </td>
                            <td>
                                {{$mentor->address}}
                            </td>
                            <td>
                                {{$mentor->email}}
                            </td>
                            <td>
                                {{$mentor->phone}}
                            </td>
                            <td>
                                {{$mentor->type}}
                            </td>
                            <td>
                                <button class="btn" data-toggle="tooltip" data-placement="bottom"
                                        title="{{__('Accept')}}">
                                    <a href="{{url("/dashboard/mentor/verify/$mentor->id")}}"
                                    >
                                        <i class="fa-solid fa-check"></i>
                                    </a>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center">
                    {{$mentors->links('pagination::bootstrap-4')}}
                </div>
            </div>
        </div>
    </div>

@endsection
