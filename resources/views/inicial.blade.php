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
        <div class="navbar bg-base-100"><font></font>
        <div class="flex-1"><font></font>
        <a class="btn btn-ghost text-xl">Connect BG</a><font></font>
        </div><font></font>
        <div class="flex-none gap-2"><font></font>
        <div class="form-control"><font></font>
        <input type="text" placeholder="Pesquisar" class="input input-bordered input-primary w-full max-w-xs" /><font></font>
        </div><font></font>
        <div class="dropdown dropdown-end"><font></font>
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar"><font></font>
        <div class="w-10 rounded-full"><font></font>
          <img alt="Tailwind CSS Navbar component" src="https://us.123rf.com/450wm/wikagraphic/wikagraphic2101/wikagraphic210100701/163005426-initial-letter-bg-
          logotype-company-name-colored-gold-and-silver-swoosh-design-isolated-on-black.jpg?ver=6" /><font></font>
        </div><font></font>
        </div><font></font>
        <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52"><font></font>
        <li><font></font>
        <a class="justify-between"><font></font>
        Perfil<font></font>
        <span class="badge">Novo</span><font></font>
        </a><font></font>
        </li><font></font>
        <li><a>Configurações</a></li><font></font>
        <li><a>Sair</a></li><font></font>
        </ul><font></font>
        </div><font></font>
        </div><font></font>
        </div>
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
        <h1>Passos : Crie uma conta > Faça o login > Em seguida faça uma Postagem!</h1>
        <br>
        <nav>
        <button class="btn btn-outline btn-primary"><a href="/cadastra-usuario"><i class="fas fa-user-plus auth-icon"></i> Criar Conta</a></button>
        <button class="btn btn-outline btn-primary"><a href="/login"><i class="fas fa-sign-in-alt auth-icon"></i> Login</a></button>
        <button class="btn btn-outline btn-primary"><a href="/cria-post"><i class="fas fa-plus-circle icon"></i> Nova Postagem</a></button>
        </nav>
    </header>
    <main>
        <br>
        <div> 
        <div class="divider divider-neutral">Posts</div>   
        </div>
        <h1></h1>
        <div class="post-container">
            <!-- Exemplo usando cores para o tema escuro -->
            @foreach ($posts as $post)
                <div class="post">
                <div class="chat chat-start">
                <div class="chat-bubble chat-bubble-secondary">{{$post->mensagem}}</div>
                </div>
            @endforeach
        </div>
        <div class="divider divider-neutral"></div>
        <br>
        <div class="stats shadow">
  
  <div class="stat">
    <div class="stat-figure text-primary">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
    </div>
    <div class="stat-title">Total de curtidas</div>
    <div class="stat-value text-primary">25.6K</div>
    <div class="stat-desc">21% a mais que no mês passado</div>
  </div>
  
  <div class="stat">
    <div class="stat-figure text-secondary">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
    </div>
    <div class="stat-title">Visualizações de página</div>
    <div class="stat-value text-secondary">2.6M</div>
    <div class="stat-desc">21% a mais que no mês passado</div>
  </div>
  
  <div class="stat">
    <div class="stat-figure text-secondary">
      <div class="avatar online">
        <div class="w-16 rounded-full">
          <img src="https://us.123rf.com/450wm/wikagraphic/wikagraphic2101/wikagraphic210100701/163005426-initial-letter-bg-logotype-company-name-colored-gold-and-silver-swoosh-design-isolated-on-black.jpg?ver=6" />
        </div>
      </div>
    </div>
    <div class="stat-value">86%</div>
    <div class="stat-title">Média de engajamento</div>
    <div class="stat-desc text-secondary">Média de suas últimas postagens</div>
  </div>
</div>
    </main>
</div>
</body>
</html>
