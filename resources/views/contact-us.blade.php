<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
<form class="w-1/3" action="{{ route('email.send') }}" method="post">
    @csrf
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
        <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" type="text">
    </div>
    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
        <input name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight" type="email">
    </div>
    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2">Message</label>
        <textarea name="message" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight h-20"></textarea>
    </div>
    <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Send Message</button>
    </div>
</form>