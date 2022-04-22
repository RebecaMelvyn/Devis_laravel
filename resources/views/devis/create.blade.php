<h1>Générateur de facture PDF</h1>

    <form action="{{ route('devis.createPdf') }}" method="post" class="my-3">
        @csrf
            <div class="text my-3 col">
                <label for="title">Title :</label>
                <input type="text" id="title" name="title" class="@error('title') is-invalid @enderror">
                @error('title')
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


        <input class="btn green" type="submit" id="submit" value="Ajout de missions">
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

