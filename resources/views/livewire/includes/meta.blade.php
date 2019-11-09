<details class="flex flex-col w-full lg:w-1/3 mb-2 group" open wire:ignore.self>
    <summary class="block mb-4 outline-none cursor-pointer">
        <div class="flex flex-row items-center justify-center px-2 h-8 align-middle bg-gray-100 rounded-sm outline-none text-xs text-gray-500">
            meta
        </div>
    </summary>
    <label class="flex flex-col w-full mb-4">
        <span class="flex w-full text-sm text-gray-500">title</span>
        <input
            type="text"
            name="title"
            class="flex w-full border-b-2 border-gray-300"
            value="{{ $post->title }}"
            wire:change="updatePostField('title', $event.target.value)"
        />
    </label>
    <label class="flex flex-col w-full mb-4">
        <span class="flex w-full text-sm text-gray-500">slug</span>
        <input
            type="text"
            name="slug"
            class="flex w-full border-b-2 border-gray-300"
            value="{{ $post->slug }}"
            wire:change="updatePostField('slug', $event.target.value)"
        />
    </label>
    <label class="flex flex-col w-full mb-4">
        <span class="flex w-full text-sm text-gray-500">intro</span>
        <textarea
            name="intro"
            class="flex w-full border-b-2 border-gray-300 h-20"
            wire:change="updatePostField('intro', $event.target.value)"
        >{{ $post->intro }}</textarea>
    </label>
    <div class="flex flex-col w-full text-sm text-gray-700">
        <label class="flex flex-row w-full mb-1">
            Created <span class="font-semibold ml-1">{{ $post->created_at->format('j F Y, g:ia') }}</span>
        </label>
        <label class="flex flex-row w-full mb-1">
            Updated <span class="font-semibold ml-1">{{ $updated_at ?? $post->updated_at->format('j F Y, g:ia') }}</span>
        </label>
        <label wire:loading.class="opacity-100" class="flex w-4 h-4 mb-1 opacity-0 transition-opacity">
            @icon('solid.save')
        </label>
    </div>
</details>
