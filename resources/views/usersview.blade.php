
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>FullName</th>
            <th>Email</th>
            <th>Age</th>
            <th>Created</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
            <td>{{ $user->id }}</td>
            <td>{{ $user->fullname }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ Carbon\Carbon::parse($user->birthdate)->diffforhumans() }}</td>
            {{-- <td>{{ $user->created_at->locale('es')->diffforhumans() }}</td> --}}
            <td>{{ $user->created_at->diffforhumans() }}</td>
        </tr>
    @endforeach
    </tbody>
</table>