
        @auth
            <div class="contain">
                <div class="card">
                    <img src="{{\Illuminate\Support\Facades\Auth::user()->avatar_url}}" alt="no img">
                    <h1>{{\Illuminate\Support\Facades\Auth::user()->name}}</h1>
                    <div class="left" style="display: inline-block;">
                    <h2>Email: {{\Illuminate\Support\Facades\Auth::user()->email}}</h2>
                    <h2>Email public: {{\Illuminate\Support\Facades\Auth::user()->email_public}}</h2>
                    <h2>Github ID: {{\Illuminate\Support\Facades\Auth::user()->github_id}}</h2>
                    <h2>Address: {{\Illuminate\Support\Facades\Auth::user()->address}}</h2>
                    <h2>Phone: {{\Illuminate\Support\Facades\Auth::user()->phone}}</h2>
                    <h2>Iban: {{\Illuminate\Support\Facades\Auth::user()->iban}}</h2>
                    </div>
                    <div class="right"style="display: inline-block; float: right">
                    <h2>Rib: {{\Illuminate\Support\Facades\Auth::user()->rib}}</h2>
                    <h2>Bic: {{\Illuminate\Support\Facades\Auth::user()->bic}}</h2>
                    <h2>Account holder: {{\Illuminate\Support\Facades\Auth::user()->account_holder}}</h2>
                    <h2>Domiciliation: {{\Illuminate\Support\Facades\Auth::user()->domiciliation}}</h2>
                    <h2>Mentions: {{\Illuminate\Support\Facades\Auth::user()->mentions}}</h2>
                    </div><br/>
                    <a href="{{route('users.edit')}}" class="btn blue">Modifier le profil</a>
                    <div class="delete">
                        <form action="{{route('users.delete')}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit"  name="destroy" value="Supprimer le profile"
                                   class="btn red">
                        </form>
                    </div>
                    <a class="btn exit" href="{{ route('dashboard') }}">Retour</a>
                </div>
            </div>
        @endauth




<style>
    .blue{

        background-color: blue;
    }
    .red{
        background-color: red;
        display: inline-block;
        float: right;
    }
    .exit{
        background-color: #d10077;
    }

    .btn{
        padding: 2%;
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

    .card img{
        width: 20%;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .contain{
        align-items: center;
        padding-top: 5%;
    }
    .card{
        margin: 0 auto;
        padding: 2%;
        width: 50%;
        background-color: #07c597;
    }
    h1{
        text-align: center;
    }

    form{
        margin-left: 40%;
        margin-top: 5%;
    }
</style>

