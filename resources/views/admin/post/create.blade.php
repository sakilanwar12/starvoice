<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Create Post') }}
                </div>
                <div class="space-y-5">
                    <div class="p-10">
                        <form action="{{ route('admin.post.store') }}" method="POST" class="space-y-4">
                            @csrf
                            <div>
                                <x-form.label for="title">Post Title</x-form.label>
                                <x-form.input type="text" name="title" placeholder="Enter post title" />
                                @error('title')
                                    <x-ui.alert type="danger">{{ $message }}</x-ui.alert>
                                @enderror
                            </div>
                            <div>
                                <x-form.label for="post_content">Post Content</x-form.label>
                                <x-form.textarea name="body" placeholder="Enter post content" />
                                @error('body')
                                    <x-ui.alert type="danger">{{ $message }}</x-ui.alert>
                                @enderror
                            </div>

                            <x-ui.button type="submit">Submit</x-ui.button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
