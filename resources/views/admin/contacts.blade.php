@extends('admin.adminpage')

@section('main_content')
    <h2>Contacts</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
          </tr>
        </thead>
        <tbody>
          
            @foreach ($contacts as $contact)
              <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->subject }}</td>
                <td>{{ $contact->message }}</td>
                <td>{{ $contact->created_at }}</td>
                <td>{{ $contact->updated_at }}</td>
              </tr>
            @endforeach
          
        </tbody>
      </table>
    </div>

@endsection