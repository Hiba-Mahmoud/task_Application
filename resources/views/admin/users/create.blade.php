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

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basic form elements</h4>
                            <p class="card-description"> Basic form elements </p>
                            <form class="forms-sample" action={{ url('dashboard/storeOrUpdate') }} method='POST'
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">First Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        placeholder="First name" name='first_name' value="{{old('first_name')}}">
                                </div>
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputName1">Mid Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Mid name" value="{{old('mid_name')}}"
                                        name='mid_name'>
                                </div>
                                @error('mid_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputName1">Last Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        placeholder="Last name" name='last_name' value="{{old('last_name')}}">
                                </div>
                                @error('last_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email"
                                        name='email' value="{{old('email')}}">
                                </div>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputEmail3">phone</label>
                                    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="phone"
                                        name='mobile' value="{{old('mobile')}}">
                                </div>
                                @error('mobile')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword4"
                                        placeholder="Password"  name='password'>
                                </div>
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Password confirmation</label>
                                    <input type="password" class="form-control" id="exampleInputPassword4"
                                        placeholder="Password" name='password_confirmation'>
                                </div>
                                @error('password_confirmation')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleSelectGender">role</label>
                                    <select class="form-control" id="exampleSelectGender" name='role' value="{{old('role')}}">
                                        <option value='client'>client</option>
                                        <option value='admin'>admin</option>
                                    </select>
                                </div>
                                @error('role')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label>profile image</label>
                                    <div class="input-group col-xs-12">
                                        <input type="file" class="form-control file-upload-info"
                                            placeholder="Upload Image" name='image' value="{{old('image')}}">

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
                                        placeholder="latitude" name='latitude' value="{{old('latitude')}}">
                                </div>
                                @error('latitude')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleInputCity1">longitude</label>
                                    <input type="text" class="form-control" id="exampleInputCity1"
                                        placeholder="longitude" name='longitude' value="{{old('longitude')}}">
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
