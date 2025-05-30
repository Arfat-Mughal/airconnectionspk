<footer class="bg-light text-dark pt-5 pb-4 mt-auto border-top">
    <div class="container">
        <div class="row g-4">

            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h5 class="fw-bold text-danger mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('flights') }}" class="footer-link"><i
                                    class="bi bi-chevron-right me-2"></i>Flights</a></li>
                        <li><a href="{{ route('visa') }}" class="footer-link"><i
                                    class="bi bi-chevron-right me-2"></i>Visas</a></li>
                        <li><a href="{{ route('umrah') }}" class="footer-link"><i
                                    class="bi bi-chevron-right me-2"></i>Umrah Packages</a></li>
                        <li><a href="#" class="footer-link"><i class="bi bi-chevron-right me-2"></i>Travel
                                Insurance</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget px-2">
                    <h5 class="fw-bold text-danger mb-4">Contact Us</h5>
                    <ul class="list-unstyled text-black small">
                        <li class="mb-3 d-flex align-items-start">
                            <i class="bi bi-geo-alt-fill text-danger me-2 mt-1"></i>
                            <span>123 Travel Plaza,<br>Lahore, Pakistan</span>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="bi bi-telephone-fill text-danger me-2 mt-1"></i>
                            <div>
                                <a href="tel:+923111184185" class="text-black text-decoration-none">+92 311
                                    1184185</a><br>
                                <small class="text-muted">Mon–Sat, 9am–7pm</small>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="bi bi-envelope-fill text-danger me-2 mt-1"></i>
                            <a href="mailto:info@airconnectionspk.com"
                                class="text-black text-decoration-none">info@airconnectionspk.com</a>
                        </li>
                    </ul>
                </div>
            </div>



            <!-- Newsletter -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h5 class="fw-bold text-danger mb-3">Newsletter</h5>
                    <p class="small">Subscribe for exclusive travel deals and updates</p>
                    <form>
                        <div class="input-group mb-2">
                            <input type="email" class="form-control border-end-0" placeholder="Your Email" required>
                            <button class="btn btn-danger" type="submit">
                                <i class="bi bi-send-fill text-white"></i>
                            </button>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="privacyCheck" required>
                            <label class="form-check-label small" for="privacyCheck">I agree to the privacy
                                policy</label>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Social Media -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h5 class="fw-bold text-danger mb-3">Follow Us</h5>
                    <div class="d-flex gap-3 mb-3">
                        <a href="https://www.facebook.com/Airconnections.pk" class="social-link" aria-label="Facebook"
                            target="_blank">
                            <i class="bi bi-facebook fs-4"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Twitter" target="_blank">
                            <i class="bi bi-twitter-x fs-4"></i>
                        </a>
                        <a href="https://instagram.com/airconnections.pk" class="social-link" aria-label="Instagram"
                            target="_blank">
                            <i class="bi bi-instagram fs-4"></i>
                        </a>
                        <a href="https://wa.me/923111184185" class="social-link" aria-label="WhatsApp" target="_blank">
                            <i class="bi bi-whatsapp fs-4"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4">

        <!-- Bottom Footer -->
        <div class="row align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">
                <div class="d-flex flex-wrap gap-3">
                    <a href="#" class="footer-bottom-link">Privacy Policy</a>
                    <a href="#" class="footer-bottom-link">Terms of Service</a>
                    <a href="#" class="footer-bottom-link">FAQs</a>
                    <a href="#" class="footer-bottom-link">About Us</a>
                </div>
            </div>
            <div class="col-md-6 text-md-end">
                <small class="text-muted">&copy; {{ date('Y') }} Air Connections PK. All Rights Reserved.</small>
            </div>
        </div>
    </div>
</footer>

<style>
    .footer-widget h5 {
        color: #d32f2f;
    }

    .footer-link {
        color: #212529;
        text-decoration: none;
        display: block;
        padding: 0.25rem 0;
        transition: color 0.3s ease;
    }

    .footer-link:hover {
        color: #1976d2;
    }

    .footer-bottom-link {
        color: #6c757d;
        text-decoration: none;
        font-size: 0.875rem;
    }

    .footer-bottom-link:hover {
        color: #d32f2f;
    }

    .social-link {
        color: #212529;
        transition: transform 0.3s, color 0.3s;
    }

    .social-link:hover {
        color: #d32f2f;
        transform: translateY(-3px);
    }

    /* .input-group .form-control {
        border: 1px solid #d32f2f;
        border-right: none;
    } */

    .input-group .btn {
        background-color: #d32f2f;
        border: 1px solid #d32f2f;
    }

    .input-group .btn:hover {
        background-color: #b71c1c;
    }
</style>
