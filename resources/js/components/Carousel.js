import React, { useState } from "react";
import CarouselItem from "./CarouselItem";
import ReactDOM from "react-dom";

function Carousel() {
  const [currentSlide, setCurrentSlide] = useState(0);

  const slides = [
    {
      image: "public/images/carousel1.jpg",
      caption: "Slide 1",
    },
    {
      image: "public/images/carousel2.jpg",
      caption: "Slide 2",
    },
    {
      image: "public/images/carousel3.jpg",
      caption: "Slide 3",
    },
  ];

  const handlePrevSlide = () => {
    setCurrentSlide(currentSlide === 0 ? slides.length - 1 : currentSlide - 1);
  };

  const handleNextSlide = () => {
    setCurrentSlide(currentSlide === slides.length - 1 ? 0 : currentSlide + 1);
  };

  return (
    <div className="carousel">
      <div className="carousel-wrapper" style={{ transform: `translateX(-${currentSlide * 100}%)` }}>
        {slides.map((slide, index) => (
          <CarouselItem key={index} image={slide.image} caption={slide.caption} />
        ))}
      </div>

      <div className="carousel-controls">
        <button onClick={handlePrevSlide}>Prev</button>
        <button onClick={handleNextSlide}>Next</button>
      </div>
    </div>
  );
}

export default Carousel;

if (document.getElementById("carousel")) {
    ReactDOM.render(<Carousel />, document.getElementById("carousel"));
}
