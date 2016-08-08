<script>
    $(".tab__content").hide();
    $(".tab__content:first").hide();
    $(".tab__head li").click(function() {
      $(".tab__content").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn(".tab__content");		
      $(".tab__head li").removeClass("active");
      $(this).addClass("active");
    });
</script>