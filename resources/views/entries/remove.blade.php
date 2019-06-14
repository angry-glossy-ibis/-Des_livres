/**
* Created by PhpStorm.
* User: Administrator
* Date: 19.04.2019
* Time: 14:31
*/

<h1>{{ __('Remove entry') }}</h1>

{{Form::model($entry, [
       'method' => 'DELETE',
        'route' => ['entries.destroy', $entry->id]
])}}

{{ Form::submit(__('Save')) }}

{{Form::close()}}