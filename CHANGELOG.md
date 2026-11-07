# Changelog

Todas as alterações notáveis neste projeto serão documentadas neste arquivo.

## [1.0.0] - 2026-11-07
### Adicionado
- Lançamento inicial do tema Base Box.
- Estrutura modular em PHP.
- Suporte a Gutenberg via `theme.json`.
- Layout responsivo Mobile First com CSS puro.
- Navegação acessível sem dependências JS externas.
- Compatibilidade com WordPress Multisite (WPMU).
- Otimização de SEO técnico e Core Web Vitals.
-e 
## [1.0.1] - 2026-11-07
### Alterado
- Troca do footer para um mais conveniente e moderno
-e 
## [1.0.2] - 2026-11-07
### Alterado
- Ajustes no layout dos comentários de cada post
-e 
## [1.0.3] - 2026-11-07
### Alterado
- Ajustes no CSS do layout dos comentários de cada post
-e 
## [1.0.4] - 2026-11-07
### Alterado
- Modificado o arquivo para diferenciar páginas singulares (`is_singular()`) de páginas de listagem (`/blog`, archives, categories, etc.).
- Nas páginas de listagem, o tema agora renderiza apenas o resumo do post utilizando `the_excerpt()`.
- Adicionado um botão elegante de chamada para ação ("Ler artigo completo →") para incentivar o engajamento e o clique.
- Nas páginas individuais (`single.php`), o conteúdo completo (`the_content()`) continua sendo exibido normalmente.
-e 
## [1.0.5] - 2026-11-07
### Alterado
- A listagem de posts na página /blog foi ajustada para exibir os artigos em um layout de duas colunas (ou coluna única em mobile) com a imagem destacada à esquerda e os dados/resumo à direita, seguindo o estilo profissional do projeto.
