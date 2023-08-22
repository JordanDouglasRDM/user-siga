<x-layout :message="$message">
        <form method="post" action="{{ route('status') }}" class="form">
            @csrf
            <label for="cpf">CPF</label>
            <input required="" class="input" type="text" id="cpf" name="cpf" autofocus><br><br>
            <label for="phone">Telefone</label>
            <input required="" class="input" type="text" id="phone" name="phone"><br><br>
            <label for="password">Senha</label>
            <input required="" class="input" type="password" id="password" name="password"><br><br>
            <input required="" class="login-button" type="submit" value="Logar">
        </form>
</x-layout>
