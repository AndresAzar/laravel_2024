<x-home>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Title" aria-label="Title" aria-describedby="basic-addon1" value="{{ old('title', $task->title) }}" required>
              </div>        
              <div class="input-group">
                <span class="input-group-text">Description</span>
                <textarea class="form-control" aria-label="description" value="{{ old('description', $task->description) }}"></textarea>
              </div>
              <div class="input-group">
                <input type="hidden" name="completed" value="0" />
                <input type="checkbox" value="1" name="completed" id="completed" value="1" <?php echo $task->completed == 1 ? 'checked' : ''; ?>>
                Completed
              </div>
            
        </div>
      </section>
    </x-home>