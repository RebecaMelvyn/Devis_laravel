
        @auth
            <div class="contain">
                <div class="card">
                    <h1>{{$client->name}}</h1>
                    <h2>Email: {{$client->email}}</h2>
                    <h2>Address: {{$client->address}}</h2>
                    <h2>Phone: {{$client->phone}}</h2>
                    <h2>Siret: {{$client->siret}}</h2>
                    <h2>Ref: {{$client->ref}}</h2>
                    <a href="{{route('clients.edit', $client)}}" class="btn blue">Modifier le client</a>
                    <div class="delete">
                        <form action="{{route('clients.delete', $client)}}" method="POST">
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

