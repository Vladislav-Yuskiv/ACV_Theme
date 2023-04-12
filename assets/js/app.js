// Mobile menu
const menuBtn = document.querySelector('.menu-btn');
const menu = document.querySelector('.menu');

menuBtn.addEventListener('click', function () {
    this.classList.toggle('active');
    menu.classList.toggle('active');
})


const landingPage = document.querySelector('.hero');

if (landingPage) {
    // Testimonial Swiper
    const testimonialSwiper = new Swiper('.testimonials-swiper', {
        slidesPerView: 'auto',
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        }
    })


    // Fisheye
    const gridWrapper = document.getElementById("grid-fisheye");

    function runFisheye() {
        const gridOptions = gridWrapper.getBoundingClientRect();

        const dWidth = gridOptions.width;
        const dHeight = gridOptions.height;

        const width = dWidth;
        const height = dHeight;
        const xStepsBig = d3.range(width / 19, width, width / 19);
        const yStepsBig = d3.range(height / 19, height, height / 19);
        const xStepsSmall = d3.range(0, width + 10, 10);
        const yStepsSmall = d3.range(0, height + 10, 10);

        // Fisheye size (.radius)
        const fisheye = d3.fisheye.circular()
            .focus([360, 90])
            .radius(125);

        const line = d3.svg.line();

        const svg = d3.select("#grid-fisheye").append("svg")
            .attr("width", width)
            .attr("height", height)
            .append("g")
            .attr("transform", "translate(-.5,-.5)");

        svg.append("rect")
            .attr("class", "background")
            .attr("width", width)
            .attr("height", height);

        svg.selectAll(".x")
            .data(xStepsBig)
            .enter().append("path")
            .attr("class", "x")
            .datum(function(x) { return yStepsSmall.map(function(y) { return [x, y]; }); });

        svg.selectAll(".y")
            .data(yStepsBig)
            .enter().append("path")
            .attr("class", "y")
            .datum(function(y) { return xStepsSmall.map(function(x) { return [x, y]; }); });

        const path = svg.selectAll("path")
            .attr("d", fishline);

        svg.on("mousemove", function() {
            fisheye.focus(d3.mouse(this));
            path.attr("d", fishline);
        });

        function fishline(d) {
            return line(d.map(function(d) {
                d = fisheye({x: d[0], y: d[1]});
                return [d.x, d.y];
            }));
        }
    }

    window.addEventListener('load', runFisheye);
}