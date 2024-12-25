@if ($type == 'select')
    <div class="single-input-item">
        <label for="{{ $id }}">{{ $label }}
            @if ($required)
                <span class="text-danger">*</span>
            @endif
        </label>
        <select name="{{ $name }}" id="{{ $id }}"
            class="@error(str_replace(['[', ']'], ['.', ''], $name)) border border-danger @enderror">
            <option value="">{{ $label }}</option>
            @foreach ($options as $value => $option)
                <option value="{{ $keyValue ? $value : $option }}"
                    {{ old(str_replace(['[', ']'], ['.', ''], $name)) == ($keyValue ? $value : $option) ? 'selected' : '' }}>
                    {{ $option }}
                </option>
            @endforeach
        </select>
        @error(str_replace(['[', ']'], ['.', ''], $name))
            <span class="text-danger">
                {{ $message }}
            </span>
        @else
            <span class="fs-5"> {{ $info }}</span>
        @enderror
    </div>
@elseif($type == 'tel')
    <div class="single-input-item">
        <label for="{{ $id }}">{{ $label }} @if ($required)
                <span class="text-danger">*</span>
            @endif
        </label>
        <div class="d-grid">
            <input type="{{ $type }}"
                class="@error(str_replace(['[', ']'], ['.', ''], $name)) border border-danger @enderror"
                name="{{ $name }}" value="{{ old(str_replace(['[', ']'], ['.', ''], $name)) }}"
                id="{{ $id }}" placeholder="{{ $placeholder }}" {{ $attributes }}>
        </div>
        @error(str_replace(['[', ']'], ['.', ''], $name))
            <span class="text-danger">
                {{ $message }}
            </span>
        @else
            <span class="fs-5"> {{ $info }}</span>
        @enderror
    </div>
@else
    <div class="single-input-item">
        <label for="{{ $id }}">{{ $label }} @if ($required)
                <span class="text-danger">*</span>
            @endif
        </label>
        <input type="{{ $type }}"
            class="@error(str_replace(['[', ']'], ['.', ''], $name)) border border-danger @enderror"
            name="{{ $name }}" value="{{ old(str_replace(['[', ']'], ['.', ''], $name)) }}"
            id="{{ $id }}" placeholder="{{ $placeholder }}" {{ $attributes }}>
        @error(str_replace(['[', ']'], ['.', ''], $name))
            <span class="text-danger">
                {{ $message }}
            </span>
        @else
            <span class="fs-5"> {{ $info }}</span>
        @enderror
    </div>
@endif
