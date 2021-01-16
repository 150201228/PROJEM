## Mehmet T�Z�NER(150201228)
# Adres Defteri Modülü (Yii2 address book module)

Portal tabanlı Adres Defteri ve Arama Kaydı tutabilen Yii2 modülüdür.

This module is Portal based Yii2 module can address book and is a module that can keep your last call records.


## Kurulum (Installation)

Modül kurulumu için öncellikle [Portal Repository](https://github.com/150201228/portal) reposundaki kurulum talimatlarını takip etmelisiniz.

For module installation, you must first follow the installation instructions in the [Portal Repository] (https://github.com/150201228/portal) repo.

Modülü aktif etmek ve tanımlamak için aşağıdaki konumda bulunan dosyaları alttaki şekilde editlemelisiniz:

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

Sonrasında yazılı olan migrationları aşağıdaki komut ile /portal dizininde migrate etmeniz gerekmektedir:
You must migrate the migrations written in the / portal directory with the following command:

```bash
php yii migrate --migrationPath=@vendor/150201228/portal-arcanteus/migrations
```


## Ekran Görüntüleri (ScreenShots)

![Alt text](https://i.hizliresim.com/00M0DD.png)
![Alt text](https://i.hizliresim.com/JVoV2q.png)
![Alt text](https://i.hizliresim.com/4pBpl0.png)
![Alt text](https://i.hizliresim.com/dLyLbZ.png)
![Alt text](https://i.hizliresim.com/5N5NVM.png)



## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
