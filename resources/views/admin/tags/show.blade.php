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
                {{$tag->id}}
                </dd>
                <dd>
                {{$tag->tag}}
                </dd>
                <dd>
                {{$tag->created_at}}
                </dd>
                <dd>
                {{$tag->updated_at}}
                </dd>
            </dt>
        </dl>


    </div>
</x-admin>
