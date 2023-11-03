@extends ('template.master')

@section ('container')
<h3>User</h3>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $users = DB::table('user')->get();
        ?>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
        </tr>
        @endforeach
    </tbody>
    
    </table>
@endsection