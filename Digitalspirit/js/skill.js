 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="skill[]" style="font-size:15px;" placeholder="Skills"class="form-control name_list"/></td><td> <select input type="text" class="form-control" name="position[]" id="address-1" placeholder=" Blood Group"  style="font-size:15px;" required><option value="Beginner">Beginner</option><option value="Intermediate">Intermediate</option><option value="Expert">Expert</option></select></td><td> <select input type="text" class="form-control" style="font-size:15px;" name="experience[]" id="address-1" placeholder=" Blood Group" required><option value="0-1 month">0-1 month</option><option value="0-2 month">0-2 month</option><option value="0-3 month">0-3 month</option><option value="0-4 month">0-4 month</option><option value="0-5 month">0-5 month</option><option value="0-6 month">0-6 month</option><option value="0-7 month">0-7 month</option><option value="0-8 month">0-8 month</option><option value="0-9 month">0-9 month</option><option value="0-10 month">0-10 month</option><option value="0-11 month">0-11 month</option></select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
