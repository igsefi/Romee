window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%',
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

    // Activate SimpleLightbox plugin for portfolio items
    new SimpleLightbox({
        elements: '#portfolio a.portfolio-box'
    });

    AOS.init();


    const $form = document.getElementById('formContacto');
    const $btn = document.getElementById('btnEnviar');
    const $status = document.getElementById('status');
    const modal = new bootstrap.Modal(document.getElementById('mensajeEnviadoModal'));

    $form.addEventListener('submit', async (e) => {
        e.preventDefault();
        $status.textContent = '';
        $btn.disabled = true;

        const data = Object.fromEntries(new FormData($form));
        try {
            const res = await fetch('enviar_mail.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
                body: JSON.stringify(data),
                credentials: 'same-origin'
            });
            const json = await res.json();
            if (res.ok && json.ok) {
                modal.show();
                //$status.textContent = '¡Gracias! Tu mensaje fue enviado.';
                $form.reset();
            } else {
                $status.textContent = 'No pudimos enviar el mensaje.';
            }
        } catch (err) {
            $status.textContent = 'Error de red o servidor.';
        }
        $btn.disabled = false;
    });

});
