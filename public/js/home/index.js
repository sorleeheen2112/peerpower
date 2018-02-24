
var app = new Vue({
  el: '#gallery_vue',
  data: {
    user_id:user.user_id,
    user_name:user.user_name,
    images:[],
    sum_png:'',
    sum_jpg:'',
    c_png:'',
    c_jpg:'',
    c_sum:'',
    sum:'',
  },
  mounted(){
    axios.get('/getgallery/'+this.user_id).then((response) => {
      console.log(response.data);
      this.images = response.data.images;
      this.sum_png = response.data.sum_png;
      this.sum_jpg = response.data.sum_jpg;
      this.c_png = response.data.c_png;
      this.c_jpg = response.data.c_jpg;
      this.c_sum = response.data.c_sum;
      this.sum = response.data.sum;
    }).catch((error)=> {
      console.log(error);
    });

    Dropzone.options.myDropzone = {
      maxFilesize:10 ,
      init: function() {
        // this.on("uploadprogress", function(file, progress) {
        //   let payload = file;
        //   axios.post('/fileupload', payload)
        //    .then(function(response){
        //    console.log('saved successfully')
        //  });
        // //   console.log("File progress", progress);
        // });
        this.on("error", function(file, response) {
    // do stuff here.
            console.log(response);

      });
      }
    }
  }

});
