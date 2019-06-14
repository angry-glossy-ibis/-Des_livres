<h1>{{ __('Entries') }}</h1>

@foreach ($entries as $entry)
    <article>
        <header>
            <h1>{{ $entry->title }}</h1>
            <div>
                <p>{{ $entry->user_id }}</p>
                <p>{{ $entry->created_at }}</p>
            </div>
        </header>
        <div> {{ $entry->content }}</div>
        <nav>
            <ul>
                <li> <a href= {{ route('entries.edit', [$entry->id]) }}>{{ __('Edit') }} </a> </li>
                <li> <a href= {{ route('entries.remove', [$entry->id]) }}>{{ __('Remove') }} </a> </li>
                <li> <a href= {{ route('entries.create')}}>{{ __('Create entry') }} </a> </li>
            </ul>
        </nav>
    </article>
    @endforeach

{{ $entries->links() }}