@extends('layouts.layout')
@section('contenido')






@auth
    


<div class="flex justify-center">
    <h3 class="text-2xl font-semibold text-gray-900">Bienvenido {{ Auth()->user()->name }}</h3>

   
</div>



<div class="flex justify-center">
    <img src="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExMGo4dGY0YzZocHRtdnNuMTNhZzhiMHk4N3hlbGdrd28yaXhjaWJ5NyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/NMcyw1544cjaE/giphy.gif" alt="">
</div>  



    <div class="flex justify-center">
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="py-2 px-4 bg-gray-600 hover:bg-gray-700 text-white text-base font-semibold rounded-lg shadow-md transition ease-in duration-200">
                Logout
              </button>
        </form>
    </div>
    
    
@endauth


@guest

    <h3 class="text-2xl font-semibold text-gray-900">Inicia sesión o regístrate si no tienes cuenta</h3>
    <div class="flex justify-center">
    
    <img src="https://media4.giphy.com/media/v1.Y2lkPTc5MGI3NjExeWp2d255aGc4bjlnZGluMWl1MGNkYWU2MjM3c2c5Ymw5dXRmaHV1ZSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/zcVOyJBHYZvX2/giphy.gif" alt="">

</div>

@endguest

@endsection