<!-- resources/views/layouts/app.blade.php -->
@extends('layouts.app')

@section('content')

@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div id="content-page" class="content-page">
            <div class="container-fluid">
               
               <div class="row">
                   <div class="col-lg-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Users List</h4>
                           </div>
                           <div class="">
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                                Add New User
                            </button>
                           </div>
                        </div>

                        <div class="iq-card-body">
                              <table class="table mb-0 table-borderless">
                                 <thead>
                                    <tr>
                                       <th scope="col">User Id.</th>
                                       <th scope="col">First Name</th>
                                       <th scope="col">Last Name</th>
                                       <th scope="col">Email</th>
                                       <th scope="col">Role</th>
                                       <th scope="col">Actions</th>

                                    </tr>
                                 </thead>
                                 <tbody>
                                 @foreach ($users as $user)
                                    <tr>
                                       <td>{{ $user->id }}</td>
                                       <td>{{ $user->first_name }} </td>
                                       <td>{{ $user->last_name }} </td>
                                       <td>{{ $user->email }}</td>
                                       <td>{{ $user->role_id }}</td>
                                       <td>
                                          <div><a href=#>Edit</a></div> <div><a href=#>Delete</a></div>
                                       </td>
                                    </tr>
                                @endforeach
                                 </tbody>
                              </table>
                             </div>
                            <div class="col-lg-12 text-center">
                                 <div>{{ $users->links() }}</div>
                            </div>
                        </div>

                        <!-- here -->
                         {{---Modal view--}}
                         <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addUserModalLabel">Add User</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                {{--Modal form--}}
                                <form id="addUserForm" action="/add-user" method="POST">
                                        @csrf
                                        
                                        <div class="form-group">
                                            <label for="fname">First Name</label>
                                            <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter first name">
                                            <div id="fnameFeedback" class="invalid-feedback"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="lname">Last Name</label>
                                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter last name">
                                            <div id="lnameFeedback" class="invalid-feedback"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="role">Role</label>
                                            <select class="form-control" id="role" name="role">
                                                <option value="" disabled selected>Select role</option>
                                                <option value="admin">Admin</option>
                                                <option value="analyst">Analyst</option>
                                                <option value="com_officer">Compliance Officer</option>
                                            </select>
                                            <div id="roleFeedback" class="invalid-feedback"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="mobno">Mobile Number</label>
                                            <input type="text" class="form-control" id="mobno" name="mobno" placeholder="Enter mobile number">
                                            <div id="mobnoFeedback" class="invalid-feedback"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                            <div id="emailFeedback" class="invalid-feedback"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-secondary" id="togglePassword">
                                                        <i id="toggleIcon" class="fa fa-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div id="passwordFeedback" class="invalid-feedback"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password">
                                            <div id="passwordConfirmationFeedback" class="invalid-feedback"></div>
                                        </div>

                                        <div id="successMessage" class="alert alert-success d-none">User added successfully!</div>

                                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" form="addUserForm" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" form="addUserForm" class="btn btn-primary">Submit</button>
                                </div> -->
                                </div>
                            </div>
                        </div>


                     </div>
                  </div>
                  
               </div>
               <div class="row">
                 <div class="col-lg-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


<!-- @foreach ($users as $user)
    <div>
        <p>ID: {{ $user->id }}</p>
        <p>Name: {{ $user->first_name }} {{ $user->last_name }}</p>
        <p>Email: {{ $user->email }}</p>
        </div>
@endforeach

{{ $users->links() }} -->





@endsection

