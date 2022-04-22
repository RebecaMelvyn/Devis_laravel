<h1>Ajouts de clients</h1>

    <form action="{{ route('clients.store') }}" method="post" class="my-3">
        @csrf
            <div class="text my-3 col">
                <label for="name">name :</label>
                <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="text my-3 col">
                <label for="address">Address :</label>
                <input type="text" id="address" name="address" class="@error('address') is-invalid @enderror">
                @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="text my-3 col">
                <label for="siret">Siret :</label>
                <input type="text" id="siret" name="siret" class="@error('siret') is-invalid @enderror">
                @error('siret')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="text my-3 col">
                <label for="ref">Ref :</label>
                <input type="text" id="ref" name="ref" class="@error('ref') is-invalid @enderror">
                @error('ref')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="text my-3 col">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="text my-3 col">
                <label for="phone">Numéro :</label>
                <input type="tel" id="phone" name="phone" class="@error('phone') is-invalid @enderror">
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

        <input class="btn green" type="submit" id="submit" value="Ajout d'un client">
    </form>
<a class="btn exit" href="{{ route('dashboard') }}">Retour</a>


<style>
    .green{
        background-color: #009b00;
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
    h1{
        text-align: center;
    }

    form{
        margin-left: 40%;
        margin-top: 5%;
    }
</style>

