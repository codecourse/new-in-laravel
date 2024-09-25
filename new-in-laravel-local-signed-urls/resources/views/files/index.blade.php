<div>
    <form action="{{ route('files.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <input type="file" name="file" id="file">
        <button>Upload</button>
    </form>

    <div>
        @foreach($files as $file)
            <div>
                <a href="{{ route('files.download', $file) }}">{{ $file->name }}</a>
            </div>
        @endforeach
    </div>
</div>
