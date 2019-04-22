<div class="slidebar">
 <div class="item-sb">
    <h3 class="title">Book Your Free Design Consultation</h3>
    <form action="mailsubricre.html" id="sform" method="post">
      <div class="error uk-alert" style="display: none;"></div>
       <input type="text" name="fullname" placeholder="name*">
       <input type="text" name="phone" placeholder="Phone*">
       <input type="text" name="email" class="email" placeholder="Email*">
       <input type="text" name="address"  placeholder="Suburb*">
       <input type="text" name="title" placeholder="Subject*">
       <textarea name="message" id="" cols="30" rows="10"></textarea>
       <!-- <select>
          <option value="" selected="selected" class="gf_placeholder">How did you hear about us?*
          </option>
          <option value="">Internet</option>
          <option value="">Magazine</option>
          <option value="">Word of Mouth</option>
          <option value="">Visited Showroom</option>
          <option value="Drove Past">Drove Past</option>
          <option value="Other">Other</option>
       </select> -->
       <input type="submit" value="Submit">
    </form>
 </div>
 <div class="item-sb">
    <iframe width="355" height="200" src="https://www.youtube.com/embed/<?php echo substr($this->fcSystem['homepage_vidu'], 32); ?>" frameborder="0"
       allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
       allowfullscreen></iframe>
 </div>

</div>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $('#sform .error').hide();
        var uri = $('#sform').attr('action');
        $('#sform').on('submit',function(){
            var postData = $(this).serializeArray();
            $.post(uri, {post: postData, email: $('#sform .email').val()},
                function(data){
                    var json = JSON.parse(data);
                    $('#sform .error').show();
                    if(json .error.length){
                        $('#sform .error').removeClass('alert alert-success').addClass('alert alert-danger');
                        $('#sform .error').html('').html(json.error);
                    }else{
                        $('#sform .error').removeClass('alert alert-danger').addClass('alert alert-success');
                        $('#sform .error').html('').html('Gửi yêu cầu đăng ký nhận bản tin thành công!.');
                        $('#sform').trigger("reset");
                        setTimeout(function(){ location.reload(); }, 5000);
                    }
                });
            return false;
        });
    });
</script>