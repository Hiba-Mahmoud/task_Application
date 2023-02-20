@extends('admin.partials.main')
@section('adaminContent')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Form elements </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
{{--  {{$user}}  --}}
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basic form elements</h4>
                            <p class="card-description"> Basic form elements </p>
                            <form class="forms-sample" action={{ url('dashboard/update') }} method='POST'
                                enctype="multipart/form-data">
                                @csrf
                                @if (count(explode(' ', $user->name))==3)

                                <div class="form-group">
                                    <label for="exampleInputName1">First Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        placeholder="First name" name='first_name' value="{{(explode(' ', $user->name)[0])}}">
                                </div>
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputName1">Mid Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Mid name" value="{{explode(' ', $user->name)[1]}}"
                                        name='mid_name'>
                                </div>
                                @error('mid_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputName1">Last Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        placeholder="Last name" name='last_name' value="{{explode(' ', $user->name)[2]}}">
                                </div>
                                @error('last_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                @else
                                <div class="form-group">
                                    <label for="exampleInputName1">First Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        placeholder="First name" name='first_name' value="{{(explode(' ', $user->name)[0])}}">
                                </div>
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputName1">Mid Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Mid name"
                                        name='mid_name'>
                                </div>
                                @error('mid_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputName1">Last Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        placeholder="Last name" name='last_name' value="{{explode(' ', $user->name)[1]}}">
                                </div>
                                @error('last_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                @endif

                                <div class="form-group">
                                    <label for="exampleInputEmail3">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email"
                                        name='email' value="{{$user->email}}">
                                </div>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputEmail3">phone</label>
                                    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="phone"
                                        name='mobile' value="{{$user->mobile}}">
                                </div>
                                @error('mobile')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleSelectGender">role</label>
                                    <select class="form-control" id="exampleSelectGender" name='role' value="{{$user->role}}">
                                        <option value='client'>client</option>
                                        <option value='admin'>admin</option>
                                    </select>
                                </div>
                                @error('role')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                <div style="width:20%">
                                <img src="{{$user->image}}" style="width:100%">
                                </div>
                                    <label>profile image</label>
                                    <div class="input-group col-xs-12">
                                        <input type="file" class="form-control file-upload-info"
                                            placeholder="Upload Image" name='image' value="{{$user->image}}">
                                    </div>
                                </div>
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label>drive licence optional</label>
                                    <div class="input-group col-xs-12">
                                        <input type="file" class="form-control file-upload-info"
                                            placeholder="Upload Image" name="drive_licence" value="{{old('drive_licence')}}">
                                    </div>
                                </div>
                                @error('drive_licence')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputCity1">latitude</label>
                                    <input type="text" class="form-control" id="exampleInputCity1"
                                        placeholder="latitude" name='latitude' value="{{$user->latitude}}">
                                </div>
                                @error('latitude')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputCity1">longitude</label>
                                    <input type="text" class="form-control" id="exampleInputCity1"
                                        placeholder="longitude" name='longitude' value="{{$user->longitude}}">
                                </div>

                                @error('longitude')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="submit" class="btn btn-gradient-primary me-2" value='Submit'>
                                {{--  <button class="btn btn-light">Cancel</button>  --}}
                            </form>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    @endsection
