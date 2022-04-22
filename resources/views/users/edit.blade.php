
@auth
    <div class="contain">
        <div class="card">
            <form action="{{ route('auth.update') }}" method="post" class="my-3">
                @csrf
                @method('PUT')
                <h1>Edit {{\Illuminate\Support\Facades\Auth::user()->name}}</h1>
                <div class="text my-3 col">
                    <label for="Pseudo">Pseudo :</label>
                    <input type="text" id="pseudo" name="pseudo" value="{{ \Illuminate\Support\Facades\Auth::user()->name}}">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text my-3 col">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" value="{{ \Illuminate\Support\Facades\Auth::user()->email}}">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text my-3 col">
                    <label for="email_public">Email Public :</label>
                    <input type="email" id="email_public" name="email_public" value="{{ \Illuminate\Support\Facades\Auth::user()->email_public}}">
                    @error('email_public')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text my-3 col">
                    <label for="address">Address :</label>
                    <input type="text" id="address" name="address" value="{{ \Illuminate\Support\Facades\Auth::user()->address}}">
                    @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text my-3 col">
                    <label for="phone">Numéro :</label>
                    <input type="tel" id="phone" name="phone" value="{{ \Illuminate\Support\Facades\Auth::user()->phone}}">
                    @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text my-3 col">
                    <label for="avatar_url">Avatar_url :</label>
                    <input type="text" id="avatar_url" name="avatar_url" value="{{ \Illuminate\Support\Facades\Auth::user()->avatar_url}}">
                    @error('avatar_url')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text my-3 col">
                    <label for="iban">Iban :</label>
                    <input type="text" id="iban" name="iban" value="{{ \Illuminate\Support\Facades\Auth::user()->iban}}">
                    @error('iban')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text my-3 col">
                    <label for="rib">Rib :</label>
                    <input type="text" id="rib" name="rib" value="{{ \Illuminate\Support\Facades\Auth::user()->rib}}">
                    @error('rib')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text my-3 col">
                    <label for="bic">Bic :</label>
                    <input type="text" id="bic" name="bic" value="{{ \Illuminate\Support\Facades\Auth::user()->bic}}">
                    @error('bic')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text my-3 col">
                    <label for="account_holder">account_holder :</label>
                    <input type="text" id="account_holder" name="account_holder" value="{{ \Illuminate\Support\Facades\Auth::user()->account_holder}}">
                    @error('account_holder')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text my-3 col">
                    <label for="domiciliation">Domiciliation :</label>
                    <input type="text" id="domiciliation" name="domiciliation" value="{{ \Illuminate\Support\Facades\Auth::user()->domiciliation}}">
                    @error('domiciliation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text my-3 col">
                    <label for="mentions">Mentions :</label>
                    <input type="text" id="mentions" name="mentions" value="{{ \Illuminate\Support\Facades\Auth::user()->mentions}}">
                    @error('mentions')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <input class="btn blue" type="submit" id="submit" value="Confirmer les modification">
            </form>
            <a class="btn exit" href="{{ route('users.show') }}">Retour</a>
        </div>
    </div>
@endauth




<style>
    .blue{
        background-color: blue;
    }
    .exit{
        background-color: #d10077;
    }
    .btn{
        padding-top: 1%;
        padding-bottom: 1%;
        padding-right: 2%;
        padding-left: 2%;
        border: 0px;
        text-decoration: none;
        color: white;
        border-radius: 15px;
        transition: all 0.4s;
    }
    .btn:hover{
        cursor: pointer;
        padding: 1%;
    }
    .contain{
        align-items: center;
        padding-top: 5%;
    }
    .card{
        margin: 0 auto;
        padding: 2%;
        width: 20%;
        background-color: #c4ea88;
    }
    h1{
        text-align: center;
    }


</style>

