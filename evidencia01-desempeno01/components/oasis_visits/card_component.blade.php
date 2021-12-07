<div class="form-row">
    <div class="form-group col-12">
        <div class="card border-light" @if(isset($groupId)) id="{{ $groupId }}" @endif>
            <div class="card-header">
                <h5 class="pt-2 ml-2 text-dark font-sz-df">
                    <b>{{ $title }}</b>
                </h5>
            </div>
            <div class="card-body" style="padding-bottom: 0px !important;" id="{{ isset($guide) ? $guide : '' }}">
                @if (isset($subTitle))
                    <div class="row pb-1">
                        <div class="col-md-12">
                            <h5 class="font-sz-df">
                                <b>{{ $subTitle }}</b>
                            </h5>
                        </div>
                    </div>
                @endif
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
