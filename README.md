# FURIA - Know Your Fan

Um formulário interativo para fãs da FURIA eSports compartilharem informações sobre suas preferências, conectarem suas redes sociais e receberem recomendações personalizadas.

## 📋 Descrição

O "FURIA - Know Your Fan" é uma plataforma web que coleta informações dos fãs da FURIA eSports para criar um perfil personalizado. O sistema utiliza uma experiência de formulário de múltiplas etapas e simulações de análise com IA para proporcionar uma experiência interativa.

## ✨ Funcionalidades

- **Formulário multi-step**: Interface com 6 etapas para coletar dados do usuário
- **Efeitos visuais**: Animação holográfica no logo e transições suaves entre as etapas
- **Validação de dados**: Verificação de campos obrigatórios e formatos em cada etapa
- **Simulação de análise por IA**: Feedback visual sobre documentos, redes sociais e perfis de jogos
- **Geração de perfil personalizado**: Criação de um perfil de fã com recomendações baseadas nos dados fornecidos
- **Interface responsiva**: Compatível com dispositivos móveis e desktop

## 🧩 Estrutura do Projeto

O projeto é composto por arquivos HTML, CSS e JavaScript e inclui simulações de processamento em PHP:

```
FURIA-Know-Your-Fan/
│
├── index.html             # Estrutura principal da aplicação
├── style.css              # Estilos e aparência visual
├── script.js              # Lógica de interação e validação
├── holo.js                # Animação holográfica do logo
│
└── IMG/                   # Diretório de imagens
    └── furia-logo.png     # Logo da FURIA
    └── furia-wpp.png      # Wallpaper com a estampa da jersey da FURIA
```

## 🔍 Detalhamento das Seções

1. **Dados Pessoais**: Coleta informações básicas do usuário (nome, email, CPF, endereço)
2. **Interesses**: Preferências de jogos de eSports, frequência de acompanhamento e eventos
3. **Documentos**: Upload de identificação para verificação
4. **Redes Sociais**: Conexão com perfis em plataformas sociais
5. **Links de eSports**: Associação de perfis em plataformas de jogos (Steam, FACEIT, etc.)
6. **Perfil FURIA**: Análise personalizada e recomendações com base nos dados fornecidos

## 🛠️ Tecnologias Utilizadas

- **HTML5**: Estrutura e semântica do formulário
- **CSS3**: Estilização com variáveis CSS e animações
- **JavaScript**: Interatividade, validação e simulações de análise
- **PHP** (simulado): Backend para processamento de dados

## 🤖 Integração com IA (Simulada)

O projeto inclui simulações de integração com IA para análise de dados. Em uma implementação real, o código está preparado para integração com a API da OpenAI:

- No código PHP há linhas de código comentados que demonstram como seria a implementação real com a API da OpenAI
- A função `generateAIFanProfile()` contém o pseudocódigo para a chamada à API
- As análises de documento, perfil social e recomendações personalizadas atualmente são simuladas com JavaScript para fins educativos

**Nota:** Este projeto é apenas para fins educativos. Numa aplicação real, as chamadas simuladas seriam substituídas por integrações reais com APIs como a da OpenAI para análise de dados e geração de recomendações personalizadas.

## 💻 Como Executar

1. Clone o repositório:
```bash
git clone https://github.com/seu-usuario/FURIA-Know-Your-Fan.git
```

2. Navegue até o diretório do projeto:
```bash
cd FURIA-Know-Your-Fan
```

3. Abra o arquivo `index.html` em um servidor web local ou utilize uma extensão como Live Server no VSCode.

## 📱 Recursos de JavaScript

O arquivo `script.js` contém a lógica para:

- Controle de navegação entre abas
- Exibição condicional de campos
- Simulação de conexão com redes sociais
- Validação de perfis de jogos
- Simulação de análise de documentos
- Geração de perfil com análise de IA
- Atualizações visuais da barra de progresso

## 🔮 Recursos Visuais

- **Logo Holográfico**: Efeito visual especial no logotipo da FURIA
- **Animações de Transição**: Fade-in para mudanças entre etapas
- **Badges e Indicadores**: Elementos visuais para feedback de conclusão
- **Barra de Progresso**: Indicador visual do avanço no formulário
- **Wallpaper exclusivo**: O background do projeto foi refeito por mim no CorelDRAW, a partir de fotos e esboços encontrados na internet, reproduzindo fielmente a estampa das novas jerseys da FURIA

## 🔒 Considerações Sobre Dados

Este projeto é uma demonstração e atualmente simula o processamento de dados. Em uma implementação real:

- Todas as informações pessoais seriam processadas com segurança
- A validação de documentos seria integrada com serviços reais
- A autenticação OAuth seria utilizada para redes sociais
- Técnicas de criptografia seriam implementadas para dados sensíveis

## 🤝 Contribuições

Contribuições são bem-vindas! Sinta-se à vontade para:

1. Abrir issues para reportar bugs ou sugerir melhorias
2. Enviar pull requests com novas funcionalidades
3. Melhorar a documentação

## 🎮 Sobre a FURIA

FURIA é uma organização brasileira de eSports com equipes competitivas em diversos jogos como Counter-Strike 2, VALORANT, League of Legends, entre outros.

---

<p align="center">
  <img src="IMG/furia-logo.png" alt="FURIA Logo" width="200">
</p>
<p align="center">© 2025 FURIA eSports</p>
