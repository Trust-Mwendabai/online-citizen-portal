// Testimonials carousel
let testimonialIndex = 0;
function showTestimonial(idx) {
    const items = document.querySelectorAll('.testimonial-item');
    const dots = document.querySelectorAll('.testimonial-dot');
    items.forEach((el, i) => {
        el.classList.toggle('active', i === idx);
        dots[i].classList.toggle('active', i === idx);
    });
}
function nextTestimonial() {
    const items = document.querySelectorAll('.testimonial-item');
    testimonialIndex = (testimonialIndex + 1) % items.length;
    showTestimonial(testimonialIndex);
}
function prevTestimonial() {
    const items = document.querySelectorAll('.testimonial-item');
    testimonialIndex = (testimonialIndex - 1 + items.length) % items.length;
    showTestimonial(testimonialIndex);
}
document.addEventListener('DOMContentLoaded', function() {
    if(document.querySelector('.testimonial-item')) {
        showTestimonial(0);
        setInterval(nextTestimonial, 7000);
        document.querySelectorAll('.testimonial-dot').forEach((dot, i) => {
            dot.addEventListener('click', () => { testimonialIndex = i; showTestimonial(i); });
        });
    }
    // FAQ toggle
    document.querySelectorAll('.faq-item button').forEach(btn => {
        btn.setAttribute('aria-expanded', 'false');
        btn.addEventListener('click', function() {
            const expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', expanded ? 'false' : 'true');
        });
    });
    // Floating help button
    const fab = document.querySelector('.fab-help');
    if(fab) {
        fab.addEventListener('click', function() {
            alert('For support, please contact: support@citizenportal.gov or call 123-456-7890');
        });
    }
});
