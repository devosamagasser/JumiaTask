 <table>
        <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $id => $user)
        <tr>
            <td>{{$id++}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
        </tr>
        @endforeach
    </table>

