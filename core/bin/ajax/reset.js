$("#BtnResetConfig").click(function(){$.ajax({method:"POST",url:"https://localhost:8888/qymera/directivo/post/reset/",data:{reset:!0},success:function(a){1==a?swal("Error","algo no anada bien","error"):2==a?location.href="https://localhost:8888/qymera/directivo/home/":console.error(a)}})});