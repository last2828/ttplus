import grapesjs from 'grapesjs';
import 'grapesjs/dist/css/grapes.min.css';

const editor = grapesjs.init({
  // Indicate where to init the editor. You can also pass an HTMLElement
  container: '#gjs',
  // Get the content for the canvas directly from the element
  // As an alternative we could use: `components: '<h1>Hello World Component!</h1>'`,
  components: '<h1>Hello World Component!</h1>',
  fromElement: true,
  // Size of the editor
  height: '300px',
  width: 'auto',
  // Disable the storage manager for the moment
  storageManager: false,
  // Avoid any default panel
  // panels: { defaults: [] },
});

var blockManager = editor.BlockManager;
blockManager.add('container', {
  label: 'Container',
  content: '<div class="container"></div>',
});

blockManager.add('block', {
  label: 'Block',
  content: '<div class="block">Первый блок</div>',
});