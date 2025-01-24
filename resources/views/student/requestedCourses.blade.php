@extends("student.student")
@section('page-title')
    {{__('Courses')}}
@endsection
@section('breadcrumbs')
    <li class="breadcrumb-item active"><a href="{{url('/')}}">{{__('Dashboard')}}</a></li>
    <li class="breadcrumb-item active"><a href="{{url('/dashboard/student')}}">{{__('Student')}}</a></li>
    <li class="breadcrumb-item active">{{__('Courses')}}</li>
@endsection
@section("body")
    <div class="col-lg-12 m-auto">
        <div class="card">
            <div class="card-body table-responsive p-0">
                <table class="table table-valign-middle">
                    <thead>
                    <tr>
                        <th>{{__('Student Name')}}</th>
                        <th>{{__('Student Email')}}</th>
                        <th>{{__("Language")}}</th>
                        <th>{{__("Type")}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <td>{{$course->user->name}}</td>
                            <td>{{$course->user->email}}</td>
                            <td>{{$course->language->title}}</td>
                            <td>{{$course->mentor->type}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{--            <div class="card-footer">--}}
            {{--                <div class="d-flex justify-content-center">--}}
            {{--                    {{$courses->links('pagination::bootstrap-4')}}--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>

@endsection
