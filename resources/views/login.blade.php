<!FILETYPE html>
<html>
    <head>
        <title>Slot Machine - Login</title>
        <link rel="stylesheet" href="{{Storage::url('css/style.css')}}"/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="page-login">
        <h1 class="hidden-title">Slot <br/>Machine</h1>
        <section class="section">
            <div class="container">

                <header>
                    <div>
                        <img class="slot-machine-icon" src="{{Storage::url('images/slot-machine-vector.svg')}}"/>
                        <h1>Slot <br/>Machine</h1>
                        <img class="money-icon" src="{{Storage::url('images/money-vector.svg')}}"/>
                    </div>
                    <p>Preencha os campos abaixo para acessar a plataforma</p>
                </header>

                <form action="post" class="form">
                    <label for="user">
                        <span>Usuário</span>
                        <input id="user" type="text"/>
                    </label>
                    <label for="password">
                        <span>Senha</span>
                        <input id="password" type="password"/>
                    </label>
                    <input class="btn" type="button" value="Acessar"/>
                </form>

                <footer>
                    <a href="#">Clique aqui para criar uma conta</a>
                </footer>
                
            </div>
        </section>
    </body>
</html>