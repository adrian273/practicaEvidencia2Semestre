<div class="row input-check-uk">
    <div class="{{ isset($col_top_num) ? $col_top_num : 'col-md-2' }}">
        <div class="input-group">
            <input type="text" aria-label="{{ $name }}" {{ isset($max_length) ? "maxlength=$max_length" : "" }}
                name="{{ $name }}" id="{{ isset($id) ? $id : $name }}"
                class="form-control {{ isset($class) ? $class : '' }}"
                value="{{ isset($value) ? $value : '' }}">
        </div>
        @isset($input_span)
        <span>{!! $input_span !!}</span>
        @endisset
    </div>
    <div class="{{ isset($col_bottom_num) ? $col_bottom_num : 'col-md-10' }}">
        <span class="text-justify font-sz-df">
            {{ $slot }}
        </span>
    </div>
</div>
@if(!isset($last_item))
<hr>
@endif
