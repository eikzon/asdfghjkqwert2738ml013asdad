// $(document).ready(function() {
  function actionDelete()
  {
    console.log('sss');
    $.toast({
      heading: 'Delete Data Success',
      text: 'Your data has been deleted ...',
      position: 'top-right',
      loaderBg:'#ff6849',
      icon: 'error',
      hideAfter: 3000,
      stack: 6
    });
  }

  function actionUpdate()
  {
    $.toast({
      heading: 'Update Data Success',
      text: 'Your data has been updated ...',
      position: 'top-right',
      loaderBg:'#ff6849',
      icon: 'warning',
      hideAfter: 3500,
      stack: 6
    });
  }

  function actionCreate()
  {
    $.toast({
      heading: 'Add New Data Success',
      text: 'Your data has been add ...',
      position: 'top-right',
      loaderBg:'#ff6849',
      icon: 'success',
      hideAfter: 3500,
      stack: 6
    });
  }

     //  $(".tst4").click(function(){
     //       $.toast({
     //        heading: 'Welcome to my Elite admin',
     //        text: 'Use the predefined ones, or specify a custom position object.',
     //        position: 'top-right',
     //        loaderBg:'#ff6849',
     //        icon: 'error',
     //        hideAfter: 3500

     //      });

     // });


// });

