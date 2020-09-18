<footer class="page-footer font-small lighten-3 py-4 mb-3" style="background-color:black">

  <div class="container-fluid text-center text-md-left">

    <div class="row">

      <div class="col-md-3 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <h5 class="font-weigth-bold text-uppercase mb-4" style="color:white">ABOUT US</h5>

        <p class="text-white text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

      </div>

      <div class="col-md-3 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <h5 class="font-weigth-bold text-uppercase mb-4" style="color:white">SUPPORT</h5>

        <ul class="list-unstyled">

          <li>
            <p><a href="#" class="text-muted" style="text-decoration:none;color:#e6e6e6">Payment</a></p>
          </li>
          <li>
            <p><a href="#" class="text-muted" style="text-decoration:none;color:#e6e6e6">Shipping</a></p>
          </li>
          <li>
            <p><a href="#" class="text-muted" style="text-decoration:none;color:#e6e6e6">Cncellations</a></p>
          </li>
          <li>
            <p><a href="#" class="text-muted" style="text-decoration:none;color:#e6e6e6">FAQ</a></p>
          </li>

        </ul>

      </div>

      <div class="col-md-3 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <h5 class="font-weigth-bold text-uppercase mb-4" style="color:white">GET IN TOUCH</h5>

        <ul class="list-unstyled">

          <li>
            <p><a href="#" class="fas fa-map-marker text-muted" style="text-decoration:none;color:#e6e6e6">&nbsp; -1.28588 36.9841</a></p>
          </li>
          <li>
            <p><a href="#" class="fas fa-home text-muted" style="text-decoration:none;color:#e6e6e6">&nbsp; Utawala Shooters</a></p>
          </li>
          <li>
            <p><a href="#" class="fas fa-phone text-muted" style="text-decoration:none;color:#e6e6e6">&nbsp; 0700000000</a></p>
          </li>
          <li>
            <p><a href="#" class="fas fa-envelope text-muted" style="text-decoration:none;color:#e6e6e6">&nbsp; joelrupiah@gmail.com</a></p>
          </li>

        </ul>

      </div>

      <div class="col-md-3 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1 text-center">

        <h5 class="font-weigth-bold text-uppercase mb-4" style="color:white">FOLLOW US</h5>

        <ul class="list-unstyled">

          <li>
            <p><a href="#" class="fab fa-facebook-square" style="font-size:25px;color:#3b5998;text-decoration:none"></a></p>
          </li>
          <li>
            <p><a href="#" class="fab fa-twitter-square" style="font-size:25px;color:#55acee;text-decoration:none"></a></p>
          </li>
          <li>
            <p><a href="#" class="fab fa-instagram" style="font-size:25px;color:#e95950;text-decoration:none"></a></p>
          </li>
          <li>
            <p><a href="#" class="fab fa-google-plus-square" style="font-size:25px;color:#dd4b39;text-decoration:none"></a></p>
          </li>

        </ul>

      </div>

    </div>

  </div>

  </footer>

</body>

</html>

