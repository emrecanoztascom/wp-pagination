# WordPress Pagination

WordPress temaları için sayfalama işlemini gerçekleştiren fonksiyonlar bütünü.

## Açıklama

WordPress temalarında; istenilen herhangi bir sayfada sayfalama işlemlerini yerine getiren fonksiyonlardır. Kullanımı kolay olmakla birlikte; etkili ve çözümleyicidir.

## Kurulum

Kullanmak istenilen tema dizininde; `wp-pagination.php` dosyası, `function.php` dosyasına
eklenmelidir. Daha sonra; kullanılmak istenen sayfada fonksiyon ismiyle çağırım yapılır.

```
include('wp-pagination.php');
```

## Kullanım

`wp-pagination.php` dosyası, `function.php` dosyasına eklendikten sonra; hangi sayfada
kullanılacaksa; istenilen fonksiyon çağrılır.

````
create_wp_pagination();
veya
create_wp_bootstrap_pagination();
```

> :bulb: Sayfalama işlemlerinde; 'Rewrite Rules' ayarları değiştirilmemişse, sayfalar
'page' şeklinde adres çubuğunda gösterilecektir. Bu sebepten dolayı; wp-rewrite-rules.php dosyasını da function.php dosyasına eklemelisiniz. Ekleme işleminden sonra: add_action('init', 'change_wp_rewrite_rules_for_pagination'); satırını da function.php dosyasına ekleyerek, adres çubuğunda 'page' yerine 'sayfa' şeklinde gösterim sağlayabilirsiniz.

## Destek

Herhangi bir konuda destek almak için aşağıdaki e-mail adresi ile ulaşabilirsiniz.

```
destek@wpkral.com
```