smh = new Array();

function them(a) {
    var x= a.substr(2,a.length-1);
    var msp = x-1;
     
    y=0;
    y++;
    sp= new Array(); 
    sp[0]= new Array("sp1","Đồng hồ",'sp1.jpg',"100000" );
    sp[1]= new Array("sp2","Loa",'sp2.jpg',"200000");
    sp[2]= new Array("sp3","Quần đùi",'sp3.jpg',"30000" );
    
    var gsp=null;

   
    $(".giohangfull").append(" <div class='col-md-12 giohang'> <div class='anh'> <img  class='img-fluid' src='"+sp[msp][2]+"' alt=''></div><div class='info'>  <h6 id='sp3'>"+sp[msp][1]+"</h6>  <p>Giá</p>  <p id='gsp3'>"+sp[msp][3]+"</p></div> <div class='soluong'><input  class='input-group  input-by-me-on-table' type='number' id ='sl"+y+"' name='sl' value='1' min='0' max='10'> </div> </div>  ");
    
   

   }

   function tongtien(){
            array.forEach(element => {
                
            });

   }