## Mehmet TÜZÜNER(150201228)
# Adres Defteri Modulu (Yii2 address book module)

Portal tabanlÄ± Adres Defteri ve Arama Kaydi tutabilen Yii2 moduludur.

This module is Portal based Yii2 module can address book and is a module that can keep your last call records.


## Kurulum (Installation)

Modul kurulumu icin Oncellikle [Portal Repository](https://github.com/150201228/portal) reposundaki kurulum talimatlarini takip etmelisiniz.

For module installation, you must first follow the installation instructions in the [Portal Repository] (https://github.com/150201228/portal) repo.

Modulu aktif etmek ve tanimlamak icin asagidaki konumda bulunan dosyalar? alttaki sekilde editlemelisiniz:

To activate and define the module, you must edit the files in the following location as follows:
```php
/var/www/portal/console/backend/main.php
/var/www/portal/console/frontend/main.php
```

```php

'modules' => [
...

'arcanteus' => [
'class' => '150201228\arcanteus\Module',
],

...
],
```

Sonrasinda yazili olan migrationlari asagidaki komut ile /portal dizininde migrate etmeniz gerekmektedir:
You must migrate the migrations written in the / portal directory with the following command:

```bash
php yii migrate --migrationPath=@vendor/150201228/portal-arcanteus/migrations
```


## Ekran Goruntuleri (ScreenShots)

![Alt text](https://i.hizliresim.com/ZftHi6.png)
![Alt text](https://i.hizliresim.com/qjPLPY.png)
![Alt text](https://i.hizliresim.com/IlM3o3.png)
![Alt text](https://i.hizliresim.com/dLyLbZ.png)
![Alt text](https://i.hizliresim.com/PA0xBc.png)



## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
