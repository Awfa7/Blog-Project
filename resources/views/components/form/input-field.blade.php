@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}" />

    <x-form.input name="{{ $name }}" {{ $attributes }} />

    <x-form.error name="{{ $name }}" />
</x-form.field>
