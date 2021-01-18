<form action="../database/user/create.php" method="post">
    <div class="mb-3">
        <label for="name">Nome</label>
        <input 
            name="name"
            id="name"
            type="text" 
            class="form-control" 
            autofocus
            />
    </div>
    <div class="mb-3">
        <label for="email">E-mail</label>
        <input 
            name="email"
            id="email"
            type="email" 
            class="form-control" 
            />
    </div>
    <div class="mb-3">
        <label for="password">Senha</label>
        <input 
            name="password"
            id="password"
            type="password" 
            class="form-control" 
            />
    </div>
    <div class="d-grid">
        <button class="btn btn-primary" type="button">Registrar-se</button>
    </div>
</form>