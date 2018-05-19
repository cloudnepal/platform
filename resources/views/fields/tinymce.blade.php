@component('platform::partials.fields.group',get_defined_vars())
    <div data-controller="fields--tinymce" data-theme="{{$theme or 'inlite'}}">
        <div class="tinymce b wrapper" id="tinymce-wrapper-{{$id}}" style="min-height: 300px;">
            {!! $value !!}
        </div>
        <input type="hidden" @include('platform::partials.fields.attributes', ['attributes' => $attributes])>
    </div>
@endcomponent