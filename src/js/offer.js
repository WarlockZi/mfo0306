import post from "./util/post.js";

export default class Offer {
   constructor() {
      const dels = document.querySelectorAll('[data-id]');
      [...dels].map(el => el.addEventListener('click', this.handleClick))
   }

   async handleClick({target}) {
      const id = target.dataset.id;
      const res = await post('/offers/remove', {id})
      if (res?.success){
         const row = target.closest('.row')
         row.remove()
      }
   }
}
new Offer()