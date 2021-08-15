import Inputmask from 'inputmask';

// let acc = $('.btn-simple');
// let i;

// for (i = 0; i < acc.length; i++) {
//   acc[i].addEventListener('click', function(e) {
//     e.preventDefault();
//     /* Toggle between adding and removing the "active" class,
//          to highlight the button that controls the panel */
//     // this.classList.toggle('active');

//     /* Toggle between hiding and showing the active panel */
//     let panel = this.nextElementSibling;
//     if (panel.style.display === 'flex') {
//       panel.style.display = 'none';
//     } else {
//       panel.style.display = 'flex';
//     }
//   });
// }

// let singleParams = $('.btn-single-param__heading');
// let j;

// for (j = 0; j < singleParams.length; j++) {
//   singleParams[j].addEventListener('click', function(e) {
//     e.preventDefault();
//     /* Toggle between adding and removing the "active" class,
//          to highlight the button that controls the panel */
//     this.classList.toggle('is-active');

//     /* Toggle between hiding and showing the active panel */
//     let panel = this.nextElementSibling;
//     if (panel.style.display === 'flex') {
//       panel.style.display = 'none';
//     } else {
//       panel.style.display = 'flex';
//     }
//   });
// }


//inputmask
const im = new Inputmask('+9 (999) 999 - 99 - 99');
im.mask($('#tel'));
