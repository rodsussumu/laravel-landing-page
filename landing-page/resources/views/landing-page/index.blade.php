@extends("layout")

@section("conteudo")
    <p>Entre em contato conosco</p>
    <form action="home" method="post">
        @csrf
        <input type="text" id="nome" name="nome" placeholder="Informe seu nome completo">
        <input type="email" id="email" name="email"placeholder="Informe seu email">
        <input type="text" id="telefone" name="telefone" placeholder="Informe seu telefone">
        <button type="submit">Enviar</button>
    </form>
@endsection