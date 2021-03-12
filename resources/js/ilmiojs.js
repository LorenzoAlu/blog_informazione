
        const logo = document.querySelector('.logo_navbar')
        const logo_small = document.querySelector('.logo_navbar_small')
        const navbar = document.querySelector('#navbar')


        logo.src = "/media/small_s_w.png"
        logo_small.src = "/media/small_s_w.png"


        window.addEventListener("scroll", ()=> {

        let scrolled = window.pageYOffset
        if (scrolled > 100) {
            navbar.classList.remove("bg-dark","navbar-dark")
            navbar.classList.add("navbar-light","bg-white")
            logo.src = "/media/small_s.png"


        } else {
            navbar.classList.remove("navbar-light","bg-white")
            navbar.classList.add( "bg-dark","navbar-dark")
            logo.src="/media/small_s_w.png"

        }
        })