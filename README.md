
# portal-ilanmodul

# Kurulum
İlan Modulu
Portal İlan modülünü, portal web uygulamasına eklemek için /portal dizininde bulunan composer.json dosyasına gidilerek, aşağıdaki kod parçaları repositories ve require kısımlarına eklenir. Portal dizininde composer update işlemi yapılarak modül yüklenir.


"repositories": [
    {
      
        {
            "type": "vcs",
            "url": "https://github.com/akmanege/portal-ilanmodul.git"
        }
],
"require": {
 
    "kouosl/portal-ilanmodul": "dev-develop"
},

Migrate işlemi için altta bulunan kod parçasının portal dizininde çalıştırılması gerekmektedir.

php yii migrate --migrationPath=@vendor/kouosl/portal-ilanmodul/migrations --interactive=0

# Uygulama

http://portal.kouosl/ilanmodul yazılarak modüller kısmına 
erişim sağlanır.
<img src = "images/image1.PNG" height="300">

İlan modülü şeçilerek modül incelenebilir. <br/>

<img src = "images/image2.PNG" height="300">

İlan oluştu butonuna basarak ilan oluşturabiliriz.

<img src = "images/image3.PNG" height="300">

Düzenleme ve silme işlemleri de gerçekleştirilebilir.
<img src = "images/image4.PNG" height="300">
