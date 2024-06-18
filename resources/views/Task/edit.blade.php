<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <h1 class="text-black text-lg font-bold">Edit {{ $task->title }}</h1>
        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-grey  shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('Task.update', $task->id ) }}" >
                @method('patch')
                @csrf
            <!-- Title -->
            <div class="mt-4">
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" value="{{ old('title', $task->title) }}" name="title" required autofocus />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                   
            </div>    
    
            <!-- description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('description')" />
                <x-textarea  placeholder="Add description" id="description" name="description" value="{{ old('description', $task->description) }}" />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                   
            </div> 
    
            <!-- completed -->
            <div class="form-check">
                <input type="hidden" name="completed" value="0" />
                <input type="checkbox" class="form-check-input" id="completed" name="completed" value="1" <?php echo $task->completed == 1 ? 'checked' : ''; ?>>
                <label class="form-check-label" for="completed">Completed</label>
            </div>
    
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-3">
                    Update
                </x-primary-button>
            </div>    
            </form>
        </div>
    </div>
    </x-app-layout>