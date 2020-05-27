

</div>

<div class="o-footer">
    <div class="container ">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
                <img src="{{asset('images/spotify-png.png')}}" alt="spotify logo" class="a-footerLogo">
                <a class="navbar-brand a-colornav" href="{{ url('/')}}">Spotify Promo</a>
            </div>
            <div class="col-12 col-md-4 col-lg-2">
                <span class="footerTitle">Media</span>
                <ul class="m-ul-footer">
                    <li>
                        <a class="a-colornav" href="{{ route('blogs') }}">Blogs</a>
                    </li>
                    <li>
                        <a class="a-colornav" href="{{ route('donations') }}">Donation</a>
                    </li>
                    </ul>
            </div>
            <div class="col-12 col-md-4 col-lg-2">
                <span class="footerTitle">Info</span>
                <ul class="m-ul-footer">
                    <li>
                        <a class=" a-colornav" href="{{ route('about') }}">About</a>
                    </li>
                    <li>
                        <a class="a-colornav" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li>
                        <a class="a-colornav" href="{{ route('privacy') }}">Privacy</a>
                    </li>
                    </ul>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <form action="">
                    <label for="email" class="a-textNewslettre">Subscribe to our newslettre</label>
                    <input type="email" name="email" class="a-inputEmail">
                    <button type="submit" class="a-btnSubscribe">SUBSCRIBE</button>
                </form>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>