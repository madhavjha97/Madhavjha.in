@extends('Admin.layouts.admin')

@section('title', 'Tutorials')
@section('heading', 'Tutorial')



@section('content')

    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }

        .gallery-item {
            width: 200px; /* Adjust the size */
            height: 200px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f9f9f9;
        }

        .gallery-item img,
        .gallery-item video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>


    <div class="container">

        <div class="card mb-3">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">{{ $toutorial->title }}</h5>
            </div>
            <div class="card-body">
                <p><strong>Content:</strong> {{ $toutorial->content ?? 'N/A' }}</p>
                <p><strong>Language :</strong> {{  $toutorial->prolang->name ?? 'N/A' }}</p>
                <p><strong>Photo:</strong>
                <div class="gallery">
                    @foreach($toutorial->media as $media)
                        <div class="gallery-item">
                            @if($media->file_type === 'image')
                                <img src="{{ asset('storage/' . $media->file_path) }}" alt="Tutorial Image">
                            @else
                                <video controls>
                                    <source src="{{ asset('storage/' . $media->file_path) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @endif
                        </div>
                    @endforeach
                </div>


                </p>
                <a href="{{ route('tutorials.index') }}" class="btn btn-primary btn-sm mt-2">Back</a>


            </div>
        </div>

    </div>

@endsection
