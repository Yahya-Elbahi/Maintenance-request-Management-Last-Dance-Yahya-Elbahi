<x-app-layout>
<div class="flex justify-center items-center">
    <div class="relative p-10 mt-5 bg-white rounded-2xl flex flex-col gap-y-1 shadow-lg max-w-lg w-full">
        <!-- Decorative Background -->
        <div class="absolute inset-0 -z-10 transform rotate-6 bg-green-500 rounded-2xl"></div>

        <h2 class="text-xl font-semibold text-gray-800">
            <span class="text-green-600 font-bold">Get Help?</span> Please Write Your Probleme, and I can help you to find what do you want.
        </h2>

        <form action="/client/store" method="POST" class="mt-5 space-y-4" enctype="multipart/form-data">
            @csrf
            <div>
                <label class="block font-medium text-gray-700">Name*</label>
                <input type="text" name="name" placeholder="Type Name" class="w-full mt-1 p-3 border rounded-md focus:ring-2 focus:ring-yellow-500 outline-none">
            </div>
            
            <div>
                <label class="block font-medium text-gray-700">Description*</label>
                <textarea  placeholder="Type Here" name="descriptien" rows="4" class="w-full mt-1 p-3 border rounded-md focus:ring-2 focus:ring-yellow-500 outline-none"></textarea>
            </div>

            <div>
                <label class="block font-medium text-gray-700">Category*</label>
                <select name="category" id="">
                    <option disabled selected value="">select Technisien do you want it</option>
                    @foreach ($technisiens as $techn)
                <option value="">{{ $techn->category }}</option>
                @endforeach
            </select>
            </div>
            <div>
                <label class="block font-medium text-gray-700">Picture for your Probleme*</label>
                <input type="file" accept="image/pnj, image/pjeg, image/webp, image/jpg" name="image" id="">
            </div>

            {{-- <div>
                <label class="block font-medium text-gray-700">Priorety*</label>
               <select name="priorety" id="">
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
               </select>
            </div> --}}

            <button type="submit" class="w-full py-3 text-white bg-black rounded-md hover:bg-yellow-500 transition">
                Send Message
            </button>
        </form>
    </div>

</div>
</x-app-layout>