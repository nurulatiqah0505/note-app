<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>All Notes</h1>
        <a href="{{ route('notes.create') }}" class="btn btn-primary">Create New Note</a>
        <ul class="list-group mt-3">
            @foreach($notes as $note)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <strong>{{ $note->name }}</strong> - {{ $note->description }}
                    <div class="btn-group">
                        <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-warning btn-sm btn-edit rounded">Edit</a>

                        <form action="{{ route('notes.destroy', $note->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
<style>
    .btn-edit{
        margin-right: 10px;
    }
</style>
