


<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; 2023 <div class="bullet"></div> Design By <a href="/">KARKABH</a>
    </div>
    <div class="footer-right">

    </div>
</footer>
</div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleButtons = document.querySelectorAll(".toggle-description");

        toggleButtons.forEach(button => {
            button.addEventListener("click", function() {
                const descriptionContainer = this.closest(".description");
                const truncatedDescription = descriptionContainer.querySelector(
                    ".truncated-description");
                const fullDescription = descriptionContainer.querySelector(".full-description");

                if (truncatedDescription.style.display === "none") {
                    truncatedDescription.style.display = "inline";
                    fullDescription.style.display = "none";
                    this.textContent = "Show More";
                } else {
                    truncatedDescription.style.display = "none";
                    fullDescription.style.display = "inline";
                    this.textContent = "Show Less";
                }
            });
        });
    });
</script>
<!-- General JS Scripts -->
<script src="{{ url('assets/modules/jquery.min.js ') }}"></script>
<script src="{{ url('assets/modules/popper.js ') }}"></script>
<script src="{{ url('assets/modules/tooltip.js ') }}"></script>
<script src="{{ url('assets/modules/bootstrap/js/bootstrap.min.js ') }}"></script>
<script src="{{ url('assets/modules/nicescroll/jquery.nicescroll.min.js ') }}"></script>
<script src="{{ url('assets/modules/moment.min.js ') }}"></script>
<script src="{{ url('assets/js/stisla.js ') }}"></script>

<!-- JS Libraies -->
<script src="{{ url('assets/modules/jquery.sparkline.min.js ') }}"></script>
<script src="{{ url('assets/modules/chart.min.js ') }}"></script>
<script src="{{ url('assets/modules/owlcarousel2/dist/owl.carousel.min.js ') }}"></script>
<script src="{{ url('assets/modules/summernote/summernote-bs4.js ') }}"></script>
<script src="{{ url('assets/modules/chocolat/dist/js/jquery.chocolat.min.js ') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ url('assets/js/page/index.js ') }}"></script>

<!-- Template JS File -->
<script src="{{ url('assets/js/scripts.js ') }}"></script>
<script src="{{ url('assets/js/custom.js ') }}"></script>
</body>

</html>
