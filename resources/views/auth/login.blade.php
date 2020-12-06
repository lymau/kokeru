<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>
<body>
  @if(session('status'))
<p>{{ session('status') }}</p>
  @endif
  <form action="{{route('auth.login')}}" method="POST">
    @csrf
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>
    <input type="checkbox" id="remember" name="remember">
    <label for="remember">Remember me</label><br>
    <button type="submit">Masuk</button>
  </form>
  @error('email')
      <p>Email dan pass salah</p>
  @enderror

  @error('password')
    <p>Email dan pass salah</p>
  @enderror
</body>
</html>