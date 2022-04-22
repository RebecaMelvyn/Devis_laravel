
        @auth
            <div class="contain">
                <div class="card">
                    <h1>{{$mission->title}}</h1>
                    <h2>Ref: {{$mission->ref}}</h2>
                    <a href="{{route('devis.edit', $devis)}}" class="btn blue">Modifier le client</a>
                    <div class="delete">
                        <form action="{{route('clients.delete', $devis)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" id="destroy" name="destroy" value="Supprimer l'utilisateur"
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
    .contain{
        align-items: center;
        padding-top: 5%;
    }
    .card{
        margin: 0 auto;
        padding: 2%;
        color: white;
        width: 20%;
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

