@if (isset($title))
    <div>
        <h5 class="text-justify">
            @isset($titleFormat)
                <b>{!! $title !!}</b>
            @else
                <b>{{ $title }}</b>
            @endisset
        </h5>
    </div>
@endif
@php
    $index = 0;
@endphp
@if (!isset($ulType))
    <ul class="list-group clear-list">
        @if (!isset($type) || $type == 'vertical')
            @foreach ($data as $key => $value)
                <li class="list-group-item @if ($index == 0) fist-item @endif">
                    <label class="font-sz-df" for="{{ $name . '_' . $key }}">
                        <input type="radio" value="{{ $key }}" name="{{ $name }}"
                            {{ isset($required) ? "data-required=true" : '' }}
                            {{ isset($data_parent) ? "data-parent=#headingCard{$data_parent}" : '' }}
                            id="{{ $name . '_' . $key }}"
                            @if (isset($checkThis) && $checkThis == $key)
                                checked
                            @endif
                            {{ isset($disable) ? 'disabled' : '' }}
                            >
                        {!! $value !!}
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
                        <input class="form-check-input" type="radio" value="{{ $key }}"
                            {{ isset($required) ? "data-required=true" : '' }}
                            {{ isset($data_parent) ? "data-parent=#headingCard{$data_parent}" : '' }}
                            name="{{ $name }}" id="{{ $name . '_' . $key }}"
                            @if (isset($checkThis) && $checkThis == $key)
                                checked
                            @endif>
                        <label class="form-check-label font-sz-df" for="{{ $name . '_' . $key }}">
                            {!! $value !!}
                        </label>
                    </div>
                    @php
                        $index++;
                    @endphp
                @endforeach
            </li>
        @endif
    </ul>
@else
    @foreach ($data as $key => $value)
        <label class="font-sz-df" for="{{ $name . '_' . $key }}">
            <input type="radio" value="{{ $key }}" name="{{ $name }}"
                id="{{ $name . '_' . $key }}"
                @if (isset($checkThis))
                    @if ($checkThis == $key)
                        checked
                    @endif
                @endif>
            {!! $value !!}
        </label>
    @endforeach
@endif
