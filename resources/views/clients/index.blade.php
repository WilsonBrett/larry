@include('partials.head')
<h1>Clients Index</h1>
@include('partials.header')

    <br />
        <div class="panel panel-primary">
            <div class="panel-heading">
                <label class="panel-title">Active Clients</label>
            </div>
            <div class="panel-body">
                <div class="list-group col-md-10 col-md-offset-1">
                    <ol>
                        @foreach ($clients as $client)
                            <li class="list-group-item">
                                <a href="/clients/{{$client->id}}">{{ $client->clientname }}</a>
                                <i class="fa fa-trash-o fa-lg"></i>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
            <div class="panel-footer">
                <a href="/users/new" class="btn btn-primary">Add User</a>
            </div>
        </div>
    <br />
@include('partials.foot')
