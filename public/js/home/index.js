
var app = new Vue({
  el: '#gallery_vue',
  data: {
    message: 'Hello Vue!'
  },
  mounted(){
    Dropzone.options.myDropzone = {
      maxFilesize:1 ,
      init: function() {
        this.on("uploadprogress", function(file, progress) {
          let payload = file;

          // axios({
          //   method: 'post',
          //   url: '/fileupload',
          //   data: {
          //     file: file,
          //   }
          // }).then((response) => {
          //
          // }).catch((error) => {
          //   console.log(error);
          // });
          axios.post('/fileupload', payload)
           .then(function(response){
           console.log('saved successfully')
         });
        //   console.log("File progress", progress);
        });
        this.on("error", function(file, response) {
    // do stuff here.
            console.log(response);

      });
      }
    }
  }

});
