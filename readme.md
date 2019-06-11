## Laravel Slug

### depends

- [fx/translaion](https://github.com/nfangxu/package-fx-translaion)

### Installation

- `composer require fx/laravel-slug`

### Usage

- example:

```php
// routes/web.php
use Fx\Slug\Contacts\FxSlug;

Route::get('/', function (FxSlug $slug) {
    dd($slug->slug('我爱我的祖国')); // i-love-my-country
});
```
