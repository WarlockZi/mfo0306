export default function objAndFiles2FormData(obj, files, formData = new FormData) {

   self.formData = formData;
   if (typeof (files) === 'FileList') {
      for (let i = 0; i < files.length; i++) {
         self.formData.append(i, files[i])
      }
   } else {
      self.formData.append('file', files)
   }
   self.createFormData = function (obj, subKeyStr = '') {

      for (let i in obj) {
         let value = obj[i];
         let subKeyStrTrans = subKeyStr ? subKeyStr + '[' + i + ']' : i;

         if (typeof (value) === 'string' || typeof (value) === 'number') {
            self.formData.append(subKeyStrTrans, value);
         } else if (typeof (value) === 'object') {
            self.createFormData(value, subKeyStrTrans);
         }
      }
   };
   self.createFormData(obj);
   return self.formData;
}