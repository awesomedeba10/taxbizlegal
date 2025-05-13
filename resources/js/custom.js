import $ from 'jquery';
import ScrollReveal from 'scrollreveal';

ScrollReveal().reveal('.reveal-me', {
    interval: 200,
    reset: true,
    distance: '50px',
    origin: 'bottom',
    duration: 800,
    easing: 'ease-in-out',
});

$(function () {
    $(".mod-dropdown-submenu a").hover(
        function () {
            $(this).find(".childDisplayHover").removeClass("mod-invisible");
        },
        function () {
            $(this).find(".childDisplayHover").addClass("mod-invisible");
        }
    );
});

$(function() {
    $(".multi-dropdown-menu").hover(
        function () {
            $(this).addClass("mod-dropdown-open"); // On mouse enter
        },
        function () {
            try {
                let $this = $(this);
                if (!$this.is(":hover") && !$(".services-shortcut").is(":hover")) {
                    $this.removeClass("mod-dropdown-open");
                }
            }
            catch(err) {
                $(this).removeClass("mod-dropdown-open");
            }
        }
    );

    $(".mobile-spcl-sidenav-toggle").on("click", function () {
        $(".mobile-spcl-sidenav").toggleClass("mod-sidenav-open");
        $('.mobile-sidenav-bc').toggleClass("mod-hidden");
    });

    $(".mobile-sidenav-bc").on('click', function(){
        $('.mobile-sidenav-bc').toggleClass("mod-toggle-close")
        $('.mobile-sidenav-content').toggleClass('mod-sidenav-open')
        $(".mobile-spcl-sidenav-toggle").toggleClass("mod-hidden");
    });
});

document.querySelectorAll('.services-nav-item').forEach(item => {
    item.addEventListener('click', function () {
        const targetId = this.getAttribute('data-target'); // Get target section ID
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 135, // Adjust for navbar height if needed
                behavior: 'smooth' // Enables smooth scrolling effect
            });
        }
    });
});

const focusBtn = document.querySelector('[data-id="focus-first-input-btn"]');
if (focusBtn) {
    document.querySelectorAll('[data-id="focus-first-input-btn"]').forEach(button => {
        button.addEventListener('click', function () {
            const form = document.getElementById('frm-adeptRegistrationForm-form');
            if (form) {
                const formPart = form.getAttribute('data-part');
                if (typeof formPart !== null && formPart == 'first') {
                    form.querySelector('button[name="_submit"]').click();
                    detectScrollOnClick().then(scrolled => {
                        if (!scrolled) {
                            const emailField = document.getElementById('frm-enquiryForm-form-user-mail');
                            if (emailField) {
                                emailField.focus();
                            }
                        }
                    });
                } else if (typeof formPart !== null && formPart == 'second') {
                    const planAmt = button.getAttribute('data-amount') ?? '0';
                    const radios = form.querySelectorAll('input[type="radio"][name="selected_plan"]');
                    let matched = false;

                    detectScrollOnClick().then(scrolled => {
                        if (!scrolled) {
                            radios.forEach(radio => {
                                if (radio.dataset.amount === String(planAmt)) {
                                    radio.checked = true;
                                    radio.focus();
                                    matched = true;
                                }
                            });

                            if (!matched && radios.length > 0) {
                                const checkedRadio = Array.from(radios).find(r => r.checked);
                                if (checkedRadio) {
                                    checkedRadio.focus();
                                }
                            }
                        }
                    });
                
                    const radio = form.querySelector(`input[type="radio"][data-amount="${planAmt}"]`);
                    if (radio) {
                        radio.checked = true;
                        radio.focus();
                    }
                }
            }
        });
    });
}

document.addEventListener("DOMContentLoaded", function () {
    // Check if current URL contains 'checkout'
    if (window.location.pathname.includes('/checkout')) {
        const razorpayScript = document.createElement('script');
        razorpayScript.src = "https://checkout.razorpay.com/v1/checkout.js";
        document.head.appendChild(razorpayScript);

        razorpayScript.onload = function () {
            document.querySelectorAll('.btn-pmt').forEach(button => {
                button.addEventListener('click', function () {
                    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        url = window.location.href;

                    fetch('/orders/create', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({ order_id: url })
                    })
                        .then(response => response.json())
                        .then(data => {
                            const options = {
                                key: data.key,
                                amount: data.amount,
                                currency: data.currency,
                                name: data.company_name,
                                description: data.description,
                                image: data.logo,
                                order_id: data.rzp_order_id,
                                prefil: {
                                    name: data.cus_name,
                                    email: data.cus_email,
                                    contact: data.cus_phone
                                },
                                handler: function (response) {
                                    fetch('/orders/verify', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': csrfToken
                                        },
                                        body: JSON.stringify({
                                            razorpay_order_id: response.razorpay_order_id,
                                            razorpay_payment_id: response.razorpay_payment_id,
                                            razorpay_signature: response.razorpay_signature
                                        })
                                    })
                                        .then(res => res.json())
                                        .then(res => {
                                            if (res.success) {
                                                alert('Payment Received', 'success');
                                                window.location.href = res.redirect_url;
                                            } else {
                                                alert('Payment Verification Failed.', 'error');
                                            }
                                        })
                                        .catch(() => alert('Error Verifying Payment.', 'error'));
                                },
                                modal: {
                                    ondismiss: function() {
                                        alert('Payment Cancelled, Please try again!', 'error')
                                    }
                                },
                                theme: {
                                    color: "#0c488d",
                                    backdrop_color: "#ccf8ff"
                                },
                                send_sms_hash: true,
                                allow_rotation: true
                            };

                            const rzp = new Razorpay(options);
                            rzp.open();
                        })
                        .catch(() => alert('Error creating Razorpay order.', 'error'));
                });
            });
        };
    }
});

function detectScrollOnClick() {
    const initialScroll = window.scrollY;

    return new Promise(resolve => {
        setTimeout(() => {
            const currentScroll = window.scrollY;
            resolve(currentScroll !== initialScroll);
        }, 200);
    });
}
