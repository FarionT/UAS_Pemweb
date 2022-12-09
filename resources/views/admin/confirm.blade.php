<h1>INI UNTUK CONFIRM ACCOUNT ADICK ADICK</h1>
<a href="/">Back to Index</a>
<table border="1">
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>NPWP</th>
        <th>NIB</th>
        <th>Status</th>
        <th>Tindakan</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->firstname }} {{ $user->lastname }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->npwp }}</td>
        <td>{{ $user->nib }}</td>
        <td>{{ $user->accept }}</td>
        <td>
            <a href="/admin/approve/{{ $user->id }}">Approve</a>
        </td>
    </tr>
    @endforeach
</table>