<script>
  $(document).ready(function() {
    $(".dropup").hover(
      function() {
        $('.dropup-menu', this).stop(true, true).slideDown("slow");
        $(this).toggleClass('open');
      },
      function() {
        $('.dropup-menu', this).stop(true, true).slideUp("slow");
        $(this).toggleClass('open');
      },
    );

  });

  //product page display

  $(document).ready(function() {
    product();

    function product() {
      $.ajax({
        url: "products.php",
        method: "POST",
        data: {
          getProduct: 1
        },
        success: function(data) {
          $("#get_product").html(data);
        }
      });
    }
  });

  $(document).ready(function() {
    category();

    function category() {
      $.ajax({
        url: "products.php",
        method: "POST",
        data: {
          getCategory: 1
        },
        success: function(data) {
          $("#get_product_category").html(data);
        }
      });
    }
  });

  //product load to cart

  $(document).ready(function() {

    $("#pagebtn").click(function(e) {
      e.preventDefault();
    });

    $("body").delegate("#add_to_cart", "click", function(event) {
      event.preventDefault();

      var product_code = $("#product_code").val()
      // console.log(code);




      var p_id = $(this).attr('data-id');
      console.log(p_id);

      // $.post('add_cart.php', {product_code}, function(p_id) {
      //   console.log(p_id);
      // })
      // alert(p_id);
      $.ajax({
        url: "cart/add_cart.php",
        // url: "fetch_cart.php",
        method: "POST",
        data: {
          addToCart: 1,
          proId: p_id
        },
        success: function(data) {
          // alert(data);
          location.reload();

          console.log(data);
        },
        error: function(error) {
          alert('error');
          console.log(error);

        }
      });
    });
  });

  //popover cart
  // $(document).ready(function() {
  //   $('[data-toggle="popover"]').popover();
  // });

  /*$(document).ready(function(){
    $(document).on("click","#add_to_cart", function(){
      var product_id = $(this).attr('data-id');

    });
  });*/

  /*Cart Popover*/
  /*$(document).ready(function(){
    $("#cart_container").click(function(event){
      event.preventDefault();

      $.ajax({
        url: "fetch_cart.php",
        method: "POST",
        data: {get_cart_product:1,proId:pro_id},
        success: function(data){
          $("#cart_product").html(data);
        }
      });

    });

  });*/

  //category display

  /*$(document).ready(function(){
    cat();
    function cat(){
      $.ajax({
        url : "select.php",
        method: "POST",
        data : {category:1},
        success: function(data){

        }
      });
    }
  });*/

  //category product display

  $(document).ready(function(){
    $("body").delegate("#show_products", "click", function(e){
      e.preventDefault();
      var cid = $(this).attr('data-id');
      $.ajax({
        url : "products.php",
        method : "GET",
        data : {
            id:cid},
        success : function(data){
          $("#get_products").html(data);
        }
      });
    });
  });


  /*$(document).ready(function(){
      function load_cart_data()
      {
      $.ajax({
      url:"fetch_cart.php",
      method:"POST",
      dataType:"json",
      success:function(data)
      {
        $('#cart_details').html(data.cart_details);
        $('.total_price').text(data.total_price);
        $('.badge').text(data.total_item);
      }
    });
  }
    });*/

//   $(document).ready(function(){
//     function get_filter_text(text_id){
//       var filterData = [];
//       $('#show_products'+text_id+'click').each(function(){
//         filterData.push($($this).val());
//       });
//       return filterData;
//     }
//   });


	function update_cart(mode, edit_id, edit_size) {
    // console.log(mode, edit_id, edit_size);
    
		var data = {"mode" : mode, 'edit_id' : edit_id, 'edit_size' : edit_size};

		jQuery.ajax({
			url : 'update_cart.php',
			method : 'post',
			data : data,
			success : function(data){
        // console.log(JSON.parse(data));
        // var data_v = JSON.parse(data)
        var loadUrl = 'cart/index.php'
        // var ajax_load = $("#cart_page").html();
        // console.log(ajax_load);
        
        $("#cart_page").load(loadUrl);

        console.log($("#cart_page").load(loadUrl));
        

        $("#cart_page").load(loadUrl);

        

        
        // console.log(JSON.parse(data));
        // $('#sub_total').html(data_v['sub_total'])
        // $('#grand_total').html(data_v['grand_total'])
        // $('#item_count').html(data_v['item_count'])
        
        location.reload();
        // alert(res)
			},
			error : function(){
				alert ('something went wrong');
			}
		});
	}

  

	function delete_cart(delete_id) {
    // console.log(mode, delete_id, edit_size);
    
		var data = {'delete_id' : delete_id};

		jQuery.ajax({
			url : 'delete_cart.php',
			method : 'GET',
			data : data,
			success : function(data){
        location.reload();
			},
			error : function(){
				alert ('something went wrong');
			}
		});
	}
</script>