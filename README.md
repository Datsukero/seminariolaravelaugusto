# seminariolaravelaugusto
Estudo do Framework Laravel para o seminário do Prof. Augusto 

## Configurações Iniciais
Instalação dos pacotes base para funcionamento do Laravel
O Laravel utiliza o ambiente Homestead sendo alguma VM sendo
* VirtualBox
* VMWare
* Parallels
* Hyper-v 

## Instalação da VM para uso do Laravel
Após ter instalado alguma VM utilize no terminal
```
vagrant box add laravel/homestead
````
para instalar o Homestead.

# Comandos para Instalar o Laravel pelo Composer
Download do Instalador Laravel pelo Composer
```
composer global require "laravel/installer"
```
após a instalação do o comando
```
laravel new
```
você poderá usar para criar novos projetos sendo o 
```
laravel new blog
```
ira ser criado um diretorio /blog e instalado o Laravel nele.
Criando projeto pelo Composer digite
```
composer create-project --prefer-dist laravel/laravel blog
```
Com o PHP instaladado e dentro do diretório do seu projeto 
```
php artisan serve
```
irá carregar o Servidor Local para desenvolvimento
[http://localhost:8000/]http://localhost:8000/
