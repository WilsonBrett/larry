@include('partials.head')
        <h1>New User</h1><br />
        <form method="post" action="/users/create">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="fname" class="form-control" id="first_name" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="lname" class="form-control" id="last_name" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label for="user_name">Username</label>
                        <input type="text" name="uname" class="form-control" id="user_name" placeholder="Username">
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="form-group">
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        <a href="/users" class="btn btn-default">Cancel</a>
                        <a href="/" class="btn btn-default">Home</a>
                    <div>
                </div>
            </div>
        </form>
@include('partials.foot')
