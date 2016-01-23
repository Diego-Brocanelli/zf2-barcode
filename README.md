Construção de código de barras com o componente Zend\Barcode
============================================================

Introdução
----------

Este é o repositório do [tutorial](http://www.diegobrocanelli.com.br/uncategorized/codigos-de-barra-com-zend-framework-2/) para demonstrar o a facilidade em implementar um código de barras utilizando o componente [Zend\Barcode](http://framework.zend.com/manual/current/en/modules/zend.barcode.creation.html).

Instalação
----------

Antes de acessar o projeto deve ser instalado o ZF2.

No diretório raiz do seu projeto utilize o comando:

    composer install

Caso o composer não esteja instalado globalmente em seu SO. Deve ser utilizado o seguinte comando:

    php composer.phar install

Web Server Setup
----------------

### PHP CLI Server

Para acessar o projeto é bem simples, basta rodar o comando abaixo na raiz do seu projeto.

    php -S localhost:8080 -t public/ public/index.php