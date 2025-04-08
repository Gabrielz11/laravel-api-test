# 🧪 Laravel API Test

Projeto simples de API com Laravel, criado para testes com **Model personalizado**, **Factory**, **Seeder** e **migrations**. Ideal para quem está aprendendo ou precisa de uma base para testes rápidos com Laravel.

---

## 📦 Tecnologias Utilizadas

- PHP ^8.1
- Laravel ^10 ou ^11
- MySQL
- Eloquent ORM
- Laravel Factories & Seeders
- API RESTful

---

## 📁 Estrutura do Projeto

```
├── app/
│   └── Models/
│       └── UserTest.php
│
├── database/
│   ├── factories/
│   │   └── UserTestFactory.php
│   ├── seeders/
│   │   └── UserTestSeeder.php
│   └── migrations/
│       └── xxxx_xx_xx_create_user_tests_table.php
│
├── routes/
│   └── api.php
```

---

## 🚀 Como Rodar o Projeto

### 1. Clone o repositório

```bash
git clone https://github.com/Gabrielz11/laravel-api-test.git
cd laravel-api-test
```

### 2. Instale as dependências

```bash
composer install
```

### 3. Configure o ambiente

Copie o `.env` de exemplo:

```bash
cp .env.example .env
```

Edite as informações de banco de dados no arquivo `.env`:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3307
DB_DATABASE=laravel_test
DB_USERNAME=root
DB_PASSWORD=secret
```
### 4. Configurar docker (MySQL)
Para facilitar o uso de banco de dados em ambiente local, você pode usar o docker-compose.yml.
Lembre-se de visualizar a utilização da porta do host e do servidor docker.
a que eu utilizei foi a 3307 devido a outra ja ter algo nela rodando.
rode
```bash
docker compose up -d
```
### 5. Gere a chave da aplicação

```bash
php artisan key:generate
```

---
### 6. Gere as migrações e seeders

```bash
php artisan migrate:fresh --seed
```

---
## 🧬 Migrar e Popular o Banco de Dados

Execute o comando abaixo para recriar o banco de dados e popular com dados fictícios:

```bash
php artisan migrate:fresh --seed
```

---

## 🔗 Endpoints de Exemplo

Você pode adicionar rotas no arquivo `routes/api.php`. Exemplo:

```php
use App\Models\UserTest;

Route::get('/users', function () {
    return UserTest::all();
});
```

---

## 🧱 Exemplo de Model

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTest extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];
}
```

---

## 🧪 Exemplo de Factory

```php
namespace Database\Factories;

use App\Models\UserTest;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserTestFactory extends Factory
{
    protected $model = UserTest::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
```

---

## 🌱 Exemplo de Seeder

```php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserTest;

class UserTestSeeder extends Seeder
{
    public function run(): void
    {
        UserTest::truncate();
        UserTest::factory()->count(10)->create();
    }
}
```

---

## 📮 Contato

Desenvolvido por **Gabriel Aires**  
📧 Email: gvaires@gmail.com  
💼 LinkedIn: [https://linkedin.com/in/gabrielvazaires](https://linkedin.com/in/gabrielvazaires)

---

> Este projeto foi criado com fins educacionais e pode servir como base para prototipagem e aprendizado rápido com Laravel.
