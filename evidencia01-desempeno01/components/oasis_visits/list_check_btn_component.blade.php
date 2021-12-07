@if (isset($title))
    <div>
        <h5>
            <b>{{ $title }}</b>
        </h5>
    </div>
@endif
@php
$index = 0;
@endphp
<ul class="list-group clear-list @if (isset($checkAll)) {{ $groupName }} @endif">
    @if (!isset($type) || $type == "vertical")
        @foreach ($data as $key => $value)
            <li class="list-group-item @if ($index == 0) fist-item @endif">
                <label class="font-sz-df" for="{{ $key }}">
                    <input type="checkbox"
                        value="{{ $data[$key]['value'] }}"
                        name="{{ $key }}"
                        id="{{ $key }}"
                        {{ isset($value['required']) ? "data-required=true" : '' }}
                        {{ isset($value['data_parent']) ? "data-parent=#headingCard{$value['data_parent']}" : '' }}
                        {{ isset($value['guide']) ? "data-guide={$value['guide']}" : '' }}
                        class="{{ isset($class) ? $class : '' }}"
                        @if(array_key_exists('checkThis', $data[$key])
                            && $data[$key]['checkThis'] == $data[$key]['value'])
                            checked
                        @endif>
                    {!! $data[$key]['text'] !!}
                </label>
            </li>
            @php
                $index++;
            @endphp
        @endforeach
    @else
        <li class="list-group-item @if ($index == 0) fist-item @endif">
            @foreach ($data as $key => $value)
                <div class="form-check form-check-inline">
                    <input class="form-check-input"
                        type="checkbox"
                        value="{{ $data[$key]['value'] }}"
                        name="{{ $key }}"
                        id="{{ $key }}"
                        {{ isset($value['required']) ? "data-required=true" : '' }}
                        {{ isset($value['data_parent']) ? "data-parent=#headingCard{$value['data_parent']}" : '' }}
                        {{ isset($value['guide']) ? "data-guide={$value['guide']}" : '' }}
                        class="{{ isset($class) ? $class : '' }}"
                        @if(array_key_exists('checkThis', $data[$key])
                            && $data[$key]['checkThis'] == $data[$key]['value'])
                            checked
                        @endif>
                    <label class="form-check-label font-sz-df" for="{{ $key }}">
                        {!! $data[$key]['text'] !!}
                    </label>
                </div>
            @php
                $index++;
            @endphp
            @endforeach
        </li>
    @endif
</ul>

