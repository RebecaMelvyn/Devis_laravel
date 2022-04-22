
        @auth
            <div class="contain">
                <div class="card">
                    <form action="{{ route('clients.update', $client) }}" method="post" class="my-3">
                        @csrf
                        @method('PUT')
                        <h1>Edit {{$client->name}}</h1>
                        <div class="text my-3 col">
                            <label for="name">name :</label>
                            <input type="text" id="name" name="name" value="{{$client->name}}" class="@error('name') is-invalid @enderror">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text my-3 col">
                            <label for="address">Address :</label>
                            <input type="text" id="address" name="address" value="{{$client->address}}" class="@error('address') is-invalid @enderror">
                            @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text my-3 col">
                            <label for="siret">Siret :</label>
                            <input type="text" id="siret" name="siret" value="{{$client->siret}}" class="@error('siret') is-invalid @enderror">
                            @error('siret')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text my-3 col">
                            <label for="ref">Ref :</label>
                            <input type="text" id="ref" name="ref" value="{{$client->ref}}" class="@error('ref') is-invalid @enderror">
                            @error('ref')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text my-3 col">
                            <label for="email">Email :</label>
                            <input type="email" id="email" name="email" value="{{$client->email }}" class="@error('email') is-invalid @enderror">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="text my-3 col">
                            <label for="phone">Numéro :</label>
                            <input type="tel" id="phone" name="phone" value="{{$client->phone}}" class="@error('phone') is-invalid @enderror">
                            @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <input class="btn blue" type="submit" id="submit" value="Confirmer les modification">
                    </form>
                    <a class="btn exit" href="{{ route('clients.show', $client) }}">Retour</a>
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

