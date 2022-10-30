@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf

            <x-form.field>
                <header class="flex items-center">
                    <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40"
                        class="rounded-full" />
                    <h2 class="ml-4">Want to participate?</h2>
                </header>
            </x-form.field>

            <x-form.field>
                <x-form.textarea name="body" placeholder="Quick, thing of something to say!" />

                <x-form.error name="body" />
            </x-form.field>

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200 ">
                <x-form.button>Post</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline text-blue-500">Register</a> or <a href="/login"
            class="hover:underline text-blue-500">Log in</a> to
        leave a comment
    </p>
@endauth
