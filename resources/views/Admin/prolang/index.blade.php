@extends('Admin.layouts.admin')

//Heading
@section('title', 'Programing Language')
@section('heading', 'Programing Language')

@section('content')


    <a href="{{ route('pro-langs.create') }}" class="btn btn-custom mb-4">Add New Language</a>

    <!-- Settings Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Language</th>
                <th>description	</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($prolang as $key => $user)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->description ?? 'N/A' }}</td>


                    <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d-M-Y') }}</td>
                    <td>
                        <a href="{{ route('pro-langs.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>


                        <form method="post" action="{{ route('pro-langs.destroy', $user->id) }}">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">No settings found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection



