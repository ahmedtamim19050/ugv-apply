@if ($type == 'select')
    <div class="single-input-item">
        <label for="{{ $id }}">{{ $label }} @if ($required)
                <span class="text-danger">*</span>
            @endif
        </label>
        <select name="{{ $name }}" id="{{ $id }}">
            <option value=""> {{ $label }}</option>
            @foreach ($options as $value => $option)
                <option value="{{ $keyValue ? $value : $option }}">{{ $option }}</option>
            @endforeach
        </select>

    </div>
@elseif($type == 'tel')
<div class="single-input-item">
    <label for="{{ $id }}">{{ $label }} @if ($required)
            <span class="text-danger">*</span>
        @endif
    </label>
    <div class="d-grid">

        <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name) }}"
        id="{{ $id }}" placeholder="{{ $placeholder }}" {{$attributes}}>
    </div>
</div>
@else
    <div class="single-input-item">
        <label for="{{ $id }}">{{ $label }} @if ($required)
                <span class="text-danger">*</span>
            @endif
        </label>
        <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name) }}"
            id="{{ $id }}" placeholder="{{ $placeholder }}" {{$attributes}}>
    </div>
@endif
