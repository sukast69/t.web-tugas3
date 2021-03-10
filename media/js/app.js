window.onload = () => {
    const transition_el = document.querySelector('.transition')
    const anchors = document.querySelectorAll('a')
    setTimeout(() => {
        transition_el.classList.remove('is-active');

    }, 500);

    for (let i = 0; i < anchors.length; i++) {
        const anchor = anchors[i];

        anchor.addEventListener('click', e => {
            e.preventDefault();
            let target = e.target.href;

            transition_el.classList.add('is-active');

            setTimeout(() => {

                window.location.href = target;

            }, 500);
        })


    }

}




const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const containers = document.querySelector(".containers");


sign_up_btn.addEventListener("click", () => {
    containers.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
    containers.classList.remove("sign-up-mode");
});