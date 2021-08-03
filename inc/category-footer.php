<footer>
    <div class="footer">
        <div class="footercontainer">
            <a href="https://www.facebook.com/profile.php?id=100025107904109"><i class="fab fa-facebook-f"></i></a>
            <a href="https://instagram.com/flameon_connect?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/FlameOn61180072?s=09"><i class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com/channel/UCOTyXXEvBKFWXQAxcy6fvCg"><i class="fa fa-youtube"></i></a>
        </div>

        <div class="footercontainer">
            <ul>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Career</a></li>
            </ul>
        </div>

        <div class="footercontainer">
            Copyright © 2021 - All rights reserved
        </div>
    </div>
</footer>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
    const menuBtn = document.querySelector(".menu-icon span");
    const searchBtn = document.querySelector(".search-icon");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    const form = document.querySelector("form");
    const row = document.querySelector(".row");
    menuBtn.onclick = ()=>{
        items.classList.add("active");
        menuBtn.classList.add("hide");
        searchBtn.classList.add("hide");
        cancelBtn.classList.add("show");
    }
    cancelBtn.onclick = ()=>{
        items.classList.remove("active");
        menuBtn.classList.remove("hide");
        searchBtn.classList.remove("hide");
        cancelBtn.classList.remove("show");
        form.classList.remove("active");
        cancelBtn.style.color = "#ff3d00";
        row.style.marginTop = "20px";
    }
    searchBtn.onclick = ()=>{
        form.classList.add("active");
        searchBtn.classList.add("hide");
        cancelBtn.classList.add("show");
        row.style.marginTop = "100px";
    }
</script>
</body>
</html>

