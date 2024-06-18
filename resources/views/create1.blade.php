<x-home>
    {{-- <section class="px-6 py-8">
  <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
    <h1 class="text-center font-bold text-xl">New Task</h1>
    <form action="/Api/v1/" method="POST" class="mt-16">
    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title" >
            Title
        </label>
        <input class="border border-gray-400 p-2 w-full" type="text" name="title" id="title" required>
    </div>
    <div class="mb-6 ">
        <textarea  name="description" id="description" cols="20" rows="3">Description</textarea>
    </div>
</div>
<div class="mb-6">
    <input type="hidden" name="completed" value="0">
    <input type="checkbox" value="1" id="completed" name="completed">
</div>

    </form>
</main>  
</section> --}}
<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Title" aria-label="Title" aria-describedby="basic-addon1">
          </div>        
          <div class="input-group">
            <span class="input-group-text">Description</span>
            <textarea class="form-control" aria-label="description"></textarea>
          </div>
          <div class="input-group">
            
            <input type="checkbox" value="1" name="completed" id="completed" >
            Completed
          </div>
        
    </div>
  </section>
</x-home>