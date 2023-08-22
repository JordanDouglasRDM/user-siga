<x-layout :message="$message">
        <form method="post" action="{{ route('status') }}" class="form">
            @csrf
            
            <input required="" class="input" type="text" id="cpf" name="cpf" placeholder="CPF" autofocus><br><br>
            
            <input required="" class="input" type="text" id="phone" name="phone" placeholder="Telefone"><br><br>
            
            <input required="" class="input" type="password" id="password" name="password" placeholder="Senha"><br><br>
            <input required="" class="login-button" type="submit" value="Logar">
        </form>
</x-layout>