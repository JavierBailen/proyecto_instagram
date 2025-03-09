<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @Vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
</head>
<body>

<div class="bg-gray-200 min-h-screen p-8">
  <!-- Contenedor con Grid -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
    
    @foreach ($posts as $post)
    <div class="bg-white rounded-lg overflow-hidden shadow-2xl group transition-transform duration-300 hover:translate-y-[-10px]">
      <div class="h-40 w-full overflow-hidden">
        <a href="{{ route('posts.show', $post->id) }}">
            <img class="h-full w-full object-contain transform overflow-hidden transition-transform duration-[300ms] group-hover:scale-110 object-center" 
             src="{{ Storage::url($post->foto) }}" 
             alt="Imagen del post" />
        </a>
        
      </div>

      <div class="p-6 pb-4 group-hover:bg-gray-700 duration-[0.3s]">
        <h4 class="mt-1 font-semibold text-xl leading-tight truncate group-hover:text-teal-600 duration-[0.3s]">
          {{$post->texto}}
        </h4>
        
        <div class="mt-4 flex items-center">
          <div class="ml-3">
            <p class="text-sm font-medium text-gray-900">
              <a href="#" class="hover:underline hover:text-teal-600 duration-[0.3s]">
                Publicado por: {{$post->user->name}}
              </a>
            </p>
            <div class="flex space-x-1 text-sm text-gray-500 group-hover:text-white duration-[0.3s]">
              <span>Fecha Publicación: {{$post->created_at}}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach

  </div>
  <div class="flex justify-center mt-6">
    <button type="button" class="py-2 px-4 bg-gray-600 hover:bg-gray-700 text-white text-base font-semibold rounded-lg shadow-md transition ease-in duration-200">
      <a href="/"> Volver Atrás</a>
    </button>
  </div>
  
</div>

</body>
</html>
