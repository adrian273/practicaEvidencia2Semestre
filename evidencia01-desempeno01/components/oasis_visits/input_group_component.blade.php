<div class="row">
    <div class="{{ isset($col_top_num) ? $col_top_num : 'col-md-2' }}">
        @isset($type)
            <select {{ isset($class) ? "class=$class" : '' }} name="{{ $name }}" style="width: 100%">
                <option value="{{ $value }}" selected="selected">
                    {{ isset($text) ? $text : '' }}
                </option>
            </select>
        @else
            <div class="input-group">
                <input type="text" aria-label="{{ $name }}"
                    {{ isset($max_length) ? "maxlength=$max_length" : "" }}
                    name="{{ $name }}" id="{{ isset($id) ? $id : $name }}"
                    class="form-control {{ isset($class) ? $class : '' }}"
                    value="{{ isset($value) ? $value : '' }}"
                    {{ isset($required) ? "data-required=true" : '' }}
                    {{ isset($data_parent) ? "data-parent=#headingCard{$data_parent}" : '' }}>
            </div>
            @isset($input_span)
                <span>{!! $input_span !!}</span>
            @endisset
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

