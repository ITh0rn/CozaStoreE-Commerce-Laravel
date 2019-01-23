<form class="w-full p-t-2">
    <h5 class="mtext-108 cl2 p-b-7">
        Modifica dati:
    </h5>
    <label class="stext-102 cl3" for="name">Inserisci i campi da modificare</label>

    <div class="row p-b-25 p-t-10">
        <div class="col-sm-6 p-b-5">
            <label class="stext-102 cl3" for="name">Nome</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20" style="background-color: #c4c4c4" id="name" type="text" placeholder="{{$user[0]->name}}" readonly>
        </div>

        <div class="col-sm-6 p-b-5">
            <label class="stext-102 cl3" for="name">E-mail</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" placeholder="{{$user[0]->email}}">
        </div>

        <div class="col-sm-6 p-b-5">
            <label class="stext-102 cl3" for="name">Username</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text">
        </div>

        <div class="col-sm-6 p-b-5">
            <label class="stext-102 cl3" for="email">Password</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" type="text">
        </div>

        <div class="col-sm-6 p-b-5">
            <label class="stext-102 cl3" for="email">Conferma Password*</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" type="text">
        </div>
    </div>

    <button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
        Inserisci
    </button>
</form>