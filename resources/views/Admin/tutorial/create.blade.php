@extends('Admin.layouts.admin')

@section('title', 'Add Tutorial')
@section('heading', 'Add Tutorial')

@section('content')

    <!-- Settings Form -->
    <form action="{{ route('tutorials.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Programing Language</label>
            <select class="form-control" name="prolangs_id">
                @foreach($prolangs as $langs)
                    <option value="{{ $langs->id }}">{{ $langs->name }} </option>
                @endforeach
            </select>
        </div>

        <!-- Title -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control"
                   required>
        </div>

        <!-- Mobile -->
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" name="content" id="content" class="form-control">
        </div>


        <!-- Media Upload Section -->
        <!-- Media Upload Section -->
        <div class="form-group">
            <label>Upload Media</label>
            <div id="media-uploads">
                <div class="media-input mb-2">
                    <input type="file" name="media[]" class="form-control">
                </div>
            </div>
            <button type="button" class="btn btn-secondary btn-sm" onclick="addMediaField()">Add More Media</button>
        </div>



        <!-- Submit Button -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>

    <script>
        function addMediaField() {
            const container = document.getElementById('media-uploads');
            const newInput = document.createElement('div');
            newInput.className = 'media-input mb-2';
            newInput.innerHTML = `
                <input type="file" name="media[]" class="form-control">
  <button type="button" class="btn btn-danger remove-field" onclick="removeField(this)">X</button>
             `;
            container.appendChild(newInput);
        }

        function removeField(button) {
            button.closest('.media-input').remove();
        }
    </script>
@endsection
