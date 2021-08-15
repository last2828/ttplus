$(function() {
  ymaps.ready(init);
});

function init() {
  let mapPoint;
  let zoom = 14;

  if ($(window).width() < 768) {
    mapPoint = ' <div style="position: relative; width: 168px; height: 41px; border-radius: 2px; background-color: #2468eb; display: flex; justify-content: center; align-items: center; z-index: 1;"> <div style="display: block; position: absolute;  width: 14px;  height: 14px;  transform: rotate(45deg); bottom: -6px; left: 50px; background-color: #2468eb; z-index: -2;"></div><p style="font-family: Helvetica; font-size: 8px; font-weight: bold; line-height: normal; letter-spacing: 0.33px; color: white;"> $[properties.iconContent]</p></div>';
  } else {
    if ($(window).width() < 1920) {
      if ($(window).width() < 1680) {
        mapPoint = ' <div style="position: relative; width: 210px; height: 51px; border-radius: 2px; background-color: #2468eb; display: flex; justify-content: center; align-items: center; z-index: 1;"> <div style="display: block; position: absolute;  width: 20px;  height: 20px;  transform: rotate(45deg); bottom: -10px; left: 50px; background-color: #2468eb; z-index: -2;"></div><p style="font-family: Helvetica; font-size: 10px; font-weight: bold; line-height: normal; letter-spacing: 0.42px; color: white;"> $[properties.iconContent]</p></div>';
      } else {
        mapPoint = ' <div style="position: relative; width: 260px; height: 65px; border-radius: 2.5px; background-color: #2468eb; display: flex; justify-content: center; align-items: center; z-index: 1;"> <div style="display: block; position: absolute;  width: 20px;  height: 20px;  transform: rotate(45deg); bottom: -10px; left: 60px; background-color: #2468eb; z-index: -2;"></div><p style="font-family: Helvetica; font-size: 12px; font-weight: bold; line-height: normal; letter-spacing: 0.5px; color: white;"> $[properties.iconContent]</p></div>';
        zoom = 15;
      }
    } else {
      mapPoint = ' <div style="position: relative; width: 300px; height: 80px; border-radius: 2px; background-color: #2468eb; display: flex; justify-content: center; align-items: center; z-index: 1;"> <div style="display: block; position: absolute;  width: 20px;  height: 20px;  transform: rotate(45deg); bottom: -10px; left: 80px; background-color: #2468eb; z-index: -2;"></div><p style="font-family: Helvetica; font-size: 14px; font-weight: bold; line-height: normal; letter-spacing: 0.42px; color: white;"> $[properties.iconContent]</p></div>';
      zoom = 15;
    }
  }



  let myMap = new ymaps.Map('map', {
      center: [59.963937, 30.289414],
      zoom: zoom
    }, {
      searchControlProvider: 'yandex#search'
    }),

    // Создаём макет содержимого.
    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
      mapPoint
    ),

    myPlacemarkWithContent = new ymaps.Placemark([59.963937, 30.289414], {
      hintContent: '',
      balloonContent: '',
      iconContent: 'ООО «Техника и Технология"'
    }, {
      // Опции.
      // Необходимо указать данный тип макета.
      iconLayout: 'default#imageWithContent',
      // Своё изображение иконки метки.
      iconImageHref: '',
      // Размеры метки.
      iconImageSize: [210, 50],
      // Смещение левого верхнего угла иконки относительно
      // её "ножки" (точки привязки).
      iconImageOffset: [-80, -80],
      // Смещение слоя с содержимым относительно слоя с картинкой.
      iconContentOffset: [15, 15],
      // Макет содержимого.
      iconContentLayout: MyIconContentLayout
    });

  myMap.geoObjects
    .add(myPlacemarkWithContent);
}
