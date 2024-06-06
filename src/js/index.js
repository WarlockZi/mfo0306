import Dnd from "./util/dnd.js";
import FormValidator from "./util/formValidator.js";
import post from "./util/post.js";
import objAndFiles2FormData from "./util/obj2data.js";
import timer from "./util/timer.js";

window.addEventListener('DOMContentLoaded', () => {
   debugger
   timer()
   const dnd = new Dnd(dragdrop, dragNdrop);
   const validator = new FormValidator();
   if (button) {
      button.addEventListener('click', async function () {
         const err = validator.validateFields(form)
         if (err.length) {
            errors.innerText = ''
            err.map((error) => {
               errors.style.display = 'block'
               errors.innerHTML = errors.innerHTML + error
            })
         } else {
            errors.style.display = 'none'
            const src = document.querySelector('.img').src.split('/')
            const img = src[src.length-1]
            const obj = {
               name:mfo.value,
               url:url.value,
               img:img,
            }
            const res = await post('add_offer/addMfo', obj)
            if (!res.error) {
               window.location.href = "/"
            }
         }

      })
   }

   async function dragNdrop(files) {
      const file = files[0]
      const img = document.querySelector('.img')
      const err = validator.validateImg(file)
      if (err.length) {
         errors.innerText = ''
         err.map((error) => {
            errors.style.display = 'block'
            errors.innerHTML = errors.innerHTML + error
         })
      } else {
         errors.style.display = 'none'
         const obj = 1
         const data = objAndFiles2FormData(obj, file)
         const res = await post('add_offer/save', data)
         if (!res.error) {
            img.src = '/src/img/' + res
         } else {
            errors.innerText = ''
            errors.innerText = res.error
         }

      }
   }

})