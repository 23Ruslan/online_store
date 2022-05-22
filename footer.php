</main>
<footer id="footer1" class="py-4" style="
-webkit-animation: change-background 5s linear infinite !important;-moz-animation: change-background 5s linear infinite !important;
-o-animation: change-background 5s linear infinite !important;animation: change-background 5s linear infinite !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20">Laptop Store</h4>
                <p class="font-size-14 font-rale">Find cutting-edge tech for less. Discover the easy way to compare products, 
                    read reviews & pick the perfect kit.</p>
            </div>
            <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-16">news</h4>
                <form class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Your email">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-2">Subscribe me</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-16"><b><em>Our contacts</em></b></h4>
<?php $result = $db->con->query("SELECT * FROM `contacts`;");
                $contacts=$result->fetch_assoc();?>
                <br><b><em>City: </em></b><?php echo $contacts["city"];?>
                <br><br><b><em>Phone number: </em></b><?php echo $contacts["telephone"];?>
                <br><br><b><em>Email: </em></b><?php echo $contacts["email"];?>
            </div>
        </div>
    </div>
</footer>
<div class="copyright text-center text-white py-3" style="background: #90d681;">
    <p class="font-rale font-size-14">&copy; 2022. Minsk</p>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="index.js"></script>
</body>
</html>