 @extends('layouts.base')

 @section('title', 'Login')


 @section('content')
 <div class="md:flex md:justify-center md:gap-10 md:items-center">
   <div class="md:w-4/12 bg-white shadow-xl rounded-lg p-6">
     <img src="{{ asset('img/tortuga-george.jpg') }}" alt="Login Turtle" />
   </div>
   <div class="md:w-4/12 bg-white shadow-xl rounded-lg p-6">
     <form>
       <div>
         <div>
           <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
           <input type="email" name="email" placeholder="Your email" class="border p-3 w-full rounded-lg" />
         </div>
         <div>
           <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
           <input type="password" name="password" placeholder="Your password" class="border p-3 w-full rounded-lg" />
         </div>

         <input type="submit" value="Login" class="bg-green-600 hover:bg-green-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg mt-5" />
     </form>
   </div>
 </div>
 @endsection
