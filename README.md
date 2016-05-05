# yii2-smooth-sort
Yii2, плавная сортировка

AssetBundle плагина [smooth-sort](https://github.com/jumper423/smooth-sort) / [Демо](http://smooth-sort.infoblog1.ru/demo/)

Особенности
------------
Главной задачей было добиться максимальной быстрой скорости сортировки и отрисовки, без лишних действий.
Данный плагин предназначен для узкого списка задач, по этому на супер функциональность в нём можете не рассчитывать.

Установка
------------
Предпочтительный способ установить это расширение через [composer](http://getcomposer.org/download/).

Либо запустить

```
php composer.phar require --prefer-dist jumper423/yii2-smooth-sort "*"
```

или добавить

```
"jumper423/yii2-smooth-sort": "*"
```

в файл `composer.json`.

Использование
------------
Простой пример использования:

```php
class AppAsset extends AssetBundle
{
    ...
    public $depends = [
        ...
        'jumper423\assets\SmoothSortAsset',
        ...
    ];
    ...
}

```