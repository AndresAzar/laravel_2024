{{-- <x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <h1 class="text-black text-lg font-bold">All Tasks</h1>
        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-grey  shadow-md overflow-hidden sm:rounded-lg">
            @if ($tasks->isEmpty())
            <p class="text-white">You don't have any task yet</p>
        @else
            
               
                    
                
                <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                    @foreach ($tasks as $task)
                        <div class="text-white flex justify-between py-4">
                            @if ($task->completed)
                          <svg class="completed-icon h-4 w-4 fill-current text-blue-500 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 0a10 10 0 1 1 0 20 10 10 0 0 1 0-20zm4.95 7.475a.75.75 0 0 0-1.05-1.05l-4.5 4.5-2.25-2.25a.75.75 0 1 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l5.25-5.25z"/>
                        </svg>
                        @else
                        <p></p>
                @endif
                          <p><a href="{{ route('Task.show',$task->id) }}">{{ $task->title }}</a><p>
                          <p>Creator : {{ $task->user->name }}</p>
                          <p>{{ $task->created_at->diffForHumans() }}</p>
                        <p><a href="{{ route('Task.show',$task->id) }}"><x-primary-button>Edit</x-primary-button></a></p>
                        <p><form id="delete-task-form-{{ $task->id }}" action="{{ route('Task.destroy', $task->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <x-danger-button class="btn btn-danger delete-task" data-task-id="{{ $task->id }}">Delete</x-danger-button>
                        </form></p>
                        
                        </div>
                        
                        
                        @endforeach
                    <div class="text-black text-lg font-bold"> {{ $tasks->links() }} </div>
                  </div>
            
        @endif
        
    </div>
    </div> 

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.delete-task').on('click', function() {
                var taskId = $(this).data('task-id');
                
                if (confirm("Are you sure you want to delete this task?")) {
                    $.ajax({
                        url: '/tasks/' + taskId,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            $('#task-' + taskId).remove();
                            alert(response.message);
                        },
                        error: function(xhr) {
                            alert('Error deleting task.');
                            console.log(xhr.responseText);
                        }
                    });
                } else {
                    console.log('Deletion canceled.');
                    return false;
                }
            });
        });
        </script>
    
</x-app-layout> --}}
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>