

$(document).ready(
    function(){
                                $("#tp").change(
                                    function(){
                                        var iddiachi = $(this).find(':selected').data("data");
                                    
                                        $.ajax({

                                            //gửi dữ liệu đi
                                            url : 'layquanhuyen.php',
                                            type:'POST',
                                            data:{ id : iddiachi},
                                            //nhận dữ liệu về 
                                            success:function(nhanve){
                                                $("#qh").empty();
                                                $("#qh").append(nhanve);
                                            }
                                        }
                                        );

                                    }
                                );

                                $("#qh").change(
                                    function(){
                                        var iddiachi = $(this).find(':selected').data("data2");
                                    
                                        $.ajax({

                                            //gửi dữ liệu đi
                                            url : 'layphuongxa.php',
                                            type:'POST',
                                            data:{ id : iddiachi},
                                            //nhận dữ liệu về 
                                            success:function(nhanve){
                                                $("#px").empty();
                                                $("#px").append(nhanve);
                                            }
                                        }
                                        );

                                    }
                                );

            
                                $("#tp2").change(
                                    function(){
                                        var iddiachi = $(this).find(':selected').data("data3");
                                    
                                        $.ajax({
            
                                            //gửi dữ liệu đi
                                            url : 'layquanhuyen2.php',
                                            type:'POST',
                                            data:{ id : iddiachi},
                                            //nhận dữ liệu về 
                                            success:function(nhanve){
                                                $("#qh2").empty();
                                                $("#qh2").append(nhanve);
                                            }
                                        }
                                        );
            
                                    }
                                );
            
                                $("#qh2").change(
                                    function(){
                                        var iddiachi = $(this).find(':selected').data("data4");
                                    
                                        $.ajax({
            
                                            //gửi dữ liệu đi
                                            url : 'layphuongxa2.php',
                                            type:'POST',
                                            data:{ id : iddiachi},
                                            //nhận dữ liệu về 
                                            success:function(nhanve){
                                                $("#px2").empty();
                                                $("#px2").append(nhanve);
                                            }
                                        }
                                        );
            
                                    }
                                );

                                $("#chonbieudo").change(function(){
                                    var bieudo = $(this).val();

                                    // var bd = document.getElementById("bieudo");
                                    $("#bieudo").empty();
                                    var a= "<h2>Phổ Điểm Môm "+bieudo+"</h2><img  src=http://localhost/web/controllers/"+bieudo+".php alt=''>"
                                    $("#bieudo").append(a);


                                    console.log(bieudo);
                                   
                                  

                                })
    }
);
// $(document).ready(function(){
//     $("#sel_depart").change(function(){
//     var deptid = $(this).val();
//     $.ajax({
//     url: 'getUsers.php',
//     type: 'post',
//     data: {depart:deptid},
//     dataType: 'json',
//     success:function(response){
//     var len = response.length;
//     $("#sel_user").empty();
//     for( var i = 0; i<len; i++){
//     var id = response[i]['id'];
//     var name = response[i]['name'];
//     $("#sel_user").append("<option value='"+id+"'>"+name+"

//     </option>");
//     }
//     }
//     });
//     });
//     });






