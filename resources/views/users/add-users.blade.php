<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
    <title>Add User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome for password visibility toggle -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Add User</h2>


        
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

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/users.js') }}"></script>
</body>

</html>
