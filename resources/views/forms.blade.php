<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Dúvidas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Formulário de Dúvidas - Uso do Sistema Sinfralog e Aplicativos </h2>
        <div class="quadradinho">
            <div class="texto">
                <p>Utilize este formulário para enviar suas dúvidas sobre o uso do Sistema Sinfralog
                e seus aplicativos Diário de Obras e Fiscalização. Nossa equipe irá revisar suas questões e fornecer
                respostas detalhadas para ajudá-lo a aproveitar ao máximo as funcionalidades disponíveis.
                </p>
            </div>
        </div>

        @if(session('sucesso'))
            <div class="alerta-sucesso">{{ session('sucesso') }}</div>
        @endif

        <form action="{{ route('formulario.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <h4>Formulário de Dúvidas</h4>
            <label for="nome">Nome <span>*</span></label>
            <input type="text" name="nome" required>

            <label for="cpf">CPF <span>*</span></label>
            <input type="text" name="cpf" maxlength="11" required>

            <label for="email">E-mail para contato <span>*</span></label>
            <input type="email" name="email" required>

            <label>Está com dúvida em qual sistema? <span>*</span></label>
            <select name="sistema" required>
                <option>Selecione*</option>
                <option value="Sinfralog">Sinfralog</option>
                <option value="Diário de Obras">Diário de Obras - Aplicativo</option>
                <option value="Fiscalização">Fiscalização - Aplicativo</option>
                <option value="Outros">Outros</option>
            </select>

            <label>Em qual perfil você se encaixa? <span>*</span></label>
            <select name="perfil" required>
                <option>Selecione*</option>
                <option value="Fiscal">Fiscal</option>
                <option value="Responsável Técnico">Responsável Técnico da Executora</option>
                <option value="Supervisor(a)">Supervisor(a)</option>
                <option value="Outros">Outros</option>
            </select>
            
            <div>
                <label for="duvida">Descreva sua dúvida *</label>
                <textarea class="tam-caixa" name="duvida" required></textarea>

                <label for="docs">Faça upload dos arquivos, imagens, PDFs etc</label>
                <input type="file" id="docs" name="docs[]" multiple>
                
                <!-- <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div> -->
                
                <div class="botao"> 
                    <button type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>

    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
</body>
</html>
