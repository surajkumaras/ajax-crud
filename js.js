$(document).ready(function()
    {   
        $("#addStudent").click(function()
        {
            $("#staticBackdropLabel").html("Add Student");
            $("#upd").hide();
            $("#add").show();
            
            $("#name").val("");
            $("#cls").val("");
            $("#eml").val("");
        })
        //*********GET DATA OF STUDENTS**********//
        show();
        function show()
        {
            $.ajax({
                url:"GetDataAPI.php",
                type:"get",
                dataType:"json",
                success:function(data)
                {
                    console.log(data);
                    var dataBody = $('#dataBody');
                        var output = "";
                        console.log(data.length)
                        for(let i=0;i< data.length;i++)
                        {
                            output += "<tr><td>"+data[i].id+"</td><td><button class='btn btn-info w-50 btnID'  data-bs-toggle='modal' data-bs-target='#exampleModal' data-sid="+data[i].id+">"+data[i].name+"</button></td><td>"+data[i].class+"</td><td>"+data[i].email+"</td><td><button class='btn btn-warning btn-edt' data-toggle='modal' data-target='#EditModal' data-sid="+data[i].id+">Update </button><button class='btn btn-danger btn-del' data-sid="+data[i].id+">Delete</button>";
                        }

                        dataBody.html(output);
                },
                error:function(err)
                {
                    console.log("error:",err);
                }
            });
        }
        
        
        //*********** ADD STUDENTS DETAILS *****//
        
        $("#add").click(function()
        {
            
            let name = $("#name").val();
            let cls = $("#cls").val();
            let email = $("#eml").val();
            
            $.ajax({
                url:"AddDataAPI.php",
                type:"post",
                data:{name:name,cls:cls,email:email},
                dataType:'json',
                success:function(response){
                    console.log("Success",response);
                    $('#staticBackdrop').modal('hide');
                    swal("Good job!", "Data Add!", "success");
                    show();
                    
                },
                error:function(error)
                {
                    console.log("Failed",error)
                }
            });
        });
        
        //*********** DELETE STUDENT **********//
        
        $("tbody").on("click",".btn-del",function()
        {
            let id = $(this).attr("data-sid");
            console.log(id);
            mydata = {sid:id};
            mythis = this;
            $.ajax({
                url:"DeleteDataAPI.php",
                type:"post",
                data:mydata,
                success:function(data)
                {
                    console.log(data);
                    swal("Data delete!", "", "success");
                    show();
                },
                error:function(error)
                {
                    console.log(error);
                }
            })
        });
        
        //*********** EDIT STUDENT ************//
        
        $("tbody").on("click",".btn-edt",function()
           {
               $("#staticBackdropLabel").html("Edit Details");
               $("#add").hide();
                let id = $(this).attr("data-sid");
               console.log(id);
               mydata = {sid:id};
               
                
               $.ajax({
                   url:"EditDataAPI.php",
                   type:"post",
                   data:mydata,
                   success:function(data)
                   {
                       var responseData = JSON.parse(data);
                       console.log(data);
                       $("#staticBackdrop").modal('show');
                       $("#name").val(responseData[0].name);
                       $("#eml").val(responseData[0].email);
                       $("#cls").val(responseData[0].class);
                       $("#editid").val(responseData[0].id);
                       $("#upd").css("display","block");
                   },
                   error:function(error)
                   {
                       console.log(error)
                   }
                   
               });
               
           }); 
           
           //************ UPDATE STUDENT ***********//
           
           $("#upd").click(function(){
               
               let name = $("#name").val();
               let cls = $("#cls").val();
               let email = $("#eml").val();
               let sid = $("#editid").val();
               $.ajax({
                   url:"UpdateData.php",
                   type:"post",
                   data:{name:name,cls:cls,email:email,sid:sid},
                   dataType: "json",
                   success:function(response)
                   {
                       $('#staticBackdrop').modal('hide');
                        console.log(response);
                        swal("Good job!", "Data Updated!", "success");
                        show();
                        
                    },
                    error:function(err)
                    {
                        console.log(err);
                    }
                })
            })
            
            //***************** Student ID details **********//
            
            $("tbody").on("click",".btnID",function()
            {
             let sid = $(this).attr("data-sid");
             console.log(sid);
                $.ajax({
                    url:"GetStudentDataAPI.php",
                    type:"post",
                    data:{id:sid},
                    dataType:'json',
                    success:function(data)
                    {
                        console.log(data);
                        
                        console.log(data[0].name);
                        $("#rollno").html(data[0].id); 
                        $("#nameID").html(data[0].name); 
                        $("#classID").html(data[0].class); 
                        $("#emailID").html(data[0].email); 
                        
                    },
                    error:function(err)
                    {
                        console.log(err);
                    }
                    
                })
            })
    });

