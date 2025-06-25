# Guia: Como começar a desenvolver com Laravel

## Instalação do Laravel

## Pré-requisitos

Antes de instalar o Laravel, certifique-se que sua máquina possua **[PHP](https://www.php.net/downloads.php)**, **[Composer](https://getcomposer.org/download/)**, [**Node.js**](https://nodejs.org/en/download) ou [**Bun**](https://bun.sh/docs/installation), pois estes softwares possibilitarão que o Laravel use as tecnologias de PHP e Javascript.

Caso eles não estejam instalados em sua máquina, você pode instalá-los clicando nos hiperlinks acima.

#### Instalção do Composer e PHP:
Logo em seguida, execute o seguinte comando em seu terminal:

    Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))

***Em sistemas Windows,** certifique-se de executar o comando no **Windows Powershell em** **modo administrador** ou pode não funcionar.*
*****
## Instalação
Com tudo pronto, **ative o Apache e SQL no xamp**, acesse a **pasta *htdocs*** e abra o terminal dentro dela. Execute o seguinte comando para que o **Laravel Installer** seja instalado em sua máquina:
```
composer global require laravel/installer
```
Após a execução do comando, o Laravel será baixado e instalado em sua máquina. Você poderá configurar seu framework de teste, de banco de dados e starter kit conforme suas preferências.
*****
## Criação de uma aplicação
Ainda no terminal, execute o seguinte comando para criar um novo projeto:
```
laravel new example-app
```
*"example app"* será o nome do seu projeto, logo, certifique-se de trocar o nome antes de executar o comando.
*******
## Acessando o servidor Laravel para desenvolvedores
Agora que seu aplicativo foi criado e está pronto para ser desenvolvido, será possível acessar o servidor local para desenvolvedores executando os seguintes comandos abaixo **individualmente**:
```
cd example-app
npm install && npm run build
composer run dev
```
Assim que tiver os executado, o servidor de desenvolvimento será iniciado. O aplicativo poderá ser acessado em seu navegador pelo endereço [http://localhost:8000](http://localhost:8000/), fornecido no próprio terminal. 
Para acessá-lo rapidamente, pressione a tecla *Ctrl* enquanto clica sobre o endereço mostrado no terminal com o seu cursor.
*******
## Impedimento de acesso ao servidor de desenvolvimento

Porém, em casos de tentar desenvolver um projeto Laravel baixado de um repositório exterior à sua máquina, a conexão ao servidor de desenvolvimento pode ser impedida.

Se está passando por este problema, **abra seu terminal na pasta de repositório em que seu projeto Laravel esteja**, além de **abri-lo no Vs.code, ou na IDE** em que esteja desenvolvendo o projeto, para que possa editar alguns arquivos necessários.

**Após se preparar, siga os 6 seguintes passos abaixo:**

### 1 º passo
Caso seu projeto utilize PHP, no seu terminal, execute o comando abaixo para baixar as dependências dele, que estarão presentes dentro da pasta *Vendor*:
````
composer install
````
### 2º passo
Caso o projeto utilizar Javascript, execute o seguinte comando para instalar as depedências dele:

    npm install

### 3 passo

Após executar os comandos anteriores, se o seu projeto possui *Webpack* ou *Vite,* também é necessário utilizar o seguinte comando:

    npm run build

### 4º passo

Após isso, será criado na **pasta *Vendor*** um arquivo chamado "**.env.example**". Clone esse arquivo na mesma pasta, porém a renomeie como apenas "**.env**".

### 5º passo
Se mesmo assim o problema não tenha sido resolvido, significa que **você necessita de uma chave encriptada** para acessar o projeto. 
Felizmente, é possível gerar essa chave com o seguinte comando:

    php artisan key:generate

*Após o comando ser executado, sua chave será automaticamente utilizada.*  

### 6º passo
Por fim, será necessário que as migrations do projeto sejam executadas para que um banco de dados seja criado, o que possibilitará enfim o seu acesso. 
Para tal, execute o comando abaixo:

    php artisan migrate

Após isso, execute novamente o comando:

    composer run dev

Pressione *Ctrl* enquanto clica no endereço [http://localhost:8000](http://localhost:8000/) e você deverá conseguir acessar o servidor de desenvolvimento normalmente.

Agora você poderá finalmente criar e testar seu aplicativo Laravel enquanto o desenvolve!
****
Ficamos por aqui com nosso guia, pois agora você sabe como instalar, criar e testar uma aplicação utilizando o framework Laravel.
*Boa sorte em seu desenvolvimentos! ♡*
