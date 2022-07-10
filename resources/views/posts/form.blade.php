<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <form action="{{ route('test') }}" method="POST">
            @csrf
            
            {{-- <pre>
            @php
                print_r($errors->all());
            @endphp
            </pre> --}}
            <div class="container">
                <h1 class="text-center">Registration</h1>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="Full name" value="{{ old('name') }}"> 
                    <span class="text-danger">
                        @error('name')
                        {{ $message }}
                            
                        @enderror
                    </span>    
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control" placeholder="Your email address" value="{{ old('email') }}">  
                    <span class="text-danger">
                        @error('email')
                        {{ $message }}
                            
                        @enderror
                    </span>       
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="" class="form-control" placeholder="Password"> 
                    <span class="text-danger">
                        @error('password')
                        {{ $message }}                            
                        @enderror
                    </span>        
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="" class="form-control" placeholder="Password"> 
                    <span class="text-danger">
                        @error('password')
                        {{ $message }}                            
                        @enderror
                    </span>        
                </div>

                <button class="btn btn-primary">Submit</button>

                <a href="#" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Login with Google
                </a>

                <a href="#" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                </a>
            </div>
        </form>
    </body>
</html>