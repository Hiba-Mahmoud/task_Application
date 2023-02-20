@extends('admin.partials.main')
@section('adaminContent')
    <div class="main-panel">
        @if (Session::has('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('message') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Basic Tables </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                    </ol>
                </nav>
            </div>
            <div class="row">

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Striped Table</h4>
                            <p class="card-description"> Add class <code>.table-striped</code>
                            </p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> User </th>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th> Mobile </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="py-1">
                                                <img src="{{ $user->image }}" alt="image" />
                                            </td>
                                            <td> {{ $user->name }} </td>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                            <td> {{ $user->mobile }} </td>
                                            <td>
                                                <button type="button" class="btn btn-xs  delete_modale"
                                                    data-id="{{ $user->id }}"><i class="fa fa-trash"></i>
                                                    delete</button>
                                                <a  class="btn btn-xs" href="{{url('dashboard/'.$user->id.'/edit')}}"><i class="fa fa-trash"></i>
                                                    edit</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>
                            <div class="container">
                                <div class="row justify-content-center text-xs-center">
                                    {!! $users->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid d-flex justify-content-between">
                    <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright ©
                        bootstrapdash.com 2021</span>
                    <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a
                            href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin
                            template</a> from Bootstrapdash.com</span>
                </div>
            </footer>
            <!-- partial -->
        </div>


        //delete modal

        <div class="modal fade" id="deletModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteModalLabel">delete user </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        you will delete this client . Are you sure?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="confirm_delete_user_btn" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        //delete modal

        <div class="modal fade" id="deleteMsg" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        client deleted successifuly
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id='delete'>Close</button>
                    </div>
                </div>
            </div>
        </div>
        @endsection
