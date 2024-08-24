<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>ابق على تواصل</h3>
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <input type="text" placeholder="الاسم" name="name">
                    <input type="email" placeholder="البريد الإلكتروني" name="email">
                    <input type="text" placeholder="هاتف" name="phone">
                    <button type="submit">اتصل بنا</button>
                </form>
            </div>
            <div class="footer-section">
                <h3>روابط سريعة</h3>
                <ul>
                    <li><a href="#">الرئيسية</a></li>
                    <li><a href="#">العقارات</a></li>
                    <li><a href="#">وحدات سكنية</a></li>
                    <li><a href="#">من نحن</a></li>
                    <li><a href="#">تواصل معنا</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>تواصل معنا</h3>
                <p>تابعنا على وسائل التواصل الاجتماعي</p>
                <div class="social-media">
                    <a href="#"><i class="fa-brands fa-facebook social-icon"></i></a>
                    <a href="#"><i class="fa-solid fa-x social-icon"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram social-icon"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('public/user/js/custom.js')}}"></script>