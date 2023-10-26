<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css" />
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <title>cadastro de usuários</title>
</head>
<body>
    <h1 class="w-full text-center text-xl font-bold">Cadastro de Usuários</h1>

    <form class="card-body max-w-md m-auto"  action="{{route('salva-usuario')}}" method="post">

        @csrf

        <div class="form-control">
            <label class="label">
              <span class="label-text font-bold">Usuário</span>
            </label>
            <input name="usuario" type="text" placeholder="usuario" 
                    class="input input-bordered" required />
        </div>

        <div class="form-control">
            <label class="label">
              <span class="label-text font-bold">Bio</span>
            </label>
            <input name="bio" type="text" placeholder="Bio" 
                    class="input input-bordered" required />
        </div>

        <div class="form-control">
            <label class="label">
              <span class="label-text font-bold">Nome</span>
            </label>
            <input name="nome" type="text" placeholder="Nome" 
                    class="input input-bordered" required />
        </div>

        <div class="form-control">
            <label class="label">
              <span class="label-text font-bold">E-mail</span>
            </label>
            <input name="email" type="email" placeholder="Email" 
                    class="input input-bordered" required />
        </div>

        <div class="form-control">
            <label class="label">
              <span class="label-text font-bold">Senha</span>
            </label>
            <input name="senha" type="password" placeholder="Senha" 
                    class="input input-bordered" required />
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>


      
    </form>


    
</body>
</html>