# Base Box

## Apresentação
Base Box é um tema WordPress enxuto, moderno e focado em performance e SEO. Ele serve como uma fundação sólida para qualquer projeto WordPress, sem dependências externas pesadas como jQuery ou Bootstrap.

## Objetivo
Fornecer uma estrutura inicial leve e semanticamente correta, otimizada para Core Web Vitals e acessibilidade, compatível com Gutenberg e WordPress Multisite.

## Requisitos Mínimos
- WordPress 6.0+
- PHP 7.4+

## Estrutura dos Arquivos
- `assets/`: CSS e JS puros.
- `inc/`: Lógica modular (setup, scripts, funções de template).
- `template-parts/`: Componentes reutilizáveis.
- `theme.json`: Configurações do editor Gutenberg.

## Recursos Implementados
- HTML5 Semântico.
- Mobile-first e Responsivo.
- Suporte a WPMU (Multisite).
- SEO Técnico integrado.
- Carregamento de scripts com `defer`.
- Sem bibliotecas externas.

## Como Instalar
1. Compacte a pasta `base-box` em um arquivo `.zip`.
2. No painel WordPress, vá em Aparência > Temas > Adicionar Novo > Enviar Tema.
3. Ative o tema.

## WordPress Multisite
O tema é totalmente compatível. Pode ser ativado individualmente em sites da rede ou ativado na rede globalmente.

## Personalização
- Cores e tipografia podem ser ajustadas via `theme.json` ou sobrescrevendo variáveis CSS no Customizer.
- Novos templates podem ser adicionados seguindo a hierarquia de templates do WordPress.
