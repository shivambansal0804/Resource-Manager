<footer id="footer" class="footer">
    <div id="copyrights" style="background-color:#111111;">
        <div class="bottom-bar" style="text-align:center;">
            <div class="widget subscribe-widget clearfix dark" style="margin:30px 0; width:300px; display:inline-block;">
                <h5 style="text-align:center;"><strong>Subscribe</strong> to Our Newsletter:</h5>
                <div class="widget-subscribe-form-result" style="display:inline-block;"></div>

                <form id="widget-subscribe-form" action="{{ route('subscribers.join') }}" role="form" method="post" class="nobottommargin">
                    <div class="input-group divcenter" style="margin-top:-20px;">
                        @csrf
                        <span class="input-group-addon"><i class="icon-email2"></i></span>
                        <input type="email" id="widget-subscribe-form-email" name="email" class="form-control required email" placeholder="Enter your Email">
                        <span class="input-group-btn">
                                        <button class="btn btn-success" type="submit" style="background-color:#1ABC9C;">Subscribe</button>
                                    </span>
                    </div>
                </form>
            </div>

            <div class="container" style="margin-top:30px">
                <small class="copyright col-md-12 col-sm-12 col-xs-12" style="color:white; text-align:center;">Copyright &copy; 2018 DTU Times</small>
            </div>
            <!--//container-->
        </div>
        <!--//bottom-bar-->
    </div>
    <!-- #copyrights end -->
</footer>