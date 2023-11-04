# IntegraSEI

Remodelação do sistema para realização de integrações do SEI com outros sistemas da UFRJ

## Tecnologias

* PHP: 8.2 com as seguintes extensões
  * `pdo_mysql`
  * `exif`
  * `pcntl`
  * `bcmath`
  * `gd`
  * `dom`
  * `xml`
* Composer: 2.5.4
* Laravel: 10.25.2
* Materialize CSS: 1.0.0
* Vue.js
* MySQL

## Configuração em ambiente de **Desenvolvimento**

  * Clonar o projeto:
```
$ git clone https://git.ufrj.br/sei/novointegrasei.git
$ git checkout DEV
```

  * Criar o arquivo de definição e setar as variáveis do sistema, o arquivo .env (o arquivo .env.example possui as variáveis e pode ser copiado):
```
$ cp .env.example .env
```
  * Instalar o projeto localmente com o composer para que seja possível iniciar a aplicação dentro do container. Na raiz do projeto rodar o seguinte comando para criar a pasta ./vendor:
```
$ composer install
```

  * Fazer a construção da imagem:
```
$ docker build -t novointegrasei/app -f .docker/app.dockerfile .
```

  * Adicionar o apontamento `0.0.0.0 localhost` no seu arquivos `/etc/hosts`

  * Realizar o _deploy_ da stack
```
# executar na raíz do projeto
$ docker stack deploy -c .docker/stack-local.yaml novointegrasei
```

  * Acessar o container da aplicação e configurar base:
```
$ docker exec -it NOME_CONTAINER_APP sh
$ php artisan migrate --seed --force
```

### Variáveis principais do arquivo [.env]

| Variável | Responsabilidade | Valor |
| ------ | :------ | :------ |
| `APP_ENV` | Ambiente do back-ending. | `local`, `homolog` ou `production` **[ Nos servidores deve ser `production` (só colocar `homolog` se precisar depurar) ]**. |
| `APP_DEBUG` | Indica se está em modo debug ou não. | `true` ou `false` **[ Nos servidores deve ser `false` (só colocar `true` se precisar depurar) ]**. |
| `APP_URL` | Endereço eletrônico pela qual a aplicação irá responder. | `http://0.0.0.0` **[ No servidor de homologação, `https://integrasei.hom.tic.ufrj.br` ]**.  |
| `DB_HOST` | Endereço do banco de dados. | `bd` em desenvolvimento, e o IP nos demais ambientes. |
| `DB_DATABASE` | Nome da base. | Solicitar à equipe de banco. |
| `DB_USERNAME` | Usuário da base. | Solicitar à equipe de banco. |
| `DB_PASSWORD` | Senha da base. | Secreto, solicitar à equipe de banco. |
| `MAIL_PASSWORD` | Senha do email do sistema. | Secreto, solicitar à DSTI. |
| `CAS_HOST` | Endereço de host do CAS. | **[ Em produção, `cas.ufrj.br`; nos demais ambientes, `cas.tic.hom.ufrj.br`. ]** |
| `CAS_PROXY` | Indica se o CAS usa proxy. | **[ Nos servidores, `true`; em desenvolvimento deve ser vazio. ]** |

## Observações

* Para gerar o `.env`, usar o `env.example` e trocar as variáveis acima conforme os valores a serem usados.

* É necessário solicitar permissão de acesso ao CAS para o domínio utilizado pela aplicação em produção.

* Projeto utilizando testes de Features. Ao realizar uma modificação, executar testes para verificar se não houve quebra do sistema. 
```shell
php artisan test
```
