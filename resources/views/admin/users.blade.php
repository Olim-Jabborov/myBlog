@extends('admin.adminpage')

@section('main_content')
    <h2>Users</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Team ID</th>
            <th scope="col">Photo</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
          </tr>
        </thead>
        <tbody>
          
            @foreach ($data as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->current_team_id }}</td>
                <td>{{ $item->profile_photo_path }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
              </tr>
            @endforeach
          
        </tbody>
      </table>
    </div>

@endsection