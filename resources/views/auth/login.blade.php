<x-layout>
    <div class="container loginCustom">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h1>Login</h1>
                </div>
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                    </div>
                    @error('email')
                    <p class=" text-danger">{{$message}}</p>
                    @enderror
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password" >
                      @error('password')
                      <p class=" text-danger">{{$message}}</p>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Entra</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>