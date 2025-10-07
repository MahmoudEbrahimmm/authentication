<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body class="bg-gray-900 text-white flex items-center justify-center h-screen">
  <div class="w-full max-w-md p-8 space-y-6 bg-gray-800 rounded-lg shadow-lg">
    <h2 class="text-3xl font-bold text-center">Login</h2>
    @session('error')
        <div class="text-red-500 text-sm mt-1">{{session("error")}}</div>
    @enderror
    @session('success')
        <div class="text-green-500 text-sm mt-1">{{session("success")}}</div>
    @enderror
    <form action="{{url("login")}}" method="POST" class="space-y-4" id="login-form">
      @csrf
      <div>
        <label for="identifier" class="block mb-2 text-sm font-medium">Email / Phone</label>
        <input type="text" id="identifier" name="identifier" autocomplete="off" autofocus class="w-full p-3 rounded bg-gray-700 text-gray-100 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
        @error('identifier')
            <span class="text-red-500 text-sm mt-1">{{$message}}</span>
        @enderror
      </div>
      <div>
        <label for="password" class="block mb-2 text-sm font-medium">Password</label>
        <input type="password" id="password" name="password" class="w-full p-3 rounded bg-gray-700 text-gray-100 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
        @error('password')
            <span class="text-red-500 text-sm mt-1">{{$message}}</span>
        @enderror
      </div>
      <p class="mt-4 text-sm">Forgot your passsword? <a href="{{route("password.request")}}" class="text-blue-400 hover:underline">Reset now</a></p>
      
      <div class="flex items-center mb-4">
          <input type="checkbox" name="remember" id="remember">
          <label for="remember" class="block text-gray-300 ml-1">Remember Me</label>
          @error('remember')
              <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
          @enderror
      </div>
      
      @error('g-recaptcha-response')
            <span class="text-red-500 text-sm mt-1">{{$message}}</span>
      @enderror
      <button 
        data-sitekey="{{config('services.recaptchav3.site_key')}}" 
        data-callback='onSubmit' 
        data-action='submit' 
        class="g-recaptcha w-full py-3 mt-4 bg-blue-600 rounded-lg font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
      >Login</button>
      
      <p class="mt-4 text-sm">Login without password? <a href="{{route("login.magic")}}" class="text-blue-400 hover:underline">Login now</a></p>
      <!-- Social Login Buttons Row -->
      <div class="flex justify-between mt-4">
        @foreach (config('social.providers') as $provider)
          <a href="{{ url($provider['url']) }}" class="flex items-center justify-center w-1/3 py-3 bg-{{$provider['color']}}-500 rounded-lg font-semibold text-white hover:bg-{{$provider['color']}}-600 focus:outline-none focus:ring-2 focus:ring-{{$provider['color']}}-500 mr-2">
            <i class="{{$provider['icon']}} fa-lg mr-3"></i>
            {{$provider['name']}}
          </a>
        @endforeach
      </div>
      <p class="mt-4 text-sm text-center">Don’t have an account? <a href="{{route("register")}}" class="text-blue-400 hover:underline">Register</a></p>
    </form>
  </div>

  <script>
    function onSubmit(token) {
      document.getElementById("login-form").submit();
    }
  </script>
</body>
</html>
