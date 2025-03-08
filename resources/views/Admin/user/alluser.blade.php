@extends('Admin.layouts.admin')

//Heading
@section('title', 'All User | All User')


@section('content')


    <!-- Display Success Message -->
    {{--    @if (session('success'))--}}
    {{--        <div class="alert alert-success">--}}
    {{--            {{ session('success') }}--}}
    {{--        </div>--}}
    {{--    @endif--}}

    <!-- Settings Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Created At</th>
                <th>Email_verified_at</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($users as $key => $user)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email ?? 'N/A' }}</td>
                    <td @if($user->role === 'admin') class ="bg-info text-white fw-bold"  @endif>
                        {{ ucfirst($user->role ?? 'N/A') }}
                   </td>

                    <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d-M-Y') }}</td>
                    <td @if(!empty($user->email_verified_at)) class="bg-warning text-white fw-bold" @endif>
                        @if ($user->email_verified_at  == null)
                            Not Verified
                        @else
                            Verified
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('admin.settings.edit', $user->id) }}" class="btn btn-sm btn-primary">Deleted</a>
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



