import React from "react";

function CarouselItem(props) {
  return (
    <div className="carousel-item">
      <img src={props.image} alt={props.caption} />
      <div className="carousel-caption">{props.caption}</div>
    </div>
  );
}

export default CarouselItem;