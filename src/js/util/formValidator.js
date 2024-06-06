export default class FormValidator {
   constructor(file) {
      this.file = file;
      this.acceptableSize = 30_000;
      this.acceptableExtensions = ['jpg', 'jpeg', 'png'];
   }
   validateImg(file) {
      const errors = []

      if (file.size > this.acceptableSize) {
         errors.push(`<p class="error">Размер изображения не должен превышать ${this.acceptableSize}\n Размер вашего изображения ${file.size}\n</p>`)
      }
      const ext = file.type.replace('image/','')

      if (!this.acceptableExtensions.includes(ext)){
         errors.push(`<p class="error">Тип изображения должен быть ${this.acceptableExtensions.toString()}\n Тип вашего изображения ${ext}\n</p>`)
      }
      return errors
   }
   validateFields(container){
      const img = container.querySelector('.img')
      const errors=[]
      if (!mfo.value) errors.push(`<p class="error">Заполните название</p>`)
      if (!url.value) errors.push(`<p class="error">Заполните URL</p>`)
      if (img.src.includes('no-image')) errors.push(`<p class="error">Заполните картинку</p>`)

      return errors
   }

}