
<h1>{{ __('Create entry') }}</h1>

{{Form::model($entry, [
    'route' => 'entries.store',
])}}

 {{ Form::label(__('title')) }}
 {{ Form::text('title') }}

 {{ Form::label(__('content')) }}
 {{ Form::textarea('content') }}

 {{ Form::submit(__('Save')) }}

{{Form::close()}}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif