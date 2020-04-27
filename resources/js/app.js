import grapesjs from 'grapesjs';

//Инициализация редактора
const editor = grapesjs.init({
  // Indicate where to init the editor. You can also pass an HTMLElement
  container: '#gjs',
  i18n: {
    locale: 'ru',
  },
  fromElement: true,
  // Size of the editor
  height: '500px',
  width: 'auto',
  // Disable the storage manager for the moment
  storageManager: false,
  // Avoid any default panel
  // panels: { defaults: [] },
  assetManager: {
    // Upload endpoint, set `false` to disable upload, default `false`
    upload: 'http://ttplus.local:8888/photos/upload',
    params: {
      '_token': $('meta[name=csrf]').attr("content")
    },
    // The name used in POST to pass uploaded files, default: `'files'`
    uploadName: 'file',
    multiUpload: false,
  },
  style: `.gjs-dashed img{
      width: 100%
  }
  .gjs-dashed .row, .gjs-dashed .row-2{
		display: flex;
		flex-wrap: wrap;
		padding: 10px;
		border: 2px solid;
		justify-content: space-between;
	}
	.gjs-dashed * {
		padding: 10px;
	}
	.gjs-dashed li{
		display: flex;
		align-items: center;
	}
	.gjs-dashed .dot{
		width: 10px;
		height: 10px;
		border-radius: 50%;
		background: blue;
	}
  `,
});
//Обьявление переменной AssetsManager
const am = editor.AssetManager;
//Добавление всех фото в assets
fetch('http://ttplus.local:8888/photos').then(response => response.json()).then(json => {
  json.forEach(el => {
    am.add(el)
  });
})
//Добавление в assets загруженой фото
editor.on('asset:upload:response', (response) => {
  am.add(response)
});
//Удаление фото
editor.on('asset:remove', (el) => {
  let path = el.id.split('uploads');
  console.log(path);
  fetch(`http://ttplus.local:8888/photos/delete${path[1]}`).then(response => response.json()).then(json => {
    console.log(json);
  })
});

//Блоки
var blockManager = editor.BlockManager;
blockManager.add('the-row-block', {
  label: 'Ряд',
  content: '<div class="row"></div>'
});
blockManager.add('heading-1', {
  label: 'Заголовок',
  content: '<h2>Заголовок</h2>'
});
blockManager.add('text', {
  label: 'Текст',
  content: '<p>Простой текст</p>'
});
blockManager.add('img', {
  label: 'Изображение',
  content: '<div class="about__image"><img></div>'
});
blockManager.add('list', {
  label: 'Список',
  content: '<ul><li><div class="dot"></div><p>Тут текст</p></li></ul>'
});
blockManager.add('quote', {
  label: 'Цитата',
  content: '<div class="about__quote"><div class="quotes"></div><p>Тут Текст</p></div>'
});
blockManager.add('block', {
  label: 'Блок',
  content: '<div class="about__block"><h4>Тут заголовок</h4><p>Тут текст</p></div>'
});
blockManager.add('years', {
  label: 'Года',
  content: '<div class="about__year"><div class="year">Тут заголовок</div><p>Тут текст</p></div>'
});
blockManager.add('row-2', {
  label: 'Ряд для блоков',
  content: '<div class="row-2"></div>'
});



$(".html_form").submit(function() {
  $('.html').val(editor.getHtml());
  $('.css').val(editor.getCss());
  return true;
});








