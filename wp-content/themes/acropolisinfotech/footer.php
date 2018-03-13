 <footer>

        <div class="container-fluid">

              <div class=" col-md-8">

                <p> Copyright &#169; Renaissance Risk Management Labs, Inc. All rights reserved. </p>

              </div> 

  





              <div class="col-md-4">

                <ul>

                    <li>Contact us: </li>

                    <li> info@rriskml.com</li>

                    <li>+1 845-353-2597</li>

                </ul>

              </div>

       </div>

</footer>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

 <?php wp_footer();?>


<script type="text/javascript">
  $(document).ready(function(){
    $('.too').click(function(){
    $('.ran-nav-inner').toggle();
  });

/* Add sticky-navbar class to all the sidebar of every page */

  $(window).on('scroll',function()
                    {
            if($(this).scrollTop()>200)
                {
                    $('div.col-md-3').addClass("sticky-sidebar");
                }
            else{
                 $('div.col-md-3').removeClass("sticky-sidebar");
            }
        });
  $(window).on('scroll',function()
                    {
            if($(this).scrollTop()>200)
                {
                    $('div.col-md-2').addClass("sticky-sidebar");
console.log($('div.col-md-2'));
                }
            else{
                 $('div.col-md-2').removeClass("sticky-sidebar");
            }
        });



var clients_benifits_top=$($('#clients_benefits')).offset().top;
var our_story_top=$('#our_story').offset().top;
var why_renaissance_top=$('#why_renaissance').offset().top;
var corporate_responsibility_top=$('#corporate_responsibility').offset().top;
$('#menu-item-167').on('click',function()
{
        $("html,body").animate({scrollTop:our_story_top},1000,"linear");
});
$('#menu-item-171').on('click',function()
{
        $("html,body").animate({scrollTop:why_renaissance_top},1000,"linear");
});
$('#menu-item-172').on('click',function()
{
        $("html,body").animate({scrollTop:clients_benifits_top},1000,"linear");
});
$('#menu-item-173').on('click',function()
{
        $("html,body").animate({scrollTop:corporate_responsibility_top},1000,"linear");
});

  });






var renaissance_platform_top=$('#renaissance_platform').offset().top;
var renaissance_gpu_top=$('#renaissance_gpu').offset().top;
var renaissance_valuation_top=$('#renaissance_valuation').offset().top;
var hedging_module_top=$('#hedging_module').offset().top;
var margining_collateral_top=$('#margining_collateral').offset().top;
var risk_management_top=$('#risk_management').offset().top;
var aggregator_module_top=$('#aggregator_module').offset().top;

var distributed_top=$('#distributed').offset().top;


$('#menu-item-169').on('click',function()
{
        $("html,body").animate({scrollTop:renaissance_platform_top},1000,"linear");
});
$('#menu-item-179').on('click',function()
{
        $("html,body").animate({scrollTop:renaissance_gpu_top},1000,"linear");
});
$('#menu-item-175').on('click',function()
{
        $("html,body").animate({scrollTop:renaissance_valuation_top},1000,"linear");
});
$('#menu-item-176').on('click',function()
{
        $("html,body").animate({scrollTop:hedging_module_top},1000,"linear");
});
$('#menu-item-177').on('click',function()
{
        $("html,body").animate({scrollTop:margining_collateral_top},1000,"linear");
});
$('#menu-item-178').on('click',function()
{
        $("html,body").animate({scrollTop:risk_management_top},1000,"linear");
});
v
$('#menu-item-174').on('click',function()
{
        $("html,body").animate({scrollTop:aggregator_module_top},1000,"linear");
});
$('#menu-item-180').on('click',function()
{
        $("html,body").animate({scrollTop:distributed_top},1000,"linear");
});


</script>

</body>

</html>



 

  