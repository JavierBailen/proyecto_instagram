<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @Vite('resources/css/app.css')
</head>
<body>
    
    
<div class="flex items-center justify-center min-h-screen ">
    <div class="bg-white p-6 rounded-2xl shadow-lg max-w-md w-full">
     <h1 class="text-2xl font-semibold mb-4 text-gray-800">Nuevo Post</h1>

     <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="cardholder-name" class="block text-sm font-medium text-gray-700">Texto de la publicación</label>
            <input
              type="text"
              id="cardholder-name"
              name="texto"
              placeholder="Texto"
              class="mt-1 block w-full p-2 rounded-lg border-gray-300 focus:ring-blue-500 focus:border-blue-500 shadow-sm"
              required
            />
          </div>
       
       <div class="mb-4">
         <label for="cardholder-name" class="block text-sm font-medium text-gray-700">Imagen</label>
         <input
           type="file"
           id="cardholder-name"
           name="foto"
           placeholder="Imagen"
           class="mt-1 block w-full p-2 rounded-lg border-gray-300 focus:ring-blue-500 focus:border-blue-500 shadow-sm"
           required
         />
       </div>
 
      
 
      
 
       
 
       <!-- Submit Button -->
       <div>
         <button
           type="submit"
           class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg shadow hover:bg-blue-700 transition"
         >
           Subir Post
         </button>
       </div>
     </form>
   </div>
 </div>

</body>
</html>