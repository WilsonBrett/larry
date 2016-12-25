@include('partials.head')
<h1>Users Index</h1>
@include('partials.navigation')
        <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <label class="panel-title">Active Users</label>
                </div>
                <div class="panel-body">
                    <div class="list-group col-md-10 col-md-offset-1">
                        <ol>
                            @foreach ($users as $user)
                                <li class="list-group-item">
                                    <a href="/users/{{$user->id}}">{{ $user->username }}</a>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
                <div class="panel-footer">
                    <a href="/users/new" class="btn btn-primary">Add User</a>
                </div>
            </div>
        </div>
@include('partials.foot')
