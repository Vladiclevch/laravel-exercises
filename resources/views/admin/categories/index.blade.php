<x-admin>
    <x-slot name="header">
        <h1>{{ $page }}</h1>
    </x-slot>

    @if ($categories)
        <table>
        <thead>
        <tr>
        <th>#</th>
        <th>Category</th>
        <th>Description</th>
        <th>Created</th>
        <th>Action</th>
        </tr>

    <tbody>

        @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->category}}</td>
                <td>{{$category->description}}</td>
                <td>{{$category->created_at}}</td>
                <td>
                    <a href="{{ route('admin.categories.show', $category->id) }}"><button>Show</button></a>
                    <a href="{{ route('admin.categories.edit') }}"><button>Edit</button></a>
            </tr>
        @endforeach

    </tbody>

    @else
        <p>No categories yet</p>
    @endif

    <a href="{{ route('admin.categories.create') }}""><button>Add Tag</button></a>

</x-admin>
