@extends('layouts.app')

@section('content')
<div class="login" >
            <div class="text-center">
                <img src="css/pics/region.jpg" alt="region-logo" class="mb-4 mt-5 text-center">
            </div>
                
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1 class="text-center mb-3">SE CONNECTER</h1>  
                
                <div class="mb-3" id="grp">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control" id="email" placeholder="name@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="mb-3" id="grp">
                    <label for="pwd" class="form-label">Mot de passe :</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-md " id="btn" >Connexion</button>
                </div>
                <div class="text-center">
                    <span>© 2023</span>
                </div>
            </form>
        </div>
@endsection
