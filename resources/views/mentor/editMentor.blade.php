@extends("mentor.app")
@section('page-title')
    {{__('Mentor')}}
@endsection
@section('breadcrumbs')
    <li class="breadcrumb-item active"><a href="{{url('/')}}">{{__('Dashboard')}}</a></li>
    <li class="breadcrumb-item active"><a href="{{url('/dashboard/mentor')}}">{{__('Mentor')}}</a></li>
    <li class="breadcrumb-item active">{{__('Edit')}}</li>
@endsection
@section("body")
    <div class="col-lg-12 m-auto">
        <div class="card card-default">
            <form method="post" action="{{url('dashboard/mentor/update')}}" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{$mentor->id}}">
                @csrf
                <div class="card-body">
                    {{--                <input type="hidden" name="company_id" value="{{$company_id}}">--}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">{{__('Type')}}</label>
                                <select name="type" class="form-control" required>
                                    <option value="">{{__('Select Type')}}</option>
                                    <option @if($mentor->type === "beginner")selected @endif value="beginner">Beginner</option>
                                    <option @if($mentor->type === "intermediate")selected @endif value="intermediate">Intermediate</option>
                                    <option @if($mentor->type === "expert")selected @endif value="expert">Expert</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">{{__('Language')}}</label>
                                <select name="language" class="form-control" required>
                                    <option value="">{{__('Select Language')}}</option>
                                    @foreach($languages as $language)
                                        <option @if($mentor->language_id === $language->id) selected @endif value="{{$language->id}}">{{$language->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="address">{{__('Address')}}</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    value="{{$mentor->address}}"   placeholder="address">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="post_slogan">{{__('Phone')}}</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                       value="{{$mentor->phone}}"   placeholder="9867******">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary justify-content-center">{{__('Submit')}}</button>
                    </div>

                </div>
            </form>

        </div>
    </div>

@endsection