//Переводим строки
const traitInputAttr = { placeholder: 'ex. Votre texte ici' };
editor.I18n.addMessages({
  ru: {
    assetManager: {
      addButton: 'Добавить',
      inputPlh: 'http://chemin/vers/image.jpg',
      modalTitle: 'Загрузка изображений',
      uploadTitle: 'Нажмите или перетащите изображению в эту область'
    },
    // Here just as a reference, GrapesJS core doesn't contain any block,
    // so this should be omitted from other local files
    blockManager: {
      labels: {
        // 'block-id': 'Block Label',
      },
      categories: {
        // 'category-id': 'Kategorie Label',
      }
    },
    domComponents: {
      names: {
        // '': 'Блок',
        wrapper: 'Body',
        text: 'Текст',
        comment: 'Комментарий',
        image: 'Изображение',
        video: 'Видео',
        label: 'Label',
        link: 'Ссылка',
        map: 'Карта',
        tfoot: 'TFoot',
        tbody: 'TBody',
        thead: 'THEad',
        table: 'Table',
        row: 'Row',
        cell: 'Cell'
      }
    },
    deviceManager: {
      device: 'Адаптив',
      devices: {
        desktop: 'ПК',
        tablet: 'Планшет',
        mobileLandscape: 'Мобильная горизонт',
        mobilePortrait: 'Мобильная вертикаль'
      }
    },
    panels: {
      buttons: {
        titles: {
          preview: 'Предпросмотр',
          fullscreen: 'На весь экран',
          'sw-visibility': 'Komponente anzeigen',
          'export-template': 'Code anzeigen',
          'open-sm': 'Stil Manager öffnen',
          'open-tm': 'Parameter',
          'open-layers': 'Layer Manager öffnen',
          'open-blocks': 'Block öffnen'
        }
      }
    },
    selectorManager: {
      label: 'Классы',
      selected: 'Выбрано',
      emptyState: '- Событие -',
      states: {
        hover: 'Наведение',
        active: 'Клик',
        'nth-of-type(2n)': 'Четный/Нечетный'
      }
    },
    styleManager: {
      empty: "Выбирите элемент слева, чтобы начать редактирование стилей",
      layer: 'Слой',
      fileButton: 'Bilder',
      sectors: {
        general: 'Позиционирование',
        layout: 'Отспупы',
        typography: 'Типографика',
        decorations: 'Обводка',
        extra: 'Екстра',
        flex: 'Flex',
        dimension: 'Dimension'
      },
      // The core library generates the name by their `property` name
      properties: {
        float: 'Выравнивание',
        display: 'Display',
        position: 'Position',
        top: 'Top',
        right: 'Right',
        left: 'Left',
        bottom: 'Bottom',
        width: 'Ширина',
        height: 'Высота',
        // 'max-width': 'Breite max.',
        // 'max-height': 'Höhe max.',
        // margin: 'Äußerer Abstand',
        // 'margin-top': 'Äußerer Abstand oben',
        // 'margin-right': 'Äußerer Abstand rechts',
        // 'margin-left': 'Äußerer Abstand links',
        // 'margin-bottom': 'Äußerer Abstand unten',
        // padding: 'Innerer Abstand',
        // 'padding-top': 'Innerer Abstand oben',
        // 'padding-left': 'Innerer Abstand links',
        // 'padding-right': 'Innerer Abstand rechts',
        // 'padding-bottom': 'Innerer Abstand unten',
        // 'font-family': 'Schrift Familie',
        // 'font-size': 'Schriftgröße',
        // 'font-weight': 'Schriftstärke',
        // 'letter-spacing': 'Buchstaben Abstand',
        // color: 'Schriftfarbe',
        // 'line-height': 'Linien Höhe',
        // 'text-align': 'Text Ausrichtung',
        // 'text-shadow': 'Text Schatten',
        // 'text-shadow-h': 'Text Schatten: horizontal',
        // 'text-shadow-v': 'Text Schatten: vertikal',
        // 'text-shadow-blur': 'Text Schatten: unschärfe',
        // 'text-shadow-color': 'Text Schatten: Farbe',
        // 'border-top-left': 'Rand oben links',
        // 'border-top-right': 'Rand oben rechts',
        // 'border-bottom-left': 'Rand unten links',
        // 'border-bottom-right': 'Rand unten rechts',
        // 'border-radius-top-left': 'Rand Radius oben links',
        // 'border-radius-top-right': 'Rand Radius oben rechts',
        // 'border-radius-bottom-left': 'Rand Radius unten links',
        // 'border-radius-bottom-right': 'Rand Radius unten rechts',
        // 'border-radius': 'Rand Radius',
        // border: 'Rand',
        // 'border-width': 'Rand Breite',
        // 'border-style': 'Rand Stil',
        // 'border-color': 'Rand Farbe',
        // 'box-shadow': 'Box Schatten',
        // 'box-shadow-h': 'Box Schatten: horizontal',
        // 'box-shadow-v': 'Box Schatten: vertikal',
        // 'box-shadow-blur': 'Box Schatten: Unschärfe',
        // 'box-shadow-spread': "Box Schatten: Streuung",
        // 'box-shadow-color': "Box Schatten: Farbe",
        // 'box-shadow-type': "Box Schatten: Typ",
        // background: 'Hintergrund',
        // 'background-image': 'Hintergrund Bild',
        // 'background-repeat': 'Hintergrund wiederholen',
        // 'background-position': 'Hintergrund Position',
        // 'background-attachment': 'Hintergrund Anhang',
        // 'background-size': 'Hintergrund Größe',
        // 'background-color': 'Hintergrund Farbe',
        // transition: 'Übergang',
        // 'transition-property': 'Übergang: Typ',
        // 'transition-duration': 'Übergang: Dauer',
        // 'transition-timing-function': 'Übergang: Zeitfunktion',
        // perspective: 'Perspektive',
        // transform: 'Transformation',
        // 'transform-rotate-x': 'Transformation: Rotation x',
        // 'transform-rotate-y': 'Transformation: Rotation y',
        // 'transform-rotate-z': 'Transformation: Rotation z',
        // 'transform-scale-x': 'Transformation: Skala x',
        // 'transform-scale-y': 'Transformation: Skala y',
        // 'transform-scale-z': 'Transformation: Skala z',
        // 'flex-direction': 'Ausrichtung Flex',
        // 'flex-wrap': 'Flex wrap',
        // 'justify-content': 'Content abgleichen',
        // 'align-items': 'Element Ausrichtung',
        // 'align-content': 'Contente Ausrichtung',
        // order: 'Reihenfolge',
        // 'flex-basis': 'Flex Basis',
        // 'flex-grow': 'Flex Wachsen',
        // 'flex-shrink': 'Flex Schrumpfen',
        // 'align-self': 'Ausrichtung selbst'
      }
    },
    traitManager: {
      empty: "Нажмите на элемент слева, чтобы увидеть настрйоки",
      label: 'Настройки',
      traits: {
        // The core library generates the name by their `name` property
        // labels: {
        //   id: 'ID',
        //   alt: 'Text Alternative',
        //   title: 'Title',
        //   href: 'Link'
        // },
        // In a simple trait, like text input, these are used on input attributes
        // attributes: {
        //   id: traitInputAttr,
        //   alt: traitInputAttr,
        //   title: traitInputAttr,
        //   href: {
        //     placeholder: 'z.B. https://google.com'
        //   }
        // },
        // In a trait like select, these are used to translate option names
        // options: {
        //   target: {
        //     false: 'Dieses Fenster',
        //     _blank: 'Neues Fenster'
        //   }
        // }
      }
    }
  }
});
//Убираем стиль с текста при вставке
var iframeBody = editor.Canvas.getBody();
$(iframeBody).on("paste", '[contenteditable="true"]', function(e) {
  e.preventDefault();
  var text = e.originalEvent.clipboardData.getData('text');
  console.log('text to past: ', text);
  e.target.ownerDocument.execCommand("insertText", false, text);
});