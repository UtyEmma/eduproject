<label class="form-check">
    <input class="form-check-input" type="checkbox"  {{ $attributes->except('class') }} />
    <span class="form-check-label {{$labelClass ?? ''}}" >
        {{$slot}}
    </span>
</label>
