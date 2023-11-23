<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicial - yrede</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #222;
            color: #eee;
        }

        header {
            background-color: #333;
            padding: 20px 0;
        }

        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ff5733; /* Tom de laranja */
        }

        .post-container {
            width: 80%;
            margin: 0 auto;
            text-align: left;
            padding-top: 20px;
        }

        .post {
            margin-bottom: 30px;
            border: 2px solid #ff5733; /* Borda mais destacada */
            padding: 20px;
            border-radius: 10px; /* Borda arredondada */
        }

        /* Modificações para o link "Nova Postagem" */
        a[href="/cria-post"] {
            font-size: 24px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #ff5733;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a[href="/cria-post"]:hover {
            color: #fff;
        }

        h1 {
            margin-bottom: 20px;
        }

        /* Estilo para o texto das postagens */
        .post div {
            color: #ccc;
            line-height: 1.6;
            font-size: 18px;
        }

        /* Estilo para o texto do título da postagem */
        .post > div:first-child {
            font-size: 22px;
            font-weight: bold;
            color: #ff5733;
            margin-bottom: 10px;
        }
        
        /* Estilo para o ícone de "Nova Postagem" */
        .icon {
            font-size: 28px;
            color: #ff5733;
            margin-right: 5px;
        }
        
        /* Estilo para ícones de "Criar Conta" e "Login" */
        .auth-icon {
            margin-right: 5px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="/cadastra-usuario"><i class="fas fa-user-plus auth-icon"></i> Criar Conta</a>
            <a href="/login"><i class="fas fa-sign-in-alt auth-icon"></i> Login</a>
        </nav>
    </header>

    <main>
        <div>
            <a href="/cria-post"><i class="fas fa-plus-circle icon"></i> Nova Postagem</a>
        </div>

        <h1>Posts:</h1>
        <div class="post-container">
            <!-- Exemplo usando cores para o tema escuro -->
            @foreach ($posts as $post)
                <div class="post">
                    <div>
                        Postagem - {{$post->id}}
                    </div>
                    <div>
                        <p>{{$post->mensagem}}</p>  
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>
