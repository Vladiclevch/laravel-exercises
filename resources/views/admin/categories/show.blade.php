<x-admin>
    <div>

    <x-slot name="header">
        <header>
        <h1>{{ $page }}</h1>
        </header>
    </x-slot>


        <dl>
            <dt>
                <dd>
                {{$category->id}}
                </dd>
                <dd>
                {{$category->category}}
                </dd>
                <dd>
                {{$category->description}}
                </dd>
                <dd>
                {{$category->created_at}}
                </dd>
                <dd>
                {{$category->updated_at}}
                </dd>
            </dt>
        </dl>


    </div>
</x-admin>
