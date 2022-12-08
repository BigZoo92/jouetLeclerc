window.onload = function () {
    let toggle = true;
    document.querySelector('.sapin_toggle').addEventListener('click', toggleSapin);
    let tlToggleSapin = gsap.timeline({ paused: true, duration: 0.1, ease: "expo" })
        .to(".menu_sapin", { y: -33 }, "<0.1")
        .to(".overlay_header", { "display": "flex" }, "<")
        .to('.branches', { 'clip-path': 'inset(0 0 100% 0)' }, "<")
        .to('.menu_sapin p:nth-of-type(2)', { 'clip-path': 'inset(0 0 0 0)' }, "<0.1")
        .to('.overlay_header', { 'top': '0' }, "<0.1")
        .to('.overlay_header nav ul li', { 'clip-path': 'inset(0 0 0 0)', stagger: 0.05 }, "<0.1")
    function toggleSapin() {
        toggle ? toggleSapinOpen() : toggleSapinClose()
    }
    function toggleSapinOpen() {
        tlToggleSapin.play()
        document.querySelector('.menu_sapin p:nth-of-type(2)').style.backgroundColor = '#efdebe'
        toggle = false;
    }
    function toggleSapinClose() {
        tlToggleSapin.reverse()
        document.querySelector('.menu_sapin p:nth-of-type(2)').style.backgroundColor = '#A3DEF4'
        toggle = true;
    }
}