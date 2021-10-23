<!FILETYPE html>
<html>
    <head>
        <title>Slot Machine - Register</title>
        <link rel="stylesheet" href="{{Storage::url('css/style.css')}}"/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="page-register">
        <h1 class="hidden-title">Slot Machine - Cadastro</h1>
        <section class="section">
            <div class="container">

                <header>
                    <div>
                        <img class="slot-machine-icon" src="{{Storage::url('images/slot-machine-vector.svg')}}"/>
                        <h1>Slot <br/>Machine</h1>
                        <img class="money-icon" src="{{Storage::url('images/money-vector.svg')}}"/>
                    </div>
                    <p>Preencha os campos abaixo para cadastrar-se na plataforma</p>
                </header>

                <form action="post" class="form register">
                    <div>
                        <label for="first-name">
                            <span>Nome</span>
                            <input id="first-name" type="text"/>
                        </label>
                        <label for="last-name">
                            <span>Sobrenome</span>
                            <input id="last-name" type="password"/>
                        </label>
                        <label for="birthday">
                            <span>Nascimento</span>
                            <input id="birthday" type="date"/>
                        </label>
                        <label for="cpf">
                            <span>CPF</span>
                            <input id="cpf" type="password"/>
                        </label>
                        <label for="email">
                            <span>E-mail</span>
                            <input id="email" type="email"/>
                        </label>
                        <label for="user">
                            <span>Usuário</span>
                            <input id="user" type="text"/>
                        </label>
                        <label for="password">
                            <span>Senha</span>
                            <input id="password" type="password"/>
                        </label>
                    </div>
                    <input class="btn" type="button" value="Acessar"/>
                </form>                
            </div>
        </section>
    </body>
</html>