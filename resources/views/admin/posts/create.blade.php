<x-layout>
    <x-setting heading="Publish New Post">
        <form action="/admin/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form.input-field name="title" />
            <x-form.input-field name="slug" />
            <x-form.input-field name="thumbnail" type="file" />
            <x-form.textarea-field name="excerpt" />
            <x-form.textarea-field name="body" />


            <x-form.field>
                <x-form.label name="category" />

                <select name="category_id" id="category_id">
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                <x-form.error name="category_id" />
            </x-form.field>

            <x-form.button>Publish</x-form.button>
        </form>
    </x-setting>


</x-layout>
