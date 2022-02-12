

$(document).ready(function(){

    // hide and show admin mmenu tab_index 
    $(".tab li").click(function(){
        const newLocal = ".welcome";
        $(newLocal).hide();
        $(".tab li").removeClass('admin_tab_active');
        $(this).addClass('admin_tab_active');
        var tab_index = $(this).index();
        $(".tabcontent").hide();
        $(".tabcontent").eq(tab_index).show();
        $(".welcome_admin_panel").hide();
    });//end  hide and show admin mmenu tab_index 

    // setup ajax header csrf token 
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr("content")
        }
    })//end setup ajax header csrf token 
    showproduct();


    // add product 
    $("#addProductForm").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:"addproduct",
            type: "post",
            data:new FormData(this),
            // dataType:"JSON",
            contentType:false,
            processData:false,
            success: function(responce){
                console.log(responce);
                // $("#hellow").html(responce);
                $("#admin_msg").html(responce);
                $("#admin_msg").show();
                setTimeout(function() {  $("#admin_msg").hide(); },10000);
                     showproduct();
            }

        })
    }); 
    // end add product 

    // show product 

    // wrap show product in function 
    function showproduct(){
        $.ajax({
            url:"adminShowProduct",
            type:"POST",
           dataType:"JSON",
           success:function(response){
                 $(".amdin_pro_list").html("");
                 output="";
                // console.log(response);
                $.each(response , function(key,value){
                    output = output +
                "<div class='pro_list_table_body d-flex'>"
                   + "<div class='column'>"+ value.name+"</div>"
                    +"<div class='column'>"+ value.brand+"</div>"
                    +"<div class='column'>"+ value.catagory+"</div>"
                    +"<div class='column'>"+ value.price+"</div>"
                    +"<div class='column'>"+ value.detail+"</div>"
                    +"<div class='column'><button class='admin_editProduct_btn' data-edit="+value.id+">Edit</button></div>"
                    +"<div class='column'><button class='admin_deleteProduct_btn' data-delete="+value.id+">Remove</button></div>"

                 +"</div> ";
            });// end each 
             $(".amdin_pro_list").append(output);
             deleteProduct();
            editProduct();
            updateproduct();

           }//end success
        });// end ajax
  }
    // end show product 

   
    // delete product 
    function deleteProduct(){
        $(".admin_deleteProduct_btn").click(function(e){
            // e.preventDefault();
            let id = $(this).attr("data-delete");
            $.ajax({
                url:"adminProductDelete",
                type:"POST",
                dataType:"JSON", 
                data:{id: id},
                success:function(response){
                    console.log(response);
                    $("#admin_msg").html(response);
                    $("#admin_msg").show();
                    setTimeout(function() {  $("#admin_msg").hide(); },10000);
                         showproduct();
                 

                }
                
            });//ajax
        });// deleteProduc btn
    }

    function editProduct(){
        $(".admin_editProduct_btn").click(function(){
            $(".edit_modal").show();
            let id = $(this).attr("data-edit");
            console.log(id);
            $.ajax({
                url:"editdata",
                type:"POST",
                dataType:"JSON",
                data:{id:id},
                success:function(response){
                    $(".edit_modal").html("");
                    output = "";
                  
                   output = output +
                   +" <div class='col-sm-10 offset-sm-2 modal_wrap'>"
                       +"<div id='edit_modal_close_btn'>X</div>"
                            +"<div class='admin_img_wrap'>"
                                +"<div class='img'>"
                                    +"<img src='http://localhost/shop/public/img/"+response.img+"'>"
                                +"</div>"
                             +"</div>"
                        +"<div class='edit_form'>"
                            +"<form id='adminUpdateProuctFrom'  enctype='multipart/form-data'>"
                      
                            + "<div class='adminEditPro_formbox'>"
                               + "<div class='adminEditPro_form'>"
                               +"    <div class='ad_txt_field'>"
                                       +" <label>Image</label>"
                                       +" <input type='file' name='img'> "
                                       +"</div>"
                                +"    <div class='ad_txt_field'>"
                                       +" <label>Product Name</label>"
                                       +" <input type='text' name='name' placeholder="+response.name+" > "
                                       +"</div>"
                                    +"<div class='ad_txt_field'>"
                                        +"<label>Brand</label>"
                                        +"<input type='text'  name='brand'  placeholder="+response.brand+" >"
                                    +"</div>"
                                    +"<div class='ad_txt_field'>"
                                        +"<label>Catagory</label>"
                                      + " <input type='text' name='catagory' placeholder="+response.catagory+" >"
                                   +" </div>"
                                    +"<div class='ad_txt_field'>"
                                    +" <label>price</label>"
                                    + "<input type='number' name='price' placeholder="+response.price+" >"
                                    +"</div>"
                                    +"</div>"
                                    +"<div class='ad_txt_detail'>"
                                    +"<div class='ad_txt_field'>"
                                    + "<label>Detail</label>"
                                    +" <textarea cols='40' rows='5' name='detail' placeholder="+response.detail+" ></textarea>"
                                    + "<input type='hidden' name='id' value="+response.id +" >"

                                    +"</div>"
                                   

                                    +"<div class='ad_txt_field'>"
                                    +"<button type='submit'>Update</button>"
                                    +"</div>"
                                    +"</div>"

                                    +"</div>"
                                    +"</form>"
                        +"</div>"
                    +"</div>";

                                    $(".edit_modal").append(output);
                                    $("#edit_modal_close_btn").click(function(){
                                        $(".edit_modal").hide();
                                          
                                        });
                                        updateproduct();
                }
                
            });//end ajax
        });//btn click

      
}

// admin update product  
function updateproduct(){
    $("#adminUpdateProuctFrom").submit(function(e){
        e.preventDefault();
        console.log("update form ");
        $.ajax({
            url:"update",
            type:"GET",
            // dataType:"JSON",
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(response){
                 console.log("data fetch " +response);
                //  let data =JSON.stringify(response);
                 console.log(data);
                 showproduct();
                 $(".edit_modal").hide();
            },
            error:function(err){
                console.log(err)
            }
        })// end ajax
    
    })// update prodct form  
} //update product 

});// ready function end