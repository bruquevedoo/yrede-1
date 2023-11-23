<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicial - yrede</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.4/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<label class="swap swap-rotate"><font></font>
  <font></font>
  <!-- this hidden checkbox controls the state --><font></font>
  <input type="checkbox" class="theme-controller" value="synthwave" /><font></font>
  <font></font>
  <!-- sun icon --><font></font>
  <svg class="swap-on fill-current w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z"/></svg><font></font>
  <font></font>
  <!-- moon icon --><font></font>
  <svg class="swap-off fill-current w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z"/></svg><font></font>
  <font></font>
</label>

<html data-theme="dark"></html>
    <div class="mx-auto justify-center flex items-center flex-col">
    <header>
        <h1>Página Inicial</h1>
        <nav>
        <button class="btn btn-primary"><a href="/cadastra-usuario"><i class="fas fa-user-plus auth-icon"></i> Criar Conta</a></button>
        <button class="btn btn-primary"><a href="/login"><i class="fas fa-sign-in-alt auth-icon"></i> Login</a></button>
        <button class="btn btn-primary"><a href="/cria-post"><i class="fas fa-plus-circle icon"></i> Nova Postagem</a></button>
        </nav>
    </header>

    <main>
        <div>
            
        </div>

       

        <h1>Posts:</h1>
        <div class="post-container">
            <!-- Exemplo usando cores para o tema escuro -->
            @foreach ($posts as $post)
                <div class="post">

                <div class="chat chat-start">
                <div class="chat-bubble">{{$post->mensagem}}</div>
                </div>
                    
            @endforeach
        </div>
    </main>
</div>
</body>
</html>
