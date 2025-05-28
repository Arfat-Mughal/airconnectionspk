<footer class="bg-dark text-black pt-5 pb-3 mt-auto" style="background: linear-gradient(90deg, #e3f2fd, #bbdefb);">
    <div class="container">
        <div class="row g-4">
            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h5 class="fw-bold mb-4 text-danger">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="{{ route('flights') }}" class="text-black text-decoration-none hover-gold">
                                <i class="bi bi-chevron-right me-2"></i>Flights
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('visa') }}" class="text-black text-decoration-none hover-gold">
                                <i class="bi bi-chevron-right me-2"></i>Visas
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('umrah') }}" class="text-black text-decoration-none hover-gold">
                                <i class="bi bi-chevron-right me-2"></i>Umrah Packages
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-black text-decoration-none hover-gold">
                                <i class="bi bi-chevron-right me-2"></i>Travel Insurance
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h5 class="fw-bold mb-4 text-danger">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-start">
                            <i class="bi bi-geo-alt-fill text-danger me-3 mt-1"></i>
                            <span>123 Travel Plaza, Main Boulevard, Lahore, Pakistan</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-telephone-fill text-danger me-3"></i>
                            <div>
                                <a href="tel:+923111184185" class="text-black text-decoration-none">+92 311 1184185</a>
                                <div class="small text-muted">Mon-Sat, 9am-7pm</div>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="bi bi-envelope-fill text-danger me-3"></i>
                            <a href="mailto:info@airconnectionspk.com" class="text-black text-decoration-none">info@airconnectionspk.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Newsletter -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h5 class="fw-bold mb-4 text-danger">Newsletter</h5>
                    <p class="mb-3">Subscribe for exclusive travel deals and updates</p>
                    <form class="mb-3">
                        <div class="input-group">
                            <input type="email" class="form-control border-0" placeholder="Your Email" required>
                            <button class="btn btn-warning" type="submit">
                                <i class="bi bi-send-fill"></i>
                            </button>
                        </div>
                    </form>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="privacyCheck" required>
                        <label class="form-check-label small" for="privacyCheck">
                            I agree to privacy policy
                        </label>
                    </div>
                </div>
            </div>

            <!-- Social Media -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h5 class="fw-bold mb-4 text-danger">Follow Us</h5>
                    <div class="social-icons mb-4">
                        <a href="https://www.facebook.com/Airconnections.pk" class="text-black me-3 hover-gold" target="_blank">
                            <i class="bi bi-facebook fs-4"></i>
                        </a>
                        <a href="#" class="text-black me-3 hover-gold" target="_blank">
                            <i class="bi bi-twitter-x fs-4"></i>
                        </a>
                        <a href="https://instagram.com/airconnections.pk" class="text-black me-3 hover-gold" target="_blank">
                            <i class="bi bi-instagram fs-4"></i>
                        </a>
                        <a href="https://wa.me/923111184185" class="text-black hover-gold" target="_blank">
                            <i class="bi bi-whatsapp fs-4"></i>
                        </a>
                    </div>
                    {{-- <div class="app-download">
                        <h6 class="fw-bold mb-2">Download Our App</h6>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-outline-light btn-sm p-1">
                                <img src="https://cdn-icons-png.flaticon.com/512/888/888857.png" alt="Google Play" style="height: 30px;">
                            </a>
                            <a href="#" class="btn btn-outline-light btn-sm p-1">
                                <img src="https://cdn-icons-png.flaticon.com/512/888/888841.png" alt="App Store" style="height: 30px;">
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>

        <hr class="my-4 border-secondary">

        <!-- Bottom Footer -->
        <div class="row align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">
                <div class="d-flex flex-wrap gap-3">
                    <a href="#" class="text-black-50 text-decoration-none small hover-gold">Privacy Policy</a>
                    <a href="#" class="text-black-50 text-decoration-none small hover-gold">Terms of Service</a>
                    <a href="#" class="text-black-50 text-decoration-none small hover-gold">FAQs</a>
                    <a href="#" class="text-black-50 text-decoration-none small hover-gold">About Us</a>
                </div>
            </div>
            <div class="col-md-6 text-md-end">
                <small class="text-black-50">&copy; {{ date('Y') }} Air Connections PK. All Rights Reserved.</small>
            </div>
        </div>
    </div>
</footer>

<style>
    .hover-primary:hover {
        color: #0d6efd !important;
        transition: color 0.3s ease;
    }
    .footer-widget {
        margin-bottom: 1.5rem;
    }
    .social-icons a {
        display: inline-block;
        transition: transform 0.3s ease;
    }
    .social-icons a:hover {
        transform: translateY(-3px);
    }
    .input-group button:hover {
        background-color: #0b5ed7;
    }
</style>
