 <style>
     * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
     }

     body {
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
         background: #1a1a1a;
     }

     .footer {
         background: #0b0b50;
         color: #fff;
         padding: 60px 0 0;
     }

     .container {
         max-width: 1400px;
         margin: 0 auto;
         padding: 0 20px;
     }

     .footer-body {
         display: grid;
         grid-template-columns: 1fr 1fr 1fr;
         gap: 60px;
         margin-bottom: 50px;
     }

     /* Left Section */
     .footer-left {
         grid-column: 1 / 3;
     }

     .footer-infor {
         display: flex;
         flex-direction: column;
         gap: 40px;
     }

     .footer-menu {
         display: grid;
         grid-template-columns: 1fr 1fr;
         gap: 40px;
     }

     .footer-heading {
         font-size: 20px;
         font-weight: 600;
         margin-bottom: 20px;
         color: #fff;
     }

     .footer-menu-list {
         list-style: none;
     }

     .footer-menu-list li {
         margin-bottom: 12px;
     }

     .footer-menu_item {
         color: #b0b0b0;
         text-decoration: none;
         font-size: 15px;
         transition: color 0.3s;
     }

     .footer-menu_item:hover {
         color: #fff;
     }

     .footer-phone-number .number {
         font-size: 36px;
         font-weight: 700;
         letter-spacing: 2px;
         margin-top: 10px;
     }

     /* Partner Section */
     .footer-newsletter {
         display: flex;
         flex-direction: column;
     }

     .partner-logos-container {
         display: grid;
         grid-template-columns: repeat(3, 1fr);
         gap: 20px;
         margin: 30px 0;
     }

     .partner-logo {
         background: #3a3a3a;
         border-radius: 12px;
         height: 90px;
         display: flex;
         align-items: center;
         justify-content: center;
         transition: all 0.3s ease;
         border: 2px solid #4a4a4a;
         cursor: pointer;
         position: relative;
         overflow: hidden;
     }

     .partner-logo::before {
         content: '';
         position: absolute;
         top: 0;
         left: -100%;
         width: 100%;
         height: 100%;
         background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
         transition: left 0.5s;
     }

     .partner-logo:hover::before {
         left: 100%;
     }

     .partner-logo:hover {
         transform: translateY(-5px);
         border-color: #fff;
         box-shadow: 0 10px 30px rgba(255, 255, 255, 0.15);
     }

     .partner-logo svg {
         width: 55px;
         height: 55px;
         fill: #fff;
         transition: all 0.3s;
     }

     .partner-logo:hover svg {
         transform: scale(1.1);
     }

     /* Subscribe Form */
     .subscribe-form {
         margin-bottom: 25px;
     }

     .subscribe-content {
         display: flex;
         gap: 10px;
     }

     .subscribe-email {
         flex: 1;
         padding: 14px 20px;
         background: #3a3a3a;
         border: 1px solid #4a4a4a;
         color: #fff;
         border-radius: 8px;
         font-size: 14px;
         outline: none;
         transition: border-color 0.3s;
     }

     .subscribe-email:focus {
         border-color: #fff;
     }

     .subscribe-email::placeholder {
         color: #888;
     }

     .subscribe-button {
         padding: 14px 28px;
         background: #fff;
         color: #2d2d2d;
         border: none;
         border-radius: 8px;
         cursor: pointer;
         font-weight: 600;
         transition: all 0.3s;
         display: flex;
         align-items: center;
         gap: 8px;
     }

     .subscribe-button:hover {
         background: #e0e0e0;
         transform: translateY(-2px);
     }

     /* Social Icons */
     .tf-social-icon {
         display: flex;
         gap: 15px;
         list-style: none;
     }

     .tf-social-icon li a {
         width: 45px;
         height: 45px;
         background: #3a3a3a;
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         transition: all 0.3s;
         text-decoration: none;
     }

     .tf-social-icon li a:hover {
         background: #fff;
         transform: translateY(-3px);
     }

     .tf-social-icon li a:hover svg {
         fill: #2d2d2d;
     }

     .tf-social-icon svg {
         width: 20px;
         height: 20px;
         fill: #fff;
         transition: fill 0.3s;
     }

     /* Footer Bottom */
     .footer-bottom {
         border-top: 1px solid #4a4a4a;
         padding: 30px 0;
         margin-top: 40px;
     }

     .footer-bottom-wrap {
         display: flex;
         justify-content: space-between;
         align-items: center;
     }

     .footer-bottom .left p {
         color: #b0b0b0;
         font-size: 14px;
     }

     .tf-payment ul {
         display: flex;
         gap: 12px;
         list-style: none;
     }

     .tf-payment img {
         height: 32px;
         border-radius: 4px;
     }

     /* Responsive */
     @media (max-width: 1024px) {
         .footer-body {
             grid-template-columns: 1fr 1fr;
             gap: 40px;
         }

         .footer-left {
             grid-column: 1 / 2;
         }

         .footer-newsletter {
             grid-column: 2 / 3;
         }

         .partner-logos-container {
             grid-template-columns: repeat(2, 1fr);
         }
     }

     @media (max-width: 768px) {
         .footer-body {
             grid-template-columns: 1fr;
         }

         .footer-left {
             grid-column: 1;
         }

         .footer-newsletter {
             grid-column: 1;
         }

         .footer-menu {
             grid-template-columns: 1fr;
         }

         .partner-logos-container {
             grid-template-columns: repeat(3, 1fr);
             gap: 15px;
         }

         .partner-logo {
             height: 75px;
         }

         .partner-logo svg {
             width: 45px;
             height: 45px;
         }

         .footer-bottom-wrap {
             flex-direction: column;
             gap: 20px;
             text-align: center;
         }
     }

     @media (max-width: 480px) {
         .partner-logos-container {
             grid-template-columns: repeat(2, 1fr);
         }

         .subscribe-content {
             flex-direction: column;
         }

         .footer-phone-number .number {
             font-size: 28px;
         }
     }
 </style>
 </head>

 <body>
     <footer class="footer">
         <div class="container">
             <div class="footer-body">
                 <!-- Left Section -->
                 <div class="footer-left">
                     <div class="footer-infor">
                         <div class="footer-menu">
                             <div class="footer-col-block">
                                 <h5 class="footer-heading">Thông tin</h5>
                                 <ul class="footer-menu-list">
                                     <li><a href="#" class="footer-menu_item">Về chúng tôi</a></li>
                                     <li><a href="#" class="footer-menu_item">Câu chuyện của chúng tôi</a></li>
                                     <li><a href="#" class="footer-menu_item">Hướng dẫn chọn kích cỡ</a></li>
                                     <li><a href="#" class="footer-menu_item">Liên hệ với chúng tôi</a></li>
                                 </ul>
                             </div>
                             <div class="footer-col-block">
                                 <h5 class="footer-heading">Dịch vụ khách hàng</h5>
                                 <ul class="footer-menu-list">
                                     <li><a href="#" class="footer-menu_item">Vận chuyển</a></li>
                                     <li><a href="#" class="footer-menu_item">Đổi Trả & Hoàn Tiền</a></li>
                                     <li><a href="#" class="footer-menu_item">Chính sách bảo mật</a></li>
                                     <li><a href="#" class="footer-menu_item">Điều Khoản & Điều Kiện</a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="footer-phone-number">
                             <h4 class="number">0986512929</h4>
                         </div>
                     </div>
                 </div>

                 <!-- Partner Section -->
                 <div class="footer-newsletter">
                     <h3 class="footer-heading">Đối Tác Chiến Lược</h3>

                     <!-- Partner Logos Grid -->
                     <div class="partner-logos-container">
                         <div class="partner-logo">
                             <img src="{{ asset('assets/client/images/logo/1.png') }}" alt="">
                         </div>
                         <div class="partner-logo">
                                 <img src="{{ asset('assets/client/images/logo/4.jpg') }}" alt="">
                         </div>
                         <div class="partner-logo">
                                 <img src="{{ asset('assets/client/images/logo/l3.png') }}" alt="">
                         </div>
                         <div class="partner-logo">
                                <img src="{{ asset('assets/client/images/logo/l5.png') }}" alt="">
                         </div>
                         <div class="partner-logo">
                                <img src="{{ asset('assets/client/images/logo/l7.png') }}" alt="">
                         </div>
                         <div class="partner-logo">
                                 <img src="{{ asset('assets/client/images/logo/l8.png') }}" alt="">
                         </div>
                     </div>

                     <!-- Subscribe Form -->
                     <form class="subscribe-form">
                         <div class="subscribe-content">
                             <input type="email" class="subscribe-email" placeholder="Enter your e-mail">
                             <button type="button" class="subscribe-button">
                                 Subscribe
                                 <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="2">
                                     <path d="M7 17L17 7M17 7H7M17 7V17" />
                                 </svg>
                             </button>
                         </div>
                     </form>

                     <!-- Social Icons -->
                     <ul class="tf-social-icon">
                         <li>
                             <a href="#">
                                 <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                     <path
                                         d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                 </svg>
                             </a>
                         </li>
                         <li>
                             <a href="#">
                                 <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                     <path
                                         d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                                 </svg>
                             </a>
                         </li>
                         <li>
                             <a href="#">
                                 <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                     <path
                                         d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                 </svg>
                             </a>
                         </li>
                         <li>
                             <a href="#">
                                 <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                     <path
                                         d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z" />
                                 </svg>
                             </a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>

         <!-- Footer Bottom -->
         <div class="footer-bottom">
             <div class="container">
                 <div class="footer-bottom-wrap">
                     <div class="left">
                         <p>Copyright ©2025 GearO. All Rights Reserved.</p>
                     </div>
                     <div class="tf-payment">
                         <ul>
                             <li><img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Visa.svg" alt="Visa">
                             </li>
                             <li><img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/MasterCard_Logo.svg"
                                     alt="Mastercard"></li>
                             <li><img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/American_Express_logo_%282018%29.svg"
                                     alt="Amex"></li>
                             <li><img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg"
                                     alt="PayPal"></li>

                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </footer>
