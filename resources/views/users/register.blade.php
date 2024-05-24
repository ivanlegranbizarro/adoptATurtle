 @extends('layouts.base')

 @section('title', 'Register')


 @section('content')
 <div class="md:flex">
   <div class="md:w-1/2 bg-white shadow-xl rounded-lg p-6">
     <img src="{{ asset('img/tortuga-register.jpg') }}" alt="Welcome turtle" />
   </div>
   <div class="md:w-1/2 bg-white shadow-xl rounded-lg p-6">
     <form>
       <div>
         <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Name</label>
         <input type="text" name="name" placeholder="Your name" class="border p-3 w-full rounded-lg" />
       </div>

       <div>
         <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
         <input type="email" name="email" placeholder="Your email" class="border p-3 w-full rounded-lg" />
       </div>
       <div>
         <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
         <input type="password" name="password" placeholder="Your password" class="border p-3 w-full rounded-lg" />
       </div>
       <div>
         <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Confirm Password</label>
         <input type="password" name="password_confirmation" placeholder="Confirm Your password" class="border p-3 w-full rounded-lg" />
       </div>

       <input type="submit" value="Register" class="bg-green-600 hover:bg-green-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg mt-5" />
     </form>
   </div>
 </div>
 @endsection
