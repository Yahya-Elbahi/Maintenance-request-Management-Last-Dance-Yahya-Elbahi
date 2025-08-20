<x-app-layout>
    
    <!-- https://codepen.io/simonwpt-the-typescripter/embed/RwGrRXq -->
    
    <div class="bg-black min-h-[89.5vh] flex items-center text-lg">
        
        <form action="/technisieninfo/store" method="POST" class="p-10 md:w-2/3 lg:w-1/2 mx-auto rounded"
        enctype="multipart/form-data">
        @csrf
        <div class="shadow">
            <div class="flex items-center bg-white rounded-t-lg border-black border-b">
                <label for="title" class="w-20 text-right mr-8 p-4 text-black">Title</label>
                <input type="text" name="title" id="title" placeholder="Enter your Title"
                class="flex-1 p-4 pl-0 bg-transparent placeholder-black  outline-none text-black overflow-ellipsis overflow-hidden">
                    </div>
                    <div class="flex items-center bg-white rounded-t-lg border-black border-b">
                        <label for="description" class="w-20 text-right mr-8 p-4 text-black">Description</label>
                        <textarea name="description" id="" cols="30" rows="10"
                        class="flex-1 p-4 pl-0 bg-transparent placeholder-black  outline-none text-black overflow-ellipsis overflow-hidden"></textarea>
                    </div>
                    <div class="flex items-center bg-white rounded-t-lg border-black border-b">
                        <label for="category" class="w-20 text-right mr-8 p-4 text-black">Category</label>
                        <input type="text" placeholder="what is your working" name="category"
                        class="flex-1 p-4 pl-0 bg-transparent placeholder-black  outline-none text-black overflow-ellipsis overflow-hidden">
                    </div>
                        {{-- <div class="items-center bg-white rounded-t-lg border-black border-b hidden">
                            <label for="user_id" class="w-20 text-right mr-8 p-4 text-black">User_id</label>
                            <input type="number" placeholder="what is your working" name="user_id" class="flex-1 p-4 pl-0 bg-transparent placeholder-black  outline-none text-black overflow-ellipsis overflow-hidden">
                        </div>
                        <div class="items-center bg-white rounded-t-lg border-black border-b hidden">
                            <label for="technisien_id" class="w-20 text-right mr-8 p-4 text-black">technisien_id</label>
                            <input type="number" placeholder="what is your working" name="technisien_id" class="flex-1 p-4 pl-0 bg-transparent placeholder-black  outline-none text-black overflow-ellipsis overflow-hidden">
                        </div> --}}
                    
                    <div class="flex items-center bg-white rounded-t-lg border-black border-b">
                        <label for="image" class="w-20 text-right mr-8 p-4 text-black">Profile</label>
                        <input type="file" accept="image/png, image/jpg, image/webp, image/jpeg" name="image"
                        id="image"
                        class="flex-1 p-4 pl-0 bg-transparent placeholder-black  outline-none text-black overflow-ellipsis overflow-hidden">
                    </div>
        
                    
                </div>
                
                
                
                {{-- @foreach ($technisien as $techn) --}}
                
                {{-- <form action="/technisienspost/{{ $techn->id }}"> --}}
                {{-- <a href="/technisienpost/{{ $techn->id }}"> --}}
                       <button type="submit"
                       class="bg-red-500 block w-full rounded py-4 text-white font-bold shadow">Submit</button>
                    
                {{-- </a>  --}}
                {{-- @endforeach --}}
                        
                   
                    
                {{-- </form>
                
                
                
                
                
                
                
                
                {{-- </form> --}}
            </form>
            
        </div>
        
        
        


</x-app-layout>
