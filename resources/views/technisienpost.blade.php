<x-app-layout>
  
  <div class="flex flex-col w-fit mx-auto">
    @foreach ($technisien as $techn)
    <div class="product-card grid grid-cols-1 md:grid-cols-2 gap-10 py-12 lg:pb-8 lg:pt-10">
      <div
        class="bg-gradient-to-b from-blue-400 to-blue-200 dark:from-gray-800 dark:to-gray-700 border rounded-xl w-fit mx-auto flex flex-col justify-center gap-y-4">
        <div class="w-full flex flex-col justify-between gap-y-5 max-w-[20rem] mx-auto p-5 rounded-xl">
          <img class="rounded-[calc(20px-12px)] rounded-b-none" src="{{ asset('storage/'.$techn->image) }}" alt="Professional UI/UX Design Service" style="width: 100%; height: 250px;">
          <div class="flex flex-col gap-y-2">
            <h4 class="text-2xl font-bold text-black dark:text-white lg:text-left">{{ $techn->title }}
            </h4>
            <p class="text-black dark:text-white text-sm lg:text-left">{{ $techn->description }}</p>
            <span class="font-bold text-red-400 border-b-2 w-12">{{ $techn->category }}</span>
            <button class="flex item-start bg-black text-white w-fit px-5 py-1 rounded-full">See Your Job</button>
          </div>
        </div>
      </div>
      {{-- <div
        class="bg-gradient-to-b from-green-400 to-green-200 dark:from-gray-800 dark:to-gray-700 border rounded-xl w-fit mx-auto flex flex-col justify-center gap-y-4">
        <div class="w-full flex flex-col justify-between gap-y-5 max-w-[20rem] mx-auto p-5 rounded-xl">
          <img class="rounded-[calc(20px-12px)] rounded-b-none" src="https://images.unsplash.com/photo-1559056199-641a0ac8b55e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw3fHxwcm9kdWN0fGVufDB8MHx8fDE3MTIwNjI5MDF8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="Innovative UI Design Solutions" style="width: 100%; height: 250px;">
          <div class="flex flex-col gap-y-2">
            <h4 class="text-2xl font-bold text-black dark:text-white lg:text-left">Innovative UI Design Solutions</h4>
            <p class="text-black dark:text-white text-sm lg:text-left">Transform your ideas into reality with our
              cutting-edge UI design solutions that captivate your audience.</p>
            <button class="flex item-start bg-black text-white w-fit px-5 py-1 rounded-full">Get Started</button>
          </div>
        </div>
      </div> --}}
    </div>
    @endforeach
  </div>
      
      
      
          
      
  </x-app-layout>
