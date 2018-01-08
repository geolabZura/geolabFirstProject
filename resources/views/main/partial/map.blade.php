<div class="ContactDiv text-center clearfix ">
    <div class="RightContactDiv text-left ">
        <h2 class="text-uppercase  ContactHeader">get in touch</h2>
        <form action="" method="post" id="subscriber">
            <div class="ContactOne">
                <input type="text" id="name" name="name" placeholder="name">
                <label for="name"></label>
                <input type="email" id="email" name="email" placeholder="email">
                <label for="email"></label>
                <input type="text" name="subject" placeholder="subject" id="subject">
                <label for="subject"></label>
                <textarea placeholder="text" id="textarea" name="textarea"></textarea>
                <label for="textarea"></label>
            </div>
            <div class="ContactSecond">

                <label class="Radiocontainer">male
                    <input type="radio"  name="gender" value="1">
                    <span class="radiomark"></span>
                </label>
                <label class="Radiocontainer">female
                    <input type="radio" name="gender" value="1">
                    <span class="radiomark"></span>
                </label>
                <label for="gender" class="ErrorLabel"></label>

                <h5 class="checkboxHeader">Sign up for newspaper:</h5>
                <label class="checkcontainer">recive images
                    <input type="checkbox" name="newsletter[]" value="1">
                    <span class="checkmark"></span>
                </label>
                <label class="checkcontainer">recive promotions
                    <input type="checkbox" name="newsletter[]" value="2">
                    <span class="checkmark"></span>
                </label>
                <label class="checkcontainer">recive updates
                    <input type="checkbox" name="newsletter[]" value="3">
                    <span class="checkmark"></span>
                </label>
                <label class="checkcontainer">recive job offers
                    <input type="checkbox" name="newsletter[]" value="4">
                    <span class="checkmark"></span>
                </label>
            </div>
            <label class="Success" for="Send"></label>
            <input type="submit" id="Send" value="send">
        </form>
    </div>
    <div class="LeftContactDiv red">
        <h2 class="text-uppercase text-left ContactHeader">Contact information</h2>
        <h4 class="text-center SocialText">click to view</h4>
        <ul>
            {{--@if(!empty($socials))--}}
                {{--@foreach($socials as $social)--}}
                    {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                {{--@endforeach--}}
            {{--@endif--}}
        </ul>
    </div>
</div>
<iframe class="myIframe" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2978.116234888417!2d44.7852849!3d41.7180106!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xced15c2c7992ceb5!2sGeoLab!5e0!3m2!1sen!2sge!4v1515257436691" allowfullscreen></iframe>
