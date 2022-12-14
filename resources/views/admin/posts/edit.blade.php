<x-layout>
    <x-setting :heading="'Edit Post: ' . $post->title">
        <form action="/admin/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input-field name="title" :value="old('title', $post->title)" />
            <x-form.input-field name="slug" :value="old('slug', $post->slug)" />

            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input-field name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
                </div>
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl ml-6"
                    width="100" />
            </div>

            <x-form.textarea-field name="excerpt">{{ old('excerpt', $post->excerpt) }}</x-form.textarea-field>
            <x-form.textarea-field name="body">{{ old('body', $post->body) }}</x-form.textarea-field>


            <x-form.field>
                <x-form.label name="category" />

                <select name="category_id" id="category_id">
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                <x-form.error name="category_id" />
            </x-form.field>

            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>


</x-layout>
