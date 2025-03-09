@extends('Admin.layouts.admin')

//Heading
@section('title', 'Tutorial ')
@section('heading', 'Tutorial')

@section('content')


    <a href="{{ route('tutorials.create') }}" class="btn btn-custom mb-4">Add New Tutorial</a>

    <!-- Settings Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content	</th>
                <th>Program Lang.	</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($tutorial as $key => $user)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $user->title }}</td>
                    <td>{{ $user->content ?? 'N/A' }}</td>
                    <td>{{ $user->prolang->name ?? 'N/A' }}</td>  <!-- Show the name instead of ID -->


                    <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d-M-Y') }}</td>
                    <td>
                        <a href="{{ route('tutorials.show', $user->id) }}" class="btn btn-sm btn-warning">View</a>
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



