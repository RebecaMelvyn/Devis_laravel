

    <h1 class="my-4">Tableau de bord</h1>
    <div class="dashboard">
        <ul class="d-flex flex-column pl-0">
                <h2>{{\Illuminate\Support\Facades\Auth::user()->name}}</h2>
        </ul>
    </div>

    @auth
        Bonjour {{ Auth::user()->name }} !<br/>
        <div class="contain_btn">
        <a class="btn blue" href="{{ route('users.show') }}">Mon profil</a>
        <a class="btn yellow" href="{{ route('clients.create') }}">Ajout de clients</a>
        <a class="btn green" href="{{ route('devis.create') }}">Facturation</a>
        <a class="btn red" href="{{ route('auth.signout') }}">LogOut</a><br/>
        </div>
<div class="contain">
    <h2>Liste des clients:</h2>
        @foreach($clients as $client)
            <li class="card_client">
                <div class="info_client">
                    <div class="name">{{ $client->name }}</div>
                    <div class="email">{{ $client->email }}</div><br/>
                <a class="btn show" href="{{ route('clients.show', $client) }}">Show</a>
                </div>
            </li>
        @endforeach
        </div>
        <div class="contain">
            <h2>Liste des missions:</h2>
            @foreach($missions as $mission)
                <li class="card_client">
                    <div class="info_client">
                        <div class="name">{{ $mission->title }}</div>
                        <div class="email">{{ $mission->ref }}</div><br/>
                        <a class="btn show" href="{{ route('devis.show', $mission) }}">Show</a>
                    </div>
                </li>
            @endforeach
        </div>
    @endauth

<style>
    .contain_btn{
        margin-top: 5%;
    }
    .show{
        background-color: #ffaf00;
        display: table;
        margin: 0 auto;

    }
    .green{
        background-color: #009b00;
    }
    .blue{

        background-color: blue;
    }
    .red{
        background-color: red;

    }
    .yellow{
        background-color: #ffaf00;

    }
    .btn{
        padding-top: 1%;
        padding-bottom: 1%;
        padding-right: 2%;
        padding-left: 2%;
        border: 0px;
        color: white;
        text-decoration: none;
        border-radius: 15px;
        transition: all 0.4s;
    }
    .btn:hover{
        cursor: pointer;
        padding: 1%;
    }
    .contain{
    display: block;
        margin-top: 2%;
    }
    .role{
        margin-left: 100px;
    }
    .card_client{
        background-color: #5bfff0;
        width: 20%;
        margin: 0 auto;
        display: inline-block;
        border-radius: 15px;
    }
    .info_client{
        margin: 5%;
        padding: 3%;
        color: #e6e6e6;
        background-color: #07c597;
    }
</style>
