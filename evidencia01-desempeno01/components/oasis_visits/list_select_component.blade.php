<select name="{{ $name }}" id="{{ $name }}"
    {{ isset($required) ? "data-required=true" : '' }}
    {{ isset($data_parent) ? "data-parent=#headingCard{$data_parent}" : '' }}
    @isset($class)
        class="{{ $class }}"
    @endisset>
    <option value=""></option>
    @foreach ($data as $value => $text)
        <option value="{{ $value }}" {{ $value == $checkThis ? 'selected' : '' }}>
            {{ $text }}
        </option>
    @endforeach
</select>
