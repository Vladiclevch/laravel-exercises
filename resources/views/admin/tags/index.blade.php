<x-admin>
    <x-slot name="header">
        <h1>{{ $page }}</h1>
    </x-slot>

    @if ($tags)
        <table>
        <thead>
        <tr>
        <th>#</th>
        <th>Tag</th>
        <th>Created</th>
        <th>Action</th>
        </tr>

    <tbody>

        @foreach ($tags as $tag)
            <tr>
                <td>{{$tag->id}}</td>
                <td>{{$tag->tag}}</td>
                <td>{{$tag->created_at}}</td>
                <td>
                    <a href="{{ route('admin.tags.show', $tag->id) }}"><button>Show</button></a>
                    <a href="{{ route('admin.tags.edit') }}"><button>Edit</button></a>
            </tr>
        @endforeach

    </tbody>

    @else
        <p>No tags yet</p>
    @endif

    <a href="{{ route('admin.tags.create') }}""><button>Add Tag</button></a>

</x-admin>

