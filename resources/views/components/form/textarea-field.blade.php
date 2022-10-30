@props(['name', 'placeholder' => ' '])

<x-form.field>
    <x-form.label name="{{ $name }}" />

    <x-form.textarea name="{{ $name }}" placeholder="{{ $placeholder }}">
        {{ $slot ?? old($name) }}
    </x-form.textarea>

    <x-form.error name="{{ $name }}" />
</x-form.field>
