@extends ('template.master')

@section ('container')

<table class="table table-bordered table-striped">
    <thead>
        <tr style="background-color: azure">
            <th style="text-align:center; font-weight:bold">No</th>
            <th style="text-align:center; font-weight:bold">Nama</th>
            <th style="text-align:center; font-weight:bold">Email</th>
            <th style="text-align:center; font-weight:bold">Password</th>
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